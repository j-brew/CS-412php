<?php 
    session_start();
    if (!isset($_SESSION['IPaddress'])){
        echo "<h1> Your session has expired</p>";
    }
    else{
        //session_start();
        echo "<p>IPaddress = ".$_SESSION['IPaddress']."</p><p>userAgent = ".$_SESSION['userAgent']."</p><p>sessionID = ".$_SESSION['sessionID']."</p><p>sessionTime = ".$_SESSION['sessionTime']."</p>";
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Welcome Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="admin.css">
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
                    <li><a href="gallery.php" >add/delete gallery pictures</a></li>
                    <li><a href="concerts.php" >add/delete concert updates</a></li>
                    <li><a href="news.php" >add/delete news articles</li>
                </ul>
            </div>
            
        </div> 
        
    </body>
</html>