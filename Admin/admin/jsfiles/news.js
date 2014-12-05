function validateForm()
{
    var error = false;
    var message="";
    
    //check Title
    var title=document.forms["newsForm"]["title"].value;
    //var checkTitle = /^[A-Za-z0-9 ]\w{0,100}$/;
    //if(!checkTitle.test(fieldValue))
    if(title==""||title==null)
    {
        message+="No Title entered.";
        error = true;
    }

    //check about
    var about=document.forms["newsForm"]["about"].value;
    //var checkAbout = /^\S{0,}$/;
    //if(!checkAbout.test(fieldValue))
    if(about==""||about==null)
    {
        message+="No Text entered in About Field.\n";
        error = true;
    }
    
    //check Link
    var link =document.forms["newsForm"]["link"].value;
    var checkSubject = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
    if(!checkSubject.test(link))
    {
        message+="Website Link format incorrect.\n";
        error = true;
    }
    //if any errors then cancel submit
    if(!error) //No errors detected
    {
        return true;// Allow form (info.onsubmit) to be submitted
    }
    
    else //Errors detected
    {
        alert(message);
        return false; //Form(info.onsubmit) will not be submitted
    }
       
   
}
