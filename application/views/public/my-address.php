<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>My Address | Krispy Chicken</title>
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
                     My Address
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
                             <a href="<?= base_url('add-address'); ?>" class="pull-right btn btn-info "><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Address</a>
                         <h2 class="page-header">My Address :</h2>
                              
                              
                          
                           <div class="row">
                     <?php if( count($addresses) > 0):
                                //$count = $this->uri->segment(3, 0);
                                foreach($addresses as $address ): ?>
                           
                            <div class="col-sm-6 col-md-4">
                              <div class="thumbnail">

                                <div class="caption">
                                  <h3><?= $address->title; ?></h3>
                                  <p class="help-text"><?= $address->city ?></p>
                                  <p><?= $address->address; ?></p>
                                  <p><a href="<?= base_url("edit-address/".$address->id);?>" class="btn btn-primary" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                    <a href="<?= $address->id; ?>" class="btn btn-danger disabled" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a></p>
                                </div>
                              </div>
                            </div>


                          
                        
                         <?php endforeach; ?>

                        <?php else: ?>
                               
                                   <b>No Records Found.</b>
                                    
                        <?php endif; ?> 
                      </div>
                     
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
