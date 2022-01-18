<?php


/**
 * Return true/false for WooCommerce' Underscore settings
 *
 * @since Underscore 2.0
 *
 * @return void
 */

if ( ! function_exists( 'wc_underscore_settings' ) ) :

function wc_underscore_settings( $setting ) {
	$wc_underscore_settings = get_field('underscore_wc_advanced_settings', 'options');
	if (!is_array($wc_underscore_settings)) return false;	
	if ( in_array( $setting, $wc_underscore_settings) && class_exists( 'woocommerce' ) ) return true;
}

endif;








/**
 * Underscore option : activate/deactivate WooCommerce support
 *
 * @since Underscore 2.0
 *
 * @return void
 */
 
if ( wc_underscore_settings('underscore_wc_activate_theme_support') && class_exists( 'woocommerce' ) ):

	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'woocommerce_support' );

endif;	








/**
 * Load styles and scripts
 *
 * @since Underscore 2.0
 *
 * @return void
 */

if ( ! function_exists( 'underscore_wc_styles' ) && class_exists( 'woocommerce' ) ) :
	
function underscore_wc_styles() {

	if ( is_woocommerce() || is_shop() || is_cart() || is_checkout() || is_account_page() ) :
		wp_dequeue_style( 'wcqi-css' );
		wp_deregister_style( 'wcqi-css' );
		// wp_enqueue_style( 'underscore'.'-wc-base', get_template_directory_uri() . '/assets/css/wc-underscore-base.css' );			
	endif;


	if ( is_account_page() ):
		// wp_enqueue_style( 'underscore'.'-wc-dashboard', get_template_directory_uri() . '/assets/css/wc-underscore-dashboard.css' );

		wp_enqueue_script( 'underscore'.'-wc-account-page', get_template_directory_uri() . '/assets/js/wc-underscore-account-page.js', array( 'jquery' ), false, true );		
	endif;
	
	
	// if ( is_woocommerce() || is_shop() || is_cart() || is_checkout() || is_account_page() )
	// wp_enqueue_style( 'underscore'.'-wc-responsive', get_template_directory_uri() . '/assets/css/wc-underscore-responsive.css' );
	

}
add_action( 'wp_enqueue_scripts', 'underscore_wc_styles', 10 );

endif;








/**
 * Underscore option : activate/deactivate WooCommerce default css
 *
 * @since Underscore 2.0
 *
 * @return void
 */
 
if ( wc_underscore_settings('underscore_wc_deactivate_origin_styling') && class_exists( 'woocommerce' ) ):

	add_filter( 'woocommerce_enqueue_styles', '__return_false' );
	add_action( 'wp_enqueue_scripts', 'mgt_dequeue_stylesandscripts', 100 );

	function mgt_dequeue_stylesandscripts() {
		wp_dequeue_style( 'select2' );
		wp_deregister_style( 'select2' );	
		wp_dequeue_script( 'select2');
		wp_deregister_script('select2');	 
	} 
	
endif;








/**
 * Remove "Additionnal information" tab
 *
 * @since Underscore 2.0
 *
 * @return void
 */

if ( class_exists( 'woocommerce' ) ):

	function wc_remove_product_tabs( $tabs ) {
		unset( $tabs['additional_information'] );   // Remove the additional information tab
		return $tabs;
	}
	add_filter( 'woocommerce_product_tabs', 'wc_remove_product_tabs', 98 );

endif;








/**
 * Rewrite WooCommerce notices
 *
 * @since Underscore 2.0
 *
 * @return void
 */
if ( class_exists( 'woocommerce' ) ):
	function reorder_notice_controls($message) {
		$button = [];
		if (preg_match('{<a.*button.*<\/a>}', $message, $button)) {
			$button = array_shift($button);
			$message = str_replace($button, '', $message);

			$button = apply_filters('underscore_wc_notice_button', $button);
			$message = sprintf("<p>%s</p> $button", $message);

	  	return $message;
		}
		return "<p>$message</p>";
	}

	add_filter('woocommerce_add_message', 'reorder_notice_controls');
	add_filter('woocommerce_add_error', 'reorder_notice_controls');
endif;








/**
 * Product display in X Columns
 *
 * @since Underscore 2.0
 *
 * @return void
 */
 
if ( class_exists( 'woocommerce' ) ):
	



	// Change number or products per row to 3
	
	if (!function_exists('loop_columns')) {
		function loop_columns() {
			return wc_get_products_per_row(); // 3 products per row
		}
	}

	if ( ! function_exists( 'underscore_related_products_args' ) ):
		function underscore_related_products_args( $args ) {
			$columns_for_related_products = get_field('underscore_wc_related_products_number', 'options');
			$args['posts_per_page']     = $columns_for_related_products; // 4 related products
			$args['columns']            = $columns_for_related_products; // arranged in columns
			return $args;
		}
	endif;
	
	if ( ! function_exists( 'woocommerce_output_upsells' ) ):
		function woocommerce_output_upsells() {
			$columns_for_related_products = get_field('underscore_wc_related_products_number', 'options');
			woocommerce_upsell_display( $columns_for_related_products, $columns_for_related_products );
		}
	endif;
	

	if ( ! function_exists( 'woocommerce_output_upsells' ) ):
		function woocommerce_output_upsells() {
			$columns_for_related_products = get_field('underscore_wc_related_products_number', 'options');
			woocommerce_upsell_display( $columns_for_related_products, $columns_for_related_products );
		}
	endif;
	
	
	add_filter('loop_shop_columns', 'loop_columns', 999);
	add_filter( 'woocommerce_output_related_products_args', 'underscore_related_products_args' );
	
	//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );	
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

	//add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );	
	add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );	
	

endif;









/**
 * Hide ALL Shipping option when free shipping is available
 *
 * @since Underscore 2.0
 *
 * @param array $available_methods
 */

function hide_all_shipping_when_free_is_available( $rates, $package ) {
 
	if( isset( $rates['free_shipping'] ) ) :
		unset( $rates['flat_rate'] );
	endif;
 
	return $rates;

}

add_filter( 'woocommerce_package_rates', 'hide_all_shipping_when_free_is_available' , 10, 2 );








/**
 * underscore_custom_shipping_free_label function.
 *
 * @since Underscore 2.0
 *
 * @access public
 * @param mixed $label
 * @return void
 */
function underscore_custom_shipping_free_label( $label ) {

  $label =  str_replace( "(Free)", " ", $label );
  $label =  str_replace( "(FREE!)", " ", $label );
  $label =  str_replace( "(Gratuit)", " ", $label );
  $label =  str_replace( "(GRATUIT!)", " ", $label );
 
  return $label;
}
 
add_filter( 'woocommerce_cart_shipping_method_full_label' , 'underscore_custom_shipping_free_label' );

