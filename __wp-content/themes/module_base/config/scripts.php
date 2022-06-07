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

		'jquery-min' => [
		'src' => get_stylesheet_directory_uri().'/assets/scripts/jquery.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],

		
		'retina min' => [
		'src' => get_stylesheet_directory_uri().'/assets/scripts/retina.min.js.map',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],

		'theme-vendors' => [
		'src' => get_stylesheet_directory_uri().'/assets/scripts/theme-vendors.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],

		'tilt-jquery' => [
		'src' => get_stylesheet_directory_uri().'/assets/scripts/tilt.jquery.js.map',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],

		'revolution-tools' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/jquery.themepunch.tools.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],

		'revolution-rev' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/jquery.themepunch.revolution.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],
		'revolution-extension-actions' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/extensions/revolution.extension.actions.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],
		'revolution-extension-carousel' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/extensions/revolution.extension.carousel.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],
		'revolution-extension-kenburn' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/extensions/revolution.extension.kenburn.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],
		'revolution-extension-layer' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],
		'revolution-extension-migration' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/extensions/revolution.extension.migration.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],
		'revolution-extension-navi' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/extensions/revolution.extension.navigation.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],	

		'revolution-parralax' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/extensions/revolution.extension.parallax.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],

		'revolution-slide-anim' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/extensions/revolution.extension.slideanims.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],
		'revolution-video' => [
		'src' => get_stylesheet_directory_uri().'/assets/revolution/js/extensions/revolution.extension.video.min.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],

		'theme-theme' => [
		'src' => get_stylesheet_directory_uri().'/assets/scripts/main.js',
		'deps' => ['jquery'],
		'ver' => '',
		'in_footer' => true,
		],
	
];
