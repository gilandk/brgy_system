<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Health Management Information (ARCHIVE)</h1>
  <div class="row margin-top-20">
    <div class="col-md-12">

      <div class="btn-group" role="group" aria-label="...">
        <a href="health-infos.php" class="btn btn-primary">View</a>
      </div>

    <div class="box-body table-responsive no-padding">
      <br />
      <table id="health" class="table table-hover">
        <thead>
          <th>Full Name</th>
          <th>Contact</th>
          <th>Appointment</th>
          <th>Details</th>
          <th class="text-center">Status</th>
          <th class="text-center">Date</th>
          <th class="text-center">Action</th>
        </thead>
        <tbody>

          <?php
          $sql = "SELECT * FROM tblhealth INNER JOIN tblcommunity WHERE tblhealth.id_resident = tblcommunity.id_comm AND tblhealth.archive='1'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($rows = $result->fetch_array()) {

              $fullname = $rows['fname'] . ' ' . $rows['mname'] . ' ' . $rows['lname'] . ' ' . $rows['alias'];

          ?>
              <tr>
                <td><?php echo $fullname; ?></td>
                <td><?php echo $rows['contact']; ?></td>
                <td><?php echo $rows['appointment']; ?></td>
                <td><?php echo $rows['details']; ?></td>
                <td class="text-center">
                  <?php
                  if ($rows['status'] == 'Finished') {
                  ?>
                    <span class="label label-success">Finished</span></td>
              <?php
                  }
                  if ($rows['status'] == 'Pending') {
              ?>
                <span class="label label-warning">Pending</span></td>
              <?php
                  }
              ?>
              <td class="text-center"><?php echo $rows['dateSet']; ?></td>
              <td class="text-center"><a class="confirmationunarchive" href="unarchive-health(code).php?id=<?php echo $rows['id_health']; ?>"><i class="fa fa-archive" aria-hidden="true"></i></a></td>
              </tr>

          <?php
            }
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- end -->
</div>
</div>
</div>

<?php
include('include/footer.php');
?>