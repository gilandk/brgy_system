<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

$msg = '';

$id_h = mysqli_real_escape_string($conn, $_POST['id_health']);
$id_r = mysqli_real_escape_string($conn, $_POST['id_resident']);
$appointment = mysqli_real_escape_string($conn, $_POST['appointment']);
$details = mysqli_real_escape_string($conn, $_POST['details']);
$dateSet = mysqli_real_escape_string($conn, $_POST['dateSet']);

$sql = "UPDATE tblhealth SET id_resident='$id_r', appointment='$appointment', details='$details', dateSet='$dateSet' WHERE id_health='$id_h'";

$result = $conn->query($sql);

if ($result === TRUE) {

    $msg = "SUCCESSFULLY UPDATED";
    echo $msg;
} else {

    $msg = "FAILED TO UPDATE";
    echo $msg;
}
