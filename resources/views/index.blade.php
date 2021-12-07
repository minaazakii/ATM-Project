<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="assets/img/Logo-Light.png">    
    <link rel="stylesheet" href="assets/css/bootstrap.css"  />
    <link rel="stylesheet" href="assets/css/material-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body onload="realtimeClock()">
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
                <form action="" class="">
                    <input type="email" placeholder="Email Address">
                    <input type="password" placeholder="Your Password">
                    <input type="submit" value="LogIn">
                </form>
            </div>

        </div>
    </div>
    

<script src="./assets/js/main.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/popper.js"></script>

</body>
</html>