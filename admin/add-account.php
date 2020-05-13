<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Add Accounts</h1>

  <div class="col-md-12">

    <form action="add-account(code).php" method="POST" id="form_add_account">

      <div class="form-group">
        <label>Admin Name:</label>
        <input type="text" class="form-control" placeholder="Name" name="admin_name" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Admin Username:</label>
        <input type="text" class="form-control" placeholder="Username" name="admin_user" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Admin Position:</label>
        <input type="text" class="form-control" placeholder="Position" name="position" autocomplete="off" required>
      </div>

      <label>Admin Privileges:</label>
      <div class="form-group">
        <label>Secretary:</label>
        <select class="form-control" name="secretary">
          <option value="1">Yes</option>
          <option value="0" selected>No</option>
        </select>
        <label>Blotter:</label>
        <select class="form-control" name="blotter">
          <option value="1">Yes</option>
          <option value="0" selected>No</option>
        </select>
        <label>Health:</label>
        <select class="form-control" name="health">
          <option value="1">Yes</option>
          <option value="0" selected>No</option>
        </select>
        <label>Announcements:</label>
        <select class="form-control" name="announcement">
          <option value="1">Yes</option>
          <option value="0" selected>No</option>
        </select>
      </div>

      <br />
      <label><i>Admin Password:</i></label>
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
        <button type="submit" class="btn btn-primary addaccount"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
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