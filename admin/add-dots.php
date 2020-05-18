<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Add DOTS Information</h1>


    <div class="col-md-6" style="padding-top:20px;">

        <form action="#" method="POST" id="form_adddots">

            <input type="hidden" id="id_patient" name="id_patient" autocomplete="off">

            <div class="form-group">
                <label>Full Name:</label>
                <input type="text" class="form-control" placeholder="Full Name" id="fullname" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Contact:</label>
                <input type="text" class="form-control" placeholder="Contact" id="contact" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Medicine:</label>
                <textarea class="form-control" rows="2" placeholder="Medicine" name="medicine" autocomplete="off" required></textarea>
            </div>

            <div class="form-group">
                <label>Monthly duration:</label>
                <input type="number" class="form-control" placeholder="Monthly duration" name="month_duration" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Daily Usage:</label>
                <input type="number" class="form-control" placeholder="Daily Usage" name="daily_usage" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Type of medicine:</label>
                <input type="text" class="form-control" placeholder="Type of medicine" name="medicine_type" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Diagnosis:</label>
                <textarea class="form-control" rows="4" placeholder="Specify ..." name="diagnosis" autocomplete="off" required></textarea>
            </div>

            <div class="form-group">
                <label>Schedule for Return:</label>
                <input class="form-control" type="date" min="<?php echo date('Y-m-d'); ?>" name="sched_return">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary adddots"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
            </div>
        </form>

    </div>


    <div class="col-md-6" style="padding-top:20px;">

        <div class="box-body table-responsive no-padding">

            <table id="selectresidents" class="table table-hover">
                <thead>
                    <th class="hide-me">Id</th>
                    <th>Full Name</th>
                    <th>Contact</th>
                    <th>House No</th>
                    <th>Street</th>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM tblcommunity WHERE archive='0'";
                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                        while ($rows = $result->fetch_array()) {

                    ?>
                            <tr>
                                <td class="hide-me"><?php echo $rows['id_comm']; ?></td>
                                <td><?php echo $rows['fname'] . ' ' . $rows['mname'] . ' ' . $rows['lname'] . ' ' . $rows['alias']; ?></td>
                                <td><?php echo $rows['contact']; ?></td>
                                <td><?php echo $rows['housenum']; ?></td>
                                <td><?php echo $rows['street']; ?></td>
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
    var table = document.getElementById('selectresidents');

    for (var i = 1; i < table.rows.length; i++) {
        table.rows[i].onclick = function() {
            //rIndex = this.rowIndex;
            document.getElementById("id_patient").value = this.cells[0].innerHTML;
            document.getElementById("fullname").value = this.cells[1].innerHTML;
            document.getElementById("contact").value = this.cells[2].innerHTML;
        };
    }
</script>



<?php
include('include/footer.php');
?>