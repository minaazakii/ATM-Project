<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->route('login.index');

    }

    public function login(Request $request)
    {
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('login.index')->with('error','Wrong Email or Password');
        }
        $time = Carbon::now()->toDateTimeString();
        $currentTime = Carbon::parse($time)->setTimezone('egypt')->format('d/M/Y , h:i');
        $attendance = new Attendance();
        $attendance->attended_at = $currentTime;
        $attendance->user_id = auth()->id();
        $attendance->save();
        return redirect()->route('dashboard.index');
    }

    public function logout()
    {
        $time = Carbon::now()->toDateTimeString();
        $currentTime = Carbon::parse($time)->setTimezone('egypt')->format('d/M/Y , h:i');
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        if($attendance->requestAccepted == null || $attendance->requestAccepted == '0')
        {
            return redirect()->route('dashboard.index')->with('error',"You Haven't Sent a Leave Request or you Request is Still Pending");
        }
        elseif($attendance->requestAccepted == 'no')
        {
            return redirect()->route('dashboard.index')->with('error','Your Request Was Refused');
        }
        $attendance->leave_at = $currentTime;
        $attendance->save();
        Auth::logout();
        return redirect()->route('login.index');
    }

    public function leaveRequest()
    {
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        $attendance->requestAccepted = '0';
        $attendance->save();
        return redirect()->route('dashboard.index')->with('message','Your Request is Sent');
    }
}
