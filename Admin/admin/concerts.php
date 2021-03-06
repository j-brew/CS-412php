<?php 
    include 'phpfiles/concertsUpload.php';
    
    session_start();
    if (!isset($_SESSION['IPaddress'])){
        echo '<h1>YOU SHALL NOT PASS !!!!</h1>';
        echo '<p>if you know the secret knock that it\'s ok :)</p>';
        echo '<p>enter your secret knock <a href="../index.php">here ... </a></p>';
    }
    else if ((time()-$_SESSION['sessionTime']) > 60){
        session_unset();
        session_destroy();
        $_SESSION = array();
        echo "<h1>session expired :(</h1>";
        echo '<p>enter your secret knock <a href="../index.php">here ... </a></p>';
    }
    else if((time()-$_SESSION['sessionTime']) <= 60){
        session_regenerate_id();
        $_SESSION['IPaddress'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['sessionID'] = session_id();
        $_SESSION['sessionTime'] = time();
        ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Concerts</title>
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
        <script type="text/javascript" src="jsfiles/concerts.js"></script>
        <script type="text/javascript" src="jsfiles/timer.js"></script>
    </head>
    <body>
        <div id="content">
            <div id="clock"></div>

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
                <form name="myForm" method="POST" onsubmit = "return validateForm();" action="" enctype="multipart/form-data">
                    <label>Performer : </label><br>
                    <input class="txtbox" type="text" name="artist" id="artist" placeholder="performer ...">
                    <hr>
                    <label>Date : </label><br>
                    <input class="txtbox" type="date" name="date" placeholder="yyyy/mm/dd">
                    <hr>
                    <label>Time : </label><br>
                    <input class="txtbox" type="time" name="time" placeholder="XX:XXpm">
                    <hr>
                    <label>About : </label><br>
                    <textarea name="about" id="about" rows="5" cols="40" placeholder="about ..."></textarea>
                    <hr>
                    <label>Price : </label><br>
                    <input class="txtbox" type="number" name="price" id="price" placeholder="00.00">
                    <hr>
                    <label>at : </label><br>
                    <input class="txtbox" type="text" name="at" id="at" placeholder="place">
                    <hr>
                    <label>Tickets at : </label><br>
                    <input class="txtbox" type="text" name="link" id="link" placeholder="www.site.com">
                    <hr>
                    <label>Phone : </label><br>
                    <input class="txtbox" type="text" name="phone" id="phone" placeholder="(xxx) xxx-xxxx">
                    <hr>
                    <label>Picture : </label><br>
                    <input class="txtbox" type="file" name="file1" id="file1">
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

<?php  } ?>