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
                @if(auth()->user()->isAdmin != '1')
                    Name : <a href="{{ route('user.profile',auth()->user()) }}"><strong class="text-success">{{ auth()->user()->name }}</a></strong>
                @else
                    Name :<strong class="text-success">{{ auth()->user()->name }}</strong>
                @endif
            </p>
            <p>
                {{ auth()->user()->email }}
            </p>
            <p>
                {{ auth()->user()->phone }}
            </p>
            <br>
            @if(auth()->user()->isAdmin == 0)
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
            @endif
            </div>
    </div>
    <div id="links" class="p-0 ">
        <ul class="p-0">
            <li class="active p-0" >
                <b></b>
                <b ></b>
                <a href="{{ route('dashboard.index') }}" class="row  p-0  ">
                    <div class="col-3 p-0">
                        <span class="material-icons  "> groups</span>

                    </div>
                    <div class="col-9 ">
                        <h2 >Users</h2>

                    </div>
                </a>


            </li>

            <li class=" p-0" >
                <b ></b>
                <b ></b>
                <a href="{{ route('dashboard.showRequest') }}" class="row  p-0  ">
                    <div class="col-3 p-0">
                        <span class="material-icons "> groups</span>

                    </div>
                    <div class="col-9 ">
                        <h2 >Requests</h2>

                    </div>
                </a>

            </li>

            @if(auth()->user()->isAdmin == '1')
            <li class=" p-0">
                <b ></b>
                <b ></b>
                <a class=" ml-0 " style="" >
                <form action="{{ route('absent') }}" method="POST">
                    @csrf
                    <button class="row ml-2 p-0  " style="background-color: transparent; border:0px; " >

                    <div class="col-3 p-0">
                        <span class="material-icons "> groups</span>

                    </div>
                    <div class="col-9 ">
                        <h5 >Take Today's Absent</h5>
                    </div>
                </button>
            </a>
            </form>
            </li>
            @endif

            @if(auth()->user()->isAdmin == '1')

            <li class=" p-0" >
                <b ></b>
                <b ></b>
                <a href="{{ route('dashboard.showAbsent') }}" class="row  p-0  ">
                    <div class="col-3 p-0">
                        <span class="material-icons "> groups</span>

                    </div>
                    <div class="col-9 ">
                        <h2 >Show Absent </h2>

                    </div>
                </a>

            </li>
            @endif
        </ul>
    </div>

</div>
