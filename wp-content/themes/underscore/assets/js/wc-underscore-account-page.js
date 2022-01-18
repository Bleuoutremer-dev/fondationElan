jQuery( function( $ ) {

	// Tabs
	$( '.woocommerce-tabs .panel' ).hide();

	$( '.woocommerce-tabs ul.tabs li a' ).click( function() {

		var $tab = $( this ),
			$tabs_wrapper = $tab.closest( '.woocommerce-tabs' );

		$( 'ul.tabs li', $tabs_wrapper ).removeClass( 'active' );
		$( 'div.panel', $tabs_wrapper ).hide();
		$( 'div' + $tab.attr( 'href' ), $tabs_wrapper).show();
		$tab.parent().addClass( 'active' );

		return false;
	});

	$( '.woocommerce-tabs' ).each( function() {
		var hash	= window.location.hash,
			url		= window.location.href,
			tabs	= $( this );

		if ( hash.toLowerCase().indexOf( "comment-" ) >= 0 ) {
			$('ul.tabs li.reviews_tab a', tabs ).click();

		} else if ( url.indexOf( "comment-page-" ) > 0 || url.indexOf( "cpage=" ) > 0 ) {
			$( 'ul.tabs li.reviews_tab a', $( this ) ).click();

		} else {
			$( 'ul.tabs li:first a', tabs ).click();
		}
	});

	$( 'a.woocommerce-review-link' ).click( function() {
		$( '.reviews_tab a' ).click();
		return true;
	});
	
})