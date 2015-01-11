<?php 
//    error_reporting(E_ALL);
//    ini_set('display_errors', 'On');

    require_once 'MobileDetect/Mobile_Detect.php'; 
    $detect = new Mobile_Detect;
    
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    //$scriptVersion = $detect->getScriptVersion(); // not required
    //echo "<p style=\"color:white\" >device Type = ".$deviceType."</p>";
    $toDesktop;
    if(isset($_COOKIE['mobile'])){
        if($_COOKIE['mobile'] == 'yes'){
            $toDesktop = FALSE;
        }
        else{
            $toDesktop = TRUE;
        }
    }
    
    if ($deviceType == "computer" || $deviceType == "tablet" || $toDesktop){
?>
<!DOCTYPE html>

<html>
    <head>
        <title>The Junior Jazz Foundation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="index.js" ></script>
    </head>
    <body>
        <div id="donate" >
            <div id="fblink">
                <a href="https://www.facebook.com/JuniorJazzFoundation" target="_blank"><img id="fbimg" alt="facebook link" src="pic/facebook_logo.png"></a>
            </div>
            <div id="dinfo">
                <div id="dlink">
                    <a href="how/howtohelp.php" target="_self"><span>D<br/>O<br/>N<br/>A<br/>T<br/>E</span></a>
                </div>
            
                <div id="cinfo">
                    <span>Help<br>The<br>Junior Jazz<br>Foundation<br>by<br>clicking<br>Donate</span>
                </div>
            </div>
        </div>
        
        <div id="topbanner">
            <div id="bannerpic">
                <div id="seepast">
                    <img id="logoleft" src="pic/titlewithoulineLeftT.png" alt="logo">
                    <img id="logomiddle" src="pic/JJFmusicthemeT.png" alt="logo">
                    <img id="logoright" src="pic/titlewithoulineRightT.png" alt="logo">
                </div>
            </div>
        </div>
        
        <div id="menu">
            <div id="menuNav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li id="about"><a href="about/about.php">ABOUT US</a>
                        <ul id="abouts">
                            <li><a href="about/testimonials.php">Testimonials</a></li>
                            <li><a href="about/news.php">In The News</a></li>
                        </ul>
                    </li>
                    <li id="how"><a href="how/howtohelp.php">HOW TO HELP</a>
                        <ul id="hows">
                            <li><a href="how/howtohelp.php#support" target="_self">Supporting the JJF</a></li>
                            <li><a href="how/howtohelp.php#contributor" target="_self">Contributer Centers</a></li>
                            <li><a href="how/howtohelp.php#donation" target="_self">Donation Benefits</a></li>
                        </ul>
                    </li>
                    <li><a href="events/events.php">EVENTS</a></li>
                    <li><a href="gallery/gallery.php">GALLERY</a></li>
                    <li><a href="contact/contactus.php">CONTACT US</a></li>
                </ul>
            </div>
            <!-- <div style="clear:both;"></div>  might be needed in other browsers     -->
        </div>
        
        <div id="main">
            <div id="info">
                <img id="trumpet" src="pic/teachtrumpet.jpg" alt="junior trumpet">
                <div class="intro">
                    <div class="infoP">
                        <p class="p1">The Junior Jazz Foundation (JJF) is the philanthropic outreach 
                            effort of The Jazz Corner on beautiful Hilton Head Island,SC.</p>
                        <p class="p1">We believe that the original American art form of jazz music 
                            is important. Our focus is to educate and enable young 
                            musicians in our community by supplying instruments, 
                            scholarships, classes and seminars.</p>
                    </div>
                    <div id="centerBook">
                        <a href="http://www.amazon.com/The-Jazz-Corner-Story-Audio/dp/1938417003/ref=sr_1_6?ie=UTF8&amp;qid=1343444982&amp;sr=8-6&amp;keywords=the+jazz+corner+story" target="_blank" class="imageframelink">  
                            <img src="All_image/Jaz/IMG_6905.JPG" alt="book sale">
                        </a>
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
    <?php }else{ ?>
<!DOCTYPE html>
<!--  ************************** PHONE ******************************************* -->
<html>
    <head>
        <title>The Junior Jazz Foundation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mobile.css">
        <script src="mobile.js" ></script>
    </head>
    <body>
        <div id="title">
            <img id="logo" src="pic/titleLeft.png" alt="logo">
        </div>
        <nav id="navigation">
            <a class="menu_button" href="#footer_nav" onclick="toggleNav(); return false;">&#9776;  MENU</a>
            <ul id="navigation_list" role="navigation">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about/about.php">ABOUT US</a></li>
                <li><a href="how/howtohelp.php">HOW TO HELP</a></li>
            </ul>
        </nav>
        <div id="dlink">
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=G8MHZAQPP8JLG" target="_blank">DONATE</a>
        </div>
        <div id="content">
            <p>The Junior Jazz Foundation (JJF) is the philanthropic outreach 
                effort of The Jazz Corner on beautiful Hilton Head Island,SC.</p>
            <p>We believe that the original American art form of jazz music 
                is important. Our focus is to educate and enable young 
                musicians in our community by supplying instruments, 
                scholarships, classes and seminars.</p>
        </div>
        <div id="photo">
            <img id="trumpet" src="pic/teachtrumpet.jpg" alt="junior trumpet">
        </div>
        <div id="amazon">
            <a href="http://www.amazon.com/The-Jazz-Corner-Story-Audio/dp/1938417003/ref=sr_1_6?ie=UTF8&amp;qid=1343444982&amp;sr=8-6&amp;keywords=the+jazz+corner+story" target="_blank" class="imageframelink">  
                <img src="All_image/Jaz/IMG_6905.JPG" alt="book sale">
            </a>
        </div>
        <div id="desktop">
            <a href="version.php" target="_self">desktop version</a>
        </div>
    </body>
</html>
    <?php } ?>