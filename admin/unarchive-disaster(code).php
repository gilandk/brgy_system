<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

$msg = '';

$sql = " UPDATE tbldmanage SET archive='0' WHERE id_disaster='$_GET[id]' ";
$result = $conn->query($sql);

if ($result === TRUE) {

    header("Location: archive-disasters.php");

} else {

    $msg = "FAILED ADDING TO ARCHIVE";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='archive-disasters.php';
    </script>";
}
