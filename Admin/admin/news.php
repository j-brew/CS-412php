<?php include 'login.php';

    session_start();
    if (!isset($_SESSION['IPaddress'])){
        echo 'session IP is NOT set';    
    }
    else{
        echo "<p>previous session time = ".$_SESSION['sessionTime']."</p>";
        echo "current time = ".time();
        //echo "calculation = ".($_SESSION['sessionTime']-time());
        if ((time()-$_SESSION['sessionTime']) > 30){
          echo "<p>session expired</p>";  
        
        }
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin News</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
    </head>
    <body>
        <div id="content">
            
            <div id="title">
                <h1>Admin News</h1>
            </div>
            <div id="out">
                <form method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>
            
            <div id="news">
                <form method="POST" action="upNews.php">
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
            
        </div> 
    </body>
</html>