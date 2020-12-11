<?php
include_once("header.php");
include_once("database.php");
?>
<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
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
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <!--/. NAV TOP  -->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner"> 
                <div class="row">
                    <div class="col-md-12">
                    <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                View Guide
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Guide Id</th>
                                                <th>Guide Name</th>                                                
                                                <th>Guide Mobile No</th>
                                                <th>Guide Email Id</th>
                                                <th>Guide Experience</th>
                                                <th>Guide Language</th>
                                                <th>Guide State Id</th>
                                                <th>Guide City Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql=$con->prepare("SELECT * From Guide");
                                                $sql->execute();
                                                $rs=$sql->get_result();
                                                while($row=$rs->fetch_assoc())
                                                {
                                            ?>
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $row['guide_id']; ?></td>
                                                        <td><?php echo $row['guide_name']; ?></td>
                                                        <td><?php echo $row['guide_mobile_no']; ?></td>
                                                        <td><?php echo $row['guide_email_id']; ?></td>
                                                        <td><?php echo $row['guide_experience']; ?></td>
                                                        <td><?php echo $row['guide_language']; ?></td>
                                                        <td><?php echo $row['s_id']; ?></td>
                                                        <td><?php echo $row['c_id']; ?></td>
                                                    </tr>
                                            <?php
                                                }
                                            ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <!--End Advanced Tables -->
                    </div>
                </div>
                <!-- /. ROW  -->
                <!-- /. ROW  -->
                <!-- /. ROW  -->
                <!-- /. ROW  -->
                <?php include_once("footer.php"); ?>
            </div>
        </div>
             <!-- /. PAGE INNER  -->
    </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>