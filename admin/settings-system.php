<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Settings (System)</h1>

  <div class="col-md-12">
    <?php

    $sql = "SELECT * FROM tblsystem WHERE id_system='1'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

    ?>

        <img src="../uploads/logo/<?php echo $row['logo']; ?>" width="150" height="150" class="img-responsive img-thumbnail img-circle" alt="Generic placeholder thumbnail">
        <form action="update-logo(code).php" method="POST" enctype="multipart/form-data">
          <p> </p>
          <input type="file" name="image" class="btn btn-primary">
          <p> </p>
          <button class="btn btn-success">Save</button>

        </form>
        <br />
        <br />

        <form action="#" method="POST" id="form_updatesystem">
          <div class="form-group">
            <label>Barangay Name:</label>
            <input type="text" class="form-control" placeholder="Barangay Name" name="brgyname" value="<?php echo $row['brgyname']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Address:</label>
            <textarea class="form-control" rows="4" placeholder="Address ..." name="address" autocomplete="off"><?php echo $row['address']; ?></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary updatesystem"><i class="fa fa-plus" aria-hidden="true"></i> Update</button>
          </div>
        </form>
    <?php
      }
    }
    ?>

    <br />



  </div>

  <!-- end -->
</div>
</div>
</div>

<?php
include('include/footer.php');
?>