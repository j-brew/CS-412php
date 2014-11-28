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

            </div>
            
        </div> 
    </body>
</html>