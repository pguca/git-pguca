<?php include('header.php');?>
<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">View Information</h3></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php $id= $_GET['id'];
                //echo $id;
                $query="SELECT * FROM admin WHERE id=$id"; 
                 $result= mysqli_query($conn, $query);
                  foreach($result as $key=>$val)
                   {
                   //print_r($val);
                   
                ?>
             <form role="form" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Admin Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="<?php echo $val['admin']; ?>"disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Admin Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $val['email']; ?>" disabled>
                </div>
                 
              </div>
              <!-- /.box-body -->
                 <?php } ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" onclick="window.location.href='admin.php';">Go Back</button>
              </div>
            </form>
       
       
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
