<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg='';
$id = $_GET['id'];

$sql = "UPDATE tblhealth SET archive='1' WHERE id_health='$id'";
$result = $conn->query($sql);

if($result > 0){

    header('location: health-infos.php');
    exit();
}
else{
    $msg = "FAILED";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='health-infos.php';
    </script>";
}
