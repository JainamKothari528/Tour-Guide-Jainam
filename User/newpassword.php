<?php
include_once("database.php");
include_once("header.php");
?>
<html>
<head>
</head>
<body>
<center>
<h1>New Password</h1>
<form method="post" action="newpasswordprocess.php">
<br>
<input class="text" type="password" name="password" placeholder="Password" required /><br><br>
<input class="text" type="password" name="confirm_password" placeholder="Confirm password" required /><br><br>
    <input type="submit" value="Submit" name="submit" />
</form>
</center>
</body>
<html>
<?php
include_once("footer.php")
?>