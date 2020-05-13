<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Update Household Information</h1>

  <div class="col-md-12">

    <?php

    $sql = "SELECT * FROM tblhousehold WHERE id_household = '$_GET[id]'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

    ?>

        <form action="#" method="POST" id="form_updatehousehold">

          <input type="hidden" name="id_household" value="<?php echo $row['id_household']; ?>" />

          <div class="form-group">
            <label>Family Name:</label>
            <input type="text" class="form-control" placeholder="Family Name" name="famname" value="<?php echo $row['famname']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>House No:</label>
            <input type="text" class="form-control" placeholder="House No" name="housenum" value="<?php echo $row['housenum']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Street:</label>
            <input type="text" class="form-control" placeholder="Street No" name="street" value="<?php echo $row['street']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Barangay:</label>
            <input type="text" class="form-control" placeholder="Barangay" name="barangay" value="<?php echo $row['barangay']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Municipality:</label>
            <input type="text" class="form-control" placeholder="Municipality" name="municipality" value="<?php echo $row['municipality']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Province:</label>
            <input type="text" class="form-control" placeholder="Province" name="province" value="<?php echo $row['province']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary updatehousehold"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
          </div>
        </form>


    <?php
      }
    }
    ?>

  </div>

  <!-- end -->
</div>
</div>
</div>

<?php
include('include/footer.php');
?>