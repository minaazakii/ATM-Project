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
                        <div class="row p-2 m-0 justify-content-start border" id="searchbar">
                            <!-- <div class="col-1 p-0  ">
                                <button>
                                    <img src="./assets/img/menu2.png" >

                                </button>
                            </div> -->
                            <div class="col-9 ">
                                <div class="input-group">
                                    <input class="form-control " type="search" placeholder="Search Empolyee..." aria-label="Search" >
                                    <span class="input-group-text" id="searchicon" style="background-color: transparent;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg></span>
                                  </div>
                            </div>
                            <div class="text-white col-2 border">
                               Attend At: {{ $attendance->attended_at }}

                            </div>

                        </div>
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
                            @foreach ($users as $index => $user )
                            <tr>
                                @if($user->id == auth()->id())
                                @continue
                                @endif
                                <td>{{ $index+1  }} </td>
                                <td>{{ $user->name }}</td>
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
