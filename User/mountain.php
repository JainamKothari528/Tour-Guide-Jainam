<?php
session_start();
include_once("header.php");
include_once("database.php");
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
?>
<html>
<head>
<link rel="stylesheet" href="css/mountain.css">
</head>
<body>
<center>
<h1>Search Mountain Place</h1></br>
<form method="post" action="mountainprocess.php">
    <?php
	    if($_GET["st"] != "")
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
    <input type="submit" value="Search" name="submit" />
</form>
</center>
<?php
session_start();
include_once("database.php");

if(isset($_GET["st"]))
{
	$query=$con->prepare("select * from Mountains where s_id=".$_GET['st']);
	$query->execute();
	$result=$query->get_result();
	while($row=$result->fetch_assoc())
	{
?>
    <div class="divimg">
	<img style="width:90%;height:300px" src="../Image/Mountain/<?php echo $row['mountain_image']; ?>">
    </img>
	</div>
	<div class="divtxt">
<?php
        echo "Name = ".$row["mountain_name"]."<br>";
        echo "Address = ".$row["mountain_add"]."<br>";
        echo "There are many Tour Guides in this State. Call <a href='guidewisesearch.php?s_id=$id'>Tour Guide</a> for this State.";
?>
    </div>
<?php
    }
}
?>  
</body>
</html>
<?php
include_once("footer.php");
?>