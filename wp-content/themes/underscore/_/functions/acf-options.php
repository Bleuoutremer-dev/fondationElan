<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> __('Site Options', 'underscore'),
		'menu_title'	=> __('Site Options', 'underscore'),
		'menu_slug' 	=> 'site-settings',
		'capability'	=> 'delete_others_posts',
		'redirect'		=> true,
		'position'		=> 45
	));
	


	if ( class_exists( 'WooCommerce' ) ) :
		acf_add_options_sub_page(array(
			'page_title' 	=> __('WooCommerce Options', 'underscore'),
			'menu_title'	=> __('WooCommerce', 'underscore'),
			'parent_slug'	=> 'site-settings',
			'menu_slug' 	=> 'wc-underscore-settings'
		));
	endif;
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Development Options', 'underscore'),
		'menu_title'	=> __('Development', 'underscore'),
		'parent_slug'	=> 'site-settings',
		'capability'	=> 'manage_options',
		'menu_slug' 	=> 'development-settings'
	));
}



if( function_exists('acf_add_local_field_group') ):
	/* ==================================================== */
	/* OPTIONS DE DÉVELOPPEMENT
	/* ==================================================== */
	acf_add_local_field_group(array (
		'key' => 'development_group',
		'title' =>  __('Development', 'underscore'),
		'fields' => array (
			array (
				'key' => 'tab_scripts',
				'label' => __('Scripts & links', 'underscore'),
				'type' => 'tab',
			),
			array (
				'key' => 'underscore_disblable_wp_scripts',
				'label' => __('Wordpress Scripts', 'underscore'),
				'name' => 'underscore_disblable_wp_scripts',
				'type' => 'checkbox',
				'choices' => [
					'headlink' => __('Disable unused links & scripts', 'underscore'),
					'wp_version' => __('Hide wordpress version', 'underscore'),
					'emojis' => __('Disable emoji support', 'underscore'),
					],
				'layout' => 'vertical',
				'toggle' => 0,
			),
			array (
				'key' => 'tab_debug_mode',
				'label' => __('Debug mode', 'underscore'),
				'type' => 'tab',
			),
			array (
				'key' => 'underscore_wpdebug',
				'name' => 'underscore_wpdebug',
				'type' => 'true_false',
				'message' => __('Enable Wordpress debug mode', 'underscore'),
				'default_value' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'development-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	function underscore_admin_menu_checkboxes() {
	  global $menu;
	  $items = [];
	  foreach ($menu as $item) {
	  	if ( !preg_match('/separator/', $item[4])) $items[$item[2]] = $item[0];
	  }
	  return $items;
	}

	function add_admin_menu_options() {
		acf_add_local_field([
			'key' => 'tab_admin_options',
			'label' => __('Wordpress admin', 'underscore'),
			'type' => 'tab',
			'placement' => 'top',
			'endpoint' => 0,
			'parent' => 'development_group'
		]);

		acf_add_local_field([
			'key' => 'field_admin_menu_options',
			'label' => __('Hide admin menus', 'underscore'),
			'name' => 'underscore_hidden_admin_menu_entries',
			'type' => 'checkbox',
			'choices' => underscore_admin_menu_checkboxes(),
			'layout' => 'vertical',
			'toggle' => 0,
			'parent' => 'development_group'
		]);
	}
	add_action( 'admin_menu', 'add_admin_menu_options' );




	/* ==================================================== */
	/* WOOCOMMERCE
	/* ==================================================== */
	acf_add_local_field_group(array (
		'key' => 'group_555615afb6b7b',
		'title' => '_ WooCommerce',
		'fields' => array (
			array (
				'key' => 'field_v5580b41096322',
				'label' => 'Onglets',
				'type' => 'tab',
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_v5582e51bb5a7a',
				'label' => 'Insérez des onglets qui seront visibles sur chaque page de produit.',
				'name' => 'underscore_wc_product_tabs',
				'type' => 'flexible_content',
				'button_label' => 'Ajouter un onglet',
				'layouts' => array (
					array (
						'key' => '5582e5241b8ed',
						'name' => 'standard-tab',
						'label' => 'Onglet standard',
						'display' => 'block',
						'sub_fields' => array (
							array (
								'key' => 'field_v5582e300ac4d6',
								'label' => 'Titre',
								'name' => 'underscore_wc_tab_title',
								'type' => 'text',
							),
							array (
								'key' => 'field_v5582e33aac4d8',
								'label' => 'Identitfiant',
								'name' => 'underscore_wc_tab_slug',
								'type' => 'text',
								'instructions' => 'Seuls les minuscules, les ’-’ et les ’_’ sont autorisés.',
							),
							array (
								'key' => 'field_v5582e314ac4d7',
								'label' => 'Contenu',
								'name' => 'underscore_wc_tab_content',
								'type' => 'wysiwyg',
								'tabs' => 'visual',
								'toolbar' => 'basic',
								'media_upload' => 0,
							),
							array (
								'key' => 'field_v5582e495ac4d9',
								'label' => 'Affichage',
								'name' => 'underscore_wc_tab_visible',
								'type' => 'true_false',
								'message' => 'Ne pas afficher cet onglet sur la site',
								'default_value' => 0,
							),
						),
					),
				),
			),
			array (
				'key' => 'field_v55a7bbfa165ac',
				'label' => 'Détails de livraison',
				'type' => 'tab',
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_v55a7bc19165ad',
				'label' => 'Titre',
				'name' => 'underscore_wc_shipping_details_title',
				'type' => 'text',
			),
			array (
				'key' => 'field_v55a7bc99165ae',
				'label' => 'Texte',
				'name' => 'underscore_wc_shipping_details_content',
				'type' => 'wysiwyg',
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
			),
			array (
				'key' => 'field_v5556161f45b76',
				'label' => 'Paramètres avancés',
				'type' => 'tab',
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_v555654f409669',
				'label' => 'Réglages avancés',
				'name' => 'underscore_wc_advanced_settings',
				'type' => 'checkbox',
				'wrapper' => array (
					'class' => 'spacing-list',
				),
				'choices' => array (
					'underscore_wc_activate_theme_support' => 'Activer la gestion de WooCommerce',
					'underscore_wc_activate_custom_template' => 'Activer les gabarits personnalisés',
					'underscore_wc_activate_reordering_hooks' => 'Activer la réorganisation des actions par défaut de WooCommerce',
					'underscore_wc_deactivate_origin_styling' => 'Désactiver les styles par défaut de WooCommerce',
					'underscore_wc_prevent_customer_access' => 'Interdire l’accès des clients au panneau d’administration',
				),
				'default_value' => array (
					'' => '',
				),
				'layout' => 'vertical',
				'toggle' => 0,
			),
			array (
				'key' => 'field_v5557b6863f738',
				'label' => 'Titre',
				'type' => 'message',
				'message' => '',
				'new_lines' => 'wpautop',
			),
			array (
				'key' => 'field_v5556400d6f16f',
				'label' => 'Afficher les produits de la boutique en',
				'name' => 'underscore_wc_shop_columns',
				'type' => 'number',
				'wrapper' => array (
					'width' => 50,
					'class' => 'in-a-row',
				),
				'default_value' => 4,
				'append' => 'colonnes',
				'min' => 1,
				'max' => 6,
				'step' => 1,
			),
			array (
				'key' => 'field_v55564246bf8e2',
				'label' => 'Afficher les catégories de produits en',
				'name' => 'underscore_wc_categories_columns',
				'type' => 'number',
				'wrapper' => array (
					'width' => 50,
					'class' => 'in-a-row no-border-left',
				),
				'default_value' => 4,
				'append' => 'colonnes',
				'min' => 1,
				'max' => 6,
				'step' => 1,
			),
			array (
				'key' => 'field_v555640796f170',
				'label' => 'Afficher la galerie d’images d’un produit en',
				'name' => 'underscore_wc_product_thumbnails_columns',
				'type' => 'number',
				'wrapper' => array (
					'width' => 50,
					'class' => 'in-a-row',
				),
				'default_value' => 4,
				'append' => 'colonnes',
				'min' => 2,
				'max' => 6,
				'step' => 1,
			),
			array (
				'key' => 'field_v555640fa6f171',
				'label' => 'Nombre de produits similaires',
				'name' => 'underscore_wc_related_products_number',
				'type' => 'number',
				'wrapper' => array (
					'width' => 50,
					'class' => 'in-a-row no-border-left',
				),
				'default_value' => 4,
				'append' => 'produits',
				'min' => 2,
				'max' => 6,
				'step' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'wc-underscore-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'field',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
endif;