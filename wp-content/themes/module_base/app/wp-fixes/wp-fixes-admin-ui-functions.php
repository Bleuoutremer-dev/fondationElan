<?php

/**
 * remove_customize_page function.
 *
 * @access public
 * @return void
 */

if ( !function_exists('remove_customize_page') ):

	function remove_customize_page(){
		global $submenu;
		//unset($submenu['themes.php'][6]); // remove customize link
	}
	add_action( 'admin_menu', 'remove_customize_page');

endif;




/**
 * remove_admin_menu_items function.
 *
 * @access public
 * @return void
 */

if ( !function_exists('remove_admin_menu_items') ):

	function remove_admin_menu_items() {
		global $menu;

		// Unset Post
		if ( isset( $menu[5] ) && $menu[5][2] == 'edit.php' ):
			//unset($menu[5]);
		endif;

		// Change Comment position
		if ( isset( $menu[25] ) && $menu[25][2] == 'edit-comments.php' ):
			//$menu[36] = $menu[25];
			//unset($menu[25]);
		endif;

		// Change Upload position
		if ( isset( $menu[10] ) && $menu[10][2] == 'upload.php' ):
			//$menu[49] = $menu[10];
			//unset($menu[10]);
		endif;


		// add_admin_menu_separator( 38 );
		// add_admin_menu_separator( 48 );

		//_p($menu);

	}
	add_action( 'admin_init', 'remove_admin_menu_items', 10 );

endif;




/**
 * add_admin_menu_separator function.
 *
 * @access public
 * @param mixed $position
 * @return void
 */

if ( !function_exists('add_admin_menu_separator') ):

	function add_admin_menu_separator( $position ) {

		global $menu;

		$menu[ $position ] = array(
			0	=>	'',
			1	=>	'read',
			2	=>	'separator' . $position,
			3	=>	'',
			4	=>	'wp-menu-separator'
		);

		ksort($menu);

	}

endif;







/**
 * Admin columns related
 *
 * @since theme-blank 1.0
 *
 * @return void
 */


function posts_columns( $defaults ) {

  $defaults['post_thumbs'] = __('Thumbs', 'theme-blank');
  return $defaults;

}
add_filter('manage_{post_type}_posts_columns', 'posts_columns', 5);




function posts_custom_columns( $column_name, $id ) {

	if ( $column_name === 'post_thumbs' )
		echo the_post_thumbnail( array(50, 50) );

}
add_action('manage_{post_type}_posts_custom_column', 'posts_custom_columns', 5, 2);



function custom_columns_head( $defaults ) {

    $new 	= array();
    $tags = $defaults['post_thumbs'];  // save the tags column

    unset($defaults['post_thumbs']);   // remove it from the columns list

    foreach($defaults as $key=>$value) {

	    if ( $key == 'title' ) {  // when we find the date column
	    	$new['post_thumbs'] = $tags;  // put the tags column before it
	    }

	    $new[$key]=$value;

    }

    return $new;
}
add_filter('manage_{post_type}_posts_columns', 'custom_columns_head');






function remove_dashboard_widgets() {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );




function fontawesome_icon_dashboard() {
   echo '<style type="text/css" media="screen">
   		.dashicons-smiley:before {
   		font-family: Fontawesome !important;
   		content: "\f0fc" !important;
     }
     	</style>';
 }
add_action('admin_head', 'fontawesome_icon_dashboard');





// wp_dashboard_setup is the action hook
add_action('wp_dashboard_setup', 'mycustom_site_stats');

// add dashboard widget
function mycustom_site_stats() {
	wp_add_dashboard_widget('custom_site_widget', __('Site Stats', 'theme-blank'),'custom_dashboard_site_list');
}

function custom_dashboard_site_list(){

  $args = array(
      'public' => true ,
      '_builtin' => false );
  $output = 'object';
  $operator = 'and';

  echo '<table>';

  //loop over all custom post types
  $post_types = get_post_types( $args , $output , $operator );
  echo '<h4>' . __('Posts') . '</h4>';
  foreach( $post_types as $post_type ) {

      $num_posts = wp_count_posts( $post_type->name );
      $num = number_format_i18n( $num_posts->publish );
      $text = _n( $post_type->labels->singular_name, $post_type->labels->name , intval( $num_posts->publish ) );

      if ( current_user_can( 'edit_posts' ) ) {
          $num = "<a href='edit.php?post_type=$post_type->name'>$num</a>";
          $text = "<a href='edit.php?post_type=$post_type->name'>$text</a>";
      }

      echo '<tr><td class="first b b-' . $post_type->name . '">' . $num . '</td>';
      echo '<td class="t ' . $post_type->name . '">' . $text . '</td></tr>';
  }
    echo '</table>';

}







