<?php

define('THEMEROOT', get_stylesheet_directory_uri());
function scripts() {

	wp_enqueue_style( 'elastic-slider', THEMEROOT . '/assets/css/elastic-slider.css', false, null );
	wp_enqueue_style( 'dokan-child-style', THEMEROOT . '/assets/css/style.css', false, null );


	wp_register_script( 'elastic-slider', THEMEROOT . '/assets/js/jquery.eislideshow.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'owl-carousel', THEMEROOT . '/assets/js/owl-carousel.min.js', false, null, true );
	wp_enqueue_script( 'app-min', THEMEROOT . '/assets/js/app.min.js', false, null, true );

}

add_action( 'wp_enqueue_scripts', 'scripts', 99);

/**
 * [cbp_switcher description]
 * @return [type] [description]
 */
function cbp_switcher() {
	?>
	<div class="cbp-vm-options">
        <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
        <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
    </div> 
    <?php
}

add_action( 'woocommerce_before_shop_loop', 'cbp_switcher', 35 );

/**
 * [cbp_vm_title description]
 * @return [type] [description]
 */
function cbp_vm_title() {
	?>
	<h2 class="cbp-vm-title"><a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h2> 
	<?php
}
add_action( 'woocommerce_after_shop_loop_item_title', 'cbp_vm_title' );

function cbp_price() {
	global $product;
	?>

	<?php if ( $price_html = $product->get_price_html() ) : ?>
		<div class="cbp-vm-price">
			<span class="price"><?php echo $price_html; ?></span>
		</div>
	<?php endif;
}
add_action( 'woocommerce_after_shop_loop_item_title', 'cbp_price', 15 );



add_action( 'init', function() {
	remove_action( 'woocommerce_after_shop_loop_item', 'dokan_product_loop_price' );
});


/**
 * Renders item-bar of products in the loop
 *
 * @global WC_Product $product
 */
function dokan_product_loop_price_child() {
    global $product;
    ?>
		
		<?php woocommerce_template_loop_add_to_cart(); ?>
        <?php dokan_add_to_wishlist_link(); ?>
    <?php
}

add_action( 'woocommerce_after_shop_loop_item', 'dokan_product_loop_price_child' );


/**
 * string_limit_words description
 * @param  [type] $string     [description]
 * @param  [type] $word_limit [description]
 * @return [type]             [description]
 */
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words) . ' ...';
}

// remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

add_action( 'dokan_child_after_header', 'woocommerce_breadcrumb', 20, 0 );
