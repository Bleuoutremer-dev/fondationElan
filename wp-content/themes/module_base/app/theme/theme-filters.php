<?php


/* Paramètres par défaut de sprite() */
function default_sprite_parameters() {
	return ' class="sprite"';
}
add_filter('underscore_sprite_default_parameters', 'default_sprite_parameters');




/**
 * theme_filter_page_slug_has_id function.
 * 
 * @access public
 * @param mixed $id
 * @param mixed $item
 * @return void
 */
 
function theme_filter_page_slug_has_id( $id, $item ) {
	return 'nav-' . sanitize_title( $item->title );
}
add_filter( 'nav_menu_item_id', 'theme_filter_page_slug_has_id', 90, 2 );




/**
 * theme_filter_clean_menu_item_classes function.
 * 
 * @access public
 * @param mixed $classes
 * @return void
 */
 
function theme_filter_clean_menu_item_classes( $classes ) {
	
	//$classes = ['menu-item'];
	
	if ( in_array( 'current-menu-item', $classes ) )
		$classes[] = 'nav-item-active';
	
	$classes = array_intersect($classes, array('nav-item-active'));
	
	$classes[] = 'nav-item';
	
	return is_array($classes) ? $classes : '';
	
}
add_filter('nav_menu_css_class', 'theme_filter_clean_menu_item_classes', 100, 1);



