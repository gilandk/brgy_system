<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg = '';

$id = mysqli_real_escape_string($conn, $_POST['id_index']);
$header = mysqli_real_escape_string($conn, $_POST['header']);
$content = mysqli_real_escape_string($conn, $_POST['content']);


$sql = "UPDATE tbl_index SET header='$header', content='$content' WHERE id_index='$id'";
$result = $conn->query($sql);

if ($result === TRUE) {

  $msg = "SUCCESSFULLY UPDATED";
  echo $msg;
} else {

  $msg = "FAILED TO UPDATE";
  echo $msg;
}
