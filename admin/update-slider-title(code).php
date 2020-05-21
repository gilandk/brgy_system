<?php

session_start();

if (empty($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}

require_once('../config.php');


    $msg = '';
    $id = mysqli_real_escape_string($conn, $_POST['id_slide']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);


    $sql = "UPDATE tbl_slider SET title='$title' WHERE id_slide='$id'";
    $result = $conn->query($sql);
    if ($result === TRUE) {

        $msg = "SUCCESSFULLY UPDATED";
        echo $msg;
      } else {
    
        $msg = "FAILED TO UPDATE";
        echo $msg;
      }
