@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row text-light justify-content between " id="dashborad">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0  d-xl-block d-lg-block d-md-block d-sm-block d-xs-block  p-0 " id="side">
              @include('layouts.sidemenu')

            </div>

            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-block  p-0  " id="content">
                <div class="row p-0 m-0">
                    <div class="col-12  p-0  ">

                        @include('layouts.searchBar')
                        
                        @if(session('error'))
                        <p class="text-center text-danger">{{ session('error') }}</p>
                        @endif

                        @if(session('message'))
                        <p class="text-center text-success">{{ session('message') }}</p>
                        @endif
                    </div>

                    <div class="col-12 mt-3    " id="table">
                        <table >
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Attended At</th>
                                <th>status of Request</th>
                                @if(auth()->user()->isAdmin == '1')
                                <th></th>
                                @endif
                            </thead>
                            @foreach ($requests as $index => $request )
                            @if(auth()->user()->isAdmin == '1' && $request->user_id == auth()->id())
                            @continue
                            @endif
                            @if(auth()->id() == $request->user_id || auth()->user()->isAdmin =='1')
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $request->user->name }}</td>
                                <td>{{ $request->attended_at }}</td>
                                @if( $request->requestAccepted == null)
                                <td>No Requests Sent</td>
                                @elseif($request->requestAccepted == 0 )
                                <td class="text-warning">Still Pending</td>
                                @elseif($request->requestAccepted == 1)
                                <td class="text-success">Accepted</td>
                                @else
                                <td class="text-danger">Rejected</td>
                                @endif
                                </td>
                                @if(auth()->user()->isAdmin == '1' && $request->requestAccepted != null)
                                <td>
                                    <form action="{{ route('user.leaveRequestResponse',$request) }}" method="POST" >
                                        @csrf
                                        <input type="hidden" name="response" value="1">
                                        <button type="submit" style="background-color: transparent; border:0px; color:rgb(40, 204, 40);"  class="">Accept</button>
                                    </form>
                                    <form action="{{ route('user.leaveRequestResponse',$request) }}" method="POST" >
                                        @csrf
                                        <input type="hidden" name="response" value="0">
                                        <button type="submit" style="background-color: transparent; border:0px; color:red;" class="">Reject</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endif
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>

  @endsection
