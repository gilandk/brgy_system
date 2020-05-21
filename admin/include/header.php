<?php

session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}


require_once('../config.php');

$sql = "SELECT * FROM tblsystem WHERE id_system='1'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  $brgyname = $row['brgyname'];
  $logo = $row['logo'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon">

  <title>Admin (Dashboard)</title>

  <!-- Bootstrap theme -->
  <link href="../dist/css/bootstrap-theme.min.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fontawsome 4.7 -->
  <link href="../dist/css/font-awesome.min.css" rel="stylesheet">

  <link href="../dist/DataTables/datatables.css" rel="stylesheet">
  <link href="../dist/DataTables/datatables.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="../dist/css/dashboard.css" rel="stylesheet">
  <link href="../dist/css/mystyle.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dashboard.php">Barangay <?php echo $brgyname; ?></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="">Welcome, <?php echo $_SESSION['name'] . ' (' . $_SESSION['pos'] . ') '; ?></a></li>
          <li><a href="../logout.php">Log-out</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar hide-scroll">
          <img src="../uploads/logo/<?php echo $logo ?>" height="150px" width="150px" class="img-thumbnail img-circle" style="margin-left:25px">
          <p> </p>
        <ul class="nav nav-sidebar">
          <li class="active"><a href="dashboard.php">Overview</a></li>
          <?php
          if ($_SESSION['privAll'] == '1') {
          ?>
            <li><a href="residents.php">Resident Information</a></li>
            <li><a href="households.php">Households</a></li>
            <li><a href="health-infos.php">Health Information</a></li>
            <li><a href="dots.php">DOTS</a></li>
            <li><a href="disasters.php">Disaster Risk</a></li>
            <li><a href="blotters.php">Blotter</a></li>
            <li><a href="#">Clearance</a></li>
            <li><a href="announcements.php">Announcements</a></li>
            <li><a href="officials.php">Officials</a></li>
            <li><a href="accounts.php">Accounts</a></li>
            <li><a href="settings-system.php">Settings (System)</a></li>

          <?php
          } else if ($_SESSION['privSec'] == '1') {
          ?>
            <li><a href="residents.php">Resident Information</a></li>
            <li><a href="households.php">Households</a></li>
            <li><a href="health-infos.php">Health Information</a></li>
            <li><a href="dots.php">DOTS</a></li>
            <li><a href="disasters.php">Disaster Risk</a></li>
            <li><a href="blotters.php">Blotter</a></li>
            <li><a href="#">Clearance</a></li>
            <li><a href="announcements.php">Announcements</a></li>
            <li><a href="officials.php">Officials</a></li>
            <li><a href="settings-system.php">Settings (System)</a></li>

          <?php
          } else if ($_SESSION['privBlotter'] == '1') {
          ?>
            <li><a href="residents.php">Resident Information</a></li>
            <li><a href="blotters.php">Blotter</a></li>
            <li><a href="#">Clearance</a></li>
          <?php
          } else if ($_SESSION['privAnc'] == '1') {

          ?>
            <li><a href="announcements.php">Announcements</a></li>
            <li><a href="settings-system.php">Settings (System)</a></li>
          <?php
          } else if ($_SESSION['privHealth'] == '1') {

          ?>
            <li><a href="residents.php">Resident Information</a></li>
            <li><a href="health-infos.php">Health Information</a></li>
            <li><a href="dots.php">DOTS</a></li>
            <li><a href="disasters.php">Disaster Risk</a></li>
            <li><a href="#">Clearance</a></li>

          <?php
          }
          ?>
          <li><a href="settings.php">Settings (Account)</a></li>
        </ul>
      </div>