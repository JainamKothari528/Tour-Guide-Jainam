<?php
session_start();
include_once('database.php');
    if(isset($_POST['submit']))
    {
        //echo "hiii";
        $a=$_SESSION['email'];
        $query=$con->prepare("SELECT R_mobileno FROM Registration WHERE R_emailid!='".$_SESSION['email']."'");
        $query->execute();
        $res=$query->get_result();
        while($row=$res->fetch_assoc())
        {
            $name=$_POST['Username'];
            $mob=$_POST['mobile'];
            $sid=$_POST['statename'];
            $cid=$_POST['city'];
            $id=$_SESSION['email'];
            $query=$con->prepare("UPDATE Registration SET R_name='".$name."',R_mobileno=".$mob.",s_id=".$sid.",c_id=".$cid." WHERE R_emailid='".$id."'");
            $query->execute();
            echo "<script>
                    alert('Update Successfully');
                    window.location.href='index.php';
                </script>";
        }
    }
?>