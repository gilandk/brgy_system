<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$id = mysqli_real_escape_string($conn, $_POST['id_household']);
$famname = mysqli_real_escape_string($conn, $_POST['famname']);
$housenum = mysqli_real_escape_string($conn, $_POST['housenum']);
$street = mysqli_real_escape_string($conn, $_POST['street']);
$barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
$municipality = mysqli_real_escape_string($conn, $_POST['municipality']);
$province = mysqli_real_escape_string($conn, $_POST['province']);


$sql = " UPDATE tblhousehold SET famname='$famname', housenum='$housenum', street='$street', barangay='$barangay', municipality='$municipality', province='$province', archiveDate=archiveDate WHERE id_household='$id'";

$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY UPDATED";
  echo $msg;
  
} else {

  $msg = "FAILED TO UPDATE";
  echo $msg;
}
