var limit = 60000; // one minute

window.onload = function (){
    var outin = new Date().getTime()+limit;
    var wee;
    wee = setInterval(function(){d(outin);}, 250); 
};

function d(outin){
    var timer = document.getElementById("clock");
    var now = new Date().getTime();
    
    var sec = Math.floor((outin-now)/1000); // gets seconds
    var min = Math.floor(((outin-now)/1000)/60);     // gets minutes
    
    sec = sec % 60;
    min = min % 60;
    
    if (!(min<=0) || !(sec<=0)){
        if (min==0 && sec<=20){
            timer.style.color = "red";
        }
        if (sec<10){
            sec = "0"+sec;
        }
        timer.innerHTML = min+":"+sec;
    }
    else{
        timer.innerHTML = "session has expired";
    }
};
