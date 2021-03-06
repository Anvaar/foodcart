<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login - Register | Krispy Chicken</title>
     <?php require 'include.php'; ?>

     <style>
        .yith_wapo_groups_container
        {
         display: none;
        }
     </style>
   </head>
   <body class="woocommerce-account">
      <div id="page" class="hfeed site">
        <?php require 'header.php'; ?>
         <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb" ><a href="<?= base_url(''); ?>">Home</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>My Account</nav>
               </div>
               <!-- .woocommerce-breadcrumb -->
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                     <div id="post-10" class="post-10 page type-page status-publish hentry">
                        <div class="entry-content">
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
                           <div class="woocommerce">
                              <div class="customer-login-form">
                                 <span class="or-text">or</span>
                                 <div class="u-columns col2-set" id="customer_login">
                                    <div class="u-column1 col-1">
                                       <h2>Login</h2>
                                       <form action="<?= base_url('login'); ?>" method="POST"  class="login">
                                          <p class="before-login-text">Welcome back! Sign in to your account</p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="username">Email address <span class="required">*</span></label>
                                             <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="login_email" id="username" value="<?php echo set_value('login_email'); ?>" />
                                          <?php echo form_error('login_email'); ?>
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="password">Password <span class="required">*</span></label>
                                             <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="login_pass" id="password" />
                                             <?php echo form_error('login_pass'); ?>
                                          </p>
                                          <p class="form-row">
                                             <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="02aaeb6b10" />
                                             <input type="hidden" name="_wp_http_referer" value="/pizzaro/my-account/" />
                                             <input type="submit" class="woocommerce-Button button" name="login" value="Login" />
                                             <label for="rememberme" class="inline">
                                             <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me
                                             </label>
                                          </p>
                                          <p class="woocommerce-LostPassword lost_password">
                                             <a href="#">Lost your password?</a>
                                          </p>
                                       </form>
                                    </div>
                                    <div class="u-column2 col-2">
                                       <h2>Register</h2>
                                        <form action="<?= base_url('register');?>" method="POST"  class="register">
                                          <p class="before-register-text">Create your very own account</p>
                                           <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_email">Full Name  <span class="required">*</span></label>
                                             <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="reg_name" id="reg_name" value="<?php echo set_value('reg_name'); ?>" />
                                             <?php echo form_error('reg_name'); ?>
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_email">Email address <span class="required">*</span></label>
                                             <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="reg_email" id="reg_email" value="<?php echo set_value('reg_email'); ?>" />
                                             <?php echo form_error('reg_email'); ?>
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_password">Password <span class="required">*</span></label>
                                             <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="reg_password" id="reg_password" />
                                             <?php echo form_error('reg_password'); ?>
                                          </p>
                                          <!-- Spam Trap -->
                                          <div style="left: -999em; position: absolute;">
                                             <label for="trap">Anti-spam</label>
                                             <input type="text" name="email_2" id="trap" tabindex="-1" />
                                          </div>
                                          <p class="woocomerce-FormRow form-row">
                                             <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="1fe13dcb6d" />
                                             <input type="hidden" name="_wp_http_referer" value="/pizzaro/my-account/" />
                                             <input type="submit" class="woocommerce-Button button" name="register" value="Register" />
                                          </p>
                                          <div class="register-benefits">
                                             <h3>Sign up today and you will be able to :</h3>
                                             <ul>
                                                <li>Speed your way through checkout</li>
                                                <li>Track your orders easily</li>
                                                <li>Keep a record of all your purchases</li>
                                             </ul>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.customer-login-form -->
                           </div>
                        </div>
                        <!-- .entry-content -->
                     </div>
                     <!-- #post-## -->
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>
         <!-- #content -->
          <!-- #colophon -->
      </div>
      <!-- For demo purposes – can be removed on production -->
<?php require 'footer.php'; ?>
   </body>
</html>
