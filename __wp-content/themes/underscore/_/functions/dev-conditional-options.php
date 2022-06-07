<?php
/**
 * Activate WP_DEBUG mode for admin users
 *
 * @since Underscore 2.0
 *
 * @return void
 */
if ( class_exists('acf') ) {
	if ( get_field('underscore_wpdebug', 'options') && current_user_can( 'manage_options' ) ):
		error_reporting(-1);
		define('WP_DEBUG', true);
		define('WP_DEBUG_LOG', false);
		define('WP_DEBUG_DISPLAY', true);
		@ini_set('display_errors', E_ALL);
	endif;


	/**
	 * Return true/false for WP scripts
	 *
	 * @since Underscore 2.0
	 *
	 * @return void
	 */
	function is_wp_scripts_disabled($script) {
		$disabled_scripts = get_field('underscore_disblable_wp_scripts', 'options');
		if (!is_array($disabled_scripts)) return false;
		if ( in_array($script, $disabled_scripts) ) return true;
		else return false;
	}


	/**
	 * Underscore conditional options
	 *
	 * @since Underscore 2.0
	 *
	 * @return void
	 */
	if ( is_wp_scripts_disabled('headlink') ):
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action( 'wp_head', 'wp_shortlink_wp_head');
		remove_action ('wp_head', 'rsd_link');
	endif;

	if ( is_wp_scripts_disabled('wp_version') ) remove_action('wp_head', 'wp_generator');

	if ( is_wp_scripts_disabled('emojis') ):
		function disable_wp_emojicons() {
		  // all actions related to emojis
		  remove_action( 'admin_print_styles', 'print_emoji_styles' );
		  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		  remove_action( 'wp_print_styles', 'print_emoji_styles' );
		  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		
		  // filter to remove TinyMCE emojis
		  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
		}
		add_action( 'init', 'disable_wp_emojicons' );
		
		function disable_emojicons_tinymce( $plugins ) {
		  if ( is_array( $plugins ) ) {
		    return array_diff( $plugins, array( 'wpemoji' ) );
		  } else {
		    return array();
		  }
		}
	endif;
}