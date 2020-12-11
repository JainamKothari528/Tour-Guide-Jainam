<?php
// session_start();
include_once("database.php");
if(isset($_POST['submit']))
{
    $target_dir = "../Image/Hotel/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"]))
    {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false)
        {   
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
        else
        {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) 
    {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
    {
        echo "Sorry, only JPG, JPEG & PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) 
    {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } 
    else
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } 
        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $sql=$con->prepare("INSERT INTO Hotels(hotel_image,hotel_name,hotel_address,hotel_email_id,hotel_mobile_no,hotel_category,c_id,s_id) VALUES (?,?,?,?,?,?,?,?)");
    $sql->bind_param("ssssisii",$image,$name,$address,$email,$mobile,$category,$cid,$sid);
    $image=$_FILES["fileToUpload"]["name"];
    $name=$_POST["name"];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $mobile=$_POST['mobno'];
    $category=$_POST['category'];
    $sid=$_POST['statename'];
    $cid=$_POST['city'];
    $sql->execute();
    echo "<script>
            alert('Data Inserted Successfully');
            window.location.href = 'addhotel.php';
        </script>";
}
?>