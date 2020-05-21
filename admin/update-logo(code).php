<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

if (isset($_POST)) {

    $msg = '';

    //profile picture
    $profileOk = true;

    if (is_uploaded_file($_FILES['image']['tmp_name'])) {

        $folder_dir = "../uploads/logo/";

        $base = basename($_FILES['image']['name']);

        $imageFileType = pathinfo($base, PATHINFO_EXTENSION);

        $profile = uniqid() . "." . $imageFileType;

        $filename = $folder_dir . $profile;

        if (file_exists($_FILES['image']['tmp_name'])) {

            if ($imageFileType == "jpg" || $imageFileType == "png") {

                if ($_FILES['image']['size'] < 500000) { // File size is less than 5MB

                    //If all above condition are met then copy file from server temp location to uploads folder.
                    move_uploaded_file($_FILES["image"]["tmp_name"], $filename);
                } else {
                    $msg = "Wrong Size. Max Size Allowed : 5MB";
                    echo "<script type='text/javascript'>
                alert('$msg');
                window.location.href='settings-system.php';
                </script>";
                }
            } else {
                $msg = "Wrong Format. Only jpg & png Allowed";
                echo "<script type='text/javascript'>
            alert('$msg');
            window.location.href='settings-system.php';
            </script>";
            }
        }
    } else {
        $profileOk = false;
    }

    $sql = "UPDATE tblsystem SET logo='$profile' WHERE id_system='1'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("location: settings-system.php");
        exit();
    } else {
        $msg = "Failed";
        echo "<script type='text/javascript'>
            alert('$msg');
            window.location.href='settings-system.php';
            </script>";
    }
}
