<?php include 'login.php';

    //session_start();
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
        <title>Log In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script type="text/javascript" src="index.js"></script>
    </head>
    <body>
        
        <div id="content">
            
            <div id="title">
                <h1>TJJF Admin Page</h1>
            </div>
            
            <div id="info">
                <form name="userForm" onsubmit="validateForm();" method="POST" action="">
                    <ul>  
                        <li>
                            <label>User name : </label>  
                            <input type="text" name="user" placeholder="user name" id="user" required>
                        </li>
                        <li>
                            <label>Password : </label>  
                            <input type="password" name="password" placeholder="password" id="password" required>
                        </li>
                    </ul>
                    <div id="center">
                        <input type="submit" value="LOG IN">
                    </div>
                </form>
            </div>
            <?php if($error != ""){ ?>
                <div id="error"><?= $error; ?></div>
            <?php } ?>
        </div> 
        
    </body>
</html>