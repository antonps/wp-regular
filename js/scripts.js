( function( $ ) {

$(document).ready(function(){


	$('.entry-content :header').wrapInner('<span>');

	$('.site-branding').click(function(){
		$('#site-navigation').fadeToggle();

	});

});

} )( jQuery );
