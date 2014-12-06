<?php 
    include 'phpfiles/galleryDelete.php';
    
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
        <title>DROP Gallery</title>
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
        <link rel="stylesheet" type="text/css" href="cssfiles/expand.css">
        <script type="text/javascript" src="jsfiles/expand.js"></script>
    </head>
    <body>
        <div id="content">
            <div id="clock"></div>

            <div id="title">
                <h1>DROP Gallery</h1>
            </div>
            <div id="out">
                <form id="back" method="POST" action="admin.php">
                    <input type="submit" value="BACK">
                </form>
                <form id="logout" method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>

            <div id="dropfile">
                <form method="POST" action="">
                    <?php getPictures(); ?>
                    <!--<input class="chbox" type="checkbox" name="gallery[]" value="1"/>
                    <img class="line" src="../../pic/logo_139x87.jpg" alt="logo"/>-->
                    <hr>
                    <div id="save">
                        <input type="submit" value="DELETE"/>
                    </div>
                </form>
            </div>
            <div>
                <?php if ($error != "") { ?>
                    <p id="error"><?= $error; ?></p>
                <?php } ?>
            </div>
            <div id="footer"></div>
        </div> 
    </body>
</html>

<?php  } ?>