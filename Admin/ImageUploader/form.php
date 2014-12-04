<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>File uploading Example</title>
        <script type="text/javascript" src="imageUploader.js"></script>
    </head>
    <body>
        <form action="php_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file1">
            <input type="submit">
        </form>
    </body>	
</html>