<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$id = $_POST['hh_id'];
$disaster = mysqli_real_escape_string($conn, $_POST['disaster']);
$report = mysqli_real_escape_string($conn, $_POST['report']);
$location = mysqli_real_escape_string($conn, $_POST['location']);


$sql = " INSERT INTO tbldmanage (id_household, disaster, reports, location) VALUES ('$id', '$disaster', '$report', '$location')";
$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY ADDED";
  echo $msg;
} else {

  $msg = "FAILED TO ADD";
  echo $msg;
}
