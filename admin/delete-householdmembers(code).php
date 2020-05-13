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

$sql = "UPDATE tblcommunity SET id_household='0', fam_head='0', archiveDate=archiveDate WHERE id_comm='$id_res'";
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
