<?php 
/**
 * Page module snippet
 *
 * @param $parent_field
 * @param $chil_field 
 *
 */	
 
	if ( have_rows('section') ):
    while ( have_rows('section') ) : the_row(); 
			
			// Set up classes
			$default_classes	= ['module-section'];
			$display_classes	= get_sub_field('section_display_settings');
			$section_classes	= array_merge( (array)$default_classes, (array)$display_classes );
			$section_classes[] = get_sub_field('section_background_color');
			
			if ( have_rows('content_blocks') ): 
?>
<section<?php the_classes( $section_classes ) ?>>
<?php
		while ( have_rows('content_blocks') ) : the_row();
		
			$layout = get_row_layout();
			set_query_var( 'layout', $layout );
			get_template_part( 'templates/modules/' . $layout );

		endwhile; 
?>
</section>
<?php
			endif; 
    endwhile;
endif;
