<?php include '../db.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <title>In The News</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <link rel="stylesheet" type="text/css" href="news.css">
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
                
                <div id="quotes">
                    <a href="testimonials.php"><?php randQuote(); ?></a>
                </div>
                
                <div class="h2title">
                    <h2>In The News</h2>
                </div>
                <div id="new">
                    <div class="news">
                        <?php news(); ?>
                        <!-- TEMPLATE FOR PHP --><!--<div class="newsTitle">  
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
                                <a href="http://www.lowcountrynewspapers.net/archive/node/32778" target="_blank"><span class="name">READ MORE</span></a>
                            </div>
                        </div>-->
                        
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