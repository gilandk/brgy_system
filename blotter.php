<?php

session_start();

require_once('config.php');

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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Brgy <?php echo $brgyname; ?> MIS</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/carousel.css" rel="stylesheet">

    <link href="dist/css/bstyle.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->

<body>
    <div class="navbar-wrapper">
        <div class="container">

            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Brgy <?php echo $brgyname; ?></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index-officials.php">Officials</a></li>
                            <li class="active"><a href="blotter.php">Blotter Report</a></li>
                            <li><a href="#clearance">Clearance Request</a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <?php
                            if (empty($_SESSION['id_admin'])) {
                                echo '<li><a href="admin/index.php">Log-in</a></li>';
                            } else {
                                echo '<li><a href="logout.php">Logout</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="container">

        <h2>Blotter Request</h2>
        <br/>

            <form action="send_blotter.php" method="POST">

                <label for="requestor">Requestor's Name</label>
                <input type="text" name="name" placeholder="Your Name">

                <label for="complaint_for">Complaint for</label>
                <input type="text" name="complaint_for" placeholder="Reported Person's Name">

                <label for="contact">Contact</label>
                <input type="text" name="contact" placeholder="Contact">

                <label for="details">Details</label>
                <textarea class="form-control" rows="4" placeholder="Details ... " name="details" autocomplete="off"></textarea>

                <label for="location">Location</label>
                <input type="text" name="location" placeholder="Location">


                <input type="submit" value="Submit">
            </form>
        </div>


        <br />
        <br />
        <br />
        <br />
        <br />


        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; <?php echo date("Y"); ?> Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="dist/assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="dist/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="dist/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>