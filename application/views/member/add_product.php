<!DOCTYPE html>
<html>
<head>



<?php require 'include.php'; ?>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php require 'main-header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php require 'sidebar-wrapper.php'; ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Add Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <div class="col-md-6 col-md-offset-3">
       <div class="form-group">
        <label for="" class="label-control">Title</label>
        <input type="text" class="form-control" name="title">
      </div>
       <div class="form-group">
        <label for="" class="label-control">Price</label>
        <input type="text" class="form-control" name="price">
      </div>
       <div class="form-group">
        <label for="" class="label-control">Image Path</label>
        <input type="file" class="form-control" name="img_parsse">
      </div>
       <div class="form-group">
        <label for="" class="label-control">Description</label>
       <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="" class="label-control">Category</label>
       <select name="category" id="" class="form-control">
         <option value="">Please Select Category</option>
       </select>
      </div>
       
       <div class="form-group pull-right">
          <input type="submit" class="btn btn-contray" value="Add Product">
       </div>
     </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- main-footer -->
  <?php require 'main-footer.php'; ?>
  <!-- /.main-footer -->


  <!-- Control Sidebar -->
<?php require 'control-sidebar.php'; ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php require 'footer.php'; ?>
</body>
</html>
