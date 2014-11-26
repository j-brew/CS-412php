<?php 
    session_start();
    echo "<p>IPaddress = ".$_SESSION['IPaddress']."</p><p>userAgent = ".$_SESSION['userAgent']."</p><p>sessionID = ".$_SESSION['sessionID']."</p><p>sessionTime = ".$_SESSION['sessionTime']."</p>";
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Welcome admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="admin.css">
    </head>
    <body>
        
        <div id="content">
            
            <div id="title">
                <h1>Welcome Admin</h1>
            </div>
            <div id="out">
                <form method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>
            
            <div id="info">
                <ul>
                    <li>add/delete news articles
                    
                    </li>
                    <li>add/delete concert updates</li>
                    <li>add/delete gallery pictures</li>
                    <li></li>
                </ul>
            </div>
            
        </div> 
        
    </body>
</html>