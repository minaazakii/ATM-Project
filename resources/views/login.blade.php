@extends('layouts.app')
@section('content')
    <div class="container-fluid p-3  header " >
        <a href="" class="" >
            <img src="{{ asset('assets/img/Logo-Light.png') }}" alt="logo" width="100px">
            <h1>ATM</h1>
        </a>
    </div>
    <div class="container content  p-5" >
        <div class="row justify-content-around  p-0">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 d-lg-block d-md-none d-sm-none d-xs-none  text-center time">
                <h2 style="color: #424242;">Time Now Is</h2>
<!--                 <div id="clock" ></div>
 -->            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12  p-0 login ">
                <div id="login" class=" text-center">
                    <h3 class="">
                        Sign In Now<!-- <span class="material-icons ">login</span> -->
                    </h3>
                    @if(session('error'))
                       <div class="alert-danger rounded">{{ session('error') }}</div>
                    @endif
                    <form action="{{ route('user.login') }}" method="POST" class="">
                        @csrf
                        <input name="email" type="email" placeholder="Email Address">
                        <input name="password" type="password" placeholder="Your Password">
                        <input type="submit" value="Login">
                    </form>
                    <button onclick="change('login');">Don't have an account? SignUp now</button>
                </div>
                <div id="register" class=" text-center">
                    <h3 class="">
                        Register Now<!-- <span class="material-icons ">login</span> -->
                    </h3>
                    <form action="{{ route('user.store') }}" method="POST" class="">
                        @csrf
                        <input name="name" type="text" placeholder="Full-Name">
                        <input name="email" type="email" placeholder="Email Address">
                        <input name="password" type="password" placeholder="choose Password">
                        <input name="phone" type="number" placeholder="Phone Number">

                        <input type="submit" value="Register">
                    </form>
                    <button onclick="change('register');">Already have an account? Sign-In now</button>
                </div>

            </div>

        </div>
    </div>


@endsection
