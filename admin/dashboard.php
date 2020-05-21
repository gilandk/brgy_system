<?php
include('include/header.php');

$sql = "SELECT * FROM tblcommunity WHERE archive='0'";
$result = $conn->query($sql);
$resident = $result->num_rows;

$sql2 = "SELECT * FROM tblcommunity WHERE gender='Male' AND archive='0'";
$result2 = $conn->query($sql2);
$male = $result2->num_rows;

$sql3 = "SELECT * FROM tblcommunity WHERE gender='Female' AND archive='0'";
$result3 = $conn->query($sql3);
$female = $result3->num_rows;

$sql4 = "SELECT * FROM tblcommunity WHERE age >= '60' AND archive='0'";
$result4 = $conn->query($sql4);
$senior = $result4->num_rows;

$sql1 = "SELECT * FROM tblhousehold WHERE archive='0'";
$result1 = $conn->query($sql1);
$household = $result1->num_rows;

$sql5 = "SELECT * FROM tbldmanage WHERE archive='0'";
$result5 = $conn->query($sql5);
$disaster = $result5->num_rows;

$sql6 = "SELECT * FROM tblhealth WHERE archive='0'";
$result6 = $conn->query($sql6);
$clinic = $result6->num_rows;

$sql7 = "SELECT * FROM tbldots WHERE archive='0'";
$result7 = $conn->query($sql7);
$dots = $result7->num_rows;

$sql8 = "SELECT * FROM tblblotter WHERE archive='0'";
$result8 = $conn->query($sql8);
$blotter = $result8->num_rows;

$sql9 = "SELECT * FROM tbladmin WHERE position!='Super Admin'";
$result9 = $conn->query($sql9);
$accounts = $result9->num_rows;

$sql0 = "SELECT * FROM tbladmin WHERE status='0'";
$result0 = $conn->query($sql0);
$pending = $result0->num_rows;

?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Overview</h1>


  <div class="row">
    <h3 class="sub-header">Community</h3>
    <br />
    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-blue"><i class="fa fa-user" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Residents</span>
          <span class="info-box-number"><?php echo $resident; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-green"><i class="fa fa-users" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Households</span>
          <span class="info-box-number"><?php echo $household; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-red"><i class="fa fa-mars" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Male</span>
          <span class="info-box-number"><?php echo $male; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-fuchsia"><i class="fa fa-venus" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Female</span>
          <span class="info-box-number"><?php echo $female; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-yellow"><i class="fa fa-universal-access" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Senior Citizen</span>
          <span class="info-box-number"><?php echo $senior; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    
    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-red"><i class="fa fa-wheelchair" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">PWD</span>
          <span class="info-box-number">N/A</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-red"><i class="fa fa-users" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">4PS members</span>
          <span class="info-box-number">N/A</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>


  </div>

  <div class="row">
    <h3 class="sub-header">Health</h3>
    <br />

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-navy"><i class="fa fa-users" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Calamity Victim</span>
          <span class="info-box-number"><?php echo $disaster; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>


    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-teal"><i class="fa fa-user-md" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Clinic Appointment</span>
          <span class="info-box-number">Clinic: <?php echo $clinic; ?></span>
          <span class="info-box-number">DOTS: <?php echo $dots; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

  </div>

  <div class="row">
    <h3 class="sub-header">Issues/Concerns</h3>
    <br />

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-orange"><i class="fa fa-th-list" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Blotters</span>
          <span class="info-box-number"><?php echo $blotter; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-red"><i class="fa fa-file-text" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Clearance Request</span>
          <span class="info-box-number">N/A</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

  </div>

  <div class="row">
    <h3 class="sub-header">System</h3>
    <br />

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-maroon"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Accounts</span>
          <span class="info-box-number"><?php echo $accounts; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-yellow"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Accounts Approval</span>
          <span class="info-box-text">(PENDING)</span>
          <span class="info-box-number"><?php echo $pending; ?></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>

  </div>

  <!-- end -->
</div>
</div>
</div>

<?php
include('include/footer.php')
?>