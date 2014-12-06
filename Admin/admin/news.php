<?php 
    include 'phpfiles/newsUpload.php';
    
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
        <title>Admin News</title>
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
        <script type="text/javascript" src="jsfiles/news.js"></script>
        <script type="text/javascript" src="jsfiles/timer.js"></script>
    </head>
    <body>
        <div id="content">
            <div id="clock"></div>
            
            <div id="title">
                <h1>Admin News</h1>
            </div>
            <div id="out">
                <form id="back" method="POST" action="admin.php">
                    <input type="submit" value="BACK">
                </form>
                <form id="logout" method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>
            
            <div id="news">
                <form name="newsForm" onsubmit="validateForm();" method="POST" action="">
                    <label >Title : </label><br>
                    <input class="txtbox" type="text" name="title" placeholder="title ..." required>
                    <hr>
                    <label>About : </label><br>
                    <textarea name="about" rows="5" cols="40" placeholder="about ..."></textarea>
                    <hr>
                    <label>Link : </label><br>
                    <input class="txtbox" type="text" name="link" placeholder="link ...">
                    <hr>
                    <div id="save">
                        <input type="submit" value="SAVE">
                    </div>
                </form>
            </div>
            <?php if($error != ""){ ?>
                    <div id="error"><?= $error; ?></div>
            <?php } ?>
            <div id="footer"></div>
        </div> 
    </body>
</html>

<?php  } ?>