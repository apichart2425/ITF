<?php 
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'war';


$conn = @mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Unable to connect");
mysqli_query($conn, "SET NAMES UTF8");
// echo "Great Work" . "<br>";

 ?>