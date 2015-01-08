<?php 
    include 'phpfiles/newsDelete.php';
    
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
        <meta charset="UTF-8">
        <title>Admin News</title>
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
        <link rel="stylesheet" type="text/css" href="cssfiles/dropnews.css">
        <script type="text/javascript" src="jsfiles/timer.js"></script>
    </head>
    <body>

        <div id="content">
            <div id="clock"></div>
            
            <div id="title">
                <h1>DROP News</h1>
            </div>
            <div id="out">
                <form id="back" method="POST" action="admin.php">
                    <input type="submit" value="BACK">
                </form>
                <form id="logout" method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>
            
            <div id="dropnews">
                <form method="POST" action="">
                    <?php news(); ?>
                    <!--<div class="newsdrop">
                        <div class="chkbox">
                                <input type="checkbox">
                        </div>
                        <div class="innews">
                            <h3>Jazz Corner celebrates 10th anniversary with benefit concerts</h3>
                            <div class="newsMain">
                                <p>The concept of a jazz club on Hilton Head Island was a bit 
                                    far-fetched when the Jazz Corner opened. The word was it 
                                    wouldn't last. There was no way it could draw consistent 
                                    acts. Even if it did, no one would want to pay the cover 
                                    to get in.
                                </p>
                                <p>
                                    A decade later, the Jazz Corner has carved a niche in The 
                                    Village at Wexford, defying projections of its demise. And, 
                                    most recently, it's tried to foster the next generation of 
                                    jazz lovers. 
                                </p>
                                <p>
                                    In honor of its 10th anniversary, the Jazz Corner is holding 
                                    a series of concerts to benefit its nonprofit foundation, 
                                    Junior Jazz.
                                </p>
                            </div>
                            <div class="newsLink">
                                <p>http://www.lowcountrynewspapers.net/archive/node/32778</p>
                            </div>
                        </div> 
                    </div>-->  
                    <hr>
                    <div id="save">
                        <input type="submit" value="DELETE">
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

<?php  } ?>