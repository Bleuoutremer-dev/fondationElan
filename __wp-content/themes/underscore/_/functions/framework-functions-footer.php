<?php
 
/**
 * get_underscore_footer function.
 * 
 * @since Underscore 2.0
 *
 * @access public
 * @param int $grid (default: 4)
 * @param string $title_class (default: 'title')
 * @param string $column_title_class (default: 'column-title')
 * @return void
 */
 
function get_underscore_footer( $grid = 4, $title_class = 'title', $column_title_class = 'column-title' ) {
	 		
	if( have_rows('underscore_footer_columns', 'options') ):
?>
<?php if ( $title = get_field('underscore_footer_title', 'options') ): ?>
<h2 id="contact-info" class="<?= $title_class ?>"><?= $title ?></h2>
<?php endif; ?>
<div class="row c<?= $grid ?>" itemscope itemtype="http://schema.org/Store">
<?		
		while ( have_rows('underscore_footer_columns', 'options') ) : the_row();
			
			$layout = get_row_layout();
			
			if( $layout == 'businesshours' ):
			
				$output = get_business_hours_list();

			elseif( $layout == 'address' ): 
			
				$output = get_business_contact_infos();
			
			elseif( $layout == 'navigation' ):

				$output = get_sub_field('footer_column_nav_id');
			
			elseif( $layout == 'socialmedias' ):

				$output = get_social_medias_list();	
			
			elseif( $layout == 'text' ):

				$output = get_sub_field('footer_column_text');
			
			endif;
?>

<?php  
	if ( $layout == 'address' ):
		$micro_data_title 	= ' itemprop="name"';
		
	else:
		$micro_data_title 	= '';
	endif;
?>
	<div class="column <?= get_row_layout() ?>">
		
		<h4 class="<?= $column_title_class ?>"<?= $micro_data_title ?>>
			<?php the_sub_field('footer_column_title')  ?>
		</h4>
		<?= $output ?>
		
	</div>
<?		
		endwhile;
?>
</div>
<?php
	endif;			

}


/**
 * the_underscore_footer function.
 * 
 * @since Underscore 2.0
 *
 * @access public
 * @return void
 */
 
function the_underscore_footer() {
	echo  get_underscore_footer();
}






if (! function_exists('_underscore_copyright') ) {

function get_underscore_copyright() {
	
	if ( $custom_footer = get_field('underscore_site_copyright', 'options') ):
	
		$custom_footer = str_replace( '{{Year}}', date('Y'), $custom_footer);
		$custom_footer = str_replace( '{{Name}}', get_bloginfo( 'name' ), $custom_footer);		
		return $custom_footer;

	else:
		return '&copy' . date('Y') .' '. get_bloginfo( 'name' ) . '. ' . _x('All rights reserved.', 'underscore', 'bla'); 

	endif;
}

function the_underscore_copyright() {
	echo get_underscore_copyright();
}

}

