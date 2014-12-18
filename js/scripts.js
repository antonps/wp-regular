( function( $ ) {

$(document).ready(function(){


	$('.entry-content :header').wrapInner('<span>');

	$('.entry-content p.dropcap').html(function (i, html) {
	    return html.replace(/^[^a-zA-Z]*([a-zA-Z])/g, '<span class="first-letter">$1</span>');
	});

	$('.site-branding').click(function(){
		$('#site-navigation').fadeToggle();

	});

});

} )( jQuery );
