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

$q = "SELECT * FROM tblcommunity WHERE id_household='$id_hh' AND fam_head='1'";
$r = $conn->query($q);

if ($r->num_rows == 1) {
    while ($row = $r->fetch_assoc()) {
        $id_comm = $row['id_comm'];
        $sql1 = "UPDATE tblcommunity SET fam_head='0', archiveDate=archiveDate WHERE id_comm='$id_comm'";
        $result1 = $conn->query($sql1);
    }

    $sql = "UPDATE tblcommunity SET fam_head='1', archiveDate=archiveDate WHERE id_comm='$id_res'";
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


    $sql = "UPDATE tblcommunity SET fam_head='1', archiveDate=archiveDate WHERE id_comm='$id_res'";
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
}
