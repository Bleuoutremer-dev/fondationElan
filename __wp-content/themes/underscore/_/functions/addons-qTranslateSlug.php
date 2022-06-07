<?php
/**
 * Because qTranslate Slug didnt come with that function
 *
 * get_translate_term_slug function.
 * 
 * @access public
 * @param mixed $id
 * @param mixed $lang
 * @return void
 */

if ( !function_exists('get_translate_term_slug') ):
 
	function get_translate_term_slug($id, $lang = null ) {
		
		if ( !class_exists('QtranslateSlug') )
			return;
			
		if ( empty($lang) )
			$lang = qtranxf_getLanguage();
		
		$slugArray = get_term_meta( $id, '_qts_slug_'.$lang );
		return !empty($slugArray) ? $slugArray[0] : "";
		
	}

endif;