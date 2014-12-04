function validateForm()
{
    var error = false;
    var message="";
    
    //check Quote
    var quote=document.forms["quoteForm"]["quote"].value;
    //var checkTitle = /^\S{0,100}$/;
    if(quote==""||quote==null)
    {
        message+="No Quote entered.\n";
        error = true;
    }

    //check Author
    var author=document.forms["quoteForm"]["author"].value;
    //var checkAbout = /^\S{0,}$/;
    if(author==""||author==null)
    {
        message+="No Author entered.\n";
        error = true;
    }
    
    //check Author Info
    var info=document.forms["quoteForm"]["info"].value;
    //var checkAbout = /^\S+$/;
    //if(!checkAbout.match(fieldValue))
    if(info==""||info==null)
    {
        message+="No Information about Author entered.\n";
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
window.onload = init;