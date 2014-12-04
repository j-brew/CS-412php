<?php
echo ini_get('display_errors');
include 'phpfiles/GallaryUpload.php';

session_start();
if (!isset($_SESSION['IPaddress'])) {
    echo 'session IP is NOT set';
} else {
    echo "<p>previous session time = " . $_SESSION['sessionTime'] . "</p>";
    echo "current time = " . time();
    //echo "calculation = ".($_SESSION['sessionTime']-time());
    if ((time() - $_SESSION['sessionTime']) > 30) {
        echo "<p>session expired</p>";
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Gallery</title>
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
        <script type="text/javascript" src="gallery.js"></script>
    </head>
    <body>
        <div id="content">

            <div id="title">
                <h1>Admin Gallery</h1>
            </div>
            <div id="out">
                <form id="back" method="POST" action="admin.php">
                    <input type="submit" value="BACK">
                </form>
                <form id="logout" method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>

            <div id="upfile">
                <form name="imageUpload" onsubmit="validate_fileupload();"action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="file1">
                    <hr>
                    <div id="save">
                        <input type="submit" value="SAVE">
                    </div>
                </form>
                
            <?php if($error != ""){ ?>
                    <p id="error"><?= $error; ?></p>
            <?php } ?>
            </div>
            <div id="footer"></div>
        </div> 
    </body>
</html>
