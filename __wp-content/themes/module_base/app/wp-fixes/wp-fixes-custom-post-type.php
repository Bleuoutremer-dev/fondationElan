<?php
	
function theme_add_custom_types_to_query( $query ) {

    if ( is_tag() && $query->is_main_query() ) {

        // this gets all post types:
        //$post_types = get_post_types();

        // this gets specific post types:
				$post_types = array( 'page', 'product' );

        $query->set( 'post_type', $post_types );
    }
    
}
add_filter( 'pre_get_posts', 'theme_add_custom_types_to_query' );	