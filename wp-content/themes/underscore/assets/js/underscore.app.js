
// Fixes : Weird bug with back button in Safari..
window.onpageshow = function(event) {
	if (event.persisted) {
		window.location.reload() 
	}
};

$(document).ready(function(){

	
	if ( !$('.embed-form').length )
		$('#main').html( typogr.typogrify($('#main')) );
	
	$('main').fitVids();
	
	$('.wrap-checkout-notice').delegate('.notice-open-trigger', 'click' , function() {
		$(this).parent().parent().toggleClass('active');
	});
	
});




/*
	
	In-between fade transitions
	
*/

$(document).ready(function(){	

	$( 'body' ).delegate( 'a, a.link, button.link, .button.link input[type="submit"]', 'click', function(e) {
		
		if ( $('body').hasClass('fade-transition') ) {
			_href = $(this).attr('href');
			if ( 	!$(this).is('.product-category-link, .scroll, .load-more, .zoom, .reset_variations, .tab, .popup') && 
						!$(this).parent().is('.load-more') && 
						!$(this).parent().is('.current-menu-item.menu-item-home') && 
						$(this).attr('href') != '#' && 
						
						_href != '#' && 
						_href.indexOf('mailto:') != -1 &&
						_href.indexOf('tel:') != -1 &&
						
						$(this).attr('target') != '_blank' &&
						!e.shiftKey && !e.ctrlKey && !e.metaKey
					)
						$( 'body' ).removeClass('loaded ready').addClass('loading');
		}
		
	});

});

$(document).ready(function(){
	//$('body.fade-transition').addClass('ready');
	if ( !$('body').hasClass('home') )
		$('body.fade-transition').addClass('ready').removeClass('loading').addClass('loaded');
 });

$(window).on('load', function(){;
/*
	if ( !$('body').hasClass('home') )
		$('body.fade-transition').removeClass('loading').addClass('loaded');
*/
 });
 




/*
	
	Infinite scroll actions
	
*/

/*
$(document).ready(function(){

	$('body.infinite-scroll .shop .load-more a').click(function () {
		
		$('body.infinite-scroll .shop .products').height( $('body.infinite-scroll .shop .products').height() );		
		$(this).parent().addClass('loading');
		varInit();
		
	});

	$(document).ajaxError(function (e, xhr, opt) {
		if (xhr.status == 404) $('body.infinite-scroll .shop .load-more').slideUp(250, function() { varInit(); });
	});  	
});

function afterInfiniteScroll() {
	$('.shop .load-more').removeClass('loading');
	_container = $('.shop .products');
	_containerRealHeight = _container[0].scrollHeight

	_container.animate({
		height : _containerRealHeight
	}, 250, function () {
		varInit();	
	});
	
}
*/

	