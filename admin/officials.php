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
      <img src="../uploads/profile/<?php echo $captain['logo']; ?>" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
        <form action="update-image(code).php" method="POST" enctype="multipart/form-data">
        <p> </p>
        <input type="hidden" name="id_officials" value="9"/>
        <input type="file" name="image" class="btn" style="margin-left:450px">
        <p> </p>
        <button class="btn btn-success">Save</button>
        </form>
        <h4 class="edit" contenteditable id="name_9"><?php echo $captain['name']; ?></h4>
        <span contenteditable class="text-muted"><?php echo $captain['position']; ?></span>
      </div>
    <?php
    }
    ?>
  </div>

  <div class="row placeholders">

    <?php

    $sql1 = "SELECT * FROM tblofficials WHERE position='Councilor' AND id_officials BETWEEN 1 AND 4";
    $result1 = $conn->query($sql1);
    while ($councilor = $result1->fetch_assoc()) {
    ?>

      <div class="col-xs-6 col-sm-3 placeholder">

      <img src="../uploads/profile/<?php echo $councilor['logo']; ?>" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
        
        <form action="update-image(code).php" method="POST" enctype="multipart/form-data">
        <p> </p>
        <input type="hidden" name="id_officials" value="<?php echo $councilor['id_officials']; ?>"/>
        <input type="file" name="image" class="btn" style="margin-left:30px">
        <p> </p>
        <button class="btn btn-success">Save</button>
        </form>

        <h4 class="edit" contenteditable id="name_<?php echo $councilor['id_officials']; ?>"><?php echo $councilor['name']; ?></h4>
        <span class="text-muted"><?php echo $councilor['position']; ?></span><br/>
        <span class="edit" contenteditable class="text-muted" id="title_<?php echo $councilor['id_officials']; ?>"><?php echo $councilor['title']; ?></span>
        <br/>
      </div>

    <?php
    }
    ?>

  </div>

  <div class="row placeholders">

    <?php

    $sql2 = "SELECT * FROM tblofficials WHERE position='Councilor' AND id_officials BETWEEN 5 AND 8";
    $result2 = $conn->query($sql2);
    while ($councilor0 = $result2->fetch_assoc()) {
    ?>

      <div class="col-xs-6 col-sm-3 placeholder">

      <img src="../uploads/profile/<?php echo $councilor0['logo']; ?>" width="150" height="150" class="img-responsive" alt="Generic placeholder thumbnail">
        
        <form action="update-image(code).php" method="POST" enctype="multipart/form-data">
        <p> </p>
        <input type="hidden" name="id_officials" value="<?php echo $councilor0['id_officials']; ?>"/>
        <input type="file" name="image" class="btn" style="margin-left:30px">
        <p> </p>
        <button class="btn btn-success">Save</button>
        </form>

        <h4 class="edit" contenteditable id="name_<?php echo $councilor0['id_officials']; ?>"><?php echo $councilor0['name']; ?></h4>
        <span class="text-muted"><?php echo $councilor0['position']; ?></span><br/>
        <span class="edit" contenteditable class="text-muted" id="title_<?php echo $councilor0['id_officials']; ?>"><?php echo $councilor0['title']; ?></span>
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