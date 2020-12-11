<?php
session_start();
include_once("database.php");
include_once("header.php");
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
<div class="main-w3layouts wrapper">
		<h3>Search Historical Place</h3><br>
		<div class="main-agileinfo">
			<div class="agileits-top">
                <form action="historicalprocess.php" method="post">
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
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>
</div>
</center>
            <?php
                session_start();
                $id=$_POST['statename'];
                if(isset($_GET["st"]))
                {
                    
                    $qe=$con->prepare("SELECT * FROM Historical WHERE s_id=".$_GET['st']);
                    //$sl=mysqli_query($con,$qu);
                    $qe->execute();
                    $rs=$qe->get_result();
                    while($rw=$rs->fetch_assoc())
                    {
            ?>
                    <div class="divtxt">
            <?php
                        echo "Name = ".$rw["historical_name"]."<br>";
                        echo "Description = ".$rw["historical_des"]."<br>";
                        echo "Address = ".$rw["historical_address"]."<br>";
                        echo "There are many Tour Guides in this State. Call <a href='guidewisesearch.php?st='$id'>Tour Guide</a> for this State.";
            ?>
                    </div>
                    <div class="divimg">
                    <img style="width:90%;height:300px" src="../Image/Historical/<?php echo $rw['historical_image']; ?>">
                    </img>
                    </div>
            <?php
                    }
                }
            ?>
</body>
</html>
<?php
include("footer.php");
?>
