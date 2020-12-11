<?php
include_once("header.php");
include_once("database.php");
?>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Tour Guide</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- Morris Chart Js -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="page-wrapper">
        <div id="page-inner"> 
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card-title">
                                <div class="title">Add Place</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="addplaceprocess.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" name="address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">State</label><br>
                                    <select id="statename" style="width:1237px;" class="text state" type="text" name="statename">
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
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City</label><br>
                                    <select id="city" style="width:1237px;" class="text city" type="text" name="city">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control" id="exampleInputEmail1" placeholder="Enter Description" name="des">
                                    </textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this)">
                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0])
                                            {
                                                var reader = new FileReader();
                                                reader.onload = function (e)
                                                {
                                                    $('#blah').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                    </script>
                                    <img id="blah" style="height:200px;width:300px;" src="#" alt="your image" name="image" />
                                </div>
                                <br>
                                <div style="text-align:center">  
                                    <input type="submit" style="height:40px;width:200px;" value="Add" name="submit">  
                                </div> 
                            </form>
                        </div>
                    </div>
                    <?php
                        include_once("footer.php");
                    ?>
                </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
</div>
</body>
</html>
