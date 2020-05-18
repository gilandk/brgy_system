<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$id_dots= $_POST['id_dots'];
$id_patient= $_POST['id_patient'];
$medicine = mysqli_real_escape_string($conn, $_POST['medicine']);
$month_duration = mysqli_real_escape_string($conn, $_POST['month_duration']);
$daily_usage = mysqli_real_escape_string($conn, $_POST['daily_usage']);
$medicine_type = mysqli_real_escape_string($conn, $_POST['medicine_type']);
$diagnosis = mysqli_real_escape_string($conn, $_POST['diagnosis']);
$sched_return = mysqli_real_escape_string($conn, $_POST['sched_return']);

$sql = "UPDATE tbldots SET id_patient='$id_patient', medicine='$medicine', month_duration='$month_duration', daily_usage='$daily_usage', medicine_type='$medicine_type', diagnosis='$diagnosis', sched_return='$sched_return' WHERE id_dots='$id_dots'";
$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY ADDED";
  echo $msg;
} else {

  $msg = "FAILED TO ADD";
  echo $msg;
}
