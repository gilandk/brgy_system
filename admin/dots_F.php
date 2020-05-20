<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg='';
$id = $_GET['id'];

$sql = "UPDATE tbldots SET status='Finished' WHERE id_dots='$id'";
$result = $conn->query($sql);

if($result > 0){

    header('location: dots.php');
    exit();
}
else{
    $msg = "FAILED";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='dots.php';
    </script>";
}
