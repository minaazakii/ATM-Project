@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row text-light justify-content between " id="dashborad">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0  d-xl-block d-lg-block d-md-block d-sm-block d-xs-block  p-0 " id="side">
                <div id="sidemenu" class=" w-100 p-0 ">
                    <div id="closemenu">
                        <button onclick="closemenu();">+</button>
                    </div>
                    <div id="profile" class="row   justify-content-around text-center">
                        <div class="col p-0   ">
                            <img src="{{ asset('./assets/img/admin1.png') }}" alt="">
                            <br>

                            <form action="{{ route('user.logout') }}" method="POST">

                                @csrf
                                <button>Logout</button>
                            </form>

                        </div>
                        <div class="col  p-0  ">
                            <p class="mt-4">
                                {{ auth()->user()->name }}
                            </p>
                            <p>
                                {{ auth()->user()->email }}
                            </p>
                            <p>
                                {{ auth()->user()->phone }}
                            </p>
                            <br>
                            <form action="{{ route('user.leaveRequest') }}" method="POST" >
                                @csrf
                                @if($attendance->requestAccepted == '0')
                                <p><button style="color: Yellow">Pending</button></p>
                                @elseif($attendance->requestAccepted == 'no')
                                <p><button style="color: red">Refused</button></p>
                                @else
                                <p><button style="color: red">Leave Request</button></p>
                                @endif
                            </form>
                            </div>
                    </div>
                    <div id="links" class="p-0 ">
                        <ul class="p-0">
                            <li class="active p-0" >
                                <b></b>
                                <b ></b>
                                <a href="" class="row  p-0  ">
                                    <div class="col-3 p-0">
                                        <span class="material-icons  "> groups</span>

                                    </div>
                                    <div class="col-9 ">
                                        <h2 >Profiles</h2>

                                    </div>
                                </a>


                            </li>
                            <li class=" p-0" >
                                <b ></b>
                                <b ></b>
                                <a href="" class="row  p-0  ">
                                    <div class="col-3 p-0">
                                        <span class="material-icons "> groups</span>

                                    </div>
                                    <div class="col-9 ">
                                        <h2 >Requests</h2>

                                    </div>
                                </a>

                                <a href="" class="row  p-0  ">
                                    <div class="col-3 p-0">
                                        <span class="material-icons "> groups</span>

                                    </div>
                                    <div class="col-9 ">
                                        <h2>Notifications</h2>

                                    </div>
                                </a>


                            </li>

                        </ul>
                    </div>

                </div>


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
                            <div class="text-dark col-2 border">
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

                </div>
            </div>

        </div>

    </div>

  @endsection
