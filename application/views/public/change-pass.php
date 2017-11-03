
<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Change Password | Krispy Chicken</title>
     <?php require 'include.php'; ?>
     <link rel="stylesheet" href="<?= base_url('assets/user/css/myacc-custom.css'); ?>">

   </head>
   <body class="full-width grid-view columns-3 archive woocommerce-page">
      <div id="page" class="hfeed site">
        <?php require 'header.php'; ?>
         <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">
            <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb" >
                     <a href="<?= base_url(''); ?>">Home</a>
                     <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                     Change Password
                  </nav>
               </div>
               <div id="primary" class="content-area" >
                  <main id="main" class="site-main" >
                  	<div class="container">
                  		<div class="row profile">
                  			<div class="col-md-3">
                  				<?= $sidebar; ?>
                  			</div>
                  			<div class="col-md-9 well">
                  				<div class="profile-content ">
                                 <?php if($error = $this->session->flashdata('feedback'))  :
                                        $error_type = $this->session->flashdata('feedback_class');
                                        $error_sign = $this->session->flashdata('feedback_icon');
                                        ?>
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <div class="alert alert-dismissible <?= $error_type ?>">
                                               <i class="<?= $error_sign ?>" aria-hidden="true"></i></span>
                                                <?= $error ?>
                                              </div>
                                            </div>
                                          </div>
                                        <?php endif; ?>
                            <div class=""><h2>Change Password:</h2></div>
                            <?php $add_id = $this->uri->segment('2',''); ?>
                  					<form action="<?= base_url('change-password'); ?>" method="POST" class="col-md-8 col-md-offset-2">
                              <div class="form-group ">
                                <label for="" class="label-control">Current Password : </label>
                                <input type="password" name="currentpass" class="form-control">
                                <?php echo form_error('currentpass'); ?>
                              </div>
                              
                              <div class="form-group ">
                                <label for="" class="label-control">New Password :</label>
                                <input type="password" name="newpass" class="form-control">
                                <?php echo form_error('newpass'); ?>
                              </div>
                                 <div class="form-group">
                                <label for="" class="label-control">Re-Enter New Password :</label>
                                <input type="password" name="cnewpass" class="form-control">
                                <?php echo form_error('cnewpass'); ?>
                              </div>
                            
                               
                              <div class="form-group col-md-12 ">
                                <input type="submit" value="Update" class="btn btn-danger pull-right">
                              </div>
                            </form>
                  				</div>
                  			</div>
                  		</div>
                  	</div>
                  <!-- 	<center>
                  		<strong>Powered by <a href="" target="_blank">Krispy Chicken</a></strong>
                  	</center> -->
                  	<br>
                  	<br>

                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>

       
         <!-- #colophon -->
      </div>
 <?php require 'footer.php'; ?>
   </body>
</html>
