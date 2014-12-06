<?php include '../db.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Events</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <link rel="stylesheet" type="text/css" href="events.css">
        <script type="text/javascript" src="events.js"></script>
        <!--<script type="text/javascript" src="../index.js"></script>-->
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
                <div id="seepast">
                    <img id="logoleft" src="../pic/titlewithoulineLeftT.png" alt="logo">
                    <img id="logomiddle" src="../pic/JJFmusicthemeT.png" alt="logo">
                    <img id="logoright" src="../pic/titlewithoulineRightT.png" alt="logo">
                </div>
            </div>
        </div>
        
        <div id="menu">
            <div id="menuNav">
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li id="about"><a href="../about/about.php">ABOUT US</a>
                        <ul id="abouts">
                            <li><a href="../about/testimonials.php">Testimonials</a></li>
                            <li><a href="../about/news.php">In The News</a></li>
                        </ul>
                    </li>
                    <li id="how"><a href="../how/howtohelp.php">HOW TO HELP</a>
                        <ul id="hows">
                            <li><a href="../how/howtohelp.php#support" target="_self">Supporting the JJF</a></li>
                            <li><a href="../how/howtohelp.php#contributor" target="_self">Contributer Centers</a></li>
                            <li><a href="../how/howtohelp.php#donation" target="_self">Donation Benefits</a></li>
                        </ul>
                    </li>
                    <li><a href="events.php">EVENTS</a></li>
                    <li><a href="../gallery/gallery.php">GALLERY</a></li>
                    <li><a href="../contact/contactus.php">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        
        <div id="main">
            <div id="info">
                
                <div id="quotes">
                    <a href="../about/testimonials.php"<?php randQuote(); ?></a>
                </div>

                <div class="h2title">
                    <h2>Events</h2>
                </div>
                <div id="events">
                    <a id="ftab" href="javascript:hideshow()">Hide Future Events</a>
                    <div class="divider"></div>
                    <div id="future">
                        <?php futureShows(); ?>
                        <!--<div class="show">
                            <div class="pich">
                                <img src="../All_image/Jaz/IMG_6905.JPG" alt="book sale">
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
                        </div>
                        <div class="show">
                            <div class="showposter">
                                <div class="picshow">
                                    <img class="poster" src="../All_image/Jaz/shows/poster2Oct30.png" data-larger="../All_image/Jaz/shows/poster2Oct30.png" alt="pic">
                                </div>
                                <div class="picshowinfo">
                                    <h4>September 25, 2014 8:00pm</h4>
                                    <h4>Tickets are $45</h4>
                                    <h4>Available at <a href="http://www.uscbcenterforthearts.com" target="_blank">www.uscbcenterforthearts.com</a></h4>
                                    <h4>Or call (843)521-4145</h4>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <hr>
                    
                    <a id="ptab" href="javascript:hideshow()">Show Past Events</a>
                    <div class="divider"></div>
                    <div id="past">
                        <?php pastShows(); ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="footer">
            <p id="footp">The Village At Wexford, C-1 | 1000 William Hilton Parkway | Hilton Head, SC 29928 | 843.681.9100</p>
            <p id="footc">&copy; The Junior Jazz Foundation</p>
        </div>
    </body>
</html>
