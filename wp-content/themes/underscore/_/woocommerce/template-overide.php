<?php

// if ( wc_underscore_settings('underscore_wc_activate_custom_template') ):
 
// 	add_filter( 'wc_get_template_part', function( $template, $slug, $name ) { 
// 		if ( $name ) {
			
// 			$theme_path = get_template_directory() . '/' . WC()->template_path() . "{$slug}-{$name}.php";		
// 			if ( file_exists( $theme_path ) )
// 				$path = $theme_path;

// 			else
// 				$path = get_template_directory() . '/_/' . WC()->template_path() . 'templates/' . "{$slug}-{$name}.php";
		
// 		} else {
		
// 			$theme_path = get_template_directory() . '/' . WC()->template_path() . "{$slug}.php";		
// 			if ( file_exists( $theme_path ) )
// 				$path = $theme_path;

// 			else
// 				$path = get_template_directory() . '/_/' . WC()->template_path() . 'templates/' . "{$slug}.php";
			  
// 		}
// 		return file_exists( $path ) ? $path : $template;
// 	}, 10, 3 );
	

// 	add_filter( 'woocommerce_locate_template', function( $template, $template_name, $template_path ) { 
		
// 		$theme_path = get_template_directory() . '/' . $template_path . $template_name;
		
// 		if ( file_exists( $theme_path ) )
// 			$path = $theme_path;

// 		else
// 			$path = get_template_directory() . '/_/' . $template_path . 'templates/' . $template_name;	

		
// 		return file_exists( $path ) ? $path : $template;
// 	}, 10, 3 );

// endif;
