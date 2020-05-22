<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Update Blotter Information</h1>


  <div class="col-md-12" style="padding-top:20px;">

    <form action="#" method="POST" id="form_updateblotter">

      <?php
      $sql = "SELECT * FROM tblblotter WHERE id_blotter='$_GET[id]'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>

          <input type="hidden" name="id_blotter" value="<?php echo $row['id_blotter']; ?>" autocomplete="off">

          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $row['name']; ?>" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Complaint for:</label>
            <input type="text" class="form-control" placeholder="Complaint for" name="complaint_for" value="<?php echo $row['complaint_for']; ?>" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Contact:</label>
            <input type="text" class="form-control" placeholder="Contact" name="contact" value="<?php echo $row['contact']; ?>" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label>Details:</label>
            <textarea class="form-control" rows="4" placeholder="Details ... " name="details" autocomplete="off"><?php echo $row['details']; ?></textarea>
          </div>

          <div class="form-group">
            <label>Location:</label>
            <input type="text" class="form-control" placeholder="Location" name="location" value="<?php echo $row['location']; ?>" autocomplete="off" required>
          </div>
      <?php
        }
      }
      ?>
      <div class="form-group">
        <button type="submit" class="btn btn-primary updateblotter"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
      </div>
    </form>

  </div>

  <!-- end -->
</div>
</div>
</div>

<?php
include('include/footer.php');
?>