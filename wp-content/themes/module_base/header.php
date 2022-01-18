<?php
/**
 * The header for our theme.
 *
 * @package theme-blank
 * @since theme-blank 0.1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes() ?> style="margin-top:0 !important;">
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="<?php if( get_field('meta_description_page') ): echo get_field('meta_description_page'); else : bloginfo('description'); endif; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="designer" content="Bleuoutremer">
  <meta property="og:url" content="<?php echo site_url()?>/<?php the_title();?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php echo bloginfo('description'); ?>" />
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri()?>/assets/images/Logo.svg" />
  <!-- Librairie jQuery peux aussi être appelée sous config/scripts.php -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <?php wp_head() ?>

</head>

<body <?php body_class() ?>  id="<?php echo sanitize_title_with_dashes(get_the_title(get_the_ID())); ?>">

<?php
  /**
   * underscore_before_header hook
   *
   * @hooked theme_add_svg_spritesheet - 10
   */
    do_action('underscore_before_header');
?>


  <?php do_action('underscore_before_content') ?>

