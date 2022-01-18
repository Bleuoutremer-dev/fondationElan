<?php
setlocale(LC_ALL, get_locale());
load_theme_textdomain( 'underscore', get_template_directory() . '/languages' );



// Plugins Activation 
include_once (get_template_directory()."/_/plugin-activation/config.php");


// Default
$include_folders = ['_/functions'];

// Development files 
if ( defined('ENV') && ENV == 'development' )  
	$include_folders[] = '_/development';

// Woocommerce files
if ( class_exists( 'woocommerce' ) )  
	$include_folders[] = '_/woocommerce';

// Loop files if ACF is active
if ( function_exists( 'get_field' ) ):

	foreach ($include_folders as $folder) {
		$files = scandir( get_template_directory()."/$folder/" );
		if ( count( $files ) > 0 ) {
			foreach( $files as $file ) {
				if ($file !== "." && $file !== ".." && strpos($file, ".php")) 
					include_once (get_template_directory()."/$folder/$file");
			}
		}
	}
	
endif;
