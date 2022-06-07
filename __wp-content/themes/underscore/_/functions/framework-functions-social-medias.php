<?php
	
/**
 * Social Medias : Get social medias list (Need ACF)
 *
 * @since Underscore 2.0
 *
 * @return void
 */
 
function get_social_medias_list() {
	 		
	if( have_rows('underscore_sm', 'options') ):
	
	$output = '<ul>';
		while ( have_rows('underscore_sm', 'options') ) : the_row();	
		
			$title 	= ( get_sub_field('underscore_sm_title') ) ? get_sub_field('underscore_sm_title') : get_sub_field('underscore_sm_account');
			$url 		= get_sub_field('underscore_sm_url');
			
			$output .=	'	<li>';
			$output .=	'		<a href="'. $url .'" title="'. $title .'" target="_blank">'. $title .'</a>';
			$output .=	'	</li>';
		endwhile;
	$output .= '</ul>';
	
	endif;

	return $output;

}


function the_social_medias_list() {
	echo get_social_medias_list();
}