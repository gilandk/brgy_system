<?php

//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("config.php");

if (isset($_POST)) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $complaint_for = mysqli_real_escape_string($conn, $_POST['complaint_for']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    $sql = "INSERT INTO tblblotter (name, complaint_for, contact, details, location) VALUES ('$name', '$complaint_for', '$contact', '$details', '$location')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        $msg = "Successfully Sent!";
        echo "<script type='text/javascript'>
                alert('$msg');
                window.location.href='index.php';
                </script>";
    } else {
        $msg = "Failed!";
        echo "<script type='text/javascript'>
                alert('$msg');
                window.location.href='index.php';
                </script>";
    }
}
