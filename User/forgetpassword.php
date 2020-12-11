<?php
include_once("database.php");
include_once("header.php");
?>
<html>
<head>
</head>
<body>
<center>
<h1>Email Address</h1>
<form method="post" action="forgetpasswordprocess.php">
<br>
<input class="text email" type="email" name="email" placeholder="Enter Email Address" required/>
    <input type="submit" value="Submit" name="submit" />
</form>
</center>
</body>
<html>
<?php
include_once("footer.php");
?>