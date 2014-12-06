<?php 
    //include 'phpfiles/quoteUpload.php';
    
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
        <title>Welcome Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
        <script type="text/javascript" src="jsfiles/timer.js"></script>
    </head>
    <body>
        
        <div id="content">
            <div id="clock"></div>
            
            <div id="title">
                <h1>TJJF Admin</h1>
            </div>
            <div id="out">
                <form method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>
            
            <div id="info">
                <ul>
                    <li><a href="gallery.php" >ADD</a> / <a href="dropgallery.php" >DELETE</a> gallery pictures</li>
                    <li><a href="concerts.php" >ADD</a> / <a href="dropconcerts.php" >DELETE</a> concerts</li>
                    <li><a href="news.php" >ADD</a> / <a href="dropnews.php">DELETE</a> news articles</li>
                    <li><a href="quotes.php">ADD</a> / <a href="dropquotes.php">DELETE</a> testimonials/quotes</li>
                </ul>
            </div>
            
            <div id="footer"></div>
        </div> 
        
    </body>
</html
<?php  } ?>