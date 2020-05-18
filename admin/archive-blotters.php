<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Blotter Requests (ARCHIVE)</h1>
  <div class="row margin-top-20">
    <div class="col-md-12">

      <div class="btn-group" role="group" aria-label="...">
        <a href="blotters.php" class="btn btn-primary">View</a>

      </div>

      <div class="box-body table-responsive no-padding">
        <br />
        <table id="blotters" class="table table-hover">
          <thead>
            <th>Full Name</th>
            <th>Details</th>
            <th>Location</th>
            <th class="text-center">Status</th>
            <th class="text-center">Date</th>
            <th class="text-center">Action</th>
          </thead>
          <tbody>

            <?php
            $sql = "SELECT * FROM tblblotter WHERE archive='1'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($rows = $result->fetch_array()) {

            ?>
                <tr>
                  <td><?php echo $rows['name']; ?></td>
                  <td><?php echo $rows['details']; ?></td>
                  <td><?php echo $rows['location']; ?></td>
                  <td class="text-center">
                      <?php
                      if($rows['status'] == 'Approved') {
                          echo '<span class="label label-success">Approved</span>';
                      }
                      elseif($rows['status'] == 'Rejected'){
                        echo '<span class="label label-danger">Rejected</span>';
                      }
                      else{
                        echo '<span class="label label-warning">Pending</span>';  
                      }

                      ?>
                  </td>
                  <td class="text-center"><?php echo date("m-d-Y", strtotime($rows['datecreated'])); ?></td>
                  <td class="text-center"><a class="confirmationunarchive" href="unarchive-blotter(code).php?id=<?php echo $rows['id_blotter']; ?>"><i class="fa fa-archive" aria-hidden="true"></i></a></td>
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