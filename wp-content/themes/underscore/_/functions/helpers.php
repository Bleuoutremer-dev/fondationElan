<?php

if ( ! function_exists('snippet') ):

	/**
	 * snippet()
	 * 
	 * @param string $name, array $vars
	 * @return string
	 */
	
	function snippet($name, $vars = []) {
	  // if (is_array($vars)) underscore_set_query_vars_array($vars);
	  if (is_array($vars)) foreach ($vars as $key => $var) set_query_var($key, $var);
	  $snippets_path = apply_filters('underscore_snippets_path', 'templates/snippets');
	  ob_start();
			get_template_part("$snippets_path/$name");
		$snippet_content = ob_get_clean();
		if (is_array($vars)) foreach ($vars as $key => $var) set_query_var($key, null);
		return $snippet_content;
	}
	
	function the_snippet($name, $vars = []) {
		echo snippet($name, $vars);
	}
	
endif;




if ( ! function_exists('underscore_set_query_vars_array') ):

	/**
	 * underscore_set_query_vars_array function.
	 * 
	 * @access public
	 * @param mixed $vars
	 * @return void
	 */
	 
	function underscore_set_query_vars_array($vars) {
		foreach ($vars as $key => $var) set_query_var($key, $var);
	}

endif;




if ( ! function_exists('sprite') ):

	/**
	 * sprite()
	 * 
	 * @param string $name, string $title, bool $default
	 * @return string
	 */
	 
	function sprite($name, $title = null, $default = true) {
		$default_params = ($default) ? apply_filters('underscore_sprite_default_parameters', '') : '';
		$sprite = '<svg'.$default_params.'>';
		if ($title) $sprite .= "<title>$title</title>";
		$sprite .= '<use xlink:href="#'.$name.'"/></svg>';
	  
	  return $sprite;
	}

endif;




/**
 * get_theme_config_directory()
 * 
 * @return mixed
 */
function get_theme_config_directory() {
	$config_dir = get_stylesheet_directory().'/config';
	return is_dir($config_dir) ? $config_dir : false;
}


/**
 * get_real_template()
 * 
 * @param mixed $id
 * @return void
 */
 
function get_real_template($id) {
	return str_replace('.php', '', get_page_template_slug( $id ) );	
}




/**
 * get_real_template_slug()
 * 
 * @param mixed $id
 * @return void
 */
 
function get_real_template_slug($id) {
	return str_replace('.php', '', basename( get_page_template_slug( $id ) ) ); 
}




/**
 * get_term_top_most_parent()
 * 
 * @param mixed $term_id
 * @param mixed $taxonomy
 * @return void
 */
 
function get_term_top_most_parent( $term_id, $taxonomy ) {
	$parent  = get_term_by( 'id', $term_id, $taxonomy );
	while ($parent->parent != '0'){
	  $term_id = $parent->parent;	
	  $parent  = get_term_by( 'id', $term_id, $taxonomy );
	}
	return $parent;
}




/**
 * the_excerpt_max_charlength()
 * 
 * @param mixed $charlength
 * @return void
 */
function get_the_excerpt_max_charlength( $charlength ) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			return  mb_substr( $subex, 0, $excut );
		} else {
			return $subex;
		}
	} else {
		return $excerpt;
	}
}

function the_excerpt_max_charlength( $charlength ) {
	echo get_the_excerpt_max_charlength( $charlength );
}




if ( ! function_exists('_p') ):

	/**
	 * _p()
	 * 
	 * @access private
	 * @param mixed $a
	 * @return void
	 */
	function _p( $array ) {
		if ( isset($array) ) {
			echo '<pre>';
				print_r( $array );
			echo '</pre>';
		}
	}

endif;




if ( ! function_exists('print_if') ):

	/**
	 * print_if function.
	 * 
	 * @param mixed $data
	 * @param mixed $class
	 * @return void
	 */
	function print_if( $data, $markup = '', $class = null) {
		
		if ( $data && $markup && $data != 'none' ) {
			if ( isset($class) ) {
				$output = "<{$markup} class='{$class}'>{$data}</{$markup}>";
			}
			else {
				$output = "<{$markup}>{$data}</{$markup}>";
			}
		}
		
		elseif ( $data && $data != 'none' ) {
			$output = $data; 
		}
		
		else {
			return false;
		}
		
		echo $output;
		
	}

endif;


function get_copyright() {
	if ( $custom_footer = get_field('underscore_site_copyright', 'options') ):
		$custom_footer = str_replace( '{{Year}}', date('Y'), $custom_footer);
		$custom_footer = str_replace( '{{Name}}', get_bloginfo( 'name' ), $custom_footer);		
		return $custom_footer;
	else:
		return '&copy' . date('Y') .' '. get_bloginfo( 'name' ) . '. ' . __('All rights reserved.', 'underscore'); 
	endif;
}

function the_copyright() {
	echo get_copyright();
}



/**
 * Business hours : Format to 00 h 00 pattern
 *
 * @since Underscore 2.0
 *
 * @return void
 */
 
function _format_hours($time, $remove_zeros = false) {
	$splitted_time = explode(':', $time);
	return implode(_x(':', 'Time separator', 'underscore'), $splitted_time);
}


/**
 * Business hours : Format days and hours to fit in microdata schema.org pattern.
 *
 * @since Underscore 2.0
 *
 * @return void
 */
function _format_hours_to_microdata( $hours, $day_o = '', $day_c = '') {
	$day_o = substr( $day_o, 0, 2);
	if ($day_c) $day_c = '-'.substr( $day_c, 0, 2);
	
	$day_o = _format_days_to_microdata( $day_o );
	$day_c = _format_days_to_microdata( $day_c );
	
	$hours = str_replace(' h ', ':', $hours);
	$hours = str_replace(_x(' to ', 'underscore', 'bla'), '-', $hours);
	
	return $day_o . $day_c .' '. $hours;
}



function _format_days_to_microdata( $day ) {
	if ($day == 'Lu') $day = 'Mo';
	elseif ($day == 'Ma') $day = 'Tu';
	elseif ($day == 'Me') $day = 'We';
	elseif ($day == 'Je') $day = 'Th';
	elseif ($day == 'Ve') $day = 'Fr';
	elseif ($day == 'Sa') $day = 'Sa';
	elseif ($day == 'Di') $day = 'Su';
	
	return $day;
}




/**
 * get_post_thumbnail_field function.
 * 
 * @access public
 * @param string $field (default: 'caption')
 * @param mixed $post_id (default: NULL)
 * @param mixed $suppress_filters (default: FALSE)
 * @return void
 */
 
function get_post_thumbnail_field( $field = 'caption', $post_id = NULL, $suppress_filters = FALSE ) {

	$attachment_id = get_post_thumbnail_id( $post_id );
	
	if ( $attachment_id ) {
		$data = wp_prepare_attachment_for_js( $attachment_id );
		$field = $data[$field];
	
		if ( $suppress_filters ) 
			return $field;
	
		return apply_filters('get_post_thumbnail_field', $field);
	}
	
	return NULL;
}

function the_post_thumbnail_field( $field = 'caption', $post_id = NULL, $suppress_filters = FALSE ) {
	echo get_post_thumbnail_field( $field, $post_id, $suppress_filters );
}
