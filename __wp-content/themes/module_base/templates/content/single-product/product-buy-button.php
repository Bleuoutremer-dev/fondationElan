<?php
	
	$shop_shopify_id 	= get_field('shop_shopify_id', 'option');
	$product_handle 	= get_field('product_handle');
	$button = sprintf('[shopify embed_type="product" shop="%1$s.myshopify.com" product_handle="%2$s" show="button-only"]', $shop_shopify_id, $product_handle);
	
	if ( $shop_shopify_id && $product_handle):
?>
<div class="single-product--buy-button">
	<?= do_shortcode($button); ?>
</div>
<?php 
	endif;