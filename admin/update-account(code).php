<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

if (isset($POST)) {


  $msg = '';

  $id = mysqli_real_escape_string($conn, $_POST['admin_id']);
  $name = mysqli_real_escape_string($conn, $_POST['admin_name']);
  $username = mysqli_real_escape_string($conn, $_POST['admin_user']);
  $position = mysqli_real_escape_string($conn, $_POST['position']);
  $secretary = mysqli_real_escape_string($conn, $_POST['secretary']);
  $blotter = mysqli_real_escape_string($conn, $_POST['blotter']);
  $health = mysqli_real_escape_string($conn, $_POST['health']);
  $announcement = mysqli_real_escape_string($conn, $_POST['announcement']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);


  $sql = "UPDATE tbladmin SET admin_name='$name', admin_user='$username', position='$position', secretary='$secretary', blotter='$blotter', health='$health', announcement='$announcement', admin_pass='$password' WHERE admin_id='$id'";

  $result = $conn->query($sql);

  if ($result === TRUE) {

    $msg = "SUCCESSFULLY UPDATED";
    echo $msg;
  } else {

    $msg = "FAILED TO UPDATE";
    echo $msg;
  }
}
