<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
</head>
<body>
<h2>City name</h2>
<form method="post" action="">
<input type="text" id="first_name" name="first_name" value="<?php echo $DB_ROW["first_name"]; ?>">
<input type="text" id="last_name" name="last_name" value="<?php echo $DB_ROW["last_name"]; ?>">
<input type="text" id="city" name="city" value="<?php echo $DB_ROW["city_name"]; ?>">
</form>
</body>
</html>
