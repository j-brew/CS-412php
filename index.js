


window.onload = function () {
    
   window.onscroll = scrollWithMenu;
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