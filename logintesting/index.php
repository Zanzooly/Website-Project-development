<?php
$servername = "localhost";
$username = "root";
$password = "Website1999!";
$dbname = "testing";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$json = strval($_POST['hiddenVars']);
$obj = json_decode($json);

$mode = (isset($_POST['mode']) ? $_POST['mode'] : "none");

$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);

$sql = "INSERT INTO phone_records (email, password) 
        VALUES ('$email', '$password')";

if ($conn->query($sql) == TRUE) {
	$last_id = $conn->insert_id;
	$sq12 = "INSERT INTO records (email, password, record_id)
		VALUES ('$email', '$password', '$last_id')";
	if ($conn->query($sql2) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
	$conn->close();
}
