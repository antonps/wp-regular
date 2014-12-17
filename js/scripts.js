( function( $ ) {

$(document).ready(function(){


	$('.entry-content :header').wrapInner('<span>');

	$(window).scroll(function(){
        scroll = $(window).scrollTop();
	    if (scroll >= 1) {
	      $('.site-branding').addClass('smallogo');
	    }
	    else {
	   		$('.site-branding').removeClass('smallogo');
	    }
	});

	$('.site-branding').click(function(){
		$('#site-navigation').fadeToggle();
	});

});

} )( jQuery );
