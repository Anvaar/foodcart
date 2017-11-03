<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/member/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Anvaar Baig</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <!--  <ul class="treeview-menu">
            <li class="active"><a href="<?= base_url(''); ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            
          </ul> -->
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Orders</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <!-- <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span> -->
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/all_orders'); ?>"><i class="fa fa-circle-o"></i> All Orders</a></li>
            <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i> Create Order</a></li>
            <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i> Edit Order</a></li>
            <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i> Reports</a></li>
          </ul>

        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Products</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <!-- <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span> -->
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i> All Products</a></li>
            <li><a href="<?= base_url('admin/add_product'); ?>"><i class="fa fa-circle-o"></i> Add Product</a></li>
            <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i> Edit Products</a></li>
            <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i> Search Products</a></li>
          </ul>
           
        </li>
               <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Categories</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <!-- <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span> -->
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/all_orders'); ?>"><i class="fa fa-circle-o"></i> All Categories</a></li>
            <li><a href="<?= base_url('admin/add_category'); ?>"><i class="fa fa-circle-o"></i> Add Categories</a></li>
            <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i> Edit Categories</a></li>
           </ul>
           
        </li>
        <li class="treeview hidden">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Selling</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <!-- <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span> -->
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url(''); ?>"><i class="fa fa-circle-o"></i> All Leads</a></li>
            <li><a href="<?= base_url(''); ?>"><i class="fa fa-circle-o"></i> Add Leads</a></li>
            <li><a href="<?= base_url(''); ?>"><i class="fa fa-circle-o"></i> Search Leads</a></li>
            <li><a href="<?= base_url(''); ?>"><i class="fa fa-circle-o"></i> Reports</a></li>
          </ul>
        </li>
   


  
  
 

      </ul>
    </section>