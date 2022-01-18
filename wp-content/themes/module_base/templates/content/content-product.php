<li <?php post_class( 'grid-'.$grid ); ?>>
	<?php
	/**
	 * theme_before_shop_loop_item hook.
	 *
	 * @hooked theme_template_loop_product_link_open - 10
	 */
	do_action( 'theme_before_shop_loop_item' );

	/**
	 * theme_before_shop_loop_item_title hook.
	 *
	 * @hooked get_template_part( 'templates/content/loop/image' ) - 10
	 */
	do_action( 'theme_before_shop_loop_item_title' );

	/**
	 * theme_shop_loop_item_title hook.
	 *
	 * @hooked get_template_part( 'templates/content/loop/title' ) - 10
	 */
	do_action( 'theme_shop_loop_item_title' );

	/**
	 * theme_after_shop_loop_item_title hook.
	 *
	 * @hooked get_template_part( 'templates/content/loop/price' ) - 10
	 */
	do_action( 'theme_after_shop_loop_item_title' );

	/**
	 * theme_after_shop_loop_item hook.
	 *
	 * @hooked theme_template_loop_product_link_close - 5
	 */
	do_action( 'theme_after_shop_loop_item' );
	?>	
</li>
