<?php

session_start();

if (isset($_SESSION['id_admin'])) {
    header("Location: dashboard.php");
    exit();
}

require_once('../config.php');


$sql = "SELECT * FROM tblsystem WHERE id_system='1'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  $brgyname = $row['brgyname'];
  $logo = $row['logo'];
  $address = $row['address'];
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


    <title>Brgy <?php echo $brgyname; ?> MIS (LOGIN)</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dist/css/signin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div align="center">
        <img src="../uploads/logo/<?php echo $logo; ?>" width="200" height="200" class="img-thumbnail img-circle" alt="Generic placeholder thumbnail">
            <br />
            <h2 class="form-signin-heading text-center"><b>Barangay <?php echo $brgyname; ?></b></h2>
            <h2 class="form-signin-heading text-center">Management Information System</h2>
            <h4 class="form-signin-heading text-center"><em><?php echo $address; ?></em></h4>
            <br />
            <h3 class="form-signin-heading text-center">Sign in</h3>
            <br />
        </div>

        <form class="form-signin" action="signin.php" method="POST">

            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <br />
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
        </form>

    </div>
    <!-- /container -->

    <?php

    include('include/footer.php')

    ?>