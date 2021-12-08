function Clock(){
    var rtclock = new Date();

    var hours = rtclock.getHours();
    var mins = rtclock.getMinutes();
    var secs = rtclock.getSeconds();
    var day = rtclock.getDay();
    var year = rtclock.getFullYear();
    var month = rtclock.getMonth();
    
    day = (day == 0) ? "Sun" : (day == 1) ? "Mon" : (day == 2) ? "Tues" : (day == 3) ? "Wed" : (day == 4) ? "Thu" : (day == 5) ? "Fri" :  "Sat" ;

    var MonthName = ["Jan" , "Feb" ,"Mar" , "Apr" , "May" , "Jun" , "Jul" , "Aug" , "Sept" , "Oct" , "Nov" , "Dec"];
    

    var amPm = (hours < 12 ) ? "AM" : "PM";

    hours = (hours > 12 ) ? hours-12 : hours;

    hours =("0" + hours).slice(-2);
    mins =("0" + mins).slice(-2);
    secs =("0" + secs).slice(-2);

    document.getElementById('clock').innerHTML = hours + " : " + mins + " : " + secs + " " + amPm + "<br><span>" + day + " " + MonthName[month] + " " + year + "</span>"; 
    
    var t = setTimeout(Clock,500);

}


function toggle(){
    document.getElementById("toggle").classList.toggle("active");
    console.log("a7oo")
    if(document.getElementById("menu").classList.contains("col-2")){
        document.getElementById("menu").classList.remove("col-2");
        document.getElementById("menu").classList.add("col-1");
        let title = document.querySelectorAll('#title');
        for (let i=0; i< title.length;i++){
            title[i].classList.add("active");
            console.log(title[i]);
            title[i].style.display ="none";                    
        }
        
        

    }else {
        document.getElementById("menu").classList.remove("col-1");
        document.getElementById("menu").classList.add("col-2");
        let title = document.querySelectorAll('#title');
        for (let i=0; i< title.length;i++){
            title[i].classList.remove("active");
            console.log(title[i]);
            title[i].style.display ="block";                    

            
            
        }
        

    }
}



let list = document.querySelectorAll('#list');
for (let i=0; i< list.length;i++){
    list[i].onclick = function (){
        let j=0 ;
        while (j< list.length) {
            list[j++].className ='';
        }
        list[i].className ='a';
        console.log(i);
        console.log(list);
        
    }
}

function realtimeClock(){
    var rtclock = new Date();

    var hours = rtclock.getHours();
    var mins = rtclock.getMinutes();
    var secs = rtclock.getSeconds();
    var day = rtclock.getDay();
    var year = rtclock.getFullYear();
    var month = rtclock.getMonth();
    
    day = (day == 0) ? "Sun" : (day == 1) ? "Mon" : (day == 2) ? "Tues" : (day == 3) ? "Wed" : (day == 4) ? "Thu" : (day == 5) ? "Fri" :  "Sat" ;

    var MonthName = ["Jan" , "Feb" ,"Mar" , "Apr" , "May" , "Jun" , "Jul" , "Aug" , "Sept" , "Oct" , "Nov" , "Dec"];
    

    var amPm = (hours < 12 ) ? "AM" : "PM";

    hours = (hours > 12 ) ? hours-12 : hours;

    hours =("0" + hours).slice(-2);
    mins =("0" + mins).slice(-2);
    secs =("0" + secs).slice(-2);

    document.getElementById('clockheader').innerHTML = hours + " : " + mins + " : " + secs + " " + amPm + "<br><span>" + day + " " + MonthName[month] + " " + year + "</span>"; 
    
    var t = setTimeout(realtimeClock,500);

}

function change(str){
    if (str == "login"){
        document.getElementById("login").style.left = "-700px";
        /* document.getElementById("login").style.display = "none";
        document.getElementById("register").style.display = "block";  */
        document.getElementById("register").style.left = "0";


    }
    else {
        document.getElementById("register").style.left = "700px";

        /* document.getElementById("register").style.display = "none";

        document.getElementById("login").style.display = "block"; */
        document.getElementById("login").style.left = "0";



    }
}