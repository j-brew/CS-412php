window.onload = function () { 
    //future();
    
    //past();
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

function past(){
    //alert("clicked past"+ getStyle(document.getElementById("past"), "display"));
    var past  = document.getElementById("past");
    var infoy = document.getElementById("ptab");
    if (getStyle(document.getElementById("past"), "display") == "block"){
        past.style.display = "none";
        infoy.innerHTML = "Show Past Events";
    }
    else if (getStyle(document.getElementById("past"), "display") == "none"){
        past.style.display = "block";
        infoy.innerHTML = "Hide Past Events";
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