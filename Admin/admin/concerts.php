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
        <title>Admin Concerts</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
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
                <form method="POST" action="">
                    <label>Performer : </label><br>
                    <input class="txtbox" type="text" name="artist" placeholder="performer ...">
                    <hr>
                    <label>Date : </label><br>
                    <input class="txtbox" type="date" name="date" placeholder="yyyy/mm/dd">
                    <hr>
                    <label>Time : </label><br>
                    <input class="txtbox" type="time" name="time" placeholder="XX:XXpm">
                    <hr>
                    <label>About : </label><br>
                    <textarea name="about" rows="5" cols="40" placeholder="about ..."></textarea>
                    <hr>
                    <label>Price : </label><br>
                    <input class="txtbox" type="number" name="price" placeholder="00.00">
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
                </form>
            </div>
            
        </div> 
    </body>
</html>