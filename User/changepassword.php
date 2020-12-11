<?php
session_start();
include("header.php");
if(isset($_SESSION['email']))
{
?>
<!DOCTYPE html>
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
<script src="js/custom.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
 <link rel="stylesheet" href="css/reg.css">
<!-- //web font -->
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Change Password</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="changepasswordprocess.php" method="post">
                    <input class="text" type="password" name="oldpassword" placeholder="Current Password" />
                    <input class="text email" type="password" name="newpassword" placeholder="New Password" />
                    <input class="text" type="password" name="compassword" placeholder="Confirm Password" />
                    <div class="wthree-text">
						<div class="clear"></div>
					</div>
					<input type="submit" value="Update" name="submit" />
                </form>
                <p><a href="forgetpassword.php">Forget Password</a></p>
			</div>
		</div>
		<!-- copyright -->
		<?php include_once("footer.php"); ?>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
<?php
}
else
{
	header('location:login.php');
}
?>
<?php
include_once("footer.php");
?>	