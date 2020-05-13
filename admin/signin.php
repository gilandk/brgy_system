<?php

session_start();

require_once('../config.php');

if (isset($_POST['login'])) {

    $msg='';
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * from tbladmin WHERE admin_user='$username' AND admin_pass='$password' AND status='1'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {

            $_SESSION['name'] = $rows['admin_name'];
            $_SESSION['id_admin'] = $rows['admin_id'];
            $_SESSION['pos'] = $rows['position'];
            $_SESSION['privAll'] = $rows['all_priv'];
            $_SESSION['privBlotter'] = $rows['blotter'];
            $_SESSION['privAnc'] = $rows['announcement'];
            $_SESSION['privHealth'] = $rows['health'];
            $_SESSION['privSec'] = $rows['secretary'];

            header("Location: dashboard.php");
            exit();
        }

        $conn->close();
    } else {
        $msg = "The Password is Incorrect or Account is Inactive";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location.href='index.php';
        </script>";

    }
}
