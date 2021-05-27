<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Schedule;
use App\Member;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role == 1)
        {
            return redirect('/admin');
        }else if($user->role == 2)
        {
            return redirect('/superadmin');
        }
        if($user->is_reregistered == 1){
            return view('thankyou',compact('user'));
        }

        if($user->payment_image != NULL){
            if($user->payment_status == 0){
                return view('wait', compact('user'));
            }
            else{
                return view('reregister');
            }
        }

	    if($user->schedule_id >= 1 && $user->schedule_id <= 19){
            return view('payment', compact('user'));
        }
        $schedule=Schedule::all()->where('id','<=','6');
        return view('home', compact('user','schedule'));
    }

    public function updateSch(Request $request)
    {
        if($request->schedule_id != NULL){
            $user = Auth::user();
            if ($user->lnt_subject == "C Programming"){
                $currSchedule = Schedule::where('date',$request->schedule_id)->first();
            }else{
                $currSchedule = Schedule::where('date',$request->schedule_id)->latest()->first();
            }

            if($user->campus == "Kemanggisan"){
                $currSchedule = Schedule::find($request->schedule_id);
            }

            if($currSchedule->quota <= 0){
                return redirect()->back()->withErrors(['The schedule is full! Please select another schedule.']);
            }

            $currSchedule->quota--;
            $currSchedule->save();

            $user->schedule_id = $currSchedule->id;
            $user->save();
        }
        return redirect('/home');
    }

    public function timer(){
        $user = Auth::user();
        $schedule = Schedule::all();
        $briefingTime = strtotime($user->schedule->date);
        $date = time() + (60 * 60 * 7); //UTC + 7

        if ($date >= $briefingTime) {
        $link = $user->schedule->link;
        if ($user->session == 2) {
            $link = $user->schedule->link2;
        }
        if (strpos($link, 'http') !== 0){ //check if the link doesn't starts with http(s)
        $link = 'http://'.$link; //if true, concat http:// at the beginning
        }
        return redirect()->away($link);
        }
        else{
        return view('timer', compact('user', 'schedule'));
        }
    }

    public function showReset()
    {
        $user = Auth::user();
        return view('reset',compact('user'));
    }

    public function reset(Request $request, User $user)
    {
        if(Hash::check($request->old_password,$user->password)){
            $user->update(['password'=>Hash::make($request->new_password)]);
            return redirect('/home');
        }else{
            return redirect('/reset')->withErrors(['Password reset failed, please check your old password.']);;
        }
    }

    public function submitPayment(Request $request){
        $request->validate([
            'payment_image' => 'required|file|max:20480|mimes:jpg,jpeg,pdf,png',
        ]);
        $user = Auth::user();
        // dd($request);
        $file = request()->file('payment_image');
        $file_name = $user->name."_".$user->nim."_".time().".".$file->getClientOriginalExtension();
        $file->move(public_path('storage/payment_image'),$file_name);
        $user->payment_image = $file_name;
        $user->save();
        return redirect('/home');
    }

    public function reregister(Request $request){
        $user = Auth::user();
        // dd($user);
        $request->validate([
            'bncc_id' =>'required|unique:members,bncc_id|regex:/^(BNCC20)[0-9]{3}$/',
            'github_id' =>'required|unique:members,github_id|url',
            'linkedin_id' =>'required|unique:members,linkedin_id|url',
            'lnt_subject' =>'required',
        ]);
        $data = $request->all();
        $data['nim']= $user->nim;
        $data['name'] = $user->name;
        $data['place_of_birth'] = $user->place_of_birth;
        $data['date_of_birth'] = $user->date_of_birth;
        $data['gender'] = $user->gender;
        $data['email'] = $user->email;
        $data['phone_number'] = $user->phone_number;
        $data['line_id'] = $user->line_id;
        $data['campus'] = $user->campus;
        Member::create($data);
        $user->is_reregistered = 1;
        $user->save();
        return redirect('/home');
    }
}
