<?php
session_start();
include_once("database.php");
if(isset($_POST['submit']))
{
    $state=$_POST['statename'];
    $sql=$con->prepare("SELECT * FROM State");
    $sql->execute();
    $result=$sql->get_result();
    while($row=$result->fetch_assoc())
    {
        if(strcasecmp($row["s_name"]!=$state))
        {
            $arg=$con->prepare("call procedure6(?)");
            $arg->bind_param("s",$state);
            $arg->execute();
            echo "<script>
                    alert('Data Inserted Successfully');
                    window.location.href='addcity.php';
                </script>";
            exit();
        }
        else
        {
            echo "<script>
                    alert('Already Exist');
                    window.location.href='addcity.php';
                </script>";
            exit();
        }
    }

}
?>