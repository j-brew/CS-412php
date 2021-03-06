<?php 

    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    include '../db.php';
    
    require_once '../MobileDetect/Mobile_Detect.php'; 
    $detect = new Mobile_Detect;
    
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    //$scriptVersion = $detect->getScriptVersion();
    //echo "<p style=\"color:white\" >device Type = ".$deviceType."</p>";
    $fromCell = FALSE;
    if(isset($_COOKIE['mobile'])){
        if($_COOKIE['mobile'] == 'no'){
            $fromCell = TRUE;
        }
    }
    if ($deviceType == "computer" || $deviceType == "tablet" || $fromCell){
?>
<!DOCTYPE html>

<html>
    <head>
        <title>About Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <link rel="stylesheet" type="text/css" href="about.css">
        <script src="../index.js" ></script>
    </head>
    <body>
        <div id="donate">
            <div id="fblink">
                <a href="https://www.facebook.com/JuniorJazzFoundation" target="_blank"><img id="fbimg" alt="facebook link" src="../pic/facebook_logo.png"></a>
            </div>
            <div id="">
                <div id="dlink"> <!-- test page -->
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
                    <li id="about"><a href="about.php">ABOUT US</a>
                        <ul id="abouts">
                            <li><a href="testimonials.php">Testimonials</a></li>
                            <li><a href="news.php">In The News</a></li>
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
                    <li><a href="../gallery/gallery.php">GALLERY</a></li>
                    <li><a href="../contact/contactus.php">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        
        <div id="main">
            <div id="info">
                
                <div id="quotes">
                    <a href="testimonials.php"<?php randQuote(); ?></a>
                </div>
                <div class="h2title">
                    <h2>History of The Junior Jazz Foundation</h2>
                </div>
                <a href="http://www.amazon.com/The-Jazz-Corner-Story-Audio/dp/1938417003/ref=sr_1_6?ie=UTF8&amp;qid=1343444982&amp;sr=8-6&amp;keywords=the+jazz+corner+story" target="_blank" class="imageframelink" style="width:324px;height:250px">  
                    <img id="historyBook" src="../All_image/Jaz/IMG_6905.JPG" alt="book sale">
                </a>
                <div class="intro">
                    <div class="infoP">
                        <p>During the past 15 years, due to the vision and foresight of 
                            Bob Masteller, The Jazz Corner has built both a tradition and
                            a reputation as one of the premier Jazz Clubs in the world. 
                            Many peers, such as Bucky Pizzarelli, George Shearing, Warren
                            and Allan Vache, and many other international artists, have 
                            rated it as the top club in the United States. Parallel with 
                            this evolution has been Masteller’s passion to pass on the 
                            legacy of Jazz to succeeding generations. Hence, the Junior 
                            Jazz Foundation was formed in 2006.</p>
                        <p>The Junior Jazz Foundation (JJF) is the philanthropic 
                            outreach of The Jazz Corner and is a 501-3C non-profit 
                            organization with an independent Board of Directors who provide
                            oversight to all of the policies and By Laws of the 
                            Foundation</p>
                    </div>
                </div>
                <div class="introWide">
                    <div class="infoP">
                        <h3>Our approach to accomplishing this is Twofold:</h3>

                        <ul>
                            <li>To utilize The Junior Jazz Foundation to seek donations 
                                of goods and services; to raise funds for new 
                                equipment, instruments, schools, workshops, master-classes 
                                and programs which enhance the arts learning 
                                environment.</li>
                            <li>To attract, promote, and present quality jazz throughout 
                                the area through collaboration with organizations and 
                                individuals dedicated to the proliferation of the Great 
                                American Art Form of Jazz through both performance and 
                                fundraising for educational programs.</li>
                        </ul>
                    </div>
                </div>
                
                <div class="h2title">
                    <h2>JJF Accomplishments </h2>
                </div>
                
                <div id="accomplish">
                    
                    <div id="current">
                        <h3>Past and Present Programs</h3>
                        <ul>
                            <li>Summer camps for students</li>
                            <li>$10,000 of instruments purchased and distributed</li>
                            <li>Clinics and workshops for middle school and high school students</li>
                            <li>Workshop for 100 5th Graders</li>
                            <li>Annual scholarship program at High School</li>
                            <li>Donated funds to Hilton Head High School and Hilton Head 
                                Christian Academy for furthering jazz education</li>
                            <li>Outreach concerts in private communities </li>
                        </ul>
                    </div>
                
                    <div id="program">
                        <h3>Programs</h3>
                        <ul>
                            <li>Patron presented concerts </li>
                            <li>Outreach concerts at schools and private communities 
                                partially sponsored by JJF</li>
                            <li>Community lectures presented about The History of Jazz 
                                held throughout public and private locations in the 
                                LowCountry</li>
                        </ul>
                    </div>

                    <div id="goal">
                        <h3>Goals</h3>
                        <ul>
                            <li>To continue to raise funds for youth and school programs</li>
                            <li>To educate listeners</li>
                            <li>o broaden the audience for Jazz</li>
                            <li>To present and showcase quality Jazz on Hilton Head Island</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="footer">
            <p id="footp">The Village At Wexford, C-1 | 1000 William Hilton Parkway | Hilton Head, SC 29928 | 843.681.9100</p>
            <p id="footc">&copy; The Junior Jazz Foundation</p>
        </div>
        <?php if($fromCell == TRUE){ ?>
        <div id="mobile">
            <a href="../version.php?dir=about&target=about" target="_self" style="color:white">mobile version</a>
        </div>
        <?php } ?>
    </body>
</html>
    <?php }else{ ?>
<!DOCTYPE html>

<html>
    <head>
        <title>The Junior Jazz Foundation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mobile.css">
        <script src="../mobile.js" ></script>
    </head>
    <body>
        <div id="title">
            <img id="logo" src="../pic/titleLeft.png" alt="logo">
        </div>
        <nav id="navigation">
            <a class="menu_button" href="#footer_nav" onclick="toggleNav(); return false;">&#9776;  MENU</a>
            <ul id="navigation_list" role="navigation">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="../how/howtohelp.php">HOW TO HELP</a></li>
            </ul>
        </nav>
        <div id="dlink">
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=G8MHZAQPP8JLG" target="_blank">DONATE</a>
        </div>
        <div class="content">
            <p>During the past 15 years, due to the vision and foresight of 
                Bob Masteller, The Jazz Corner has built both a tradition and
                a reputation as one of the premier Jazz Clubs in the world. 
                Many peers, such as Bucky Pizzarelli, George Shearing, Warren
                and Allan Vache, and many other international artists, have 
                rated it as the top club in the United States. Parallel with 
                this evolution has been Masteller’s passion to pass on the 
                legacy of Jazz to succeeding generations. Hence, the Junior 
                Jazz Foundation was formed in 2006.</p>
            <p>The Junior Jazz Foundation (JJF) is the philanthropic 
                outreach of The Jazz Corner and is a 501-3C non-profit 
                organization with an independent Board of Directors who provide
                oversight to all of the policies and By Laws of the 
                Foundation</p>
        </div>
        
        <div id="photo">
            <img id="trumpet" src="../pic/teachtrumpet.jpg" alt="junior trumpet">
        </div>
        
        <div class="content">
            <h3>Our approach to accomplishing this is Twofold:</h3>
            <ul>
                <li>To utilize The Junior Jazz Foundation to seek donations 
                    of goods and services; to raise funds for new 
                    equipment, instruments, schools, workshops, master-classes 
                    and programs which enhance the arts learning 
                    environment.</li>
                <li>To attract, promote, and present quality jazz throughout 
                    the area through collaboration with organizations and 
                    individuals dedicated to the proliferation of the Great 
                    American Art Form of Jazz through both performance and 
                    fundraising for educational programs.</li>
            </ul>
        </div>
        <div id="amazon">
            <a href="http://www.amazon.com/The-Jazz-Corner-Story-Audio/dp/1938417003/ref=sr_1_6?ie=UTF8&amp;qid=1343444982&amp;sr=8-6&amp;keywords=the+jazz+corner+story" target="_blank" class="imageframelink">  
                <img src="../All_image/Jaz/IMG_6905.JPG" alt="book sale">
            </a>
        </div>
        
        <div class="h2title">
            <h2>JJF Accomplishments </h2>
        </div>
        
        <div class="content">
            <h3>Past and Present Programs</h3>
            <ul>
                <li>Summer camps for students</li>
                <li>$10,000 of instruments purchased and distributed</li>
                <li>Clinics and workshops for middle school and high school students</li>
                <li>Workshop for 100 5th Graders</li>
                <li>Annual scholarship program at High School</li>
                <li>Donated funds to Hilton Head High School and Hilton Head 
                    Christian Academy for furthering jazz education</li>
                <li>Outreach concerts in private communities </li>
            </ul>
        </div>
        
        <div class="content">
            <h3>Programs</h3>
            <ul>
                <li>Patron presented concerts </li>
                <li>Outreach concerts at schools and private communities 
                    partially sponsored by JJF</li>
                <li>Community lectures presented about The History of Jazz 
                    held throughout public and private locations in the 
                    LowCountry</li>
            </ul>
        </div>

        <div class="content">
            <h3>Goals</h3>
            <ul>
                <li>To continue to raise funds for youth and school programs</li>
                <li>To educate listeners</li>
                <li>o broaden the audience for Jazz</li>
                <li>To present and showcase quality Jazz on Hilton Head Island</li>
            </ul> 
        </div>
        <div id="desktop">
            <a href="../version.php?dir=about&target=about" target="_self">desktop version</a>
        </div>
    </body>
</html>
    <?php } ?>
