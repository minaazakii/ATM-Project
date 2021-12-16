<?php

namespace App\Http\Controllers;

use App\Models\Absent;
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
        $user->isAdmin = '0';

        $user->save();

        return redirect()->route('login.index');

    }

    public function login(Request $request)
    {
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('login.index')->with('error','Wrong Email or Password');
        }
        $time = Carbon::now()->toDateString();
        //$currentTime = Carbon::parse($time)->setTimezone('egypt')->format('d/M/Y , h:i');
        $attendance = new Attendance();
        $attendance->attended_at =$time;
        $attendance->user_id = auth()->id();
        $attendance->save();
        return redirect()->route('dashboard.index');
    }

    public function logout()
    {
        if(auth()->user()->isAdmin == 1)
        {
            Auth::logout();
            return redirect()->route('login.index');
        }
        $time = Carbon::now()->toDateTimeString();
        $currentTime = Carbon::parse($time)->setTimezone('egypt')->format('d/M/Y , h:i');
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        if($attendance->requestAccepted == null || $attendance->requestAccepted == '0')
        {
            return redirect()->route('dashboard.index')->with('error',"Your Haven't Sent a Leave Request or you Request is Still Pending");
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

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.index');
    }

    public function edit(User $user)
    {
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        return view('editProfile',
        [
            'user'=> $user,
            'attendance'=>$attendance
        ]);
    }

    public function update(Request $request , User $user)
    {
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('dashboard.index');
    }

    public function leaveRequestResponse(Attendance $attendRequest , Request $request)
    {
       if($request->response == '0')
       {
           $attendRequest->requestAccepted = 'no';
           $attendRequest->save();
       }
       else
       {
        $attendRequest->requestAccepted = '1';
        $attendRequest->save();
       }
       return redirect()->route('dashboard.showRequest');
    }

    public function profile(User $user)
    {
        $attendance = Attendance::where('user_id', auth()->id())->get()->last();
        $attendances = Attendance::where('user_id',$user->id)->get();
        return view('profile',
        [
            'user'=> $user,
            'attendance'=>$attendance,
            'attendances' => $attendances
        ]);
    }

    public function absent()
    {
        $todayDate = Carbon::now()->toDateString();
        $users = User::all();
        $absents = [];
        foreach($users as $user)
        {
            if(Attendance::where([['user_id',$user->id],['attended_at',$todayDate]])->doesntExist())
            {
                $absents[]  = $user;
                $absent = new Absent();
                $absent->user_id = $user->id;
                $absent->absent_at = $todayDate;
                $absent->save();
            }
        }
        return redirect()->route('dashboard.showAbsent')->with('message','Absent Taken Successfully');
    }
}
