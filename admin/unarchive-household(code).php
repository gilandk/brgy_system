<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

$msg = '';

$sql = " UPDATE tblhousehold SET archive='0', archiveDate='NULL' WHERE id_household='$_GET[id]' ";
$result = $conn->query($sql);

if ($result === TRUE) {

    header("Location: archive-households.php");
    
} else {

    $msg = "FAILED TO UNARCHIVE";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='archive-households.php';
    </script>";
}
