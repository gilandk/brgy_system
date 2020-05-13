<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Settings</h1>

  <div class="col-md-12">

    <form action="#" method="POST" id="form_settings">

      <?php

      $sql = "SELECT * FROM tbladmin WHERE admin_id='$_SESSION[id_admin]'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

      ?>
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

      <?php
        }
      }
      ?>
      <div class="form-group">
        <button type="submit" class="btn btn-primary updatesettings"><i class="fa fa-plus" aria-hidden="true"></i> Update</button>
      </div>
    </form>

    <br />

    <form action="change-password(code).php" method="POST" id="changePassword">

      <label><i>Update Admin Password:</i></label>
      <div class="form-group">
        <label>Admin Password:</label>
        <input id="cpassword" type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Confirm Password:</label>
        <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirm Password" autocomplete="off">
      </div>
      <div id="passwordError" class="color-red text-center hide-me">
        Password Mismatch!!
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-warning updatesettings"> Change Password</button>
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