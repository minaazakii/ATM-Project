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
                        <p id="message" class="text-center text-danger">{{ session('error') }}</p>
                        @endif

                        @if(session('message'))
                        <p id="message" class="text-center text-success">{{ session('message') }}</p>
                        @endif
                    </div>

                    <div class="col-12 mt-3    " id="table">
                        <table >
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                @if(auth()->user()->isAdmin == '1')
                                <th></th>
                                @endif
                            </thead>
                            @foreach ($users as $index => $user )
                            <tr>
                                @if($user->id == auth()->id())
                                @continue
                                @endif
                                <td>{{ $index+1  }} </td>
                                <td>
                                    @if(auth()->user()->isAdmin=='1')
                                        <a href="{{ route('user.profile',$user) }}">{{ $user->name }}</a>
                                    @else
                                        {{ $user->name }}
                                    @endif
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                @if($user->isAdmin == '0')
                                <td>User</td>
                                @else
                                <td>Admin</td>
                                @endif
                                @if(auth()->user()->isAdmin == '1')
                                <td>
                                    <a href="{{ route('user.edit',$user) }}"  class="text-warning">Edit</a>
                                    <form action="{{ route('user.destroy',$user) }}" method="POST">
                                        @csrf
                                        <button style="background-color: transparent; border:0px; color:red;" class="">Remove</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>

  @endsection
