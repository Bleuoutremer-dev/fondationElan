<?php


add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );	



if ( ! function_exists( 'theme_setup' ) ) :

function theme_setup() {

}

endif;
add_action( 'after_setup_theme', 'theme_setup' );
