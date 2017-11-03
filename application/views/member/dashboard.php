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
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>All Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Completed Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Cancel Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    <div class="col-md-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, esse nostrum, accusantium non placeat atque ipsum obcaecati facilis tempore, consequuntur itaque repellendus! Nostrum harum quam voluptatem eligendi eos cum quis, tempora at esse tempore quas explicabo, vel dolorum expedita sapiente? Impedit quod illo ratione laboriosam animi consequuntur quibusdam praesentium itaque repudiandae qui iusto nulla voluptate harum dolores consequatur fugiat aut, eligendi neque optio dignissimos. Voluptate vitae eius voluptatibus. A mollitia iste minima ipsa repellendus accusamus aut, illum temporibus accusantium reprehenderit magni placeat in ratione voluptates qui suscipit, nobis obcaecati doloremque rem perspiciatis quisquam facilis eaque soluta quam alias. Ullam, quidem.</div>
    <div class="col-md-6">Praesentium est, debitis aliquid atque ut assumenda ipsam necessitatibus dicta, consequuntur non nam magni quae earum voluptas placeat quod voluptatum neque nesciunt voluptatibus laudantium. Vitae sint deserunt ipsa necessitatibus magnam modi, maiores iste, reiciendis quibusdam cum asperiores porro accusamus odio. Quidem maxime laborum dolor culpa libero omnis harum, quod eum dignissimos nemo, eaque, ad molestiae vitae saepe odit dolores velit iusto, assumenda magni laudantium ipsum repudiandae provident eligendi. Esse nihil libero, odio error facere. Consectetur accusantium delectus obcaecati temporibus odio officiis perspiciatis porro, quisquam ex modi fuga, voluptatibus, a nulla quas impedit voluptas aperiam sed debitis dolorem aliquid enim. Et!</div>

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
