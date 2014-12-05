function validate_fileupload()
{
    var file = document.forms["imageUpload"]["file1"].value;
    var checkFile = /\.(gif|jpg|jpeg|tiff|png)$/i;
    if(!checkFile.test(file)||file==null||file=="") 
    {
        alert("Invalid image file type.");      
        fileName.form.reset();
        fileName.focus();        
        return false;   
    }   
    return true;
}