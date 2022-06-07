<?php

/**
 * Get clean category list (needs ACF).
 *
 * @since Underscore 2.0
 *
 * @return STRING
 */
 
function wc_get_clean_categories($wrapper_classes = 'wc-nav-categories') {
	global $wp_query;
	
	$args = array(
		'order'      => 'ASC',
		'hide_empty' => true,
	);
	
	$product_categories = get_terms( 'product_cat', $args );	
	$shop_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
	$current_category = $wp_query->get_queried_object();
	$active = ( is_woocommerce() && is_shop() && !is_product_category() ) ? 'Tous' : $current_category->name;
	
?>
<ul class="<?= $wrapper_classes ?>" data-title="<?= $active ?>">
	
	<li<?= ( is_woocommerce() && is_shop() && !is_product_category() ) ? ' class="active"' : '' ?>>
		<a href="<?= $shop_url ?>/#produits"><?= _x('All', 'categories', 'underscore') ?></a>
	</li>
<?php
	foreach ($product_categories as $product_categorie ):
?>
	<li<?= ( is_product_category( $product_categorie->slug ) ) ? ' class="active"' : ''  ?>>
		<a class="product-category-link" href="<?= get_term_link( $product_categorie ) ?>" title="<?= $product_categorie->name ?>">
			<?= $product_categorie->name ?>
		</a>
	</li>
<?php 
	endforeach 
?>

</ul>


<?php
}
 
 
 
 
/**
 * Get the category nicename (needs ACF).
 *
 * @since Underscore 2.0
 *
 * @return STRING
 */
 
if ( ! function_exists( 'wc_get_product_category_nice_name' ) ) :
	
function wc_get_product_category_nice_name( $object, $link = false ) {
	
	global $post;
	if ( !$object ) $object = $post;

	$categories = array_shift( get_the_terms( $post->ID, 'product_cat' ) );
	$cat_id = $categories->term_id;	
	$category_link = get_term_link( $categories );
	
	$category_name = get_field('category_nice_name', 'product_cat_'.$cat_id);
	if (!$category_name) $category_name = get_term($cat_id, 'product_cat')->name;
	
	if (!$link && $category_name)
		return $category_name;
	else if ($category_name)
		return '<a title="'. $category_name .'" href="' . $category_link . '">' . $category_name . '</a>';

}

function the_product_category_nice_name( $object, $link = false ) {
	echo wc_get_product_category_nice_name( $object, $link );
}

endif;



 
/**
 * Get the shop URL.
 *
 * @since Underscore 2.0
 *
 * @return STRING
 */
if ( ! function_exists( 'wc_get_shop_url' ) ) :

	function wc_get_shop_url() {
		return get_permalink( woocommerce_get_page_id( 'shop' ) );
	}

endif;




/**
 * Get the account URL.
 *
 * @since Underscore 2.0
 *
 * @return STRING
 */
 
if ( ! function_exists( 'wc_get_account_url' ) ) :

function wc_get_account_url() {
	$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
	if ( $myaccount_page_id ) return get_permalink( $myaccount_page_id );	
}

function the_account_url() {
	echo wc_get_account_url();	
}

endif;




/**
 * Get the logout URL.
 *
 * @since Underscore 2.0
 *
 * @return STRING
 */

if ( ! function_exists( 'wc_get_customer_logout_url' ) ) :

function wc_get_customer_logout_url() {
	global $woocommerce; 
	$customer_logout_endpoint = $woocommerce->query->query_vars['customer-logout'];
	return wc_get_account_url() . $customer_logout_endpoint;
}

function the_customer_logout_url() {
	return wc_get_customer_logout_url();
}

endif;






/**
 * wc_get_products_per_row function.
 * 
 * @access public
 * @return void
 */
 
function wc_get_products_per_row() {
	return get_field('underscore_wc_shop_columns', 'options');
}






/**
 * woo_product_categories_dropdown function.
 * 
 * Register a shortcode that creates a product categories dropdown list
 *
 * Use: [product_categories_dropdown orderby="title" count="0" hierarchical="0"]
 *
 * @access public
 * @param mixed $atts
 * @return void
 */
 
function woo_product_categories_dropdown( $atts ) {
	global $wp_query;
  extract(shortcode_atts(array(
    'orderby' 	 		 		 => '',
    'count'        			 => 0,
    'hierarchical' 			 => 0,
    'show_uncategorized' => 0
    ), $atts));
	
	ob_start();
	$order = ( isset( $orderby ) && $orderby != '' ) ? $orderby : 'order';
	
	$args = array(
		'selected'						=> $wp_query->query_vars['product_cat'],
		'show_count'					=> $count,
		'show_uncategorized'	=> $show_uncategorized,
		'hierarchical'				=> $hierarchical,
		'orderby'							=> $order,
	);
	?>
<div class="wc_product_dropdown_categories">
	<?php
	// Stuck with this until a fix for http://core.trac.wordpress.org/ticket/13258
	wc_product_dropdown_categories( $args );
	?>
	<script type='text/javascript'>
	/* <![CDATA[ */

		var product_cat_dropdown = $('.dropdown_product_cat');		
		product_cat_dropdown.on('change', function() {
			location.href = "<?= home_url(); ?>/?product_cat=" + this.value;
		});

	/* ]]> */
	</script>
</div>
	<?php
	
	return ob_get_clean();
	
}

add_shortcode( 'product_categories_dropdown', 'woo_product_categories_dropdown' );






