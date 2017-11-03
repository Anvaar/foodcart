<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>My Account | Krispy Chicken</title>
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
                            <div class=""><h2>My Orders :</h2></div>
                            <table class="table table-stipped table-bordered">
                              <tr>
                                <th>order #</th>
                                <th>items</th>
                                <th>quantity</th>
                                <th>price</th>
                              </tr>
                                    <tr>
                                      
                                      <td>12</td>
                                      <td>Krispy Chicken , Broast</td>
                                      <td>2</td>
                                      <td>250 AED</td>
                                    </tr>
                                       
                            </table>
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
