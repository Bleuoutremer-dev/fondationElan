<?php
return [
  'theme-bootstrap' => [
    'src' => get_stylesheet_directory_uri().'/assets/styles/bootstrap.min.css',
  ],
 
  'animate' => [
    'src' => get_stylesheet_directory_uri().'/assets/styles/animate.min.css',
    'condition' => null,
    'deps'      => null
  ],
  'bootstrap-bundle' => [
    'src' => get_stylesheet_directory_uri().'/assets/styles/bootstrap.min.css.map',
    'condition' => null,
    'deps'      => null
  ],

  'font-icon' => [
    'src' => get_stylesheet_directory_uri().'/assets/styles/font-icons.min.css',
    'condition' => null,
    'deps'      => null
  ],

  'responsive' => [
    'src' => get_stylesheet_directory_uri().'/assets/styles/responsive.css',
    'condition' => null,
    'deps'      => null
  ],

  'theme-vendors' => [
    'src' => get_stylesheet_directory_uri().'/assets/styles/theme-vendors.min.css',
    'condition' => null,
    'deps'      => null
  ], 


  'theme-stylesheet' => [
    'src' 			=> get_stylesheet_directory_uri().'/style.css',
    'condition'	=> null,
    'deps' 			=> null
  ],
    'revolution' => [
    'src' => get_stylesheet_directory_uri().'/assets/revolution/css/settings.css',
    'condition' => null,
    'deps'      => null
  ], 

    'revolution-layer' => [
    'src' => get_stylesheet_directory_uri().'/assets/revolution/css/layers.css',
    'condition' => null,
    'deps'      => null
  ], 

    'revolution-navigation' => [
    'src' => get_stylesheet_directory_uri().'/assets/revolution/css/navigation.css',
    'condition' => null,
    'deps'      => null
  ], 

];
