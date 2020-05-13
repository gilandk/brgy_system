<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Update Account</h1>

  <div class="col-md-12">

    <form action="update-account(code).php" method="POST" id="form_update_account">

      <?php

      $sql = "SELECT * FROM tbladmin WHERE admin_id='$_REQUEST[id]'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

      ?>
          <input type="hidden" name="admin_id" value="<?php echo $row['admin_id'] ?>">
          <div class="form-group">
            <label>Admin Name:</label>
            <input type="text" class="form-control" placeholder="Name" name="admin_name" value="<?php echo $row['admin_name']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Admin Username:</label>
            <input type="text" class="form-control" placeholder="Username" name="admin_user" value="<?php echo $row['admin_user']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Admin Position:</label>
            <input type="text" class="form-control" placeholder="Position" name="position" value="<?php echo $row['position']; ?>" autocomplete="off" required>
          </div>

          <label>Admin Privileges:</label>
          <div class="form-group">
            <label>Secretary:</label>
            <select class="form-control" name="secretary">
              <option value="" disabled selected>--- YES or NO ---</option>
              <option <?php if ($row['secretary'] == "1") echo "selected" ?> value="1">Yes</option>
              <option <?php if ($row['secretary'] == "0") echo "selected" ?> value="0">No</option>
            </select>
            <label>Blotter:</label>
            <select class="form-control" name="blotter">
              <option value="" disabled selected>--- YES or NO ---</option>
              <option <?php if ($row['blotter'] == "1") echo "selected" ?> value="1">Yes</option>
              <option <?php if ($row['blotter'] == "0") echo "selected" ?> value="0">No</option>
            </select>
            <label>Health:</label>
            <select class="form-control" name="health">
              <option value="" disabled selected>--- YES or NO ---</option>
              <option <?php if ($row['health'] == "1") echo "selected" ?> value="1">Yes</option>
              <option <?php if ($row['health'] == "0") echo "selected" ?> value="0">No</option>
            </select>
            <label>Announcements:</label>
            <select class="form-control" name="announcement">
              <option value="" disabled selected>--- YES or NO ---</option>
              <option <?php if ($row['announcement'] == "1") echo "selected" ?> value="1">Yes</option>
              <option <?php if ($row['announcement'] == "0") echo "selected" ?> value="0">No</option>
            </select>
          </div>

          <br />
          <label><i>Update Admin Password:</i></label>
          <div class="form-group">
            <label>Admin Password:</label>
            <input id="password" type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Confirm Password:</label>
            <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirm Password" autocomplete="off">
          </div>

          <div id="passwordError" class="color-red text-center hide-me">
            Password Mismatch!!
          </div>

      <?php
        }
      }

      ?>

      <div class="form-group">
        <button type="submit" class="btn btn-primary updatehousehold"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
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