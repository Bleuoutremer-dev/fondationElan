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

  'theme-stylesheet' => [
    'src' 			=> get_stylesheet_directory_uri().'/style.css',
    'condition'	=> null,
    'deps' 			=> null
  ],

];
