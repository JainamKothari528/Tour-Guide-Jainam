<?php

include_once('database.php');
$s_id=$_GET['sid'];
//$s_id=1;

$sql=$con->query("call procedure2($s_id)");
//echo $sql;
//$sql->bind_param("i",$s_id);
//$res=$sql->execute();
//$res=mysqli_query($con,$sql);
//if(mysqli_num_rows($res)>0)
{
    echo "<option disabled selected>Select City</option>";
    while($row=$sql->fetch_assoc())
    {
       // echo $row['c_id'];
       echo "<option value='".$row['c_id']."'>".$row['c_name']."</option>";
    }
}

?>