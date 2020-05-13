<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

$msg = '';

$sql = " UPDATE tblhousehold SET archive='1' WHERE id_household='$_GET[id]' ";
$result = $conn->query($sql);

if ($result === TRUE) {

    header("Location: households.php");

} else {

    $msg = "FAILED ADDING TO ARCHIVE";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='households.php';
    </script>";
}
