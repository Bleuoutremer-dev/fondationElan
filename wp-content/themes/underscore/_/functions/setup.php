<?php
/**
 * Add SVG support
 *
 * @since Underscore 2.0
 *
 * @return void
 */
 
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );





/**
 * Remove width/height attributes
 *
 * @since Underscore 2.0
 *
 * @return void
 */

function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}
add_filter( 'post_thumbnail_html', 			'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor',			'remove_width_attribute', 10 );
add_filter( 'the_content', 							'remove_width_attribute', 10 );





/**
 * Return true/false for Underscore scripts
 *
 * @since Underscore 2.0
 *
 * @return void
 */
if ( ! function_exists( 'underscore_scripts' ) ) :
	function underscore_scripts() {
		return get_field('underscore_scripts', 'options');
	}

	function is_underscore_scripts($js) {
		if ( in_array( $js, underscore_scripts() ) )
			return true;
		else 
			return false;
	}
endif;



/**
 * Add essential classes to the body.
 *
 * @since Underscore 2.0
 *
 * @return void
 */

if ( ! function_exists( 'underscore_body_essential_classes' ) ) :
	function underscore_body_essential_classes( $classes ) {
		// $classes[] = …;

		return $classes;
	}
	add_filter( 'body_class', 'underscore_body_essential_classes' );
endif;




/**
 * Enqueue scripts and styles for the back-end.
 *
 * @since Underscore 2.0
 *
 * @return void
 */
if ( ! function_exists( 'underscore_admin_style' ) ) :
	function underscore_admin_style() {
		wp_register_style( 'underscore' . '_admin_css', get_template_directory_uri() . '/assets/css/admin-styles.css', false, '1.0.0' );
		wp_enqueue_style( 'underscore' . '_admin_css' );
	}
	add_action( 'admin_enqueue_scripts', 'underscore_admin_style' );
endif;




/**
 * Setup basic navigations
 *
 * @since Underscore 2.0
 *
 * @return void
 */
if ( ! function_exists( 'underscore_basic_navigations' ) ) :
	function underscore_basic_navigations() {
		$locations = array(
			'main' => __( 'Main navigation', 'underscore' ),
			'footer' => __( 'Footer navigation', 'underscore' ),
		);
		register_nav_menus( $locations );
	}
	add_action( 'init', 'underscore_basic_navigations' );
endif;




/**
 * Remove hidden admin menu items
 *
 * @since Underscore 2.0
 *
 * @return void
 */
function remove_menus() {
	$hidden_entries = get_field('underscore_hidden_admin_menu_entries', 'options');
	if (!is_array($hidden_entries)) return false;
	foreach ($hidden_entries as $entry) remove_menu_page($entry);
	// if ( get_current_user_id() != 2) remove_menu_page( 'tools.php' );
}
add_action( 'admin_menu', 'remove_menus' );

function remove_create_menu() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('new-post');
	
	if ( get_current_user_id() != 2):	 
		$wp_admin_bar->remove_menu('new-page'); 
		$wp_admin_bar->remove_menu('new-link'); 
		$wp_admin_bar->remove_menu('new-user'); 
		$wp_admin_bar->remove_menu('new-theme'); 
		$wp_admin_bar->remove_menu('new-plugin');
	endif;
}
add_action( 'wp_before_admin_bar_render', 'remove_create_menu' );

/**
 * enqueue_theme_scripts function
 * Les scripts et styles sont ajoutés dans
 * - config/scripts.php
 * - config/styles.php
 * 
 * @access public
 * @return void
 */
function enqueue_theme_scripts_styles() {
	if ($config_dir = get_theme_config_directory()) {
		$scripts = include($config_dir.'/scripts.php');
		foreach ($scripts as $name => $params) {
			if (isset($params['condition']) && !$params['condition']) continue;
			wp_enqueue_script( 
				$name, 
				$params['src'].(!empty($params['defer']) ? '#defer' : ''), 
				(isset($params['deps']) ? $params['deps'] : []),
				(isset($params['ver']) ? $params['ver'] : false), 
				(isset($params['in_footer']) ? $params['in_footer'] : true) 
			);
		}

		$styles = include($config_dir.'/styles.php');
		foreach ($styles as $name => $params) {
			if (isset($params['condition']) && !$params['condition']) continue;
			wp_enqueue_style( 
				$name, 
				$params['src'], 
				(isset($params['deps']) ? $params['deps'] : []),
				(isset($params['ver']) ? : false) 
			);
		}
	}
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts_styles', 15);

/**
 * defer_enqueue_scripts function.
 * Permet d’ajouter l’attribut defer aux scripts qui ont un tag #defer
 * 
 * @access public
 * @param mixed $tag
 * @param mixed $handle
 * @param mixed $src
 * @return void
 */
function defer_enqueue_scripts($tag, $handle, $src) {
	if (preg_match('/#defer/', $tag)) {
		$tag = str_replace('#defer', '', $tag);
		$tag = str_replace( '<script', '<script defer', $tag);
	}
	if (preg_match('/#async/', $tag)) {
		$tag = str_replace('#async', '', $tag);
		$tag = str_replace( '<script', '<script async', $tag);
	}
	return $tag;
}
add_filter('script_loader_tag', 'defer_enqueue_scripts', 10, 3);