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
        <div id="donate">
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=G8MHZAQPP8JLG" target="_blank"><span>D<br/>O<br/>N<br/>A<br/>T<br/>E</span></a>
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
                    <li><a href="../about/about.php">ABOUT US</a></li>
                    <li><a href="../how/howtohelp.php">HOW TO HELP</a>
                        <ul class="subMenu">
                            <li><a href="../how/howtohelp.php#support" target="self">Supporting the JJF</a></li>
                            <li><a href="../how/howtohelp.php#contributor" target="self">Contributer Centers</a></li>
                            <li><a href="../how/howtohelp.php#donation" target="self">Donation Benefit</a></li>
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
                    <?php randQuote(); ?>
                </div>

                <h2>Photos</h2>
                <div align="center">
                    <ul id="myGallery"  >
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6923.PNG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6924.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6925.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6926.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6927.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6928.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6929.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6930.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6932.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6933.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6934.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6935.JPG" alt=""/></li>
                        <li> <img src="../All_image/Jaz/Gallary/IMG_6936.JPG" alt=""/></li>
                    </ul>
                </div>
                <div align="center">
                <noscript id="noScript">
                    <h1 style="color: white;"> javascript option in your browser is disabled</h1>
                      
                        <table >
                            <tr>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6923.PNG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6924.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6925.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6926.JPG" alt=""/></td>
                            </tr>  
                            <tr>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6927.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6928.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6929.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6930.JPG" alt=""/></td>
                            </tr>
                              <tr>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6931.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6932.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6933.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6934.JPG" alt=""/></td>
                            </tr>
                              <tr>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6935.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6936.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6926.JPG" alt=""/></td>
                                <td><img src="../All_image/Jaz/Gallary/IMG_6927.JPG" alt=""/></td>
                            </tr>
                        </table>
                    </noscript>
                </div> 
                <hr>
                <h2>Videos</h2>
                <div class="video">
                    <iframe width="500" height="298" src="//www.youtube.com/embed/6qnFcFP80ww" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div id="footer">
            <p id="footp">The Village At Wexford, C-1 | 1000 William Hilton Parkway | Hilton Head, SC 29928 | 843.681.9100</p>
            <p id="footc">&copy; The Junior Jazz Foundation</p>
        </div>
    </body>
</html>
