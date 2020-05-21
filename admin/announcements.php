<?php
include('include/header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Announcements</h1>

  <div class="col-md-12">
    <ul class="nav nav-tabs nav-justified" role="tablist">
      <li class="active"><a href="#data1" role="tab" data-toggle="tab">Slider</a></li>
      <li><a href="#data2" role="tab" data-toggle="tab">Contents</a></li>
    </ul>


    <div class="tab-content">
      <div class="tab-pane active" id="data1">
        <br />
        <?php

        $sql = "SELECT * FROM tbl_slider WHERE id_slide='1'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

        ?>
            <br />
            <img src="../uploads/banners/<?php echo $row['banners']; ?>" width="800px" height="500px" class="img-responsive img-thumbnail" alt="Generic placeholder thumbnail">
            <form action="update-slider(code).php" method="POST" enctype="multipart/form-data">
              <p> </p>
              <input type="hidden" name="id_slide" value="<?php echo $row['id_slide']; ?>" autocomplete="off" required>
              <input type="file" name="image" class="btn btn-primary">
              <p> </p>
              <button class="btn btn-success">Save</button>
            </form>

            <form action="#" method="POST" id="form_updatetitle">

              <input type="hidden" name="id_slide" value="<?php echo $row['id_slide']; ?>" autocomplete="off" required>
              <br />
              <div class="form-group">
                <label>Header:</label>
                <input type="text" class="form-control" placeholder="Header" name="title" value="<?php echo $row['title']; ?>" autocomplete="off" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary updatetitle"><i class="fa fa-plus" aria-hidden="true"></i> Update</button>
              </div>
            </form>
        <?php
          }
        }
        ?>
        <hr class="featurette-divider">
        <br />

        <?php

        $sql1 = "SELECT * FROM tbl_slider WHERE id_slide='2'";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {
          while ($row1 = $result1->fetch_assoc()) {

        ?>
            <br />
            <img src="../uploads/banners/<?php echo $row1['banners']; ?>" width="800px" height="500px" class="img-responsive img-thumbnail" alt="Generic placeholder thumbnail">
            <form action="update-slider(code).php" method="POST" enctype="multipart/form-data">
              <p> </p>
              <input type="hidden" name="id_slide" value="<?php echo $row1['id_slide']; ?>" autocomplete="off" required>
              <input type="file" name="image" class="btn btn-primary">
              <p> </p>
              <button class="btn btn-success">Save</button>
            </form>

            <form action="#" method="POST" id="form_updatetitle1">

              <input type="hidden" name="id_slide" value="<?php echo $row1['id_slide']; ?>" autocomplete="off" required>
              <br />
              <div class="form-group">
                <label>Header:</label>
                <input type="text" class="form-control" placeholder="Header" name="title" value="<?php echo $row1['title']; ?>" autocomplete="off" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary updatetitle1"><i class="fa fa-plus" aria-hidden="true"></i> Update</button>
              </div>
            </form>
        <?php
          }
        }
        ?>
        <hr class="featurette-divider">
        <br />

        <?php

        $sql2 = "SELECT * FROM tbl_slider WHERE id_slide='3'";
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
          while ($row2 = $result2->fetch_assoc()) {

        ?>
            <br />
            <img src="../uploads/banners/<?php echo $row2['banners']; ?>" width="800px" height="500px" class="img-responsive img-thumbnail" alt="Generic placeholder thumbnail">
            <form action="update-slider(code).php" method="POST" enctype="multipart/form-data">
              <p> </p>
              <input type="hidden" name="id_slide" value="<?php echo $row2['id_slide']; ?>" autocomplete="off" required>
              <input type="file" name="image" class="btn btn-primary">
              <p> </p>
              <button class="btn btn-success">Save</button>
            </form>

            <form action="#" method="POST" id="form_updatetitle2">

              <input type="hidden" name="id_slide" value="<?php echo $row2['id_slide']; ?>" autocomplete="off" required>
              <br />
              <div class="form-group">
                <label>Header:</label>
                <input type="text" class="form-control" placeholder="Header" name="title" value="<?php echo $row2['title']; ?>" autocomplete="off" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary updatetitle2"><i class="fa fa-plus" aria-hidden="true"></i> Update</button>
              </div>
            </form>
        <?php
          }
        }
        ?>
        <hr class="featurette-divider">
        <br />

      </div><!-- tab-pane1 -->

      <div class="tab-pane" id="data2">

        <br />

        <?php

        $sql3 = "SELECT * FROM tbl_index WHERE id_index='1'";
        $result3 = $conn->query($sql3);

        if ($result3->num_rows > 0) {
          while ($row3 = $result3->fetch_assoc()) {

        ?>

            <img src="../uploads/content/<?php echo $row3['image']; ?>" width="500px" height="500px" class="img-responsive img-thumbnail" alt="Generic placeholder thumbnail">
            <form action="update-content-image(code).php" method="POST" enctype="multipart/form-data">
              <p> </p>
              <input type="hidden" name="id_index" value="<?php echo $row3['id_index']; ?>" autocomplete="off" required>
              <input type="file" name="image" class="btn btn-primary">
              <p> </p>
              <button class="btn btn-success">Save</button>
            </form>

            <form action="#" method="POST" id="form_updatecontent">

              <input type="hidden" name="id_index" value="<?php echo $row3['id_index']; ?>" autocomplete="off" required>
              <br />
              <div class="form-group">
                <label>Header:</label>
                <input type="text" class="form-control" placeholder="Header" name="header" value="<?php echo $row3['header']; ?>" autocomplete="off" required>
              </div>

              <div class="form-group">
                <label>Content:</label>
                <textarea class="form-control" rows="4" placeholder="Content ..." name="content"><?php echo $row3['content']; ?></textarea>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary updatecontent"><i class="fa fa-plus" aria-hidden="true"></i> Update</button>
              </div>
            </form>
        <?php
          }
        }
        ?>
        <hr class="featurette-divider">
        <br />

        <?php

        $sql4 = "SELECT * FROM tbl_index WHERE id_index='2'";
        $result4 = $conn->query($sql4);

        if ($result4->num_rows > 0) {
          while ($row4 = $result4->fetch_assoc()) {

        ?>

            <img src="../uploads/content/<?php echo $row4['image']; ?>" width="500px" height="500px" class="img-responsive img-thumbnail" alt="Generic placeholder thumbnail">
            <form action="update-content-image(code).php" method="POST" enctype="multipart/form-data">
              <p> </p>
              <input type="hidden" name="id_index" value="<?php echo $row4['id_index']; ?>" autocomplete="off" required>
              <input type="file" name="image" class="btn btn-primary">
              <p> </p>
              <button class="btn btn-success">Save</button>
            </form>

            <form action="#" method="POST" id="form_updatecontent1">

              <input type="hidden" name="id_index" value="<?php echo $row4['id_index']; ?>" autocomplete="off" required>
              <br />
              <div class="form-group">
                <label>Header:</label>
                <input type="text" class="form-control" placeholder="Header" name="header" value="<?php echo $row4['header']; ?>" autocomplete="off" required>
              </div>

              <div class="form-group">
                <label>Content:</label>
                <textarea class="form-control" rows="4" placeholder="Content ..." name="content"><?php echo $row4['content']; ?></textarea>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary updatecontent1"><i class="fa fa-plus" aria-hidden="true"></i> Update</button>
              </div>
            </form>
        <?php
          }
        }
        ?>
        <hr class="featurette-divider">
        <br />


        <?php

        $sql5 = "SELECT * FROM tbl_index WHERE id_index='3'";
        $result5 = $conn->query($sql5);

        if ($result5->num_rows > 0) {
          while ($row5 = $result5->fetch_assoc()) {

        ?>

            <img src="../uploads/content/<?php echo $row5['image']; ?>" width="500px" height="500px" class="img-responsive img-thumbnail" alt="Generic placeholder thumbnail">
            <form action="update-content-image(code).php" method="POST" enctype="multipart/form-data">
              <p> </p>
              <input type="hidden" name="id_index" value="<?php echo $row5['id_index']; ?>" autocomplete="off" required>
              <input type="file" name="image" class="btn btn-primary">
              <p> </p>
              <button class="btn btn-success">Save</button>
            </form>

            <form action="#" method="POST" id="form_updatecontent2">

              <input type="hidden" name="id_index" value="<?php echo $row5['id_index']; ?>" autocomplete="off" required>
              <br />
              <div class="form-group">
                <label>Header:</label>
                <input type="text" class="form-control" placeholder="Header" name="header" value="<?php echo $row5['header']; ?>" autocomplete="off" required>
              </div>

              <div class="form-group">
                <label>Content:</label>
                <textarea class="form-control" rows="4" placeholder="Content ..." name="content"><?php echo $row5['content']; ?></textarea>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary updatecontent2"><i class="fa fa-plus" aria-hidden="true"></i> Update</button>
              </div>
            </form>
        <?php
          }
        }
        ?>
        <hr class="featurette-divider">
        <br />

      </div><!-- tab-pane2 -->

    </div><!-- tab-content -->
  </div><!-- col-md-12 -->

  <!-- end -->
</div>
</div>
</div>

<?php
include('include/footer.php');
?>