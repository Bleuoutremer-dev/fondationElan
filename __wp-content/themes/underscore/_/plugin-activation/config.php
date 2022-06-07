<?php
include_once(get_template_directory().'/_/plugin-activation/classes/class-tgm-plugin-activation.php');
add_action( 'tgmpa_register', 'underscore_register_required_plugins' );
function underscore_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => 'Underscore admin UI',
			'slug'               => 'underscore-admin-ui',
			'source'             => 'underscore-admin-ui.zip',
			'required'           => true,
			'force_activation'   => false
		),

		array(
			'name'               => 'Advanced Custom Fields Pro',
			'slug'               => 'advanced-custom-fields-pro',
			'source'             => 'advanced-custom-fields-pro.zip',
			'required'           => true,
			'force_activation'   => true
		),

		array(
			'name'               => 'Advanced Custom Fields: qTranslate',
			'slug'               => 'acf-qtranslate',
			'required'           => true,
			'force_activation'   => false
		),


		array(
			'name'      => 'WP Sync DB',
			'slug'      => 'wp-sync-db',
			'source'    => 'https://github.com/wp-sync-db/wp-sync-db/archive/master.zip'
		),


		array(
			'name'      => 'Loco Translate',
			'slug'      => 'loco-translate'
		),

		array(
			'name'      => 'Yoast SEO',
			'slug'      => 'wordpress-seo',
		),

		array(
			'name'      => 'iThemes Security',
			'slug'      => 'better-wp-security'
		),

	);

	$config = array(
		'id'           => 'underscore',
		'default_path' => get_template_directory().'/_/plugin-activation/plugins/',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => ''
	);

	tgmpa( $plugins, $config );
}
