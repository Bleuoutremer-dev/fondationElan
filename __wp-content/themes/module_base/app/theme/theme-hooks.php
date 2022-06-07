<?php


/**
 * Add SVG spritesheet.
 *
 * @access public
 * @return void
 */
if ( ! function_exists( 'theme_add_svg_spritesheet' ) ) :

function theme_add_svg_spritesheet() {
	include get_stylesheet_directory().'/assets/images/spritesheet.svg';
}
add_action('underscore_before_header', 'theme_add_svg_spritesheet', 10);

endif;




/**
 * Add Kaven Martineau credits
 *
 * @access public
 * @return void
 */
add_action('underscore_after_footer', function() {
	the_snippet('credits/credits');
}, 5);




/**
 * Add the Browse Happy snippet
 *
 * @access public
 * @return void
 */
add_action('underscore_after_footer', function() {

	$args = [
		'site_name' 	=> get_bloginfo( 'name' ),
		'admin_email' => get_bloginfo('admin_email'),
	];
	the_snippet('general/browse-happy', $args);

}, 10);




/**
 * Add the page builder snippet to after_single_post_content
 *
 * @access public
 * @return void
 */

add_action('after_single_post_content', function () {
	the_snippet('module-related/page-modules-loop');
}, 10);


add_filter('uwpqsf_result_tempt', 'customize_output', '', 4);

function my_block_before_berocket_widget () {
//your code here
}

add_action( 'berocket_aapf_widget_before_start', 'my_block_before_berocket_widget' );




