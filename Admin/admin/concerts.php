<?php
//include 'login.php';
//include 'phpfiles/concertsUpload.php';

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
include 'phpfiles/concertsUpload.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Concerts</title>
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
    </head>
    <body>
        <div id="content">

            <div id="title">
                <h1>Admin Concerts</h1>
            </div>
            <div id="out">
                <form id="back" method="POST" action="admin.php">
                    <input type="submit" value="BACK">
                </form>
                <form id="logout" method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>

            <div id="info">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label>Performer : </label><br>
                    <input class="txtbox" type="text" name="artist" placeholder="performer ...">
                    <hr>
                    <label>Date : </label><br>
                    <input class="txtboxYear" type="text" name="dateY" placeholder="yyyy">
                    <input class="txtboxYear" type="text" name="dateM" placeholder="mm">
                    <input class="txtboxYear" type="text" name="dateD" placeholder="dd">  
                    <hr>
                    <label>Time : </label><br>
                    <input class="txtboxTime" type="text" name="timeH" placeholder="HH">
                    <input class="txtboxTime" type="text" name="timeM" placeholder="MM">
                    <select name="ampm">
                        <option value="pm">pm</option>
                        <option value="am">am</option>
                    </select>
                    <hr>
                    <label>About : </label><br>
                    <textarea name="about" rows="5" cols="40" placeholder="about ..."></textarea>
                    <hr>
                    <label>Price : </label><br>
                    <input class="txtbox" type="number" name="price" placeholder="00.00">
                    <hr>
                    <label>at : </label><br>
                    <input class="txtbox" type="text" name="at" placeholder="place">
                    <hr>
                    <label>Tickets at : </label><br>
                    <input class="txtbox" type="text" name="link" placeholder="www.site.com">
                    <hr>
                    <label>Phone : </label><br>
                    <input class="txtbox" type="text" name="phone" placeholder="(xxx) xxx-xxxx">
                    <hr>
                    <label>Picture : </label><br>
                    <input class="txtbox" type="file" name="file1">
                    <hr>
                    <div id="save">
                        <input type="submit" value="SAVE">
                    </div>  
                    <div>
                        <?php if ($error != "") { ?>
                            <p id="error"><?= $error; ?></p>
                        <?php } ?>
                    </div>
                </form>
            </div>
            <div id="footer"></div>
        </div> 
    </body>
</html>
