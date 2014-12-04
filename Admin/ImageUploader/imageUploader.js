function validate_fileupload(fileName)
{
    var fieldValue = getElementById("file1");
    if(!/(\.bmp|\.gif|\.jpg|\.jpeg)$/i.test(fieldValue)) {
        alert("Invalid image file type.");      
        fileName.form.reset();
        fileName.focus();        
        return false;   
    }   
    return true;
}
window.onload=validate_fileupload;