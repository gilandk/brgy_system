<?php
include('include/header.php')
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Officials</h1>

  <div class="row placeholders">

    <?php

    $sql = "SELECT * FROM tblofficials WHERE position='Brgy Captain'";
    $result = $conn->query($sql);
    while ($captain = $result->fetch_assoc()) {
    ?>

      <h2 class="sub-header text-center">Barangay Officials</h2>
      <br />
      <div class="col-xs-12 col-sm-12 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4 class="edit" contenteditable id="name_1"><?php echo $captain['name']; ?></h4>
        <span contenteditable class="text-muted"><?php echo $captain['position']; ?></span>
      </div>
    <?php
    }
    ?>
  </div>

  <div class="row placeholders">

    <?php

    $sql1 = "SELECT * FROM tblofficials WHERE position='Councilor'";
    $result1 = $conn->query($sql1);
    while ($councilor = $result1->fetch_assoc()) {
    ?>

      <div class="col-xs-6 col-sm-3 placeholder">

        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4 class="edit" contenteditable id="name_<?php echo $councilor['id_officials']; ?>"><?php echo $councilor['name']; ?></h4>
        <span class="text-muted"><?php echo $councilor['position']; ?></span><br/>
        <span class="edit" contenteditable class="text-muted" id="title_<?php echo $councilor['id_officials']; ?>"><?php echo $councilor['title']; ?></span>
        <br/>
      </div>

    <?php
    }
    ?>

  </div>


  <!-- end -->
</div>
</div>
</div>

<?php
include('include/footer.php')
?>