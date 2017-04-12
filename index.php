<?php
session_start();
error_reporting(1);
date_default_timezone_set('UTC');

$title      = "SHIFT F.A.Q.";
$subTitle   = "Answers to common questions";
$baseUrl    = "https://faq.shiftnrg.org";
$author     = "ShiftNrg.org";

$baseDir          = "/var/www/html/faq.shiftnrg.org/";
$maintenance      = true;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title><?php echo $title; ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-touch-fullscreen" content="YES" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $title." - ".$subTitle; ?>">
    <meta name="author" content="<?php echo $author; ?>">    
    
    <!-- OmG! -->
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:url" content="<?php echo $baseUrl; ?>"/>
    <meta property="og:image" content="<?php echo $baseUrl; ?>/images/shift-logo-150x150.png"/>
    <meta property="og:site_name" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $subTitle; ?>" />

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicon/manifest.json">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff"> 
 
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"> 
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","theme":"dark-bottom"};
    </script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->
    
</head> 

<body>

    <?php
        if($maintenance == true){
            echo "<div align=\"center\"><h2>Maintenance mode</h2></div>";
            echo "</body></html>";
            exit;
        }
    ?> 

    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container">                     
            <a href="/">
                <img class="profile-image img-responsive pull-left" src="assets/images/shift-logo-150x150.png" alt="<?php echo $title; ?>" />
            </a>
            <div class="profile-content pull-left">
                <h1 class="name"><?php echo $title; ?></h1>
                <h2 class="desc"><?php echo $subTitle; ?></h2>   
                <ul class="social list-inline">
                    <li><a href="https://twitter.com/shiftnrg" target="_blank"><i class="fa fa-twitter"></i></a></li>                   
                    <li><a href="http://shiftnrg.ryver.com/" target="_blank"><i class="fa fa-slack"></i></a></li>               
                    <li class="last-item"><a href="https://www.facebook.com/ShiftNrg/" target="_blank"><i class="fa fa-facebook"></i></a></li>                 
                </ul> 
            </div><!--//profile-->           
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">

                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">F.A.Q.</h2>
                        <div class="content">
                            
                            <p>
                                <h4>How many times do I have to vote someone?</h4>
                            </p>
                            <p>
                                With the current code base, every delegate can vote: 
                                <ul type="disc">
                                    <li>101 times in total</li>
                                    <li>max. 33 votes per transaction</li>
                                    <li>give 1 vote per delegate</li>
                                </ul>
                            </p>
                            <!-- _________________________________________________ -->
                            <p>
                                <h4>I want to forge as well. What do I need to do?</h4>
                            </p>
                            <p>
                                To forge blocks (and therefore earn Shift) you have to run a Shift node (delegate).<br />
                                Learn how to set it up and become a delegate at one of these two websites:
                                <ul type="disc">
                                    <li><a href="https://www.shiftnrg.eu/" target="_blank">www.shiftnrg.eu</a></li>
                                    <li><a href="https://www.shiftnrg.nl/" target="_blank">www.shiftnrg.nl</a></li>
                                </ul>
                            </p>
                            <!-- _________________________________________________ -->
                            <p>
                                <h4>Second passphrase?</h4>
                            </p>
                            <p>
                                To add an extra security layer to your wallet, you can create a second passphrase.<br />
                                Log in to your wallet and click on the three dots in the top right of the page to open up the menu. Then click on "2nd passphrase".
                            </p>
                            <p>
                                After that you will see a popup like the one when you created your wallet. Save the second passphrase in a safe place and confirm it. The costs of a second passphrase are 5 SHIFT. 
                            </p>
                            <!-- _________________________________________________ -->
                            <p>
                                <h4>Who's on your team?</h4>
                            </p>
                            <p>
                                Go to <a href="https://www.shiftnrg.org/theteam/" target="_blank">www.shiftnrg.org/theteam</a> to see who's on the team.
                            </p>

                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->

            </div><!--//primary-->

            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                
                <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Amsterdam, NL</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="mailto:support@shiftnrg.org">support@shiftnrg.org</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="https://www.shiftnrg.org" target="_blank">https://www.shiftnrg.org</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <small class="copyright">Brought to you with <i class="fa fa-heart"></i> by <a href="https://www.shiftnrg.org/theteam/" target="_blank"><?php echo $author; ?></a></small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html> 