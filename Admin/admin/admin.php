<?php 
    session_start();
    /*
    if (!isset($_SESSION['IPaddress'])){
        echo "<p> Your session has expired</p>";
    }
     * 
     */
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) 
    {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    }
    else{
        //session_start();
        echo "<p>IPaddress = ".$_SESSION['IPaddress']."</p><p>userAgent = ".$_SESSION['userAgent']."</p><p>sessionID = ".$_SESSION['sessionID']."</p><p>sessionTime = ".$_SESSION['sessionTime']."</p>";
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Welcome Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
    </head>
    <body>
        
        <div id="content">
            
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
                    <li><a href="quotes.php">ADD</a> / <a href="dropquotes.php">DELETE</a> testimonials</li>
                </ul>
            </div>
            
            <div id="footer"></div>
        </div> 
        
    </body>
</html>