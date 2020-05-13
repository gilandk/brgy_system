<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

if (isset($POST)) {

    $msg = '';

    $name = mysqli_real_escape_string($conn, $_POST['admin_name']);
    $username = mysqli_real_escape_string($conn, $_POST['admin_user']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $secretary = mysqli_real_escape_string($conn, $_POST['secretary']);
    $blotter = mysqli_real_escape_string($conn, $_POST['blotter']);
    $health = mysqli_real_escape_string($conn, $_POST['health']);
    $announcement = mysqli_real_escape_string($conn, $_POST['announcement']);


    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO tbladmin (admin_name, admin_user, position, all_priv, secretary, blotter, health, announcement, admin_pass, status) VALUES ('$name', '$username', '$position', '0', '$secretary', '$blotter', '$health', '$announcement', '$password', '0')";
    $result = $conn->query($sql);

    if ($result === TRUE) {

        $msg = "SUCCESSFULLY ADDED";
        echo $msg;
    } else {

        $msg = "FAILED TO ADD";
        echo $msg;
    }
}
