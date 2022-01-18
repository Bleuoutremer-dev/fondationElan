<?php

/**
 * the_classes function.
 * 
 * @access public
 * @param array $classes (default: array())
 * @param mixed $adds (default: null)
 * @return void
 */
 
function the_classes( $classes = array(), $adds = null ) {

	if ( isset($adds) ) 
		array_unshift( $classes, $adds);
	
	if ( count($classes) > 0 )	
		echo ' class="'.implode(' ', $classes).'"';

}




/**
 * get_menu_items_by_location
 * 
 * @access public
 * @param string $location
 * @return mixed string|boolean
 */
function get_menu_items_by_location($location) {
	$menus = get_nav_menu_locations();
	return isset($menus[$location]) ? wp_get_nav_menu_items($menus[$location]) : false;
}




/**
 * generate_featured_image_from_url function.
 *
 * Generate the desire post thumbnail from an selected URL
 * 
 * @access public
 * @param mixed $image_url
 * @param mixed $post_id
 * @return void
 */
function generate_featured_image_from_url( $image_url, $post_id  ){
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);
    
    $filename = basename($image_url);
    // Remove all ...jpg?ver=123..
    $filename = strstr($filename, '?', true);
    
    if ( wp_mkdir_p($upload_dir['path']) )     
    	$file = $upload_dir['path'] . '/' . $filename;
    else                                    
    	$file = $upload_dir['basedir'] . '/' . $filename;
    
    if ( file_exists($file) )    
    	return;
    
    file_put_contents($file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null );
   
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
    $res1= wp_update_attachment_metadata( $attach_id, $attach_data );
    $res2= set_post_thumbnail( $post_id, $attach_id );
}




/**
 * is_all_set function.
 * 
 * Return true if all vars are set, use it to check multiple variables to execute something like a snippet.
 *
 * @access public
 * @param array $vars (default: array())
 * @return void
 */
function is_all_set( $vars = array() ) {
	
	foreach ( $vars as $var ):
	
		if ( !isset($var) )
			return false;
			
	endforeach;
	
	return true;
	
}

