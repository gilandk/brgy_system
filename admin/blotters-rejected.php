<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Blotter List (Rejected)</h1>
  <div class="row margin-top-20">
    <div class="col-md-12">

      <div class="btn-group" role="group" aria-label="...">
        <a href="blotters-list.php" class="btn btn-success">Approved</a>
        <a href="blotters.php" class="btn btn-warning">&nbsp;Pending&nbsp;</a>
        <a href="archive-blotters.php" class="btn btn-danger">Archive</a>

      </div>

      <div class="box-body table-responsive no-padding">
        <br />
        <table id="blotters" class="table table-hover">
          <thead>
            <th>Full Name</th>
            <th>Contact</th>
            <th>Details</th>
            <th>Location</th>
            <th class="text-center">Status</th>
            <th class="text-center">Date</th>
            <th class="text-center">Action</th>
          </thead>
          <tbody>

            <?php
            $sql = "SELECT * FROM tblblotter WHERE status='Rejected' AND archive='0'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($rows = $result->fetch_array()) {

            ?>
                <tr>
                  <td><?php echo $rows['name']; ?></td>
                  <td><?php echo $rows['contact']; ?></td>
                  <td><?php echo $rows['details']; ?></td>
                  <td><?php echo $rows['location']; ?></td>
                  <td class="text-center">
                     <span class="label label-danger">Rejected</span></td>
                  <td class="text-center"><?php echo date("m-d-Y", strtotime($rows['datecreated'])); ?></td>
                  <td class="text-center"><a class="confirmationarchive" href="archive-blotter(code).php?id=<?php echo $rows['id_blotter']; ?>"><i class="fa fa-archive" aria-hidden="true"></i></a></td>
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