<?php
/**
 * Bloc Modulaires functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme-blank
 * @since theme-blank 0.1.0
 */


function theme_init_app() {
  load_child_theme_textdomain( 'modules_base', get_stylesheet_directory() . '/languages' );

	$include_folders = include get_stylesheet_directory().'/config/includes.php';

	foreach ($include_folders as $folder) {
		$files = scandir( get_stylesheet_directory()."/$folder/" );
		if ( count( $files ) > 0 ) {
			foreach( $files as $file ) {
				if ( $file !== "." && $file !== ".." && strpos($file, ".php") )
					include_once (get_stylesheet_directory()."/$folder/$file");
			}
		}
	}

}
add_action( 'init', 'theme_init_app', 5 );



/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');



// REMOVE CF7 SPANS
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
// REMOVE CF7 SPANS



