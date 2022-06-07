<?php

/**
 * deva_create_carousel function.
 *
 * @access public
 * @return void
 */

function theme_create_carousel() {
	$labels = array(
		'name'                => __( 'Carousels', '' ),
		'singular_name'       => __( 'Carousel', '' ),
		'menu_name'           => __( 'Carousels', '' ),
		'name_admin_bar'      => __( 'Carousel', '' ),
		'parent_item_colon'   => __( 'Parent Carousel:', '' ),
		'all_items'           => __( 'All Carousels', '' ),
		'add_new_item'        => __( 'Add New Carousel', '' ),
		'new_item'            => __( 'New Carousel', '' ),
		'edit_item'           => __( 'Edit Carousel', '' ),
		'update_item'         => __( 'Update Carousel', '' ),
		'search_items'        => __( 'Search Carousel', '' ),
	);
	$args = array(
		'label'               => __( 'Carousels', '' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 39,
		'menu_icon'           => 'dashicons-format-video',
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'rewrite'             => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'carousel', $args );
}
add_action( 'init', 'theme_create_carousel', 10 );
