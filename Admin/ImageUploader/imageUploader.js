function validate_fileupload(fileName)
{
    if(!/(\.bmp|\.gif|\.jpg|\.jpeg)$/i.test(fileName.value)) {
        alert("Invalid image file type.");      
        fileName.form.reset();
        fileName.focus();        
        return false;   
    }   
    return true;
}
