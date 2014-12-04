function validateForm()
{
   // alert("invalidate form");
    var fieldValue;
    var error = false;
    var message = "";
        
    //check artist/performer
    var checkArtist = document.forms["myForm"]["artist"].value;
    //var checkArtist=document.getElementById("artist");
    //var checkArtist = /^\S{1,100}$/;
    //if(!checkArtist.test(fieldValue))
    if(checkArtist==""|| checkArtist==null)
    {
        //alert("No Perfomer entered.");
        error = true;
        message += "Enter Performer\n";
    }
    
     //check Year
    var year = document.forms["myForm"]["dateY"].value;
   // var year=document.getElementById("dateY");
    //var checkYear = /^[0-9]+$/;

    
    if(year=="")
    {
       // alert("Please enter Year in format yyyy.");
        error = true;
        message+="Enter Correct year\n";
    }
    
    //check Month
    var month=document.forms["myForm"]["dateM"].value;
    var checkMonth = /^((0[1-9])|(1[0-2]))$/;
    if(!checkMonth.test(month))
    {
       // alert("Please enter Month in number format mm(01-12).");
        error = true;
        message+="Enter correct month\n";
    }
    
    //check Day
    var day=document.forms["myForm"]["dateD"].value;
    var checkDay = /^((0[1-9])|(1[0-9])|(2[0-9])|(3[0-1]))$/;
    if(!checkDay.test(day))
    {
        //alert("Please enter Day in format dd(01-31).");
        error = true;
        message+="Enter correct day\n";
    }
    
    //check Hours
    var hours=document.forms["myForm"]["timeH"].value;
    var checkHours = /^((0[1-9])|(1[0-2]))$/;
    if(!checkHours.test(hours))
    {
        //alert("Please enter Hours in format HH(01-12).");
        error = true;
        message+="Enter correct hour\n";
    }
    
    //check Minutes
    var minutes=document.forms["myForm"]["timeM"].value;
    var checkMinutes = /^((0[0-9])|(1[0-9])|(2[0-9])|(3[0-9])|(4[0-9])|(5[0-9]))$/;
    if(!checkMinutes.test(minutes ))
    {
        //alert("Please enter Minutes in format MM(00-59).");
        error = true;
        message+="Enter minutes\n";
    }
    
    //check about
    var checkAbout=document.forms["myForm"]["about"].value;
    //var checkAbout = /^\S{1,1000}$/;
    //if(!checkAbout.test(fieldValue))
    if(checkAbout==""||checkAbout==null)
    {
        //alert("No Text entered in About Field.");
        error = true;
        message+="enter text in about field\n";
    }
    
    //check Price
    var price=document.forms["myForm"]["price"].value;
    var checkPrice = /^\d$/;
    //if(!checkPrice.test(price))
    if(price<=0)
    {
        //alert("No Price entered.");
        error = true;
        message+="Enter price\n";
    }
    
    //check place
    var checkAt =document.forms["myForm"]["at"].value;
    //var checkPlace = /^\S{0,}$/;
    //if(!checkPlace.test(fieldValue))
    if(checkAt==""||checkAt==null)
    {
        //alert("No Place entered.");
        error = true;
        message+="Enter place\n";
    }
    
    //check Link of Tickets at website
    var link=document.forms["myForm"]["link"].value;
    var checkLink = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
    if(!checkLink.test(link))
    {
        //alert("Website Link format incorrect.");
        error = true;
        message+="Enter Link\n";
    }
    
    //check Phone Number
    var phone =document.forms["myForm"]["phone"].value;
    var checkPhone = /^\(?\s*\d{3}\s*[\)-\.]?\s*[2-9]\d{2}\s*[-\.]\s*\d{4}$/;
    if(!checkPhone.test(phone))
    {
        //alert("Invalid Telephone Number.");
        error = true;
        message+="Invalid phone Number\n";
    }
    
    //check File Type
    var file =document.forms["myForm"]["file1"].value;
    var checkFile = /(\.bmp|\.gif|\.jpg|\.jpeg)$/i;
    if(!checkFile.test(file))
    { 
        //alert("Invalid image file type.");
        error = true;
        message+="Invalid File type\n";
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

