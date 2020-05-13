<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$id_resident= $_POST['id_resident'];
$appointment = mysqli_real_escape_string($conn, $_POST['appointment']);
$details = mysqli_real_escape_string($conn, $_POST['details']);
$dateSet = mysqli_real_escape_string($conn, $_POST['dateSet']);

$sql = "INSERT INTO tblhealth (id_resident, appointment, details, dateSet) VALUES ('$id_resident', '$appointment', '$details', '$dateSet')";
$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY ADDED";
  echo $msg;
} else {

  $msg = "FAILED TO ADD";
  echo $msg;
}
