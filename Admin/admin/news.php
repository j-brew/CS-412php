<?php 
    //include 'login.php';
    include 'phpfiles/newsUpload.php';
    
    session_start();
    if (!isset($_SESSION['IPaddress'])){
        echo '<h1>YOU SHALL NOT PASS !!!!</h1>';
        echo '<p>if you know the secret knock that it\'s ok :)</p>';
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
<?php #if((time()-$_SESSION['sessionTime']) < 30){ ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin News</title>
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
        <script type="text/javascript" src="news.js"></script>
    </head>
    <body>
        <h4>CURRENT SESSION</h4>
        <div id="content">
            
            <div id="title">
                <h1>Admin News</h1>
            </div>
            <div id="out">
                <form id="back" method="POST" action="admin.php">
                    <input type="submit" value="BACK">
                </form>
                <form id="logout" method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>
            
            <div id="news">
                <form name="newsForm" onsubmit="validateForm();" method="POST" action="">
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
            <?php if($error != ""){ ?>
                    <div id="error"><?= $error; ?></div>
            <?php } ?>
            <div id="footer"></div>
        </div> 
    </body>
</html>

<?php # } ?>