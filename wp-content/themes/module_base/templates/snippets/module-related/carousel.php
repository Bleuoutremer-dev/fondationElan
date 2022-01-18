<?php
/**
 * Carousel snippet
 *
 * @param $layout
 * @param $carousel_id
 *
 */


// Check if selected carousel is set and published
if ( !isset($carousel_id) && get_post_status( $carousel_id ) != 'publish' )
	return;

/*
 *
 * Loop slides
 *
 */

	if ( have_rows('carousels', $carousel_id) ):
?>
<div class="<?= $layout  ?>--stage owl-carousel">
<?php
		while ( have_rows('carousels', $carousel_id) ) : the_row();

			// Default classes
			$carousel_classes = [$layout.'--slide', 'item'];

			// Background stuff
			if ( $image = get_sub_field('carousel_image') ):
				$background = ' style="background-image:url(' . $image['sizes']['slider'] . ')"';
				$carousel_classes[] = 'background-align-' . get_sub_field('carousel_image_pos');
		 endif;

?>
	<div<?php the_classes($carousel_classes) ?><?= ( isset($background) ) ? $background : '' ?>>

		<img src="<?= $image['sizes']['slider'] ?>" alt="" class="<?= $layout ?>--image">		
		<div class="<?= $layout  ?>--content">

			<h2 class="<?= $layout  ?>--title">
				<?php
	
					// Ttitle classes
					$title_classes = [$layout.'--title-line'];
					$title_classes[] = 'text-size-medium';
					
					if ( $btn_url = get_sub_field('carousel_btn_link') ):
						
						$btn_text = ( $t = get_sub_field('carousel_btn_text') ) ? $t : __('Read more', 'deva');
						$btn = sprintf('—&nbsp;<a href="%1$s" class="font-family-sans-serif" title="%2$s">%2$s</a>', $btn_url, $btn_text );
					else:
						$btn = '';
					endif;
					
				?>
				<span<?php the_classes( $title_classes ) ?>>
					<?= get_sub_field('carousel_content') ?>
					<?= $btn ?>
				</span>
	
			</h2>

		</div>

	</div>
<?php
		endwhile;
?>
</div>
<?php
	endif;
