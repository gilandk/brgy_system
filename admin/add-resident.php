<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Add Resident Information</h1>

  <div class="col-md-12">

    <form action="#" method="POST" id="form_addresident">

      <div class="form-group">

        <div class="form-group">
          <label>Last Name:</label>
          <input type="text" class="form-control" placeholder="Last name" name="lname" autocomplete="off" required>
        </div>

        <label>First Name:</label>
        <input type="text" class="form-control" placeholder="First name" name="fname" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Middle Name:</label>
        <input type="text" class="form-control" placeholder="Middle name" name="mname" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Alias:</label>
        <input type="text" class="form-control" placeholder="Alias" name="alias" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Gender:</label>
        <select class="form-control" name="gender" required>
          <option value="" disabled selected>--- Select Gender ---</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>

      <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Contact No:</label> <i>(Note! Enter valid contact number)</i>
        <input type="number" class="form-control" placeholder="Contact No." name="contact" min="0" maxlength="11" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Birthdate:</label>
        <input type="date" class="form-control" min="01-01-1960" placeholder="Birthdate" id="dob" name="birthday" autocomplete="off" required>
      
      <div class="form-group">
        <label>Age:</label>
      <input class="form-control" type="text" id="age" name="age" placeholder="Age" readonly>
      </div>

      <div class="form-group">
        <label>Birthplace:</label>
        <input type="text" class="form-control" placeholder="Birthplace" name="birthplace" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>House No:</label>
        <input type="text" class="form-control" placeholder="House No" name="housenum" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Street:</label>
        <input type="text" class="form-control" placeholder="Street No" name="street" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Barangay:</label>
        <input type="text" class="form-control" placeholder="Barangay" name="barangay" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Municipality:</label>
        <input type="text" class="form-control" placeholder="Municipality" name="municipality" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Province:</label>
        <input type="text" class="form-control" placeholder="Province" name="province" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Civil Status:</label>
        <input type="text" class="form-control" placeholder="Civil Status" name="civil_status" autocomplete="off" required>
      </div>

      <div class="form-group">
        <label>Voter Status:</label>
        <select class="form-control" name="voter_status" required>
          <option value="" disabled selected>--- YES or NO ---</option>
          <option>Yes</option>
          <option>No</option>
        </select>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary addresident"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
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