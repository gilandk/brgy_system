<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$id = mysqli_real_escape_string($conn, $_POST['id_comm']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$mname = mysqli_real_escape_string($conn, $_POST['mname']);
$alias = mysqli_real_escape_string($conn, $_POST['alias']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$birthplace = mysqli_real_escape_string($conn, $_POST['birthplace']);
$housenum = mysqli_real_escape_string($conn, $_POST['housenum']);
$street = mysqli_real_escape_string($conn, $_POST['street']);
$barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
$municipality = mysqli_real_escape_string($conn, $_POST['municipality']);
$province = mysqli_real_escape_string($conn, $_POST['province']);
$civil_status = mysqli_real_escape_string($conn, $_POST['civil_status']);
$voter_status = mysqli_real_escape_string($conn, $_POST['voter_status']);

$sql = " UPDATE tblcommunity SET lname='$lname', fname='$fname', mname='$mname', alias='$alias', email='$email', contact='$contact', gender='$gender', birthday='$birthday', age='$age', birthplace='$birthplace',
          housenum='$housenum', street='$street', barangay='$barangay', municipality='$municipality', province='$province', civil_status='$civil_status', voter_status='$voter_status', archiveDate=archiveDate WHERE id_comm='$id'";

$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY UPDATED";
  echo $msg;
  
} else {

  $msg = "FAILED TO UPDATE";
  echo $msg;
}
