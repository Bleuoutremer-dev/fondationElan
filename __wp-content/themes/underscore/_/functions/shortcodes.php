<?php

/**
 * underscore_shortcode_row function.
 * 
 * @access public
 * @param mixed $atts
 * @param mixed $content (default: null)
 * @return void
 */
 
function underscore_shortcode_row( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
			'margin' => 1,
		), $atts )
	);
	if ( $atts['margin'] ) 
		$classes = ' with-spacing';

	return '<div class="row'. $classes .'">'. do_shortcode($content) .'</div>';
}
add_shortcode( 'row', 'underscore_shortcode_row' );





/**
 * underscore_shortcode_column function.
 * 
 * @access public
 * @param mixed $atts
 * @param mixed $content (default: null)
 * @return void
 */
 
function underscore_shortcode_column( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
			'column' => 'half',
		), $atts )
	);

	return '<div class="column ' . $atts['column'] . '">'. do_shortcode($content) .'</div>';
}
add_shortcode( 'column', 'underscore_shortcode_column' );






/**
 * underscore_shortcode_title function.
 * 
 * @access public
 * @param mixed $atts
 * @param mixed $content (default: null)
 * @return void
 */
 
function underscore_shortcode_title( $atts , $content = null ) {

	extract( shortcode_atts(
		array(
			'classes' => '',
		), $atts )
	);

	return '<div class="title ' . $atts['classes'] . '">'. do_shortcode($content) .'</div>';
}
add_shortcode( 'title', 'underscore_shortcode_title' );






/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
 
function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('the_content', 'remove_empty_p', 200, 1);