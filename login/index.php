<?php
session_start();
$message="hello";
if(count($_POST)>0) {
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM user_data WHERE (userid='" . $_POST["userid_or_email"] . "' or email='" . $_POST["userid_or_email"] . "') and password = '". $_POST["password"]."'");
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["userid"] = $row[userid];


} else {
$message = "Invalid Userid or email or Password!";
}

}
if(isset($_SESSION["userid"])) {
echo "Success";
}

?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login</h3>
Username or Email:<br>
<input type="text" name="userid_or_email">
<br>
Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>
