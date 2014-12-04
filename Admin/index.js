function init()
{
    var form = document.getElementById("info");
    form.onsubmit = validateForm;
}

function validateForm()
{
    var error = false;
    var x;
    
    //check user name
    var userField = document.getElementById("user").value;
    for(x=0; x<userField.length()-1; x++)
    {
        if(userField.charAt(x)=== ";" || userField.charAt(x)===",")
            alert("Cannot use comma or semicolon in Username");
    }
    var checkUser = /^[a-zA-Z]\w{0,}$/;
    if(!checkUser.test(userField))
    {
        alert("No user name entered.");
        error = true;
    }
    
      //check password
    var passwordField = document.getElementById("password").value;
    for(x=0; x<passwordField.length()-1; x++)
    {
        if(passwordField.charAt(x)===";" || passwordField===",")
            alert("Cannot use a semicolon or comma in your Password");
    }
    var checkPassword = /^[a-zA-Z]\w{0,}$/;
    if(!checkPassword.test(passwordField))
    {
        alert("No password entered.");
        error = true;
    }
    //if any errors then cancel submit
    if(!error)
    {
        return true;
    }
    
    else
    {
        return false;
    }
       
   
}
window.onload = init;