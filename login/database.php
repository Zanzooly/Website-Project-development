<?php
$servername='localhost';
$username='ZS';
$password='Website1999!';
$dbname = "testing";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){

 die('Could not Connect My Sql:' .mysql_error());
}
?>
