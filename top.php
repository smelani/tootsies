<?php include ("includes/switch.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$myTitle?></title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        
        <!--Remy Sharp Shim--> 
            <!--[if lt IE 9]> 
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
            </script> 
            <![endif]-->
        
        <!--Global Styles-->
        <link rel="stylesheet" href="css/styles.css">
        
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Quicksand:300,400|La+Belle+Aurore" rel="stylesheet">
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        
        <!-- bx Slider CSS -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />
        
        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/bf85faea57.js"></script>
    
        <!-- Fotorama Gallery CSS -->
        <link rel="stylesheet" href="css/fotorama.css">
    
    </head>
    <body>
        <!-- Toggle Nav JS -->
        <script src="js/toggle.js"></script>
        
        <!--bx Slider JS-->
        <script src="js/jquery.bxslider.js"></script>
    
        <script>
            
            $(document).ready(function(){
                /*$('.bxslider').bxSlider();*/

                $('.bxslider').bxSlider({
                        mode: 'fade',
                        speed: 2000,
                        auto: true,
                        autoControls: true,
                        
                });
            });
            
        </script>
        
        <!--Begin Header-->
        <header>
            
            <!--Logo-->
            <a href="index.php"><img src="images/tootsieslogo.png" alt="logo"></a>
            
            <section id="header-heading">
                <h2><?=$myPagePhrase?></h2>
            </section>
                
            <section class="phone-hours">
                <h3>701 5th Avenue <br> Coraopolis, PA 15108</h3> 
                <h2>(412) 264-1400</h2>
                <h5>Tu-S 7am-2pm | Su 8am-2pm</h5>
                
                <a href="https://www.facebook.com/tootsiespghdiner/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>

                <a href="https://www.instagram.com"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                
                <a href="https://twitter.com/TootsiesDiner"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                
                <a href="http://www.yelp.com/biz/tootsies-diner-coraopolis"><i class="fa fa-yelp fa-2x" aria-hidden="true"></i></a>

                <a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww%2Elinkedin%2Ecom%2FpostLogin%3Fsession_rikey%3DGAmFbUz6p2idCcOFTR6ww2tBdSmRU5KTFSTqyEc7AUBatyKuIo2UgJ9KPP--8GsBZDeUHImn9bTlTs49Qbht7zl8Pb1tY7_U2NE%26l%3Dhttps%253A%252F%252Fwww%252Elinkedin%252Ecom%252FshareArticle%253Fmini%253Dtrue%2526url%253Dhttp%25253A%25252F%25252Fwww%25252Etootsiespghdiner%25252Ecom%25252F%26id%3D0%26b%3Dea7d8e0e-32ba-415b-8efc-96f31cd57e12%26h%3DPeEK%26m%3DGET"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
            </section>
        </header> 
        <!--End Header-->
        
        <!--Begin Nav-->
        <nav>
            <a href="#" id="menu-icon"><span>&#8801;</span></a>
            
            <ul>
                <li><a href="Homemade-Meatballs-Pancakes-and-Waffles-Coraopolis-PA.php">MENU</a></li>
                <li><a href="Diner-Location-Coraopolis-PA.php">LOCATION</a></li>
                <li><a href="catering.php">CATERING</a></li>
                <li><a href="Diner-Gallery-Coraopolis-PA.php">GALLERY</a></li>
                <li><a href="Diner-Contact-Coraopolis-PA.php">CONTACT</a></li>
            </ul>
        </nav> 
        <!--End Nav-->