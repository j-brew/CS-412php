window.onload = function () { 
    
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
    /* show or hide future events*/
    //alert("clicked future"+getStyle(document.getElementById("future"), "display"));
    var future = document.getElementById("future");
    var infox   = document.getElementById("ftab");
    
    var past  = document.getElementById("past");
    var infoy = document.getElementById("ptab");
    
    if (getStyle(document.getElementById("future"), "display") == "block" ){
        future.style.display = "none";
        infox.innerHTML = "Show Future Events";
        //past();
        past.style.display = "block";
        infoy.innerHTML = "Hide Past Events";
        
    }
    else if (getStyle(document.getElementById("future"), "display") == "none"){
        future.style.display = 'block';
        infox.innerHTML = "Hide Future Events";
        //past();
        past.style.display = "none";
        infoy.innerHTML = "Show Past Events";
    }
};

//------- from http://robertnyman.com/2006/04/24/get-the-rendered-style-of-an-element/
function getStyle(oElm, strCssRule){
	var strValue = "";
	if(document.defaultView && document.defaultView.getComputedStyle){
		strValue = document.defaultView.getComputedStyle(oElm, "").getPropertyValue(strCssRule);
	}
	else if(oElm.currentStyle){
		strCssRule = strCssRule.replace(/\-(\w)/g, function (strMatch, p1){
			return p1.toUpperCase();
		});
		strValue = oElm.currentStyle[strCssRule];
	}
	return strValue;
}
//-------------------
