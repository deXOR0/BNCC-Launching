<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use App\Exports\UsersExport;
use App\Exports\KMGExport;
use App\Exports\ALSExport;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        if ($request->has('search') && !empty($request->search)) {
            $datas = User::where('name', 'LIKE', '%' . $request->search . '%')->orWhere('nim', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $datas = User::where('campus', '!=', 'admin')->paginate(10);
        }
        $count = User::where('campus', '!=', 'admin')->count();
        return view('admin', compact('datas','count'));
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
}
