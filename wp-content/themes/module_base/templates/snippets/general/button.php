<?php 
/**
 * Button snippet
 *
 * @param $url
 * @param $title
 * @param $text
 * @param $type   
 * @param $class
 * @param $icon    
 *
 */	
	
	// Set dependencies for the button
	$args = [$url, $text];	
	if ( is_all_set( $args ) ):

		
		$title 	= ( !isset($title) || $title == '' ) ? $text : $title; 
		$type 	= ( !isset($type) || $type == '' ) ? 'normal' : $type;
		
		// Classes
		$classes = ['button'];
		$classes[] = "button-{$type}";
		
		if ( isset($class) )
			$classes[] = $class;

		if ( isset($icon) ):
			$text = sprite($icon).$text;
			$classes[] = 'button-icon';
		endif;

?>

	<a href="<?= $url ?>" title="<?= $title ?>"<?php the_classes($classes) ?>>
		<?= $text ?>
	</a>
 
<?php 
	endif;