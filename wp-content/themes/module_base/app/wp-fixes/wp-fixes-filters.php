<?php
	

/**
 * multisite_body_classes function.
 * 
 * @access public
 * @param mixed $classes
 * @return void
 */
 
function theme_body_classes($classes) {
	
	// Starter
	$classes = ['theme-blank']; // reset body class
	
	// Homepage
	if ( is_home() || is_front_page() )
		$classes[] = 'home';
	
	if ( is_single() ):
		$post_type = get_post_type();
		$classes[] = 'single-post';
		$classes[] = "single-post-$post_type";
	endif;
	
	// Page
	if ( is_page() ) 
		$classes[] = 'page';

	// Search
	if ( is_search() )
		$classes[] = 'search';
		
		
	return $classes;
}
add_filter('body_class', 'theme_body_classes');




/**
 * filter_ptags_on_images function.
 * 
 * @access public
 * @param mixed $content
 * @return void
 */
 
function theme_filter_ptags_on_images($content) {
  // do a regular expression replace...
  // find all p tags that have just
  // <p>maybe some white space<img all stuff up to /> then maybe whitespace </p>
  // replace it with just the image tag...
  return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
add_filter('the_content', 'theme_filter_ptags_on_images');
