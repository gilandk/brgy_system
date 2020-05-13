<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$mname = mysqli_real_escape_string($conn, $_POST['mname']);
$alias = mysqli_real_escape_string($conn, $_POST['alias']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
$birthplace = mysqli_real_escape_string($conn, $_POST['birthplace']);
$housenum = mysqli_real_escape_string($conn, $_POST['housenum']);
$street = mysqli_real_escape_string($conn, $_POST['street']);
$barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
$municipality = mysqli_real_escape_string($conn, $_POST['municipality']);
$province = mysqli_real_escape_string($conn, $_POST['province']);
$civil_status = mysqli_real_escape_string($conn, $_POST['civil_status']);
$voter_status = mysqli_real_escape_string($conn, $_POST['voter_status']);

$sql = " INSERT INTO tblcommunity (lname, fname, mname, alias, email, contact, gender, birthday, birthplace, housenum, street, barangay, municipality, province, civil_status, voter_status) VALUES ('$lname', '$fname', '$mname', '$alias', '$email', '$contact', '$gender', '$birthday', '$birthplace', '$housenum', '$street', '$barangay', '$municipality', '$province', '$civil_status', '$voter_status')";

$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY ADDED";
  echo $msg;

} else {

  $msg = "FAILED TO ADD";
  echo $msg;
}
