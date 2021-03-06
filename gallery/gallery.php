<?php include '../db.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Gallery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <link rel="stylesheet" type="text/css" href="gallery.css">
        <script src="../index.js" ></script>
        <script src="js/gallery.js"></script>

        <!-- Added by Saeed -->
        <!-- First, add jQuery (and jQuery UI if using custom easing or animation -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

        <!-- Second, add the Timer and Easing plugins -->
        <script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>

        <!-- Third, add the GalleryView Javascript and CSS files -->
        <script src="js/jquery.galleryview-3.0-dev.js" type="text/javascript"></script>
        <link href="css/jquery.galleryview-3.0-dev.css" rel="stylesheet" type="text/css"/>


        <!-- Lastly, call the galleryView() function on your unordered list(s) -->
        <script type="text/javascript">
            $(function () {
                $('#myGallery').galleryView();
            });
        </script>
    </head>
    <body>
        <div id="donate" >
            <div id="fblink">
                <a href="https://www.facebook.com/JuniorJazzFoundation" target="_blank"><img id="fbimg" alt="facebook link" src="../pic/facebook_logo.png"></a>
            </div>
            <div id="">
                <div id="dlink">
                    <a href="../how/howtohelp.php" target="_blank"><span>D<br/>O<br/>N<br/>A<br/>T<br/>E</span></a>
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
                    <li><a href="../events/events.php">EVENTS</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
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
                    <h2>Photos</h2>
                </div>
                
                <div class="gallery">
                    <div class="ingallery">
                        <div align="center">
                            <ul id="myGallery"  >
                                <?php imageSlider() ?>
                            </ul>
                        </div>
                    </div>
                    
                    <a id="gtab" href="javascript:hideshow()">Show Gallery</a>
                    <div class="divider"></div>
                    <div id="showGallery">
                        <div class="galset">
                            <?php basicGallery() ?>
                            <!--<div class="galpic">
                                    <img class="bigpic" src="../All_image/Jaz/Gallary/picture" data-larger="../All_image/Jaz/Gallary/picture" alt="some awesome picture"/>
                                </div>
                            -->
                        </div>
                    </div>
                </div>
                
                <div align="center">
                <noscript id="noScript">
                    <!--<h1 style="color: white;"> javascript option in your browser is disabled</h1>-->
                        <table >
                            <?php imageSlider_NoScript() ?>
                        </table>
                    </noscript>
                </div> 
                <hr>
                
                <div class="h2title">
                    <h2>Videos</h2>
                </div>
                <div class="gallery">
                    <div class="ingallery">
                        <div class="video">
                            <iframe width="500" height="298" src="https://www.youtube.com/v/6qnFcFP80ww?fs=1&amp;hl=en_US" frameborder="0" allowfullscreen></iframe>
                        </div>
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
