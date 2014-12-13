( function( $ ) {

$(document).ready(function(){
	$(window).scroll(function(){
        scroll = $(window).scrollTop();
	    if (scroll >= 120) {
	      $('.site-branding').addClass('smallogo');
	    }
	    else {
	   		$('.site-branding').removeClass('smallogo');
	    }
	});
});

} )( jQuery );
