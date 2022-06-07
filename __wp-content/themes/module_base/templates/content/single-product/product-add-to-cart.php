<div class="single-product--add-to-cart">
<?php if ( is_product_purchasable() ): ?>
	
	<button class="button button-important fake-add-to-cart shopify">
		<span class="label">
			<?= __('Add to cart', 'deva') ?>
		</span>
		<span class="price">
			<?= get_price() ?>
		</span>
	
	</button>
	
	<div class="purchase-notes">
		Notes :
		
			Les transactions sont effectuées en dollars canadien. Les frais de livraison seront 
			estimés une fois que vous aurez fourni votre adresse.
	</div>

<?php else: ?>

	<?= sprintf( __('This product was sold at %s', 'deva'), get_price()) ?>
	<div class="purchase-notes">
		Notes :
		
			Chacun de nos produits est unique. Découvrez nos réalisations antérieures pour vous inspirer si vous désirez une votre commande personnalisée.
	</div>
	
<?php endif ?>
</div>
