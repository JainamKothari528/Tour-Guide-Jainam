<?php
session_start();
include_once("database.php");
include_once("header.php");
?>
<html>
<head>
<title>Tours Guide</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<script src="js/reg.js">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="css/reg.css">
<!-- //web font -->
</head>
<body>
<div class="main-w3layouts wrapper">
	<h1>Feedback Form</h1>
	<div class="main-agileinfo">
		<div class="agileits-top">
			<form action="" method="post">
            <input class="text" type="text" name="Username" placeholder=" Enter Username" required />
            <input class="text email" type="email" name="email" placeholder="Enter Email Id" required />
            <textarea class="text" style="height:80px;width:445px;" name="des" required></textarea>
            <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
</div>
<?php
session_start();
include_once("database.php");
if(isset($_POST['submit']))
{
     $arg=$con->prepare("call procedure4(?,?,?)");
     $arg->bind_param("sss",$name,$email,$des);
     $name=$_POST['Username'];
     $email=$_POST['email'];
     $des=$_POST['des'];
     $arg->execute();
     //echo "<script>alert('Data Inserted Successfully')</script>";
     header('location:index.php');
}
?>
</body>
</html>
?>
<?php
include_once("footer.php");
?>