<?php
session_start();
include_once("database.php");
if(isset($_POST['submit']))
{
    $state=$_POST['statename'];
    $city=$_POST['cityname'];
    $sql=$con->prepare("SELECT * FROM City WHERE s_id=$state");
    $sql->execute();
    $rs=$sql->get_result();
    while($row=$rs->fetch_assoc())
    {
        if(strcasecmp($row['c_name']!=$city))
        {
            $arg=$con->prepare("INSERT INTO City(c_name,s_id) VALUES (?,?)");
            $arg->bind_param("si",$city,$state);
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
                    alert('City Already Exist');
                    window.location.href='addcity.php';
                </script>";
            exit();
        }
    }
}
?>