<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Krispy Chicken</title>
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
               <div class="pizzaro-sorting">
                  <div class="food-type-filter">
                     <div class="clear-food-type-filter chosen"><a href="#">Show All</a>
                     </div>
                     <div class="widget woocommerce widget_layered_nav">
                        <ul>
                           <li class="wc-layered-nav-term "><a href="#">Beef</a> <span class="food-type-icon"><i class="fa fa-cutlery"></i></span></li>
                           <li class="wc-layered-nav-term "><a href="#">Chicken</a> <span class="food-type-icon"><i class="fa fa-fire"></i></span></li>
                           <li class="wc-layered-nav-term "><a href="#">Veg</a> <span class="food-type-icon"><i class="po po-veggie-icon"></i></span></li>
                        </ul>
                     </div>
                     <!-- <div class="create-your-own"><a href="single-product-v3.php">Create your own</a></div> -->
                  </div>
               </div>
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                     <div class="columns-3">
                        <ul class="products">
                           <?php $count = 0 ;?>
                        <?php if(count($data)) : foreach($data as $product ): ?>
                           
                        <?php $count = $count + 1 ; ?>
                           <li class="product <?php $count == 1 ? 'first' : '' ?> <?php $count == 3 ? 'last' : '' ?> ">
                              <div class="product-outer">
                                 <div class="product-inner">
                                    <div class="product-image-wrapper">
                                       <a href="<?= base_url('product/details/'.$product['id']); ?>" class="woocommerce-LoopProduct-link">
                                       <img src="<?= base_url("assets/user/images/products/min/$product[image]"); ?>" class="img-responsive" alt="">
                                       </a>
                                    </div>
                                    <div class="product-content-wrapper">
                                       <a href="<?= base_url('product/details/'.$product['id']); ?>" class="woocommerce-LoopProduct-link">
                                          <h3><?= $product['title']; ?></h3>
                                          <div itemprop="description">
                                             <p style="max-height: none;"><?= $product['description']; ?></p>
                                          </div>
                                      <!--     <div  class="yith_wapo_groups_container">
                                             <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                <h3><span>Pick Size</span></h3>
                                                <div class="ywapo_input_container ywapo_input_container_radio">
                                                   
                                                   
                                                   <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                </div>
                                                <div class="ywapo_input_container ywapo_input_container_radio">
                                                   
                                                   <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                   <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                </div>
                                             </div>
                                          </div> -->
                                       </a>
                                       <div class="hover-area">
                                          <a rel="nofollow" href="<?= base_url('cart?id='.$product['id'].'&request=add'); ?>" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.product-outer -->
                           </li>
       
                        
                     <?php   endforeach; ?>
                  <?php else : ?>
                     <p>No Product Found</p>
                  <?php endif; ?>
                     </ul>
                     </div>
                     <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                           <li><span class="page-numbers current">1</span></li>
                           <li><a class="page-numbers" href="#">2</a></li>
                           <li><a class="page-numbers" href="#">3</a></li>
                           <li><a class="next page-numbers" href="#">Next Page &nbsp;&nbsp;&nbsp;→</a></li>
                        </ul>
                     </nav>
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
