<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "brgysystem";

$conn = mysqli_connect($server, $user, $pass, $db);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}
?>