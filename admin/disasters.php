<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Disaster Risk</h1>
  <div class="row margin-top-20">
    <div class="col-md-12">

      <div class="btn-group" role="group" aria-label="...">
        <a href="add-disaster.php" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</a>
        <a href="archive-disasters.php" class="btn btn-danger">Archive</a>
      </div>

      <div class="box-body table-responsive no-padding">
        <br />
        <table id="disaster" class="table table-hover">
          <thead>
            <th>Family Name</th>
            <th>Disaster Type</th>
            <th>Reports</th>
            <th>Location</th>
            <th>Date</th>
            <th class="text-center">Action</th>
          </thead>
          <tbody>

            <?php

            $sql = "SELECT * FROM tbldmanage INNER JOIN tblhousehold ON tbldmanage.id_household=tblhousehold.id_household WHERE tbldmanage.archive='0'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($rows = $result->fetch_assoc()) {

            ?>
                <tr>
                  <td><?php echo $rows['famname']; ?> Family</td>
                  <td><?php echo $rows['disaster']; ?></td>
                  <td><?php echo $rows['reports']; ?></td>
                  <td><?php echo $rows['location']; ?></td>
                  <td><?php echo date("M-d-Y", strtotime($rows['datecreated'])); ?></td>
                  <td class="text-center"><a href="update-disaster.php?id=<?php echo $rows['id_disaster']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | <a class="confirmationarchive" href="archive-disaster(code).php?id=<?php echo $rows['id_disaster']; ?>"><i class="fa fa-archive" aria-hidden="true"></i></a></td>
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