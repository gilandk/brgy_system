<?php
include('include/header.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Accounts</h1>
  <div class="row margin-top-20">
    <div class="col-md-12">

        <a href="add-account.php" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</a>
      

      <div class="box-body table-responsive no-padding">
        <br />
        <table id="accounts" class="table table-hover">
          <thead>
            <th>Account Name</th>
            <th>Position</th>
            <th class="text-center">Update</th>
            <th class="text-center">Status</th>
          </thead>
          <tbody>

            <?php
            $sql = "SELECT * FROM tbladmin WHERE position != 'SUPER ADMIN'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              while ($rows = $result->fetch_array()) {

            ?>
                <tr>
                  <td><?php echo $rows['admin_name']; ?></td>
                  <td><?php echo $rows['position']; ?></td>
                  <td class="text-center"><a href="update-account.php?id=<?php echo $rows['admin_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                  <td class="text-center">
                    <?php
                    if ($rows['status'] == '1') {
                    ?>
                      <a href="deact-account.php?id=<?php echo $rows['admin_id'] ?>"><span class="label label-success">Active</span></a>
                    <?php
                    }
                    if ($rows['status'] == '0') {
                    ?>
                       <a href="activate-account.php?id=<?php echo $rows['admin_id'] ?>"><span class="label label-danger">Inactive</span></a>
                    <?php
                    }
                    ?>
                  </td>
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