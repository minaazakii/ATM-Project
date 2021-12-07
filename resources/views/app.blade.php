<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="assets/img/Logo-Light.png">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"  />
    <link rel="stylesheet" href="{{ asset('assets/css/material-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap') }}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
    <script src="{{ asset('/assets/js/jq.min.js') }}"></script>
</head>

<body onload="realtimeClock()">

@yield('content')



<script src="{{ asset('./assets/js/main.js') }}"></script>
<script src="{{ asset('./assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('./assets/js/popper.js') }}"></script>

</body>
</html>
