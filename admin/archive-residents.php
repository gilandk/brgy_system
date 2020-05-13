<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Residents (ARCHIVE)</h1>
  <div class="row margin-top-20">
    <div class="col-md-12">

      <div class="btn-group" role="group" aria-label="...">
        <a href="residents.php" class="btn btn-primary">View</a>
      </div>

      <div class="box-body table-responsive no-padding">
        <br/>
        <table id="residents" class="table table-hover">
          <thead>
            <th>Full Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Street</th>
            <th>Date</th>
            <th class="text-center">Action</th>
          </thead>
          <tbody>

            <?php
            $sql = "SELECT * FROM tblcommunity WHERE archive='1' ORDER by archiveDate DESC";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              while ($rows = $result->fetch_array()) {

            ?>
                <tr>
                  <td><?php echo $rows['fname'] . ' ' . $rows['mname'] . ' ' . $rows['lname'] . ' ' . $rows['alias']; ?></td>
                  <td><?php echo $rows['email']; ?></td>
                  <td><?php echo $rows['contact']; ?></td>
                  <td><?php echo $rows['street']; ?></td>
                  <td><?php echo date("m-d-y h:m a", strtotime($rows['archiveDate'])); ?></td>
                  <td class="text-center"><a class="confirmationunarchive" href="unarchive-resident(code).php?id=<?php echo $rows['id_comm']; ?>"><i class="fa fa-inbox" aria-hidden="true"></i></a></td></td>
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