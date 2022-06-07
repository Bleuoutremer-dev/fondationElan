<?php
function register_location_post_type() {
	$labels = array(
		'name'                => __( 'Locations', 'underscore' ),
		'singular_name'       => __( 'Location', 'underscore' ),
		'menu_name'           => __( 'Locations', 'underscore' ),
		'name_admin_bar'      => __( 'Location', 'underscore' ),
		'parent_item_colon'   => __( 'Parent Location:', 'underscore' ),
		'all_items'           => __( 'All Locations', 'underscore' ),
		'add_new_item'        => __( 'Add New Location', 'underscore' ),
		'new_item'            => __( 'New Location', 'underscore' ),
		'edit_item'           => __( 'Edit Location', 'underscore' ),
		'update_item'         => __( 'Update Location', 'underscore' ),
		'view_item'           => __( 'View Location', 'underscore' ),
		'search_items'        => __( 'Search Locations', 'underscore' ),
	);
	$rewrite = array(
		'slug'									=> __('offices', 'underscore'),
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => false,
	);
	$args = array(
		'label'               => __( 'Locations', 'underscore' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'						=> 'dashicons-location',
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'location', $args );

}
add_action( 'init', 'register_location_post_type', 0 );




/**
 * get_location_address function.
 * 
 * @access public
 * @param mixed $id (default: null)
 * @return void
 */
 
function get_location_address( $id = null ) {
	
	$display_country = true;
	
	$street 	= get_field('location_address_street', $id);
	$office 	= get_field('location_address_suite', $id);	
	$city 		= get_field('location_address_city', $id);
	$state 		= get_field('location_address_state', $id);	
	$zip 			= get_field('location_address_zip', $id);
	$country	= get_field('location_address_country', $id);

	$phone 		= get_field('location_address_phone', $id);	
	$phonealt = get_field('location_address_phone_alt', $id);
	$email		= get_field('location_address_email', $id);

	$output = '<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">';
	$output .= '<span itemprop="streetAddress">'. $street;
	if ( $office ) $output .= ' — Suite ' . $office;
	$output .= '</span><br>';
	$output .= '<span itemprop="addressLocality">'. $city . '</span>'; 
	$output .= ' (<span itemprop="addressRegion">' . $state . '</span>)';
	//$output .= '&nbsp;&nbsp;';
	//$output .= '<span itemprop="postalCode">'. $zip . '</span>';
	
	if ( $country && $display_country)  {
		$output .= '<br>' . '<span itemprop="addressCountry">'. $country . '</span>';
		$output .= '&nbsp;&nbsp;';
		$output .= '<span itemprop="postalCode">'. $zip . '</span>';	
	}
	$output .= '</p>';
	
	$output 									.= '<p>';
	if ( $phone ) $output 		.= '<span itemprop="telephone">'. $phone . '</span>';
	if ( $phonealt ) $output 	.= '<span itemprop="telephone">'. $phonealt . '</span>';
	$output 									.= '</p>';
		
	if ( $email ) $output 		.= '<p><a href="mailto:' . $email . '" title="' . __('Write us', 'underscore') . '"><span itemprop="email">' . __('Write us', 'underscore') . '</span></a></p>';	
	
	return $output;
	
}

function the_location_address() {
	echo get_location_address();
}




/**
 * get_location_business_hours function.
 * 
 * @access public
 * @param bool $group (default: true)
 * @return void
 */
function get_location_business_hours( $group = true ) {
	$openHours = array(
		__('Monday',	 	'underscore')	=> get_location_business_hours_formatted('monday'),
		__('Tuesday', 	'underscore')	=> get_location_business_hours_formatted('tuesday'),
		__('Wednesday', 'underscore')	=> get_location_business_hours_formatted('wednesday'),
		__('Thursday', 	'underscore')	=> get_location_business_hours_formatted('thursday'),
		__('Friday', 		'underscore')	=> get_location_business_hours_formatted('friday'),
		__('Saturday', 	'underscore')	=> get_location_business_hours_formatted('saturday'),
		__('Sunday', 		'underscore')	=> get_location_business_hours_formatted('sunday'),
	);
		
	$summaries = array();
	foreach ($openHours as $day => $hours) {
		
	if ( $group ):
    if (count($summaries) === 0) $current = false;
    else $current = &$summaries[count($summaries) - 1];

    if ( $current === false || $current['hours'] !== $hours ) $summaries[] = array('hours' => $hours, 'days' => array($day));
    else $current['days'][] = $day;
  
  else:
  	$summaries[] = array('hours' => $hours, 'days' => array($day));
  	
  endif; 
  
	}
	
	$today = strftime('%A');
	$output = '<ul class="opening-hours">';
		
	foreach ($summaries as $summary) :
		if ( in_array( $today, $summary['days'] ) )
			$is_today = ' class="today"';
		else
			$is_today = '';			
	
		$output .= '<li'. $is_today .'>';
		if ( count($summary['days']) === 1 ) :
			$day = reset($summary['days']);
			$hours = $summary['hours'];
		
			$output .= '<meta itemprop="openingHours" content="'. _format_hours_to_microdata( $hours, $day ) .'">';
			$output .= '<span class="days">' . $day . '</span>'; 
			$output .= '<span class="hours">' . $hours .'</span>';
			
		else:
			$day_o = substr( reset($summary['days']), 0, 3); 
			$day_c = substr( end($summary['days']), 0, 3);
			$hours = $summary['hours'];
			
			$output .= '<meta itemprop="openingHours" content="'. _format_hours_to_microdata( $hours, $day_o, $day_c ) .'">';
			$output .= '<span class="days">' . $day_o .' — '. $day_c . '</span>';
			$output .= '<span class="hours">' . $hours . '</span>';
		endif;
		
		$output .= '</li>';
	endforeach;
	$output .= '</ul>';

	return $output;
}

function the_location_business_hours( $group = true ) {
	echo get_location_business_hours( $group );
}

/**
 * get_location_business_hours_formatted function.
 * 
 * @access public
 * @param mixed $day
 * @param string $output (default: 'all')
 * @return void
 */
function get_location_business_hours_formatted($day, $output = 'all', $separator = ' – ') {
	$open = get_field('location_hours_'.$day.'_begin');
	$open = _format_hours( (int)$open );
	
	$close = get_field('location_hours_'.$day.'_end');
	$close = _format_hours( (int)$close );
	
	if ($open == $close && $output == 'all') return __('Closed', 'underscore');
	else if ($output == 'all') return $open.$separator.$close;
	else if ($output == 'open') return $open;
	else if ($output == 'close') return $close;
}


/* ==================================================== */
/* ACF
/* ==================================================== */
if( function_exists('acf_add_local_field_group') ):
	function get_hours_select_options($time) {
		$separator = _x(':', 'Time separator', 'underscore');
		switch ($time) {
			case 'begin':
				return [
					'XX:XX' => __('Closed', 'underscore'),
					'07:00' => sprintf('7%s00', $separator),
					'07:30' => sprintf('7%s30', $separator),
					'08:00' => sprintf('8%s00', $separator),
					'08:30' => sprintf('8%s30', $separator),
					'09:00' => sprintf('9%s00', $separator),
					'09:30' => sprintf('9%s30', $separator),
					'10:00' => sprintf('10%s00', $separator),
					'10:30' => sprintf('10%s30', $separator),
					'11:00' => sprintf('11%s00', $separator),
					'11:30' => sprintf('11%s30', $separator),
					'12:00' => sprintf('12%s00', $separator)
					];
				break;
			case 'end':
				return [
					'XX:XX' => __('Closed', 'underscore'),
					'16:00' => sprintf('16%s00', $separator),
					'16:30' => sprintf('16%s30', $separator),
					'17:00' => sprintf('17%s00', $separator),
					'17:30' => sprintf('17%s30', $separator),
					'18:00' => sprintf('18%s00', $separator),
					'18:30' => sprintf('18%s30', $separator),
					'19:00' => sprintf('19%s00', $separator),
					'19:30' => sprintf('19%s30', $separator),
					'20:00' => sprintf('20%s00', $separator),
					'20:30' => sprintf('20%s30', $separator),
					'21:00' => sprintf('21%s00', $separator),
					'21:30' => sprintf('21%s30', $separator),
					'22:00' => sprintf('22%s00', $separator),
					];
				break;
		}
	}

	function get_business_hours_day_field($day, $action) {
		$field_name = "location_hours_${day}_${action}";
		return [
			'key' => $field_name,
			'label' => ($action == 'begin') ? __('Open', 'underscore') : __('Close', 'underscore'),
			'name' => $field_name,
			'type' => 'select',
			'choices' => get_hours_select_options($action),
			'wrapper' => [
				'width' => 35,
				'class' => 'no-border-left'
				]
			];
	}

	function get_business_hours_day_label($day) {
		return [
			'key' => 'label_business_hours_'.strtolower($day),
			'label' => $day,
			'type' => 'message',
			'wrapper' => ['width' => 30]
			];
	}

	acf_add_local_field_group(array (
		'key' => 'group_5634cfd0bbd17',
		'title' => __('Location details', 'underscore'),
		'fields' => array (
			/* ==================================================== */
			/* COORDONNÉES
			/* ==================================================== */
			array (
				'key' => 'icontab_store_location_particulars',
				'label' => __('Particulars', 'underscore'),
				'type' => 'tab',
				'placement' => 'left',
				'endpoint' => 0
			),
			array (
				'key' => 'field_5580bb13efeea',
				'label' => __('Postal address', 'underscore'),
				'name' => 'adresse_postale',
				'type' => 'message',
				'wrapper' => ['class' => 'medium'],
				'new_lines' => 'wpautop',
			),
			array (
				'key' => 'field_5580b9a27cbb6',
				'label' => __('Street no.', 'underscore'),
				'name' => 'location_address_street',
				'type' => 'text',
				'wrapper' => ['width' => 50],
			),
			array (
				'key' => 'field_5580ba257cbb7',
				'label' => __('Suite', 'underscore'),
				'name' => 'location_address_suite',
				'type' => 'text',
				'wrapper' => [
					'width' => 50,
					'class' => 'no-border-left',
					],
				'prepend' => '–',
			),
			array (
				'key' => 'field_5580ba447cbb8',
				'label' => __('City', 'underscore'),
				'name' => 'location_address_city',
				'type' => 'text',
				'wrapper' => ['width' => 50],
			),
			array (
				'key' => 'field_5580ba707cbb9',
				'label' => __('Province/state', 'underscore'),
				'name' => 'location_address_state',
				'type' => 'text',
				'wrapper' => [
					'width' => 50,
					'class' => 'no-border-left',
					],
			),
			array (
				'key' => 'field_5580bca664c14',
				'label' => __('Postal/zip code', 'underscore'),
				'name' => 'location_address_zip',
				'type' => 'text',
				'wrapper' => ['width' => 50],
			),
			array (
				'key' => 'field_5580bab77cbba',
				'label' => __('Country', 'underscore'),
				'name' => 'location_address_country',
				'type' => 'text',
				'wrapper' => [
					'width' => 50,
					'class' => 'no-border-left'
					]
			),
			array (
				'key' => 'field_5580bcea0623f',
				'label' => __('Contact informations', 'underscore'),
				'name' => 'informations_de_contact',
				'type' => 'message',
				'wrapper' => ['class' => 'medium'],
				'new_lines' => 'wpautop',
			),
			array (
				'key' => 'field_5580bb65efeeb',
				'label' => __('Telephone', 'underscore'),
				'name' => 'location_address_phone',
				'type' => 'text',
				'wrapper' => ['width' => 50],
			),
			array (
				'key' => 'field_5580bba7efeec',
				'label' => __('Alternative telephone', 'underscore'),
				'name' => 'location_address_phone_alt',
				'type' => 'text',
				'wrapper' => [
					'width' => 50,
					'class' => 'no-border-left'
					],
			),
			array (
				'key' => 'field_5580bbbcefeed',
				'label' => __('Email', 'underscore'),
				'name' => 'location_address_email',
				'type' => 'text',
				'wrapper' => ['width' => 100],
			),


			/* ==================================================== */
			/* HEURES DE SERVICE
			/* ==================================================== */
			array (
				'key' => 'icontab_time_location_business_hours',
				'label' => __('Business hours', 'underscore'),
				'type' => 'tab',
				'placement' => 'left',
				'endpoint' => 0
			),

			/* Lundi
			/* ---------------------------------------------------- */
			get_business_hours_day_label(__('Monday', 'underscore')),
			get_business_hours_day_field('monday', 'begin'),
			get_business_hours_day_field('monday', 'end'),

			/* Mardi
			/* ---------------------------------------------------- */
			get_business_hours_day_label(__('Tuesday', 'underscore')),
			get_business_hours_day_field('tuesday', 'begin'),
			get_business_hours_day_field('tuesday', 'end'),

			/* Mercredi
			/* ---------------------------------------------------- */
			get_business_hours_day_label(__('Wednesday', 'underscore')),
			get_business_hours_day_field('wednesday', 'begin'),
			get_business_hours_day_field('wednesday', 'end'),
			
			/* Jeudi
			/* ---------------------------------------------------- */
			get_business_hours_day_label(__('Thursday', 'underscore')),
			get_business_hours_day_field('thursday', 'begin'),
			get_business_hours_day_field('thursday', 'end'),

			/* Vendredi
			/* ---------------------------------------------------- */
			get_business_hours_day_label(__('Friday', 'underscore')),
			get_business_hours_day_field('friday', 'begin'),
			get_business_hours_day_field('friday', 'end'),

			/* Samedi
			/* ---------------------------------------------------- */
			get_business_hours_day_label(__('Saturday', 'underscore')),
			get_business_hours_day_field('saturday', 'begin'),
			get_business_hours_day_field('saturday', 'end'),

			/* Dimanche
			/* ---------------------------------------------------- */
			get_business_hours_day_label(__('Sunday', 'underscore')),
			get_business_hours_day_field('sunday', 'begin'),
			get_business_hours_day_field('sunday', 'end'),


			/* ==================================================== */
			/* GALERIE D’IMAGES
			/* ==================================================== */
			array (
				'key' => 'icontab_pictures_location_image_gallery',
				'label' => __('Image gallery', 'underscore'),
				'type' => 'tab',
				'placement' => 'left',
				'endpoint' => 0
			),
			array (
				'key' => 'field_5634d01c11254',
				'label' => __('Select images', 'underscore'),
				'name' => 'location_gallery',
				'type' => 'gallery',
				'preview_size' => 'thumbnail',
			),


			/* ==================================================== */
			/* GEOLOCATION
			/* ==================================================== */
			array (
				'key' => 'icontab_globe_location_geolocation',
				'label' => __('Geolocation', 'underscore'),
				'type' => 'tab',
				'placement' => 'left',
				'endpoint' => 0
			),
			array (
				'key' => 'field_56d34df29bb3d',
				'label' => __('Map', 'underscore'),
				'name' => 'location_map',
				'type' => 'google_map',
				'wrapper' => ['width' => 100],
				'center_lat' => '46.810751',
				'center_lng' => '-71.221765',
				'zoom' => 14,
			),
			array (
				'key' => 'field_56d1e898d18be',
				'label' => __('City', 'underscore'),
				'name' => 'location_slug',
				'type' => 'text',
				'instructions' => __('Lowercase, without spaces or special characters.', 'underscore'),
				'wrapper' => ['width' => 50],
			),
			array (
				'key' => 'field_56d1e918d18bf',
				'label' => __('City ID', 'underscore'),
				'name' => 'location_city_id',
				'type' => 'text',
				'instructions' => __('Numeric city ID on openWeather.org', 'underscore'),
				'wrapper' => ['width' => 50],
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'location',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'active' => 1
	));
endif;











