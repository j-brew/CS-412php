<?php include '../db.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Testimonials</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <script src="../index.js" ></script>
    </head>
    <body>
        <div id="donate">
            <div id="fblink">
                <a href="https://www.facebook.com/JuniorJazzFoundation" target="_blank"><img id="fbimg" alt="facebook link" src="../pic/facebook_logo.png"></a>
            </div>
            <div id="">
                <div id="dlink"> <!-- test page -->
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=G8MHZAQPP8JLG" target="_blank"><span>D<br/>O<br/>N<br/>A<br/>T<br/>E</span></a>
                </div>
            </div>
        </div>
        
        <div id="topbanner">
            <div id="bannerpic">
                <img id="logo1" src="../pic/logo_139x87.jpg" alt="logo">
                <img id="logo2" src="../pic/logo_139x87.jpg" alt="logo">
            </div>
        </div>
        
        <div id="menu">
            <div id="menuNav">
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a>
                        <ul>
                            <li><a href="testimonials.php">Testimonials</a></li>
                            <li><a href="news.php">In The News</a></li>
                        </ul>
                    </li>
                    <li><a href="../how/howtohelp.php">HOW TO HELP</a>
                        <ul>
                            <li><a href="../how/howtohelp.php#support" target="_self">Supporting the JJF</a></li>
                            <li><a href="../how/howtohelp.php#contributor" target="_self">Contributer Centers</a></li>
                            <li><a href="../how/howtohelp.php#donation" target="_self">Donation Benefits</a></li>
                        </ul>
                    </li>
                    <li><a href="../events/events.php">EVENTS</a></li>
                    <li><a href="../gallery/gallery.php">GALLERY</a></li>
                    <li><a href="../contact/contactus.php">CONTACT US</a></li>
                </ul>
            </div>
            <!-- <div style="clear:both;"></div>  might be needed in other browsers     -->
        </div>
        
        <div id="main">
            <div id="info">
                <h2>Testimonials</h2>
                <?php allQuotes(); ?>
            </div>
        </div>
        
        <div id="footer">
            <p id="footp">The Village At Wexford, C-1 | 1000 William Hilton Parkway | Hilton Head, SC 29928 | 843.681.9100</p>
            <p id="footc">&copy; The Junior Jazz Foundation</p>
        </div>        
    </body>
</html>