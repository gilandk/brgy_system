<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$famname = mysqli_real_escape_string($conn, $_POST['famname']);
$housenum = mysqli_real_escape_string($conn, $_POST['housenum']);
$street = mysqli_real_escape_string($conn, $_POST['street']);
$barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
$municipality = mysqli_real_escape_string($conn, $_POST['municipality']);
$province = mysqli_real_escape_string($conn, $_POST['province']);


$sql = " INSERT INTO tblhousehold (famname, housenum, street, barangay, municipality, province) VALUES ('$famname', '$housenum', '$street', '$barangay', '$municipality', '$province')";
$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY ADDED";
  echo $msg;
} else {

  $msg = "FAILED TO ADD";
  echo $msg;
}
