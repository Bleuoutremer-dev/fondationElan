<?php
/**
 * Reordering WooCommerce action for basis template.
 *
 * @since Underscore 2.0
 *
 * @return void
 */
 
if ( wc_underscore_settings('underscore_wc_activate_reordering_hooks') ):	
	if ( class_exists( 'woocommerce' ) ) :	
	
		add_filter( 'woocommerce_show_page_title', 										function( $page_title ) { return false; });
		remove_action( 'woocommerce_before_main_content',							'woocommerce_output_content_wrapper', 10);
		remove_action( 'woocommerce_after_main_content',							'woocommerce_output_content_wrapper_end', 10);
	
		
		remove_action( 'woocommerce_before_shop_loop_item_title',	 		'woocommerce_show_product_loop_sale_flash', 10 );			 
		remove_action( 'woocommerce_after_shop_loop_item_title', 			'woocommerce_template_loop_rating', 10 );			 
		remove_action( 'woocommerce_after_shop_loop_item', 						'woocommerce_template_loop_add_to_cart', 10 );
		
		
		remove_action( 'woocommerce_before_single_product_summary', 	'woocommerce_show_product_sale_flash', 10 );
		remove_action( 'woocommerce_single_product_summary', 					'woocommerce_template_single_meta', 40 );		
		
	
		global $wc_cart_notices;
		remove_action( 'woocommerce_before_checkout_form', array( $wc_cart_notices, 'add_cart_notice' ) );
		
	endif;
endif;