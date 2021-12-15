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
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                @if(auth()->user()->isAdmin == '1')
                                <th></th>
                                @endif
                            </thead>
                            @foreach ($attandences as $index => $attandent)
                            <tr>
                                @if($attandent->user->id == auth()->id())
                                @continue
                                @endif
                                <td>{{ $index+1  }} </td>
                                <td>{{ $attandent->user->name }}</td>
                                <td>{{ $attandent->user->email }}</td>
                                <td>{{ $attandent->user->phone }}</td>
                                @if($attandent->user->isAdmin == '0')
                                <td>User</td>
                                @else
                                <td>Admin</td>
                                @endif
                                @if(auth()->user()->isAdmin == '1')
                                <td>
                                    <a href="{{ route('user.edit',$attandent->user) }}"  class="text-warning">Edit</a>
                                    <form action="{{ route('user.destroy',$attandent->user) }}" method="POST">
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
