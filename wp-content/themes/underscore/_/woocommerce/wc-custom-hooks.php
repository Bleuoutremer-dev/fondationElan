<?php



/**
 * underscore_wc_add_title function.
 * 
 * @since Underscore 2.0 
 *
 * @access public
 * @return void
 */
 
function underscore_wc_add_title() {
	if ( is_cart() || is_checkout() ): ?>
	<h1 class="big title">
		<?php the_title() ?>
	</h1>
<?php endif; 
} 
	
add_action('before_woocommerce_cart_is_empty', 	'underscore_wc_add_title', 10);	
add_action('woocommerce_before_cart', 					'underscore_wc_add_title', 90);
add_action('woocommerce_before_checkout_form', 	'underscore_wc_add_title', 5);	






/**
 * underscore_wc_shipping_details function.
 * 
 * @since Underscore 2.0 
 * 
 * @access public
 * @return void
 */
 
function underscore_wc_shipping_details() {
	$title = get_field('underscore_wc_shipping_details_title', 'options');
	$content = get_field('underscore_wc_shipping_details_content', 'options');
	
	if ( $title && $content ):
?>
	<div class="wc-block extra-padding underscore-shipping-details sans-serif">
		
		<h2 class="big title sans-serif"><?= $title ?></h2>
		
		<?= $content  ?>
			
	</div>
<?php
	endif;
}

//add_action( 'woocommerce_cart_collaterals', 'underscore_wc_shipping_details', 10);
