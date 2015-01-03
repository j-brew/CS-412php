window.onload = function () { 
    
    var imgs = document.getElementsByClassName("bigpic");
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
function hideshow(){
    var gallery = document.getElementById("showGallery");
    var tabname = document.getElementById("gtab");
    if (gallery.style.display == "block"){
        gallery.style.display = "none";
        tabname.innerHTML = "Show Gallery";
    }
    else{
        gallery.style.display = "block";
        tabname.innerHTML = "Hide Gallery";
    }
};