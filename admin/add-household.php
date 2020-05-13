<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Add Household Information</h1>

  <div class="col-md-12">

    <form action="#" method="POST" id="form_addhousehold">

      <div class="form-group">
        <label>Family Name:</label>
        <input type="text" class="form-control" placeholder="Family Name" name="famname" autocomplete="off" required>
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
        <button type="submit" class="btn btn-primary addhousehold"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
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