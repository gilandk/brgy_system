<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

$msg = '';
$id = '1';
$brgyname = mysqli_real_escape_string($conn, $_POST['brgyname']);
$address = mysqli_real_escape_string($conn, $_POST['address']);


$sql = "UPDATE tblsystem SET brgyname='$brgyname', address='$address', logo=logo WHERE id_system='$id'";

$result = $conn->query($sql);
if ($result === TRUE) {

    $msg = "SUCCESSFULLY UPDATED";
    echo $msg;
    
  } else {
  
    $msg = "FAILED TO UPDATE";
    echo $msg;
  }
  