<?php

/**
 * the_content_builder function.
 *
 * @access public
 * @param string $path (default: 'templates/modules')
 * @return void
 */

if ( !function_exists('the_content_builder') ) {
	function the_content_builder( $path = 'modules') {
    // Avec sections
    // if ( $content_sections = get_field('content_sections') ):
    //   foreach ($content_sections as $content_section) :
    //     if ( isset($content_section['content_blocks'])) :
    //       foreach ( $content_section['content_blocks'] as $content_block ) :
    //         the_snippet( $path . '/' . $content_block['acf_fc_layout'], $content_block);
    //       endforeach;
    //     endif;
    //   endforeach;
		// endif;

    // Sans sections
    if ( $content_blocks = get_field('content_blocks') ):
      foreach ( $content_blocks as $content_block ) :
        the_snippet( $path . '/' . $content_block['acf_fc_layout'], $content_block);
      endforeach;
    endif;
    }

}