/**
 *
 * Show custom post types in dashboard activity widget
 *
 */


// register your custom activity widget
function add_custom_dashboard_activity() {
    wp_add_dashboard_widget('custom_dashboard_activity', __( 'Activity' ), 'custom_wp_dashboard_site_activity');
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_activity' );


// the new function based on wp_dashboard_recent_posts (in wp-admin/includes/dashboard.php)
function wp_dashboard_recent_post_types( $args ) {

	/* Changed from here */
	if ( ! $args['post_type'] ) {
		$args['post_type'] = 'any';
	}

	$query_args = array(
		'post_type'      => $args['post_type'],

		/* to here */
		'post_status'    => $args['status'],
		'orderby'        => 'date',
		'order'          => $args['order'],
		'posts_per_page' => intval( $args['max'] ),
		'no_found_rows'  => true,
		'cache_results'  => false
	);
	$posts = new WP_Query( $query_args );

	if ( $posts->have_posts() ) {

		echo '<div id="' . $args['id'] . '" class="activity-block">';

		echo '<h4>' . $args['title'] . '</h4>';

		echo '<ul>';

		$i = 0;
		$today    = date( 'Y-m-d', current_time( 'timestamp' ) );
		$tomorrow = date( 'Y-m-d', strtotime( '+1 day', current_time( 'timestamp' ) ) );

		while ( $posts->have_posts() ) {
			$posts->the_post();

			$time = get_the_time( 'U' );
			if ( date( 'Y-m-d', $time ) == $today ) {
				$relative = __( 'Today' );
			} elseif ( date( 'Y-m-d', $time ) == $tomorrow ) {
				$relative = __( 'Tomorrow' );
			} else {
				/* translators: date and time format for recent posts on the dashboard, see http://php.net/date */
				$relative = date_i18n( __( 'M jS' ), $time );
			}

 			$text = sprintf(
				/* translators: 1: relative date, 2: time, 4: post title */
 				__( '<span>%1$s, %2$s</span> <a href="%3$s">%4$s</a> <span class="wp-dashboard-post-type">%5$s</span>' ),
  				$relative,
  				get_the_time(),
  				get_edit_post_link(),
  				_draft_or_post_title(),
  				get_post_type()
  			);

 			$hidden = $i >= $args['display'] ? ' class="hidden"' : '';
 			echo "<li{$hidden}>$text</li>";
			$i++;
		}

		echo '</ul>';

		if ( $posts->post_count > $args['display'] ) {
			echo '<small class="show-more hide-if-no-js"><a href="#">' . sprintf( __( 'See %s more…'), $posts->post_count - intval( $args['display'] ) ) . '</a></small>';
		}

		echo '</div>';

	} else {
		return false;
	}

	wp_reset_postdata();

	return true;
}

// The replacement widget
function custom_wp_dashboard_site_activity() {

    echo '<div id="activity-widget">';

    $future_posts = wp_dashboard_recent_post_types( array(
        'post_type'  => 'any',
        'display' => 3,
        'max'     => 8,
        'status'  => 'future',
        'order'   => 'ASC',
        'title'   => __( 'Publishing Soon' ),
        'id'      => 'future-posts',
    ) );

    $recent_posts = wp_dashboard_recent_post_types( array(
        'post_type'  => 'any',
        'display' => 3,
        'max'     => 8,
        'status'  => 'publish',
        'order'   => 'DESC',
        'title'   => __( 'Recently Published' ),
        'id'      => 'published-posts',
    ) );

    $recent_comments = wp_dashboard_recent_comments( 10 );

    if ( !$future_posts && !$recent_posts && !$recent_comments ) {
        echo '<div class="no-activity">';
        echo '<p class="smiley"></p>';
        echo '<p>' . __( 'No activity yet!' ) . '</p>';
        echo '</div>';
    }

    echo '</div>';
}
