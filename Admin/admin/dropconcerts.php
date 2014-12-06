<?php 
    include 'phpfiles/concertDelete.php';
    
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
        <title>DROP Concerts</title>
        <link rel="stylesheet" type="text/css" href="cssfiles/admin.css">
        <link rel="stylesheet" type="text/css" href="cssfiles/dropconcerts.css">
        <script type="text/javascript" src="jsfiles/timer.js"></script>
    </head>
    <body>
        <div id="content">
            <div id="clock"></div>
            
            <div id="title">
                <h1>DROP Concerts</h1>
            </div>
            <div id="out">
                <form id="back" method="POST" action="admin.php">
                    <input type="submit" value="BACK">
                </form>
                <form id="logout" method="POST" action="logout.php">
                    <input type="submit" value="LOG OUT">
                </form>
            </div>

            <div id="dropconcert">
                <form method="POST" action="">  
                    <a href="">Future Shows</a>
                    <div id="future">
                        <?php futureShows(); ?>
                        <!--<div class="show">
                            <div class="chkbox">
                                <input type="checkbox">
                            </div>
                            <div class="pich">
                                <img src="../../All_image/Jaz/IMG_6905.JPG" alt="book sale">
                            </div>
                            <div class="about">
                                <h3>Deana Martin</h3>
                                <h4>September 25, 2014 8:00pm</h4>
                                <p>As part of the Beaufort concert series, The Junior Jazz Foundation 
                                    presents <b>Deana Martin</b>, the daughter of Rat Pack star Dean Martin. 
                                    See this fabulous Las Vegas entertainer LIVE at the Beaufort 
                                    Center for the Arts.
                                </p>
                                <h4>Tickets are $45</h4>
                                <h4>Available at <a href="http://www.uscbcenterforthearts.com" target="_blank">www.uscbcenterforthearts.com</a></h4>
                                <h4>Or call (843)521-4145</h4>
                            </div>
                        </div>-->
                    </div>

                    <a href="">Past Shows</a>
                    <div id="past">
                        <?php pastShows(); ?>
                    </div>
                 
                    <hr>
                    <div id="save">
                        <input type="submit" value="DELETE"/>
                    </div>
                </form>
            </div>
            <div>
                <?php if ($error != "") { ?>
                    <p id="error"><?= $error; ?></p>
                <?php } ?>
            </div>
            <div id="footer"></div>
        </div> 
    </body>
</html>

<?php  } ?>