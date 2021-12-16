<?php

namespace App\Http\Controllers;

use App\Models\Absent;
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

    public function search(Request $request)
    {
        $allAttendances = Attendance::all();
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        $peopleAttended = [];

        foreach ($allAttendances as $attendance)
        {
            if($attendance->created_at->toDateString() == $request->date)
            {
                $peopleAttended [] = $attendance;
            }
        }

        return view('attendanceSearch',
        [
            'attandences' =>$peopleAttended,
            'attendance'=>$attendance,
        ]);


    }

    public function showAbsent()
    {
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        $absents = Absent::all();
        return view('absents',
        [
            'attendance' =>$attendance,
            'absents' =>$absents,
        ]);
    }
}
