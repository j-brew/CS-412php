<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>File uploading Example</title>
        <script type="text/javascript" src="imageUploader.js"></script>
    </head>
    <body>
        <form name="imageUpload" onsumbit="validate_fileupload();" method="post" enctype="multipart/form-data"> <!action="php_upload.php"> 
            <input type="file" name="file1">
            <input type="submit">
        </form>
    </body>	
</html>