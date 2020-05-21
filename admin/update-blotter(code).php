<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

  $msg = '';

  $id = mysqli_real_escape_string($conn, $_POST['id_blotter']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $details = mysqli_real_escape_string($conn, $_POST['details']);
  $location = mysqli_real_escape_string($conn, $_POST['location']);


  $sql = "UPDATE tblblotter SET name='$name', contact='$contact', details='$details', location='$location' WHERE id_blotter='$id'";
  $result = $conn->query($sql);

  if ($result === TRUE) {

    $msg = "SUCCESSFULLY UPDATED";
    echo $msg;
  } else {

    $msg = "FAILED TO UPDATE";
    echo $msg;
  }
