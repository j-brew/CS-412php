function validateForm()
{
   // alert("Validate Form");
    var error = false;
    var format = true;
    var x;
    var message="";
    
    //check user name
    var userName = document.forms["userForm"]["user"].value;
    for(x=0; x<userName.length-1; x++)
    {
        if(userName.charAt(x)== ";" || userName.charAt(x)==",")
        {
            format = false;
            error = true;
        }
    }
    //var checkUser = /^[a-zA-Z]\w{0,}$/;
    if(userName==""||userName=="")
    {
        message+="No user name entered.\n";
        error = true;
    }
    
      //check password
    var passwordField = document.forms["userForm"]["password"].value;
    for(x=0; x<passwordField.length-1; x++)
    {
        if(passwordField.charAt(x)==";" || passwordField==",")
        {
            format=false;
            error=true;
        }
    }
    //var checkPassword = /^[a-zA-Z]\w{0,}$/;
    if(passwordField==""||passwordField==null)
    {
        message+="No password entered.\n";
        error = true;
    }
   
    if(!error)// no errors
    {
        return true;
    }
    
    
    else//Errors present
    {
        if(!format)
            message+="Cannot use comma or semicolon in Username\n";
        alert(message);
        return false;
    }
       
   
}
