<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        return view('dashboard',
        [
            'attendance'=>$attendance
        ]);
    }
}
