<?php
/**
 * Add qTranslate Slug translation to the original WC function (wc-product-functions.php)	
 *	
 * custom_wc_product_post_type_link function.
 * 
 * @access public
 * @param mixed $permalink
 * @param mixed $post
 * @return void
 */

if ( !function_exists('custom_wc_product_post_type_link') ): 

	function custom_wc_product_post_type_link( $permalink, $post ) {
		// Abort if post is not a product
		if ( $post->post_type !== 'product' ) {
			return $permalink;
		}
	
		// Abort early if the placeholder rewrite tag isn't in the generated URL
		if ( false === strpos( $permalink, '%' ) ) {
			return $permalink;
		}
	
		// Get the custom taxonomy terms in use by this post
		$terms = get_the_terms( $post->ID, 'product_cat' );
	
		if ( ! empty( $terms ) ) {
			usort( $terms, '_usort_terms_by_ID' ); // order by ID
	
			$category_object = apply_filters( 'wc_product_post_type_link_product_cat', $terms[0], $terms, $post );
			$category_object = get_term( $category_object, 'product_cat' );
			
			
			
			// The new code is here, control term slug when needed
			if ( class_exists('QtranslateSlug') )
				$product_cat   = get_translate_term_slug( $category_object->term_id );
			else
				$product_cat   = $category_object->slug;
	
	
	
			if ( $parent = $category_object->parent ) {
				$ancestors = get_ancestors( $category_object->term_id, 'product_cat' );
				foreach ( $ancestors as $ancestor ) {
					$ancestor_object = get_term( $ancestor, 'product_cat' );
					$product_cat     = $ancestor_object->slug . '/' . $product_cat;
				}
			}
		} else {
			// If no terms are assigned to this post, use a string instead (can't leave the placeholder there)
			$product_cat = _x( 'uncategorized', 'slug', 'woocommerce' );
		}
	
		$find = array(
			'%year%',
			'%monthnum%',
			'%day%',
			'%hour%',
			'%minute%',
			'%second%',
			'%post_id%',
			'%category%',
			'%product_cat%'
		);
	
		$replace = array(
			date_i18n( 'Y', strtotime( $post->post_date ) ),
			date_i18n( 'm', strtotime( $post->post_date ) ),
			date_i18n( 'd', strtotime( $post->post_date ) ),
			date_i18n( 'H', strtotime( $post->post_date ) ),
			date_i18n( 'i', strtotime( $post->post_date ) ),
			date_i18n( 's', strtotime( $post->post_date ) ),
			$post->ID,
			$product_cat,
			$product_cat
		);
	
		$permalink = str_replace( $find, $replace, $permalink );
	
		return $permalink;
	}
	
	remove_filter( 'post_type_link', 'wc_product_post_type_link', 10 );
	add_filter( 'post_type_link', 'custom_wc_product_post_type_link', 610, 2 ); // qTranslate Slug filter is 600
endif;
