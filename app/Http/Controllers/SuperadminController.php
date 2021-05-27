<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use App\Schedule;
use App\Visit;
use App\Member;
use App\Exports\UsersExport;
use App\Exports\KMGExport;
use App\Exports\ALSExport;
use App\Exports\RegExport;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reminder;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Validator;

class SuperadminController extends Controller
{
    public function __construct()
    {
        $this->middleware('superadmin');
    }

    public function index(Request $request)
    {
        $datas = new User;
        $queries = [];
        $columns = [
            'search', 'schedule_id', 'fyp_batch', 'campus'
        ];

        foreach ($columns as $column) {
            if ($request->has($column)) {
                if ($column === 'search') {
                    if (is_numeric($request->search)) {
                        $datas = $datas->where('nim', 'LIKE', '%' . $request->search . '%');
                    } else {
                        $datas = $datas->where('name', 'LIKE', '%' . $request->search . '%');
                    }
                } else {
                    $datas = $datas->where($column, request($column));
                }
            }
        }

        // if ($request->has('search')) {

        //     // $schedule = Schedule::where('date', '=', $request->search)->first();
        //     // $datas = $datas->where('schedule_id', '=', $schedule->id)->where('campus', '!=', 'admin')->paginate(10);
        // }
        $search = $request->search;
        $count = User::where('campus', '!=', 'admin')->count();

        $datas = $datas->where('campus', '!=', 'admin');

        $datas = $datas->paginate(10)->appends([
            'search' => request('search'),
            'schedule_id' => request('schedule_id'),
            'fyp_batch' => request('fyp_batch'),
            'campus' => request('campus')
        ]);

        $schedules = Schedule::all();

        $ig_view = Visit::find(1)->count;
        $ig_regis = Visit::find(2)->count;

        $kmg_member = User::where('campus', '!=', 'admin')->where('campus', 'Kemanggisan')->count();
        $als_member = $count - $kmg_member;

        return view('superadmin/superadmin', compact('datas', 'search', 'count', 'link', 'request', 'schedules','ig_view','ig_regis','kmg_member','als_member'));
    }

    public function downloadAll()
    {
        return Excel::download(new UsersExport, 'all_members.xlsx');
    }

    public function downloadKMG()
    {
        return Excel::download(new KMGExport, 'kmg_members.xlsx');
    }

    public function downloadALS()
    {
        return Excel::download(new ALSExport, 'als_members.xlsx');
    }

    public function downloadReg()
    {
        return Excel::download(new RegExport, 'reregistered_members.xlsx');
    }

    public function showVerify()
    {
        $users = User::orderBy('payment_status')->get();
        $datas = $users->where('campus', '!=', 'admin')->whereNotNull('payment_image');
        return view('superadmin/verify', compact('datas'));
    }

    public function verify(Request $request, User $user)
    {
        if($user->payment_status == 1){
            $user->payment_status = 0;
        }else{
            $user->payment_status = 1;
        }
        $user->save();
        return redirect()->back();
    }

    public function schedule()
    {
        $schedules = Schedule::paginate(5);
        return view('superadmin/schedule', compact('schedules'));
    }

    public function edit(Request $request, User $user)
    {
        $schedule = Schedule::all();
        return view('superadmin/edit', compact('user', 'schedule'));
    }

    public function update(Request $request, User $user)
    {
        $userID = $user->id;
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'gender' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'place_of_birth' => ['required'],
            'date_of_birth' => ['required'],
            'fyp_batch' => ['required'],
            'nim' => ['required', 'string', 'digits:10'],
            'campus' => ['required', 'string'],
            'major' => ['required', 'string'],
            'phone_number' => ['required', 'string', 'numeric'],
            'line_id' => ['required', 'string'],
            'lnt_subject' => ['required', 'string'],
        ]);
        $lastSchedule = Schedule::find($user->schedule_id);
        if ($lastSchedule != NULL) {
            $lastSchedule->quota++;
            $lastSchedule->save();
        }
        if ($request->schedule_id != NULL) {
            $currSchedule = Schedule::find($request->schedule_id);
            $currSchedule->quota--;
            $currSchedule->save();
        }
        $data = $request->all();
        $user->update($data);
        return redirect('/superadmin');
    }

    public function delete(Request $request)
    {
        $user = User::findOrFail($request->category_id);
        $lastSchedule = Schedule::find($user->schedule_id);
        if ($lastSchedule != NULL) {
            $lastSchedule->quota++;
            $lastSchedule->save();
        }
        $user->delete();
        return redirect('/superadmin');
    }

    public function sch_edit(Request $request, Schedule $schedule)
    {
        return view('superadmin/sch_edit', compact('schedule'));
    }

    public function sch_update(Request $request, Schedule $schedule)
    {
        // dd($request->date);
        $this->validate($request, [
            'date' => ['required', 'date_format:"Y-m-d\TH:i"'],
            'quota' => ['required', 'numeric'],
            'link' => ['required', 'url'],
            'link2' => ['required', 'url']
        ]);
        $data = $request->all();
        // dd($data);
        $schedule->update($data);
        return redirect('/schedule');
    }

    public function sch_delete(Request $request, Schedule $schedule)
    {
        $schedule = Schedule::findOrFail($request->category_id);
        $schedule->delete();
        return redirect('/schedule');
    }

    public function sch_create()
    {
        return view('superadmin/add');
    }

    public function sch_store(Request $request)
    {
        $this->validate($request, [
            'date' => ['required', 'date_format:"Y-m-d\TH:i"'],
            'quota' => ['required', 'numeric'],
            'link' => ['required', 'url'],
            'link2' => ['required', 'url']
        ]);
        Schedule::create($request->all());
        return redirect('/schedule');
    }

    public function send_mail()
    {
        $users = User::all();
        $i = 12;
        foreach ($users as $user) {
            if($user->schedule_id != 5 && $user->schedule_id != 9 && $user->campus == "Kemanggisan"){
                $details =  [
                    'email' => $user->email,
                    'name' => $user->name,
                    'time' => $user->schedule['date'],
                    'i' => $i
                ];
                $i++;
                // dd($details);
                SendEmail::dispatch($details);
            }
        }
        // $details =  [
        //     'email' => "maryantocinn@gmail.com",
        //     'name' => "Maryanto Cinn",
        //     'time' => "2020-08-27 15:00:00"
        // ];
        SendEmail::dispatch($details);
        return redirect('/superadmin');
    }

    public function changeSession(Request $request, User $user)
    {
        if ($user->session == 1) {
            $user->session = 2;
        } else {
            $user->session = 1;
        }
        $user->save();
        return redirect()->back();
    }

    public function resetPass(Request $request, User $user)
    {
        $user->password = Hash::make("BNCCUKMku");
        $user->save();
        return redirect()->back();
    }

    public function viewMember()
    {
        $datas = Member::orderBy('bncc_id')->get();
        return view('superadmin/view_member', compact('datas'));
    }

}
