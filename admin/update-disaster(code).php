<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

$msg = '';

$id_dm = mysqli_real_escape_string($conn, $_POST['id_dm']);
$id_hh = mysqli_real_escape_string($conn, $_POST['hh_id']);
$disaster = mysqli_real_escape_string($conn, $_POST['disaster']);
$report = mysqli_real_escape_string($conn, $_POST['report']);
$location = mysqli_real_escape_string($conn, $_POST['location']);

$sql = "UPDATE tbldmanage SET id_household='$id_hh', disaster='$disaster', reports='$report', location='$location' WHERE id_disaster='$id_dm'";

$result = $conn->query($sql);

if ($result === TRUE) {

    $msg = "SUCCESSFULLY UPDATED";
    echo $msg;
} else {

    $msg = "FAILED TO UPDATE";
    echo $msg;
}
