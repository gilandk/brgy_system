<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Households</h1>
  <div class="row margin-top-20">
    <div class="col-md-12">

      <div class="btn-group" role="group" aria-label="...">
        <a href="add-household.php" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</a>
        <a href="archive-households.php" class="btn btn-danger">Archive</a>
      </div>

      <div class="box-body table-responsive no-padding">
        <br />
        <table id="households" class="table table-hover">
          <thead>
            <th>Family Name</th>
            <th>Family Head</th>
            <th class="text-center">No. of Members</th>
            <th class="text-center">House No</th>
            <th class="text-center">Street</th>
            <th class="text-center">Action</th>
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
                  <td><?php echo $rows['famname']; ?> Family</td>
                  <td><?php echo $famhead; ?></td>
                  <td class="text-center"><?php echo $hhcount; ?></td>
                  <td class="text-center"><?php echo $rows['housenum']; ?></td>
                  <td class="text-center"><?php echo $rows['street']; ?></td>
                  <td class="text-center"><a href="household-members.php?id=<?php echo $rows['id_household']; ?>"><i class="fa fa-users" aria-hidden="true"></i></a> | <a href="update-household.php?id=<?php echo $rows['id_household']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | <a class="confirmationarchive" href="archive-household(code).php?id=<?php echo $rows['id_household']; ?>"><i class="fa fa-archive" aria-hidden="true"></i></a></td>
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