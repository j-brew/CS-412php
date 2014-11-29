function init()
{
    var form = document.getElementById("info");
    form.onsubmit = validateForm;
}

function validateForm()
{
    var error = false;
    
    //check user name
    var checkUser = /^[a-zA-Z]\w{0,}$/;
    if(!checkUser.test(user.value))
    {
        alert("No user name entered.");
        error = true;
    }
    
      //check password
    var checkPassword = /^[a-zA-Z]\w{0,}$/;
    if(!checkPassword.test(password.value))
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