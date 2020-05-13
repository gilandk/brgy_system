<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$id = $_SESSION['id_admin'];
$name = mysqli_real_escape_string($conn, $_POST['admin_name']);
$username = mysqli_real_escape_string($conn, $_POST['admin_user']);
$position = mysqli_real_escape_string($conn, $_POST['position']);


$sql = " UPDATE tbladmin SET admin_name='$name', admin_user='$username', position='$position' WHERE admin_id='$id'";

$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY UPDATED";
  echo $msg;
} else {

  $msg = "FAILED TO UPDATE";
  echo $msg;
}
