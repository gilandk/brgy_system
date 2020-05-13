<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once('../config.php');

$field = $_POST['field'];
$value = $_POST['value'];
$editid = $_POST['id'];

$query = "UPDATE tblofficials SET " . $field . "='" . $value . "' WHERE id_officials=" . $editid;
$result = $conn->query($query);
