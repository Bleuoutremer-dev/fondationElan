<?php  
	$weight_in_grams = get_field('product_weight');
	if ( $base_unit = get_field('product_weight_unit') )
		$base_unit = __('grams', 'deva');
	
	$weight_in_ounces = round( $weight_in_grams * 0.035274, 1 );		
		
?>
<div class="single-product--weight">
	
	<h2><?= __('Weight', 'deva') ?></h2>
	<p>
		<?= $weight_in_grams ?> <?= $base_unit ?>
		<?= sprintf('(%s %s)', $weight_in_ounces, __('ounces', 'deva')) ?>
	</p>
</div>
