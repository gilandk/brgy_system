<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

$msg = '';

$sql = " UPDATE tblcommunity SET archive='0', archiveDate='NULL' WHERE id_comm='$_GET[id]' ";
$result = $conn->query($sql);

if ($result === TRUE) {

    header("Location: archive-residents.php");
    
} else {

    $msg = "FAILED TO UNARCHIVE";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='archive-residents.php';
    </script>";
}
