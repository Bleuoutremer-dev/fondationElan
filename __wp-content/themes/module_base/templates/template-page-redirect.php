<?php
/**
 * Template Name: Redirection de page
 *
 * @package theme-blank
 * @since theme-blank 0.1.0
 */

 // we use the template to get the child of the post id based on the menu order
 $pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");

  if ($pagekids) {

      $firstchild = $pagekids[0];
      wp_redirect(get_permalink($firstchild->ID));

  }
