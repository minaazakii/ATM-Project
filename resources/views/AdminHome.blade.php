<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="./assets/img/Logo-Light.png">    
    <link rel="stylesheet" href="./assets/css/bootstrap.css"  />
    <link rel="stylesheet" href="./assets/css/material-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="./assets/js/jq.min.js"></script>
</head>
<body onload="realtimeClock()">
    <div class="container-fluid">
        <div class="row text-light justify-content between " id="dashborad">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0  d-xl-block d-lg-block d-md-block d-sm-block d-xs-block  p-0 " id="side">
                <div id="sidemenu" class=" w-100 p-0 ">
                    <div id="closemenu">
                        <button onclick="closemenu();">+</button>
                    </div>
                    <div id="profile" class="row   justify-content-around text-center">
                        <div class="col p-0   ">
                            <img src="./assets/img/admin1.png" alt="">
                            <br>
                            <button>Edit Pic</button>
                        </div>
                        <div class="col  p-0  ">
                            <p class="mt-4">
                                Samuel Tarek,
                            </p>
                            <p>
                                Alexandria-Egypt.
                            </p>
                        </div>
                    </div>
                    <div id="links" class="p-0 ">
                        <ul class="p-0">
                            <li class="active p-0" > 
                                <b ></b>
                                <b ></b>
                                <a href="" class="row  p-0  ">
                                    <div class="col-3 p-0">
                                        <span class="material-icons "> groups</span>

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
                                        <h2 >Profiles</h2>

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
                            <div class="col-2 border">
                                
                            </div>
                            
                            

                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>

    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/popper.js"></script>
    
</body>
</html>