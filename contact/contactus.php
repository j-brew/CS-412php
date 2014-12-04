<?php include '../db.php'; 
      include 'emailus.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <link rel="stylesheet" type="text/css" href="contactus.css">
        <script src="../index.js" ></script>
        <script type="text/javascript" src="contactus.js"></script>
    </head>
    <body>
        <div id="donate">
            <div id="fblink">
                <a href="https://www.facebook.com/JuniorJazzFoundation" target="_blank"><img id="fbimg" alt="facebook link" src="../pic/Facebook_logo.png"></a>
            </div>
            <div id="">
                <div id="dlink"> <!-- test page -->
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=G8MHZAQPP8JLG" target="_blank"><span>D<br/>O<br/>N<br/>A<br/>T<br/>E</span></a>
                </div>
            </div>
        </div>
        
        <div id="topbanner">
            <div id="bannerpic">
                <img id="logo" src="../pic/logo_139x87.jpg" alt="logo">
            </div>
        </div>
        
        <div id="menu">
            <div id="menuNav">
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="../about/about.php">ABOUT US</a>
                        <ul>
                            <li><a href="../about/testimonials.php">Testimonials</a></li>
                            <li><a href="../about/news.php">In The News</a></li>
                        </ul>
                    </li>
                    <li><a href="../how/howtohelp.php">HOW TO HELP</a>
                        <ul class="subMenu">
                            <li><a href="../how/howtohelp.php#support" target="_self">Supporting the JJF</a></li>
                            <li><a href="../how/howtohelp.php#contributor" target="_self">Contributer Centers</a></li>
                            <li><a href="../how/howtohelp.php#donation" target="_self">Donation Benefits</a></li>
                        </ul>
                    </li>
                    <li><a href="../events/events.php">EVENTS</a></li>
                    <li><a href="../gallery/gallery.php">GALLERY</a></li>
                    <li><a href="contactus.php">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        
        <div id="main">
            <div id="info">
                
                <div id="quotes">
                    <?php randQuote(); ?>
                </div>
                
                <h2>Contact Us</h2>
                
                <?php
                    if($displayInfo != ""){
                    ?>
                    <p id="emailMsg"><?= $displayInfo; ?></p>
                    <?php
                    }
                ?>
                
                <div id="email">
                    <form name="formName" onsubmit="validateForm();" method="POST" action="">
                        <label>Your email address *</label>
                        <br>
                        <input class="box" name="email" type="email" id="emailID" required>
                        <br>
                        <label>Subject *</label>
                        <br>
                        <input class="box" name="subject" type="text" required>
                        <br>
                        <label>Message *</label>
                        <br>
                        <textarea name="message" required rows="5"></textarea><br>
                        <input name="Send" type="submit" value="Submit">
                        <br/>
                        <small>* required fields</small>
                    </form>
                </div>

                <div id="address">
                    <p>Junior Jazz Foundation<br/>
                        The Village At Wexford, C-1<br/>
                        1000 William Hilton Parkway<br/>
                        Hilton Head, SC 29928<br/>
                        843.681.9100
                    </p>
                </div>
            </div>
        </div>
        
        <div id="footer">
            <p id="footp">The Village At Wexford, C-1 | 1000 William Hilton Parkway | Hilton Head, SC 29928 | 843.681.9100</p>
            <p id="footc">&copy; The Junior Jazz Foundation</p>
        </div>
    </body>
</html>
