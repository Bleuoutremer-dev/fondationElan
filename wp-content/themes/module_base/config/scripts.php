<?php
// IF YOUR SCRIPT REQUIRES TO BE ON THE HEAD OF YOUR SITE, ADD 'in_footer' => true,
return [

		'theme-tether' => [
		'src' => 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],

		'theme-bootstrap' => [
		'src' => get_stylesheet_directory_uri().'/assets/scripts/bootstrap/bootstrap.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],



		'tweenmax' => [
		'src' => get_stylesheet_directory_uri().'/assets/scripts/tweenmax.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],


		'flickable' => [
		'src' => get_stylesheet_directory_uri().'/assets/scripts/flickable.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],


		'theme-theme' => [
		'src' => get_stylesheet_directory_uri().'/assets/scripts/theme.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],
	
];
