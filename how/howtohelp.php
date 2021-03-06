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
        <title>How To Help</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <link rel="stylesheet" type="text/css" href="howtohelp.css">
        <script src="../index.js" ></script>
        <script type="text/javascript" src="howtohelp.js"></script>
    </head>
    <body>
        <div id="donate" >
            <div id="fblink">
                <a href="https://www.facebook.com/JuniorJazzFoundation" target="_blank"><img id="fbimg" alt="facebook link" src="../pic/facebook_logo.png"></a>
            </div>
            <!--<div id="dinfo">-->
                <div id="paypal">
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=G8MHZAQPP8JLG" target="_blank"><span>DONATE<br>NOW<br>with</span><img id="donateNow" alt="paypal link" src="../pic/paypal.png"></a>
                </div>
            
                <!--<div id="cinfo">
                    <span>Help<br>The<br>Junior Jazz<br>Foundation<br>by<br>clicking<br>Donate</span>
                </div>
            </div>-->
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
        
        <div id="support"></div>
        <div id="menu">
            <div id="menuNav">
                <ul id="startMenu">
                    <li><a href="../index.php">HOME</a></li>
                    <li id="about"><a href="../about/about.php">ABOUT US</a>
                        <ul id="abouts">
                            <li><a href="../about/testimonials.php">Testimonials</a></li>
                            <li><a href="../about/news.php">In The News</a></li>
                        </ul>
                    </li>
                    <li id="how"><a href="howtohelp.php">HOW TO HELP</a>
                        <ul id="hows">
                            <li><a href="#support" target="_self">Supporting the JJF</a></li>
                            <li><a href="#contributor" target="_self">Contributer Centers</a></li>
                            <li><a href="#donation" target="_self">Donation Benefits</a></li>
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
               
                <div id="quotes" id="support">
                    <a href="../about/testimonials.php"><?php randQuote(); ?></a>
                </div>
                
                <div class="h2title">
                    <h2>Supporting the JJF</h2>
                </div>
                <a href="http://www.amazon.com/The-Jazz-Corner-Story-Audio/dp/1938417003/ref=sr_1_6?ie=UTF8&amp;qid=1343444982&amp;sr=8-6&amp;keywords=the+jazz+corner+story" target="_blank" class="imageframelink" style="width:324px;height:250px">  
                    <img id="historyBook" src="../All_image/Jaz/IMG_6905.JPG" alt="book sale">
                </a>
                <div class="intro">
                    <div class="infoP">
                        <p>Depending on your situation, you may want to make a gift now, 
                            provide a gift through your estate plan, or both.
                        </p>
                        <p>Current gifts to the Junior Jazz Foundation offer important 
                            tax benefits such as the maximum allowable charitable income 
                            tax deduction in the year that the gift is made and possible 
                            elimination of capital gains taxes on gifts of appreciated 
                            property.
                        </p>
                        <p>As a contributor to our dual mission of performance and education, 
                            we have developed several areas where individuals and organizations 
                            can provide assistance.
                        </p>
                    </div>
                </div>
                <div class="introWide">
                    <div class="infoP">
                        <h3>Tax-deductible contributions support:</h3>
                        <ul>
                            <li>Educational outreach to area school music programs</li>
                            <li>Community outreach programs in partnership with other 
                                cultural institutions </li>
                            <li>The best performances the world has to offer in jazz & 
                                blues</li>
                            <li>Showcases for emerging and regional artists</li>
                            <div id="contributor"></div>
                            <li>Hilton Head Island as a tourist destination for music fans</li>
                        </ul>
                    </div>
                </div>
                
                <div class="h2title">
                    <h2>Contributor Centers</h2>
                </div>
                <div class="introWide">
                    <div class="infoP">
                        <ol>
                            <li>JAZZ EDUCATION - This area can be tailored to individual 
                                desires with both in kind (instruments) and monetary 
                                ($25 - $5000) readily accepted and earmarked by JJF for 
                                specific programs including:
                                <ul>
                                    <li>WORKSHOPS</li>
                                    <li>MASTER CLASSES</li>
                                    <li>INSTRUMENT PURCHASES</li>
                                    <li>UNDERPRIVILEGED</li>
                                    <li>OUTREACH CLINICS</li>
                                    <li>SUMMER CAMP</li>
                                    <li>NOTE *Contributions to this category will be specifically 
                                        earmarked for these uses.</li>
                                </ul>
                            </li>
                            <li>JUNIOR JAZZ FOUNDATION PATRON CONCERT SERIES
                                <ul>
                                    <li>International artist schedule at The Jazz Corner</li>
                                    <li>Regional outreach community schedule at various 
                                        locations</li>
                                    <div id="donation"></div>
                                    <li>NOTE *100% of all ticket proceeds will be donated 
                                        to The Junior Jazz Foundation</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="h2title">
                    <h2>Donation Levels and Benefits</h2>
                </div>
 
                <div id="benefits">
                    <div id="leftcol">
                        <q>Jazz is the universal language. Everyone can speak jazz with 
                            your heart and your spirit...</q>
                        <p>Throughout the first half of the 20th Century, jazz music was 
                            the heartbeat of American history.  The cultural value of 
                            perpetuating that heritage is immeasurable.</p>
                        <p>The JJF's mission is the preserve the great American Art Form 
                            of Jazz through education and performance.</p>
                        <p>Your support is key to ensuring jazz lives for generations to 
                            come.  Whether you attend a JJF sponsored event at The Jazz 
                            Corner, enjoy an outreach concert for our theater series, sponsor 
                            a student to attend our annual jazz camp or donate a used instrument 
                            for an aspiring young artist, your support perpetuates the 
                            preservation of jazz.</p>
                        <p>These events not only keep the American Art Form alive, but 
                            they are an adjunt to the community and island objective of 
                            presenting and promoting the arts in general. At the same time, 
                            they assist schools and individual jazz educational programs.</p>
                        <p>You need not be a dedicated jazz aficionado. If you believe it 
                            is important to preserve our most valued American Art Form and 
                            the culture and history that is so highly valued, then we invite 
                            you to support our cause through the foundation...</p>
                    </div>
                
                    <div id="rightcol">
                        <p>Your gift will help us educate young people about jazz through 
                            our annual Hilton Head Jazz Camp, outreach programs and master 
                            classes.  Your donation also helps us to present more sensational 
                            performances and keep jazz alive for local, regional, national 
                            & international audiences.</p>
                        <h5 class="clickInfo">Click any donation level to discover its benefits.</h5>
                        <?php benefits(); ?>
                        <!--<div class="donation"> TEMPLATE
                            <h4 class="level" onclick="showhideBenefit('benefit_no')">musicianName - levelName - mDonation</h4>
                            <ul class="benefit" id="benefit_no">
                                <li>some benefit</li>
                            </ul>
                        </div>-->
                        
                        <p>A portion of each level is tax exempt to the extent that the 
                            law will allow.</p>
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
            <a href="../version.php?dir=how&target=howtohelp" target="_self" style="color:white">mobile version</a>
        </div>
        <?php } ?>
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
        <script src="../mobile.js" ></script>
        <script type="text/javascript" src="howtohelp.js"></script>
    </head>
    <body>
        <div id="title">
            <img id="logo" src="../pic/titleLeft.png" alt="logo">
        </div>
        <nav id="navigation">
            <a class="menu_button" href="#footer_nav" onclick="toggleNav(); return false;">&#9776;  MENU</a>
            <ul id="navigation_list" role="navigation">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="../about/about.php">ABOUT US</a></li>
                <li><a href="help.php">HOW TO HELP</a></li>
            </ul>
        </nav>
        
        <div id="dlink">
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=G8MHZAQPP8JLG" target="_blank">DONATE</a>
        </div>
        
        <div class="content">
 
        </div>
        
        <div class="h2title">
            <h2>Supporting the JJF</h2>
        </div>
        
        <div class="content">
            <p>Depending on your situation, you may want to make a gift now, 
                provide a gift through your estate plan, or both.
            </p>
            <p>Current gifts to the Junior Jazz Foundation offer important 
                tax benefits such as the maximum allowable charitable income 
                tax deduction in the year that the gift is made and possible 
                elimination of capital gains taxes on gifts of appreciated 
                property.
            </p>
            <p>As a contributor to our dual mission of performance and education, 
                we have developed several areas where individuals and organizations 
                can provide assistance.
            </p>
        </div>
        
        <div class="content">
            <h3>Tax-deductible contributions support:</h3>
            <ul>
                <li>Educational outreach to area school music programs</li>
                <li>Community outreach programs in partnership with other 
                    cultural institutions </li>
                <li>The best performances the world has to offer in jazz & 
                    blues</li>
                <li>Showcases for emerging and regional artists</li>
                <div id="contributor"></div>
                <li>Hilton Head Island as a tourist destination for music fans</li>
            </ul>
        </div>
        
        <div class="h2title">
            <h2>Contributor Centers</h2>
        </div>
        
        <div class="content">
            <ol>
                <li>JAZZ EDUCATION - This area can be tailored to individual 
                    desires with both in kind (instruments) and monetary 
                    ($25 - $5000) readily accepted and earmarked by JJF for 
                    specific programs including: 
                    <ul>
                        <li>WORKSHOPS</li>
                        <li>MASTER CLASSES</li>
                        <li>INSTRUMENT PURCHASES</li>
                        <li>UNDERPRIVILEGED</li>
                        <li>OUTREACH CLINICS</li>
                        <li>SUMMER CAMP</li>
                        <li>NOTE *Contributions to this category will be specifically 
                            earmarked for these uses.</li>
                    </ul>
                </li>
                <li>JUNIOR JAZZ FOUNDATION PATRON CONCERT SERIES
                    <ul>
                        <li>International artist schedule at The Jazz Corner</li>
                        <li>Regional outreach community schedule at various 
                            locations</li>
                        <div id="donation"></div>
                        <li>NOTE *100% of all ticket proceeds will be donated 
                            to The Junior Jazz Foundation</li>
                    </ul>
                </li>
            </ol>
        </div>
        
        <div class="h2title">
            <h2>Donation Levels and Benefits</h2>
        </div>
        
        <div class="content">
            <q>Jazz is the universal language. Everyone can speak jazz with 
                your heart and your spirit...</q>
            <p>Throughout the first half of the 20th Century, jazz music was 
                the heartbeat of American history.  The cultural value of 
                perpetuating that heritage is immeasurable.</p>
            <p>The JJF's mission is the preserve the great American Art Form 
                of Jazz through education and performance.</p>
            <p>Your support is key to ensuring jazz lives for generations to 
                come.  Whether you attend a JJF sponsored event at The Jazz 
                Corner, enjoy an outreach concert for our theater series, sponsor 
                a student to attend our annual jazz camp or donate a used instrument 
                for an aspiring young artist, your support perpetuates the 
                preservation of jazz.</p>
            <p>These events not only keep the American Art Form alive, but 
                they are an adjunt to the community and island objective of 
                presenting and promoting the arts in general. At the same time, 
                they assist schools and individual jazz educational programs.</p>
            <p>You need not be a dedicated jazz aficionado. If you believe it 
                is important to preserve our most valued American Art Form and 
                the culture and history that is so highly valued, then we invite 
                you to support our cause through the foundation...</p>
        </div>
        
        <div class="content">
            <p>Your gift will help us educate young people about jazz through 
                our annual Hilton Head Jazz Camp, outreach programs and master 
                classes.  Your donation also helps us to present more sensational 
                performances and keep jazz alive for local, regional, national 
                & international audiences.</p>
            <h5 class="clickInfo">Click any donation level to discover its benefits.</h5>
            <?php benefits(); ?>
            <!--<div class="donation"> TEMPLATE
                <h4 class="level" onclick="showhideBenefit('benefit_no')">musicianName - levelName - mDonation</h4>
                <ul class="benefit" id="benefit_no">
                    <li>some benefit</li>
                </ul>
            </div>-->
            <p>A portion of each level is tax exempt to the extent that the 
                law will allow.</p>
        </div>
        <div id="desktop">
            <a href="../version.php?dir=how&target=howtohelp" target="_self">desktop version</a>
        </div>
    </body>
</html>
    <?php } ?>