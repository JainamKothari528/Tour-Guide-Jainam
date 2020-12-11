<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include_once('database.php');
include_once('header.php');
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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="css/reg.css">
<!-- //web font -->


</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Registration Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="registrationprocess.php" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required />
					<input class="number" type="number" name="mobile" placeholder="Mobile Number" required />
					<select id="statename" style="width:445px;" class="text state" type="text" name="statename" required>
					<?php
						$qry="SELECT * FROM State";
						$rs=mysqli_query($con,$qry);

						if(mysqli_num_rows($rs)>0){
							echo "<option selected disabled>Select State</option>";
							while($row=mysqli_fetch_assoc($rs)){
					?>
								<option value="<?php echo $row['s_id'];?>">
								<?php echo $row['s_name'];?></option>
					<?php
							}
						}
					?>
					</select>
					<script>
					$('#statename').on('change', function() {
						var sid=$("#statename").val();
						//alert(sid);
						$.ajax({url: "city.php?sid="+sid, method:"GET", success: function(result){
    						$("#city").html(result);
	  	    			}});
					});
					</script>
					<select id="city" style="width:445px;" class="text city" type="text" name="city" required>
					</select>
					
					<input class="text email" type="email" name="email" placeholder="Email" required/>
					<input class="text" type="password" name="password" placeholder="Password" required/>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Don't have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
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
<?php include_once('footer.php'); ?>