
window.onload = function (){
    
    var imgs = document.getElementsByClassName("poster");
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
};
var $ = function (id){
    return document.getElementById(id);
};

function expandPhotoTall(){
    
    var overlay = document.createElement("posterss");
    overlay.setAttribute("id", "overlay");
    overlay.setAttribute("class", "overlay");
    document.body.appendChild(overlay);
    overlay.style.background = "black";
    //var smoke = (overlay.style.background-color = black;);
    alert("the backgroundcolor="+overlay.style.background);
    var height = window.pageYOffset + 20;
    var img = document.createElement("img");
    img.setAttribute("id", "overlayIMGtall");
    img.setAttribute("class", "overlayIMGtall");
    img.style.top = height+"px";
    img.src = this.getAttribute("data-larger");
        var smoke = img.style.top;
    alert("the backgroundcolor="+smoke);

    img.onclick = restoreTall;
    overlay.onclick = restoreTall;
    
    document.body.appendChild(img);
};
function expandPhotoWide(){

    var overlay = document.createElement("posterss");
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