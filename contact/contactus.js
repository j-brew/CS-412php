function init()
{
    var email = document.getElementById("email");
    email.onsubmit = validateForm;
}


function validateForm()
{
    var error = false;
    //check email
    var fieldValue=document.getElementById("emailID").value;
    var checkEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if(!checkEmail.test(fieldValue))
    {
        alert("Invalid email address. Please input valid email address.");
        error = true;
    }
    
    //check subject
    fieldValue=document.getElementById("subject").value;
    //var checkSubject = /^[a-zA-Z]\w{0,}$/;
    if(fieldValue===null)
    {
        alert("No Subject entered.");
        error = true;
    }
    
    //check message
    fieldValue=document.getElementById("message").value;
    if(fieldValue===null)
    {
        alert("No Message entered.");
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
