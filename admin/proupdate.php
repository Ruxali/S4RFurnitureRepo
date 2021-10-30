<!DOCTYPE html>
<html>
  <?php
  include('adminfiles/session.php');
    include('adminfiles/head.php')
    ?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include('adminfiles/header.php')
        ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php
        include('adminfiles/aside.php');
        ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-3">
              
            </div>
            <div class="col-sm-6"> 

            <form role="form" action="proupdatehandler.php" method="post" enctype="multipart/form-data">
              <?php

                $newid=$_GET['up_id'];

                include('../connect.php');

                $sql="SELECT * from products WHERE id='$newid'";

                $results=$connect->query($sql);

                $final=$results->fetch_assoc();

              ?>

              <h1>Update Product</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Product name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter product name"  value="<?php echo $final['name']?>" name="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter amount" value="<?php echo $final['price']?>" name="price">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file">
                </div>
                <div class="form-group">
                  <label for="description">Product description</label>
                  <textarea id="description" class="form-control" rows="5" placeholder="Enter description" value="<?php echo $final['description']?>" name="description">
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" value="<?php echo $final['category']?>" name="category">
                    <?php
                    $cat="SELECT * from categories";
                    $results=mysqli_query($connect,$cat);
                    while($row=mysqli_fetch_assoc($results)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                    }
                    ?>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" value="<?php echo $final['id']?>" name="form_id">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
              </div>
            </form>
          </div>
          </div>
        </section>
        <!-- /.content -->
        <div class="col-sm-3">
        </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <?php
      include('adminfiles/footer.php');
      ?>
  </body>
</html>