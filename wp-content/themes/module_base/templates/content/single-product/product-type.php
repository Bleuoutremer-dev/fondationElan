<?php  
	$current_post_cats = wp_get_post_terms($post->ID, get_shopify_default_taxonomy() );
	$current_post_cat = $current_post_cats[0];
?>
<div class="single-product--type">
	<h2><?= __('Product type', 'deva') ?></h2>
	<p><?= $current_post_cat->name ?></p>
</div>