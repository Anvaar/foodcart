
<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Edit Address | Krispy Chicken</title>
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
                     My Account
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
                            <div class=""><h2>Edit Address:</h2></div>
                            <?php $add_id = $this->uri->segment('2',''); ?>
                  					<form action="<?= base_url("edit-address/$add_id"); ?>" method="POST" class="">
                              <div class="form-group col-md-6">
                                <label for="" class="label-control">Address Title : </label>
                                <input type="text" name="address_title" class="form-control" value="<?php echo set_value('address_title',$address->title); ?>">
                                <?php echo form_error('address_title'); ?>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="" class="label-control">Address Type :</label>
                                <?php 
                                $options = array(
                                        ''         => 'Please Select Type',
                                        'home'           => 'Home',
                                        'office'         => 'Office',
                                        'other'        => 'Other',
                                );

                                
                                echo form_dropdown('address_type', $options, set_value('address_type',$address->type), "class='form-control'");



                                 ?>
                               <!--  <select name="address_type" id="" class="form-control">
                                  <option value="">Please Select Type</option>
                                  <option value="home">Home</option>
                                  <option value="office">Office</option>
                                  <option value="other">Other</option>
                                </select> -->
                                <?php echo form_error('address_type'); ?>
                                </div>
                              <div class="form-group col-md-6"><label for="" class="label-control">City</label>
                                <input type="text" name="city" value="<?php echo set_value('city',$address->city); ?>" class="form-control">
                                <?php echo form_error('city'); ?>
                              </div>
                                 <div class="form-group col-md-6">
                                <label for="" class="label-control">Contact #</label>
                                <input type="text" name="contact" value="<?php echo set_value('contact',$address->contact_no); ?>" class="form-control">
                                <?php echo form_error('contact'); ?>
                              </div>
                             <!--  <div class="form-group col-md-6"><label for="" class="label-control">Area</label><input type="text" class="form-control"></div>
                              <div class="form-group col-md-6">
                                <label for="" class="label-control">Road</label>
                                <input type="text" name="road" class="form-control">
                              </div> -->
                              <div class="form-group col-md-6">
                                <label for="" class="label-control">Address</label>
                                <textarea name="address_description" id="" cols="15" rows="3" class="form-control"><?php echo set_value('address_description',$address->address); ?></textarea>
                                <?php echo form_error('address_description'); ?>
                                
                              </div>
                             <!--  <div class="form-group col-md-6">
                                <label for="" class="label-control">Building No</label>
                                <input type="text" name="road" class="form-control">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="" class="label-control">Floor</label>
                                <input type="text" name="road" class="form-control">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="" class="label-control">Room & Flat</label>
                                <input type="text" name="road" class="form-control">
                              </div> -->
                               
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
