<?php

the_post();
get_header();
?>
	<!-- <main role="main" itemscope itemtype =""> -->
				<?php the_content() ?>
				<?php the_content_builder() ?>
				<?php
				/**
				 * after_single_post_content hook
				 *
				 * @hooked snippet('page-modules-loop') - 10
				 */
					do_action('after_single_post_content');
				?>
				<?php get_sidebar(); ?>
	<!-- </main> -->
<?php get_footer(); ?>
