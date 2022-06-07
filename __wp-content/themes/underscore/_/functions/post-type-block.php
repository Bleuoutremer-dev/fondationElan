<?php
	
/**
 * underscore_create_block function.
 * 
 * @access public
 * @return void
 */
 
// function underscore_create_block() {
// 	$labels = array(
// 		'name'                => __( 'Recurring Blocks', 'underscore' ),
// 		'singular_name'       => __( 'Recurring Block', 'underscore' ),
// 		'menu_name'           => __( 'Recurring Blocks', 'underscore' ),
// 		'name_admin_bar'      => __( 'Recurring Block', 'underscore' ),
// 		'parent_item_colon'   => __( 'Parent Block:', 'underscore' ),
// 		'all_items'           => __( 'All Blocks', 'underscore' ),
// 		'add_new_item'        => __( 'Add New Block', 'underscore' ),
// 		'new_item'            => __( 'New Block', 'underscore' ),
// 		'edit_item'           => __( 'Edit Block', 'underscore' ),
// 		'update_item'         => __( 'Update Block', 'underscore' ),
// 		'search_items'        => __( 'Search Block', 'underscore' ),
// 	);
// 	$args = array(
// 		'label'               => __( 'Recurring Blocks', 'underscore' ),
// 		'labels'              => $labels,
// 		'supports'            => array( 'title', 'revisions' ),
// 		'hierarchical'        => false,
// 		'public'              => false,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		'menu_position'       => 40,
// 		'menu_icon'           => 'dashicons-align-left',
// 		'show_in_admin_bar'   => false,
// 		'show_in_nav_menus'   => true,
// 		'can_export'          => true,
// 		'has_archive'         => false,		
// 		'exclude_from_search' => true,
// 		'publicly_queryable'  => false,
// 		'rewrite'             => false,
// 		'capability_type'     => 'page',
// 	);
// 	register_post_type( 'block', $args );

// }
// add_action( 'init', 'underscore_create_block', 0 );


// 
// function add_admin_menu_separator($position) {
//   global $menu;
//   $index = 0;
//   foreach($menu as $offset => $section) {
//     if (substr($section[2],0,9)=='separator')
//       $index++;
//     if ($offset>=$position) {
//       $menu[$position] = array('','read',"separator{$index}",'','wp-menu-separator');
//       break;
//     }
//   }
//   ksort( $menu );
// }

