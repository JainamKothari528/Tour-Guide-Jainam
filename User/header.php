<?php 
include_once("database.php");
include_once("header.php");
session_start();
?>
<!DOCTYPE html>
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
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header" style="background-color:#1673e3">
            <?php
               if(isset($_SESSION['email']))
               {
                  $id=$_SESSION['email'];

                  $query=$con->prepare("SELECT R_mobileno FROM Registration WHERE R_emailid='".$id."'");
                  $query->execute();
                  $result=$query->get_result();
	               $row=$result->fetch_assoc();
            ?>
            <div class="header_white_section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="header_information">
                           <ul>
                              <li><img src="../Image/2.png" alt="#"/><?php echo $row['R_mobileno']; ?></li>
                              <li><img src="../Image/3.png" alt="#"/><?php echo $id;?></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="../Image/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li><a href="index.php">Home</a></li>
                                 <li><a href="guidewisesearch.php">Tour Guides</a> </li>
                                 <li><a href="">Travel</a>
                                    <ul class="dropdown">
                                       <li><a href="tracking.php">Tracking Place</a></li>
                                       <li><a href="mountain.php">Mountain Tour Place</a></li>
                                       <li><a href="summerrest.php">Summer Rest Tour Place</a></li>
                                       <li><a href="historical.php">Historical Place</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="placewise.php">Places</a></li>
                                 <li><a href="hotel.php">Hotel</a></li>
                                 <li><a href="contact.php">Contact Us</a></li>
                                 <li><a href="feedback.php">Feedback</a></li>
                                 <li><a href="">Profile</a>
                                    <ul class="dropdown">
                                       <li><a href="viewprofile.php">View Profile</a></li>
                                       <li><a href="changepassword.php">Change Password</a></li>
                                       <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               }
               else
               {
            ?>
            <div class="header_white_section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="header_information">
                           <ul>
                              <li><input type="button" value="Login" onclick="document.location.href='login.php'"></li>
                              <li><input type="button" value="Register" onclick="document.location.href='reg.php'"/></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="../Image/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li><a href="index.php">Home</a></li>
                                 <li><a href="contact.php">Contact Us</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               }
            ?>
         </div>
         <!-- end header inner -->
      </header>
    </body>
</html>