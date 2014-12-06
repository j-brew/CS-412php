function validateForm()
{
    alert("Validate Form");
    var error = false;
    var message="";
    
    //check email
    var email = document.forms["formName"]["email"].value;
    var checkEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if(!checkEmail.test(email))
    {
        message+="Invalid email address.\n";
        error = true;
    }
    
    //check subject
    var subject=document.forms["formName"]["subject"].value;
    //var checkSubject = /^\w{1,100}$/;
    if(subject==""||subject==null)
    {
        message+="No Subject entered.\n";
        error = true;
    }
    
    //check message
    var msg=document.forms["formName"]["message"].value;
    if(msg==""||msg==null)
    {
        message+="No Message entered.\n";
        error = true;
    }
    
    //if any errors then cancel submit
    if(!error)
    {
        alert("Form OK to be sent.");
        return true;
    }
    
    else
    {
        alert(message);
        return false;
    }
}