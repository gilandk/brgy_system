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
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="index-officials.php">Officials</a></li>
              <li><a href="blotter.php">Blotter Report</a></li>
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

  <?php

  $sql6 = "SELECT * FROM tbl_slider WHERE id_slide='1'";
  $result6 = $conn->query($sql6);
  while ($slider0 = $result6->fetch_assoc()) {

    $slider0image = $slider0['banners'];
    $slider0title = $slider0['title'];
  }

  $sql7 = "SELECT * FROM tbl_slider WHERE id_slide='2'";
  $result7 = $conn->query($sql7);
  while ($slider1 = $result7->fetch_assoc()) {

    $slider1image = $slider1['banners'];
    $slider1title = $slider1['title'];
  }

  $sql8 = "SELECT * FROM tbl_slider WHERE id_slide='3'";
  $result8 = $conn->query($sql8);
  while ($slider2 = $result8->fetch_assoc()) {

    $slider2image = $slider2['banners'];
    $slider2title = $slider2['title'];
  }


  ?>
  <!-- Carousel
    ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="uploads/banners/<?php echo $slider0image; ?>" width="800px" height="500px" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo $slider0title; ?></h1>

          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="uploads/banners/<?php echo $slider1image; ?>" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo $slider1title; ?></h1>

          </div>
        </div>
      </div>
      <div class="item">
        <img class="third-slide" src="uploads/banners/<?php echo $slider2image; ?>" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo $slider2title; ?></h1>

          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- /.carousel -->


  <!-- Marketing messaging and featurettes
    ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <!-- Three columns of text below the carousel -->
    <div class="row">
      <?php

      $sql1 = "SELECT * FROM tblofficials ORDER by RAND() LIMIT 3";
      $result1 = $conn->query($sql1);
      while ($officials = $result1->fetch_assoc()) {
      ?>
        <div class="col-lg-4">
          <img src="uploads/profile/<?php echo $officials['logo']; ?>" class="img-circle img-thumbnail" alt="Generic placeholder image" width="150" height="150">
          <h2><?php echo $officials['name']; ?></h2>
          <h4><?php echo $officials['position']; ?></h4>
          <p><?php echo $officials['title']; ?></p>
        </div>
      <?php
      }

      ?>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <?php
    $sql3 = "SELECT * FROM tbl_index WHERE id_index='1'";
    $result3 = $conn->query($sql3);
    while ($post0 = $result3->fetch_assoc()) {
    ?>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $post0['header']; ?></h2>
          <p class="lead"><?php echo $post0['content']; ?></p>
          <h5><em><?php echo date("m-d-Y - h:m a", strtotime($post0['dateposted'])); ?></em></h5>
        </div>
        <div class="col-md-5">
          <?php
          if (empty($post0['image'])) {
          ?>
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          <?php
          } else {
          ?>
            <img class="featurette-image img-responsive center-block" src="uploads/content/<?php echo $post0['image']; ?>">
          <?php
          }
          ?>
        </div>
      </div>

      <hr class="featurette-divider">
    <?php
    }

    ?>


    <?php
    $sql4 = "SELECT * FROM tbl_index WHERE id_index='2'";
    $result4 = $conn->query($sql4);
    while ($post1 = $result4->fetch_assoc()) {
    ?>

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><?php echo $post1['header']; ?></span></h2>
          <p class="lead"><?php echo $post1['content']; ?></p>
          <h5><em><?php echo date("m-d-Y - h:m a", strtotime($post1['dateposted'])); ?></em></h5>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <?php
          if (empty($post1['image'])) {
          ?>
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          <?php
          } else {
          ?>
            <img class="featurette-image img-responsive center-block" src="uploads/content/<?php echo $post1['image']; ?>">
          <?php
          }
          ?>
        </div>

      </div>

      <hr class="featurette-divider">

    <?php
    }

    ?>


    <?php
    $sql5 = "SELECT * FROM tbl_index WHERE id_index='3'";
    $result5 = $conn->query($sql5);
    while ($post2 = $result5->fetch_assoc()) {
    ?>

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $post2['header']; ?></h2>
          <p class="lead"><?php echo $post2['content']; ?></p>
          <h5><em><?php echo date("m-d-Y - h:m a", strtotime($post2['dateposted'])); ?></em></h5>
        </div>
        <div class="col-md-5">
          <?php
          if (empty($post2['image'])) {
          ?>
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          <?php
          } else {
          ?>
            <img class="featurette-image img-responsive center-block" src="uploads/content/<?php echo $post2['image']; ?>">
          <?php
          }
          ?>
        </div>
      </div>
      <hr class="featurette-divider">

    <?php
    }

    ?>



    <!-- /END THE FEATURETTES -->


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