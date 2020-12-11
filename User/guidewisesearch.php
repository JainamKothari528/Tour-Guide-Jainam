<?php
session_start();
include_once('database.php');
include_once('header.php');
if(isset($_SESSION['email']))
{
?>
<html>
<head>
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
<link rel="stylesheet" href="css/mountain.css">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!--<link rel="stylesheet" href="css/reg.css">-->
<!-- //web font -->
    </head>
    <body>
		<center>
		<div class="main-w3layouts wrapper">
			<h3>Search Guide</h3>
			<div class="main-agileinfo">
				<div class="agileits-top">
					<form action="guideprocess.php" method="post">
						<?php
						if($_GET["st"] != "" && $_GET["exp"] != "")
						{

						}
						?>
						<select id="statename" style="width:200px;" class="text state" type="text" name="statename" required>

					<?php
						include_once("database.php");
						session_start();
						
						$qry="SELECT * FROM State";				
						
						$rs=mysqli_query($con,$qry);

						if(mysqli_num_rows($rs)>0)
						{
							echo "<option selected disabled>Select State</option>";
							while($row=mysqli_fetch_assoc($rs))
							{	
								if($_GET["st"]==$row["s_id"])
								{
					?>
							<option value="<?php echo $row['s_id']; ?>" selected>
							<?php echo $row['s_name']; ?>
							</option>
					<?php
								}
								else
								{ 
					?>
							<option value="<?php echo $row['s_id']; ?>">
							<?php echo $row['s_name']; ?>
							</option>
					<?php
								}	
							}
						}
						?>
					</select>
				
					<!-- <script>
						$('#statename').on('change', function() {
							var sid=$("#statename").val();
							//alert(sid);
							$.ajax({url: "city.php?sid="+sid, method:"GET", success: function(result){
    							$("#city").html(result);
	  	    				}});
						});
					</script> -->
					
					<select id="exp" style="width:200px;" class="text experience" type="text" name="exp">
						<option selected disabled>Select Experience</option>
						<?php 
						 if($_GET["exp"]==1) {?>
						<option value="1" selected>lessthan 2 Year</option>
					<?php }
					else
					{ ?>
					<option value="1">lessthan 2 Year</option>	
					<?php } ?>
					<?php 
						 if($_GET["exp"]==2) {?>
						<option value="2" selected>2-5 Year</option>
					<?php }
					else
					{ ?>
					<option value="2">2-5 Year</option>	
					<?php } ?>
					<?php 
						 if($_GET["exp"]==3) {?>
						<option value="3" selected>5-10 Year</option>
					<?php }
					else
					{ ?>
					<option value="3">5-10 Year</option>	
					<?php } ?>
					<?php 
						 if($_GET["exp"]==4) {?>
						<option value="4" selected>10+ Year</option>
					<?php }
					else
					{ ?>
					<option value="4">10+ Year</option>	
					<?php } ?>
						<!-- <option value="2">2-5 Year</option>
						<option value="3">5-10 Year</option>
						<option value="4">10+ Year</option> -->
					</select>
            			<input type="submit" style="width:150px;" value="Search" name="submit" />
        			</form>
				</div>
			</div>
		</div>
	</center>

<!--City Wise Search Guide-->
<?php

if(isset($_GET["st"]))
{
	$query=$con->prepare("select * from Guide where s_id=".$_GET['st']);
	$query->execute();
	$result=$query->get_result();
	while($row=$result->fetch_assoc())
	{
		//echo $row["guide_name"];
	}	
}

//if(isset($_POST['submit']))
{	
	if($_GET['exp']==1)
	{
	    $query=$con->prepare("select * from Guide where s_id=".$_GET['st']." and guide_experience between 0 and 2");
		$query->execute();
		$result=$query->get_result();
		while($row=$result->fetch_assoc())
		{
?>
		<div class="divimg">
		<img style="width:90%;height:300px" src="../Image/Guide/<?php echo $row['guide_image']; ?>">
		</img>
		</div>
		<div class="divtxt">			
<?php
			echo "Name = ".$row["guide_name"]."<br>";
			echo "Mobile No = ".$row["guide_mobile_no"]."<br>";
			echo "Email Id = ".$row["guide_email_id"]."<br>";
			echo "Description = ".$row["guide_description"]."<br>";
			echo "Language = ".$row["guide_language"]."<br>";
			echo "Experiance = ".$row['guide_experience']."<br>";
?>
</div>
<?php
		}
	}
	else if($_GET['exp']==2)
	{
   		$query=$con->prepare("select * from Guide where s_id=".$_GET['st']." and guide_experience between 2 and 5 ");
  		$query->execute();
		$result=$query->get_result();
 		while($row=$result->fetch_assoc())
		{
?>
		<div class="divimg">
		<img style="width:90%;height:300px" src="../Image/Guide/<?php echo $row['guide_image']; ?>">
		</img>
		</div>
		<div class="divtxt">
<?php
			echo "Name = ".$row["guide_name"]."<br>";
			echo "Mobile No = ".$row["guide_mobile_no"]."<br>";
			echo "Email Id = ".$row["guide_email_id"]."<br>";
			echo "Description = ".$row["guide_description"]."<br>";
			echo "Language = ".$row["guide_language"]."<br>";
			echo "Experiance = ".$row['guide_experience']."<br>";
?>
</div>
<?php
		}
	}
	else if($_GET['exp']==3)
	{	
   		$query=$con->prepare("select * from Guide where s_id=".$_GET['st']." and guide_experience between 5 and 10");
   		$query->execute();
   		$result=$query->get_result();
		while($row=$result->fetch_assoc())
		{
?>
		<div class="divimg">
		<img style="width:90%;height:300px" src="../Image/Guide/<?php echo $row['guide_image']; ?>">
		</img>
		</div>
		<div class="divtxt">
<?php
			echo "Name = ".$row["guide_name"]."<br>";
			echo "Mobile No = ".$row["guide_mobile_no"]."<br>";
			echo "Email Id = ".$row["guide_email_id"]."<br>";
			echo "Description = ".$row["guide_description"]."<br>";
			echo "Language = ".$row["guide_language"]."<br>";
			echo "Experiance = ".$row['guide_experience']."<br>";
?>
		</div>
<?php
		}
	}
	else if($_GET['exp']==4)
	{
    	$query=$con->prepare("select * from Guide where s_id=".$_GET['st']." and guide_experience between 10 and 100");
    	$query->execute();
		$result=$query->get_result();
		while($row=$result->fetch_assoc())
		{
?>
		<div class="divimg">
		<img style="width:90%;height:300px" src="../Image/Guide/<?php echo $row['guide_image']; ?>">
		</img>
		</div>
		<div class="divtxt">
<?php
			echo "Name = ".$row["guide_name"]."<br>";
			echo "Mobile No = ".$row["guide_mobile_no"]."<br>";
			echo "Email Id = ".$row["guide_email_id"]."<br>";
			echo "Description = ".$row["guide_description"]."<br>";
			echo "Language = ".$row["guide_language"]."<br>";
			echo "Experiance = ".$row['guide_experience']."<br>";
?>
		</div>
<?php
		}
	}
	else
	{
		echo "";
	}
}
?>
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