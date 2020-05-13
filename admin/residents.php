<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Residents Information</h1>
  <div class="row margin-top-20">
    <div class="col-md-12">

      <div class="btn-group" role="group" aria-label="...">
        <a href="add-resident.php" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</a>
        <a href="archive-residents.php" class="btn btn-danger">Archive</a>

      </div>

      <div class="box-body table-responsive no-padding">
        <br />
        <table id="residents" class="table table-hover">
          <thead>
            <th>Full Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Street</th>
            <th class="text-center">Action</th>
          </thead>
          <tbody>

            <?php
            $sql = "SELECT * FROM tblcommunity WHERE archive='0'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              while ($rows = $result->fetch_array()) {

                $fullname = $rows['fname'] . ' ' . $rows['mname'] . ' ' . $rows['lname'] . ' ' . $rows['alias'];

            ?>
                <tr>
                  <td><?php echo $fullname; ?></td>
                  <td><?php echo $rows['email']; ?></td>
                  <td><?php echo $rows['contact']; ?></td>
                  <td><?php echo $rows['street']; ?></td>
                  <td class="text-center"><a href="update-resident.php?id=<?php echo $rows['id_comm']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | <a class="confirmationarchive" href="archive-resident(code).php?id=<?php echo $rows['id_comm']; ?>"><i class="fa fa-archive" aria-hidden="true"></i></a></td>
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