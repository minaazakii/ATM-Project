<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        $users = User::all();
        return view('dashboard',
        [
            'attendance'=>$attendance,
            'users'=>$users
        ]);
    }

    public function showRequest()
    {
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        $requests = Attendance::all();
        return view('requests',
        [
            'attendance'=>$attendance,
            'requests'=>$requests
        ]);
    }
}
