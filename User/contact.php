<?php
include_once("header.php");
?>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Tours Guide</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
        <footer>
            <div id="contact" class="footer">
                <div class="container">
                    <div class="row pdn-top-30">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <ul class="location_icon">
                                <li> <a href="#"><img src="icon/facebook.png"></a></li>
                                <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                                <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                                <li> <a href="#"><img src="icon/instagram.png"></a></li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="Follow">
                                <h3>CONTACT US</h3>
                                <span>705 Silicon Tower<br>Near National Handloom<br>
                                Law Garden<br>
                                Ahmedabad, Gujarat<br>
                                <a href="tel:079 4005 8816">079 4005 8816</a></span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="Follow">
                                <h3>ADDITIONAL LINKS</h3>
                                <ul class="link">
                                <li> <a href="#">About us</a></li>
                                <li> <a href="#">Terms and conditions</a></li>
                                <li> <a href="#"> Privacy policy</a></li>
                                <li> <a href="#">News</a></li>
                                <li> <a href="#"> Contact us</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="Follow">
                                <h3> Contact</h3>
                                <div class="row">
                                    <form action="contactprocess.php" method="post">
                                        <input class="Newsletter" placeholder="Name" type="text" name="name" />
                                        <input class="Newsletter" placeholder="Email" type="text" name="email" />
                                        <input class="Newsletter" placeholder="Phone Number" type="number" name="mobno" />                        
                                        <textarea class="textarea" placeholder="comment" type="text" name="des"></textarea>
                                        <input type="submit" class="Subscribe" name="submit" value="Submit" />
                                    </form>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- Javascript files-->
        <script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- javascript --> 
        <script src="js/owl.carousel.js"></script>
        </script>
<!--Contact Process -->
    </body>
</html>
<?php
include_once("footer.php");
?>