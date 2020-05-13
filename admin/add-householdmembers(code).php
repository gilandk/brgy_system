<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');

$msg = '';

$id_res = $_GET['resid'];
$id_hh = $_GET['hhid'];

$q = "SELECT * FROM tblcommunity WHERE id_comm='$id_res' AND id_household='$id_hh'";
$r = $conn->query($q);

if ($r->num_rows == 0) {

    $sql = "UPDATE tblcommunity SET id_household='$id_hh' WHERE id_comm='$id_res'";
    $result = $conn->query($sql);

    if ($result === TRUE) {

        header('location: household-members.php?id=' . $id_hh);
    } else {

        $msg = "FAILED";
        echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='household-members.php?id=$id_hh';
    </script>";
    }
} else {

    $msg = "FAILED, ALREADY IN THE LIST";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location.href='household-members.php?id=$id_hh';
    </script>";
}
