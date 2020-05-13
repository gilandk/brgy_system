<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$msg='';
$id = $_GET['id'];

$sql = "UPDATE tbladmin SET status='1' WHERE admin_id='$id'";
$result = $conn->query($sql);

if($result > 0){

    header('location: accounts.php');
    exit();
}
else{
    $msg = "FAILED";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='accounts.php';
    </script>";
}
?>
