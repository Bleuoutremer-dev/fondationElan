<?php 
/**
 * Site logo snippet
 *
 * @param $ 
 *
 */	
 
	$site_name = get_bloginfo('name');
	$home_url = get_home_url(); 
	

	$tag = ( is_front_page() || is_home() ) ? 'h1' : 'p';	
?>
<<?= $tag ?> class="logo">
	<?= sprintf('<a href="%1$s" title="%2$s">'.sprite('---Mettre le bon id du spritesheet.svg---', '%2$s').'</a>', $home_url, $site_name) ?>
</<?= $tag ?>>