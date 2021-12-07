@extends('app')
@section('content')
    <div class="container-fluid p-3  header " >
        <a href="" class="" >
            <img src="assets/img/Logo-Light.png" alt="logo" width="100px">
            <h1>ATM</h1>
        </a>
    </div>
    <div class="container content  p-5" >
        <div class="row justify-content-around">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12  text-center time">
                <h2 style="color: #424242;">Time Now Is</h2>
                <div id="clock" ></div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12  login">
                <p>
                    Sign In Now<span class="material-icons ">login</span>
                </p>
                @if (session('error'))
                    <div class="alert-danger rounded" >{{ session('error') }}</div>
                @endif
                <form action="{{ route('user.login') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Your Password">
                    <input type="submit" value="Login">
                </form>
            </div>

        </div>
    </div>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <input type="text" name="name" id="" placeholder="name">
        <input type="text" name="email" id="" placeholder="email">
        <input type="text" name="password" id="" placeholder="password">
        <input type="text" name="phone" id="" placeholder="phone">
        <button type="submit">done</button>
    </form>


@endsection
