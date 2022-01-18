<?php

/**
 * Returns all the orders made by the user
 *
 * @param int $user_id
 * @param string $status (completed|processing|canceled|on-hold etc)
 * @return array of order ids
 */
function get_all_user_orders($user_id, $status = 'wc-completed'){
    if(!$user_id)
        return false;
    
    $orders=array();//order ids
     
    $args = array(
        'numberposts'     => -1,
        'meta_key'        => '_customer_user',
        'meta_value'      => $user_id,
        'post_type'   		=> 'shop_order',
        'post_status'     => $status,
    );
    
    $posts = get_posts($args);
    //get the post ids as order ids
    $orders = wp_list_pluck( $posts, 'ID' );
    
    return $orders;
 
}




	
	
function get_edit_address_form( $load_address = 'billing' ) {

	// Current user
	global $current_user;
	get_currentuserinfo();

	$load_address = sanitize_key( $load_address );

	$address = WC()->countries->get_address_fields( get_user_meta( get_current_user_id(), $load_address . '_country', true ), $load_address . '_' );

	// Enqueue scripts
	wp_enqueue_script( 'wc-country-select' );
	wp_enqueue_script( 'wc-address-i18n' );

	// Prepare values
	foreach ( $address as $key => $field ) {

		$value = get_user_meta( get_current_user_id(), $key, true );

		if ( ! $value ) {
			switch( $key ) {
				case 'billing_email' :
				case 'shipping_email' :
					$value = $current_user->user_email;
				break;
				case 'billing_country' :
				case 'shipping_country' :
					$value = WC()->countries->get_base_country();
				break;
				case 'billing_state' :
				case 'shipping_state' :
					$value = WC()->countries->get_base_state();
				break;
			}
		}

		$address[ $key ]['value'] = apply_filters( 'woocommerce_my_account_edit_address_field_value', $value, $key, $load_address );
	}

	wc_get_template( 'myaccount/form-edit-address.php', array(
		'load_address' 	=> $load_address,
		'address'		=> apply_filters( 'woocommerce_address_to_edit', $address )
	) );
}
