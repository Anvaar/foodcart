<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Contact Us | Krispy Chicken</title>
     <?php require 'include.php'; ?>

     <style>
        .yith_wapo_groups_container
        {
         display: none;
        }
     </style>
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
                     Contact Us
                  </nav>
               </div>
               <div id="primary" class="content-area" >
                  <main id="main" class="site-main" >
                  <div class="col-sm-6">
                        <h2>Contact Us :-</h2>

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
                        <form  action="<?= base_url('contact'); ?>" method='POST'>
                          <div class="form-group">
                            <label for="" class="label-control">Full Name:  <span class="text-danger">*</span></label>
                            <input type="text" name="fullname" value="<?php echo set_value('fullname'); ?>" class="form-control">
                            <?php echo form_error('fullname'); ?>
                          </div>
                          <div class="form-group">
                            <label for="" class="label-control">Phone : <span class="text-danger">*</span></label>
                            <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control">
                            
                            <?php echo form_error('phone'); ?>
                          </div>
                          <div class="form-group">
                            <label for="" class="label-control">Email : <span class="text-danger">*</span></label>
                            <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
                            <?php echo form_error('email'); ?>
                          </div>
                          <div class="form-group">
                            <label for="" class="label-control">Message : <span class="text-danger">*</span></label>
                           <textarea name="message" cols="30" rows="10" class="form-control"><?php echo set_value('message'); ?></textarea>
                           <?php echo form_error('message'); ?>
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-primary">
                          </div>
                        </form>


                  </div>
                  <div class="col-sm-6">
                    <h2>Address :-</h2>
                    <address>
                      <strong>Krispy Chicken</strong><br>
                      xxxx XXXXXX Street, Suite xxx<br>
                      XXXXXX, UAE<br>
                      <abbr title="Phone">P:</abbr> 043 995 567
                    </address>

                    <address>
                      <strong>Customer Care</strong><br>
                      <a href="mailto:#">customer@krispychicken.com</a>
                    </address>
                  </div>

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
