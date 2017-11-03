<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Krispy Chicken</title>
     <?php require 'include.php'; ?>
   </head>
   <body class="page home page-template-default">
      <div id="page" class="hfeed site">
       <?php require 'header.php'; ?>
         <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb" ><a href="index.html">Home</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Track Order</nav>
               </div>
               <!-- .woocommerce-breadcrumb -->
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                     <div id="post-403" class="post-403 page type-page status-publish hentry">
                        <header class="entry-header">
                           <h1 class="entry-title">Track Order</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                           <div class="woocommerce">
                              <form action="#"  class="track_order">
                                 <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                                 <p class="form-row form-row-first">
                                    <label for="orderid">Order ID</label>
                                    <input class="input-text" type="text" name="orderid" id="orderid" placeholder="Found in your order confirmation email." />
                                 </p>
                                 <p class="form-row form-row-last">
                                    <label for="order_email">Billing Email</label>
                                    <input class="input-text" type="text" name="order_email" id="order_email" placeholder="Email you used during checkout." />
                                 </p>
                                 <div class="clear"></div>
                                 <p class="form-row">
                                    <input type="submit" class="button" name="track" value="Track" />
                                 </p>
                                 <input type="hidden" id="_wpnonce" name="_wpnonce" value="c64ec2465f" />
                                 <input type="hidden" name="_wp_http_referer" value="/pizzaro/track-order/" />
                              </form>
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
 <?php require 'footer.php'; ?>
      <!-- For demo purposes – can be removed on production : End -->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/tether.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
      
      <script type="text/javascript" src="assets/js/social.share.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script type="text/javascript" src="assets/js/scripts.min.js"></script>
      <!-- For demo purposes – can be removed on production -->
      <script src="switchstylesheet/switchstylesheet.js"></script>
      <!-- For demo purposes – can be removed on production : End -->
   </body>
</html>
