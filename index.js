

window.onload = function () { 
    window.onscroll = scrollWithMenu;
    moveDonateButton();
    var col;
    setTimeout(function(){col = setInterval("collapseDonate()", 80);}, 5000); // starts collapseDonate() 5 seconds after page load
    setTimeout(function(){clearInterval(col)}, 14000);  // ends collapseDonate() after 9 seconds of execution
};

window.onresize = function () {
    moveDonateButton();
};

function scrollWithMenu (){
    
    var menu = document.getElementById("menu");
    var main = document.getElementById("main");
    var height = window.pageYOffset;
    
    if (height >= 152){
        menu.style.position = "fixed";
        menu.style.top = "0px";
        menu.style.width = "98.7%";
        main.style.margin = "35px auto 0px auto";
    }
    if (height < 152){
        menu.style.position = "relative";
        menu.style.width = "100%";
        main.style.margin = "0px auto 0px auto";
    }
};

function moveDonateButton(){
    // moves donate button to the center of the window
    var hWindow = window.innerHeight;
    
    if(hWindow > 160){
        var donateButton = document.getElementById("donate");
        var midWinHight = hWindow / 2;
        var midBut = midWinHight - (donateButton.clientHeight / 2 ) -6 ; // client height not correct, -6 corrects the height
        donateButton.style.top =  midBut+"px";
    }
};

function collapseDonate(){
    var dinfo = document.getElementById("dinfo");
    var width = dinfo.offsetWidth;
    //alert("the width of dinfo is : "+width);
    if (width > 40){
        width = width - 2;
        console.log("the width of dinfo is : "+width);
        //alert("the width of dinfo is : "+width);
        dinfo.style.width = width+"px";
    }
    else{
        console.log("this is the end my friend");
    }
};