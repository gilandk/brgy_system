<?php
include('include/header.php');

$hhid = $_GET['id'];

?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Household (Members)</h1>

  <div class="col-md-12">
    <div class="btn-group pull-left" role="group" aria-label="...">
      <a href="households.php" class="btn btn-primary">View</a>

    </div>

  </div>

  <div class="col-md-6" style="padding-top:20px;">

    <div class="panel panel-info">

      <?php

      $q = "SELECT * FROM tblhousehold WHERE id_household='$hhid'";
      $r = $conn->query($q);
      if ($r->num_rows > 0) {
        while ($rowhh = $r->fetch_assoc()) {
          $famname = $rowhh['famname'];
        }
      }
      ?>

      <!-- Default panel contents -->
      <div class="panel-heading"><?php echo $famname; ?> Family</div>
      <div class="panel-body">
        <?php

        $query = "SELECT * FROM tblcommunity WHERE id_household='$hhid' AND fam_head='1'";
        $result1 =  $conn->query($query);
        if ($result1->num_rows > 0) {
          while ($rowhead = $result1->fetch_assoc()) {
            $fullname = $rowhead['fname'] . ' ' . $rowhead['mname'] . ' ' . $rowhead['lname'] . ' ' . $rowhead['alias'];
            $idhead = '<a class="pull-right confirmationdel" href="delete-householdmembers(code).php?resid=' . $rowhead['id_comm'] . '&hhid= ' . $hhid . '"><i class="fa fa-trash" aria-hidden="true"></i></a>';
          }
        } else {
          $fullname = '';
          $idhead = '';
        }

        ?>
        <p><b>Family Head:</b> <?php echo $fullname . ' ' . $idhead; ?></p>

      </div>

      <?php

      $sqli = "SELECT * FROM tblcommunity WHERE id_household='$hhid' AND fam_head='0'";
      $res =  $conn->query($sqli);
      if ($res->num_rows > 0) {
        while ($rowc = $res->fetch_assoc()) {

      ?>

          <!-- List group -->
          <ul class="list-group">
            <li class="list-group-item"><?php echo $rowc['fname'] . ' ' . $rowc['mname'] . ' ' . $rowc['lname'] . ' ' . $rowc['alias']; ?>
              <a class="pull-right confirmationdel" href="delete-householdmembers(code).php?resid=<?php echo $rowc['id_comm']; ?>&hhid=<?php echo $hhid; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a><!-- cut -->
              <a class="pull-right confirmationassign" href="assign-householdhead(code).php?resid=<?php echo $rowc['id_comm']; ?>&hhid=<?php echo $hhid; ?>"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;</a></li>
          </ul>

      <?php
        }
      }
      ?>
    </div>
  </div>

  <div class="col-md-6" style="padding-top:20px;">

    <div class="box-body table-responsive no-padding">

      <table id="residents" class="table table-hover">
        <thead>
          <th>Full Name</th>
          <th>House No</th>
          <th>Street</th>
          <th class="text-center">Action</th>
        </thead>
        <tbody>

          <?php
          $sql = "SELECT * FROM tblcommunity WHERE archive='0' AND id_household='0'";
          $result = $conn->query($sql);


          if ($result->num_rows > 0) {
            while ($rows = $result->fetch_array()) {


              $full_name = $rows['fname'] . ' ' . $rows['mname'] . ' ' . $rows['lname'] . ' ' . $rows['alias'];

          ?>
              <tr id="<?php echo $rows['id_comm']; ?>">
                <td><?php echo $full_name; ?></td>
                <td><?php echo $rows['housenum']; ?></td>
                <td><?php echo $rows['street']; ?></td>
                <td class="text-center"><a class="confirmation" href="add-householdmembers(code).php?resid=<?php echo $rows['id_comm']; ?>&hhid=<?php echo $hhid; ?>"><i class="fa fa-plus" aria-hidden="true"></i></a></td>

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

<?php
include('include/footer.php');
?>