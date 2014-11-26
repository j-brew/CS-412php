<?php include 'login.php';
    if (session_id() == ''){
        session_start();
        echo "<p>IPaddress = ".$_SESSION['IPaddress']."</p><p>userAgent = ".$_SESSION['userAgent']."</p><p>sessionID = ".$_SESSION['sessionID']."</p><p>sessionTime = ".$_SESSION['sessionTime']."</p>";
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Log In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        
        <div id="content">
            
            <div id="title">
                <h1>TJJF Admin Page</h1>
            </div>
            
            <div id="info">
                <form method="POST" action="">
                    <ul>  
                        <li>
                            <label>User name : </label>  
                            <input type="text" name="user" placeholder="user name" required>
                        </li>
                        <li>
                            <label>Password : </label>  
                            <input type="password" name="password" placeholder="password" required>
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