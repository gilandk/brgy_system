<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Update Disaster Information</h1>


  <div class="col-md-6" style="padding-top:20px;">

    <form action="#" method="POST" id="form_updatedisaster">

      <?php
      $sql1 = "SELECT * FROM tbldmanage WHERE id_disaster='$_GET[id]'";
      $result1 = $conn->query($sql1);
      if ($result1->num_rows > 0) {
        while ($row1 = $result1->fetch_assoc()) {

          $id_dm = $row1['id_disaster'];
          $hh_id = $row1['id_household'];

      ?>
          <input type="hidden" name="id_dm" value="<?php echo $id_dm; ?>" autocomplete="off">

          <input type="hidden" id="hh_id" name="hh_id" value="<?php $hh_id; ?>" autocomplete="off">

          <div class="form-group">
            <label>Family Name:</label>
            
            <?php
            $sql2 = "SELECT * FROM tblhousehold WHERE id_household='$hh_id'";
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
              while ($row2 = $result2->fetch_assoc()) {
                  $famname = $row2['famname'];
              }
            }
            ?>
            <input type="text" class="form-control" placeholder="Family Name" id="famname" value="<?php echo $famname; ?>" autocomplete="off">

          </div>

          <div class="form-group">
            <label>Type of Disaster:</label>
            <input type="text" class="form-control" placeholder="Type of Disaster" name="disaster" value="<?php echo $row1['disaster']; ?>" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Report:</label>
            <textarea class="form-control" rows="4" placeholder="Specify" name="report" autocomplete="off"><?php echo $row1['reports']; ?></textarea>
          </div>

          <div class="form-group">
            <label>Location:</label>
            <input type="text" class="form-control" placeholder="Location" name="location" value="<?php echo $row1['location']; ?>" autocomplete="off" required>
          </div>
      <?php
        }
      }
      ?>
      <div class="form-group">
        <button type="submit" class="btn btn-primary updatedisaster"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
      </div>
    </form>

  </div>


  <div class="col-md-6" style="padding-top:20px;">

    <div class="box-body table-responsive no-padding">
      <br />
      <table id="selecthouseholds" class="table table-hover">
        <thead>
          <th class="hide-me">id</th>
          <th>Family Name</th>
          <th>Family Head</th>
          <th class="text-center">No. of Members</th>
          <th class="text-center">House No</th>
          <th class="text-center">Street</th>
        </thead>
        <tbody>

          <?php

          $sql = "SELECT * FROM tblhousehold WHERE archive='0'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {

              $idhh = $rows['id_household'];

              $sql1 = "SELECT * FROM tblcommunity WHERE id_household='$idhh'";
              $result1 = $conn->query($sql1);
              $hhcount = $result1->num_rows;


              $sql2 = "SELECT * FROM tblcommunity WHERE id_household='$idhh' AND fam_head='1'";
              $result2 = $conn->query($sql2);
              if ($result2->num_rows > 0) {
                while ($rowc = $result2->fetch_assoc()) {
                  $famhead = $rowc['fname'];
                }
              }
          ?>
              <tr>
                <td class="hide-me"><?php echo $rows['id_household']; ?></td>
                <td><?php echo $rows['famname']; ?> Family</td>
                <td><?php echo $famhead; ?></td>
                <td class="text-center"><?php echo $hhcount; ?></td>
                <td class="text-center"><?php echo $rows['housenum']; ?></td>
                <td class="text-center"><?php echo $rows['street']; ?></td>
              </tr>

          <?php

            }
          }
          ?>

        </tbody>
      </table>
    </div>


  </div>


  <!-- end -->
</div>
</div>
</div>

<script>
  var table = document.getElementById('selecthouseholds');

  for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
      //rIndex = this.rowIndex;
      document.getElementById("hh_id").value = this.cells[0].innerHTML;
      document.getElementById("famname").value = this.cells[1].innerHTML;
    };
  }
</script>

<?php
include('include/footer.php');
?>