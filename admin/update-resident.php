<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Update Resident Information</h1>

  <div class="col-md-12">

    <?php

    $sql = "SELECT * FROM tblcommunity WHERE id_comm = '$_GET[id]'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

    ?>

        <form action="#" method="POST" id="form_updateresident">

          <input type="hidden" name="id_comm" value="<?php echo $row['id_comm']; ?>" />

          <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" placeholder="Last name" name="lname" value="<?php echo $row['lname']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" placeholder="First name" name="fname" value="<?php echo $row['fname']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Middle Name:</label>
            <input type="text" class="form-control" placeholder="Middle name" name="mname" value="<?php echo $row['mname']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Alias:</label>
            <input type="text" class="form-control" placeholder="Alias" name="alias" value="<?php echo $row['alias']; ?>" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Gender:</label>
            <select class="form-control" name="gender" value="<?php echo $row['gender']; ?>" required>
              <option value="" disabled selected>--- Select Gender ---</option>
              <option <?php if ($row['gender'] == "Male") echo "selected" ?>>Male</option>
              <option <?php if ($row['gender'] == "Female") echo "selected" ?>>Female</option>
            </select>
          </div>

          <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row['email']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Contact No:</label> <i>(Note! Enter valid contact number)</i>
            <input type="number" class="form-control" placeholder="Contact No." name="contact" min="0" maxlength="11" value="<?php echo $row['contact']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Birthdate:</label>
            <input type="date" class="form-control" min="01-01-1960" placeholder="Birthdate" id="dob" name="birthday" value="<?php echo $row['birthday']; ?>" required>
          </div>

          <div class="form-group">
            <label>Age:</label>
            <input class="form-control" type="text" id="age" name="age" placeholder="Age" value="<?php echo $row['age']; ?>" readonly>
          </div>

          <div class="form-group">
            <label>Birthplace:</label>
            <input type="text" class="form-control" placeholder="Birthplace" name="birthplace" value="<?php echo $row['birthplace']; ?>" autocomplete="off" required>
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
            <label>Civil Status:</label>
            <input type="text" class="form-control" placeholder="Civil Status" name="civil_status" value="<?php echo $row['civil_status']; ?>" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Voter Status:</label>
            <select class="form-control" name="voter_status" value="<?php echo $row['voter_status']; ?>" required>
              <option value="" disabled selected>--- YES or NO ---</option>
              <option <?php if ($row['voter_status'] == "Yes") echo "selected" ?>>Yes</option>
              <option <?php if ($row['voter_status'] == "No") echo "selected" ?>>No</option>
            </select>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary updateresident"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
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