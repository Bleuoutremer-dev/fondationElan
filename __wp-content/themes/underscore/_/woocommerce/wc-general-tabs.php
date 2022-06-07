<?php
	
/**
 * Add custom tabs to single product page (Need ACF)
 *
 * @since Underscore 2.0
 *
 * @return void
 */	

function wc_acf_general_product_tabs( $tabs ) {

	global $post;	
	$priority = 0;
	
	if ( have_rows('underscore_wc_product_tabs', 'options') ):
		while ( have_rows('underscore_wc_product_tabs', 'options') ) : the_row();	
		
			if( get_row_layout() == 'standard-tab' ):
				$title 				= get_sub_field('underscore_wc_tab_title');
				$slug 				= get_sub_field('underscore_wc_tab_slug');
				$content 			= get_sub_field('underscore_wc_tab_content' );
				$visibility		= get_sub_field('underscore_wc_tab_visible');
			endif;
			
			if ( !empty($content) && !$visibility ) {		
		
				$tabs[$slug] = array(
					'title'    => $title,
					'priority' => 50 + $priority++,
					'callback' => 'wc_acf_render_product_tab',
					'content'  => apply_filters('the_content', $content)
				);		

			}
	
		endwhile;
	endif;
	
	return $tabs;
	 
}
add_filter( 'woocommerce_product_tabs', 'wc_acf_general_product_tabs' );


function  wc_acf_render_product_tab($key,$tab){
	global $post;
	//if ( $title = $tab['title'] ) echo '<h2>'. $title .'</h2>';
	if ( $content = $tab['content'] ) echo $content;
}