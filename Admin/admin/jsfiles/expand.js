var limit = 60000; // one minute

window.onload = function (){

    var imgs = document.getElementsByTagName("img");
    for (var i=0; i<imgs.length; i++){
        var width = imgs[i].naturalWidth;
        var height = imgs[i].naturalHeight;
        if( width <= height){
            // vertical photo
            imgs[i].onclick = expandPhotoTall;
        }
        else{
            //horizontal
            imgs[i].onclick = expandPhotoWide;
        }
    }
    
    var outin = new Date().getTime()+limit;
    var wee;
    wee = setInterval(function(){d(outin);}, 250); 
};
var $ = function (id){
    return document.getElementById(id);
};

function expandPhotoTall(){
    
    var overlay = document.createElement("navigation");
    overlay.setAttribute("id", "overlay");
    overlay.setAttribute("class", "overlay");
    document.body.appendChild(overlay);
    
    var height = window.pageYOffset + 20;
    var img = document.createElement("img");
    img.setAttribute("id", "overlayIMGtall");
    img.setAttribute("class", "overlayIMGtall");
    img.style.top = height+"px";
    img.src = this.getAttribute("data-larger");

    img.onclick = restoreTall;
    overlay.onclick = restoreTall;
    
    document.body.appendChild(img);
};
function expandPhotoWide(){

    var overlay = document.createElement("navigation");
    overlay.setAttribute("id", "overlay");
    overlay.setAttribute("class", "overlay");
    document.body.appendChild(overlay);
    
    var height = window.pageYOffset + 20;
    var img = document.createElement("img");
    img.setAttribute("id", "overlayIMGwide");
    img.setAttribute("class", "overlayIMGwide");
    img.style.top = height+"px";
    img.src = this.getAttribute("data-larger");

    img.onclick = restoreWide;
    overlay.onclick = restoreWide;
    
    document.body.appendChild(img);
};
function restoreTall(){
    document.body.removeChild(document.getElementById("overlay"));
    document.body.removeChild(document.getElementById("overlayIMGtall"));
};
function restoreWide(){
    document.body.removeChild(document.getElementById("overlay"));
    document.body.removeChild(document.getElementById("overlayIMGwide"));
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