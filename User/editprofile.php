<?php
session_start();
include_once("database.php");
include_once("header.php");
if(isset($_SESSION['email']))
{
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
		<h1>Edit Profile</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="editprofileprocess.php" method="post">
                <?php
                    include_once("database.php");
                    session_start();
                    if(isset($_SESSION['email']))
                    {   
                        $a=$_SESSION['email'];
                        $query=$con->prepare("SELECT * FROM Registration WHERE R_emailid='$a'");
                        $query->execute();
                        $res=$query->get_result();
                        while($row=$res->fetch_assoc())
                        {
                ?>
                            <input class="text" type="text" name="Username" placeholder="Username" value="<?php echo $row['R_name']; ?>" required />
                            <input class="number" type="number" name="mobile" placeholder="Mobile Number" value="<?php echo $row['R_mobileno']; ?>"/>
                            </input>
                            <select id="statename" style="width:445px;" class="text state" type="text" name="statename" required>
                            <?php
                                include_once("database.php");
                                session_start();
                                $qry="SELECT * FROM State";				
                                $rs=mysqli_query($con,$qry);
                                if(mysqli_num_rows($rs)>0)
                                {
                                    echo "<option selected disabled>Select State</option>";
                                    while($rw=mysqli_fetch_assoc($rs))
                                    {	
                            ?>
                                            <option value="<?php echo $rw['s_id']; ?>"
                            <?php 
                                            if($row["s_id"]==$rw["s_id"])
                                            {   
                                                echo "selected";
                                            }
                                            
                            ?>
                            >
                                            <?php echo $rw['s_name']; ?>   
                                            </option>
                                        
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
                            <?php
                                include_once("database.php");
                                session_start();
                                $qry="SELECT * FROM City WHERE s_id=$row[s_id]";				
                                $rs=mysqli_query($con,$qry);
                                if(mysqli_num_rows($rs)>0)
                                {
                                    echo "<option selected disabled>Select City</option>";
                                    while($rw=mysqli_fetch_assoc($rs))
                                    {	
                            ?>
                                            <option value="<?php echo $rw['c_id']; ?>"
                            <?php 
                                            if($row["c_id"]==$rw["c_id"])
                                            {   
                                                echo "selected";
                                            }
                                            
                            ?>
                            >
                                            <?php echo $rw['c_name']; ?>   
                                            </option>
                                        
                            <?php
                                    }
                                }
                            ?>
                            </select>
                            <input class="text email" type="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" readonly/>
                            <input type="submit" value="Update" name="submit">
                <?php
                        }
                    }
                ?>
				</form>
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
include_once("footer.php")
?>