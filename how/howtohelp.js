window.onload = function(){
    // hide benefits
    var hideAll = document.getElementsByClassName('benefit');
    for(var i=0; i<hideAll.length; i++){
        hideAll[i].style.display = "none";
    }
};

function showhideBenefit(id){
    var hideAll = document.getElementsByClassName('benefit');
    var showOne = document.getElementById(id);

    switch (showOne.style.display){
        case "none":
            for(var i=0; i<hideAll.length; i++){
                hideAll[i].style.display = "none";
            }
            showOne.style.display = "block";
            break;
        case "block":
            showOne.style.display = "none";
            break;
        default:
            showOne.style.display = "block";
    }
};
