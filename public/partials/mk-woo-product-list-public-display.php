<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://webmkit.com
 * @since      1.0.0
 *
 * @package    Mk_Woo_Product_List
 * @subpackage Mk_Woo_Product_List/public/partials
 */
?>

<div class="row">  
  <!-- ============================================== CONTENT ============================================== -->
  <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder"> 
    
    <!-- ============================================== SCROLL TABS ============================================== -->
    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
      <div class="more-info-tab clearfix ">
        <h3 class="new-product-title pull-left"><?php echo $atts['title']; ?></h3>
      </div>
      <div class="tab-content outer-top-xs">
        <div class="tab-pane in active" id="all">
          <div class="product-slider">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

    <?php
	$args = array(
        'product_cat' => $atts['category'],
        'orderby' => 'rand'
    );
    
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
        global $product; global $post;?>
    	<div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="<?php echo get_permalink($loop->post->ID) ?>">
                  	<?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                    else echo '<img src="' . woocommerce_placeholder_img_src() . '"/>'; ?>
                  </a> </div>
                </div>
                <!-- /.product-image -->
                <div class="product-info text-left">
                  <h3 class="name"><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>
                  <!-- <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div> -->
                  <div class="product-price"> <span class="price"> <?php echo $product->get_price_html(); ?></span></div>
                  <?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>
                </div>
                <!-- /.cart --> 
              </div>
              <!-- /.product --> 
            </div>
            <!-- /.products --> 
        </div>
          <!-- /.item -->

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul>

            </div>
            <!-- /.home-owl-carousel --> 
          </div>
          <!-- /.product-slider --> 
        </div>
        <!-- /.tab-pane -->
        
      </div>
      <!-- /.tab-content --> 
    </div>
    <!-- /.scroll-tabs --> 
  </div>
</div>
<!-- /.row --> 