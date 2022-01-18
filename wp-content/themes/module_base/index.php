<?php
/**
 * The main template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-blank
 * @since theme-blank 0.1.0
 */

get_header(); ?>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

	
		<div>
		<?php the_title('<h1 class="page-title">', '</h1>') ?>
		<?php the_content() ?>
		<?php the_permalink() ?>
		</div>
	
		<?php	endwhile;

			//the_posts_navigation();

		else :

			//get_template_part( 'template-parts/content', 'none' );

		endif; ?>

<?php
get_sidebar();
get_footer();
