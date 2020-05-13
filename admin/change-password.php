<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$id = $_SESSION['id_admin'];
$password = mysqli_real_escape_string($conn, $_POST['password']);


$sql = " UPDATE tbladmin SET admin_pass='$password' WHERE admin_id='$id'";

$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY UPDATED";
  echo $msg;
} else {

  $msg = "FAILED TO UPDATE";
  echo $msg;
}
