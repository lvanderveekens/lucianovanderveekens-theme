/* global jQuery */

( function( $ ) {
	$( '#toggle' ).click( function( e ) {
		$( '.menu-container-mobile' ).slideToggle( 500 );
		e.preventDefault();
	} );

	$( window ).on( 'resize', function() {
		// TODO: read breakpoint from tailwind.config.js
		if ( window.screen.width >= 768 ) {
			$( '.menu-container-mobile' ).removeAttr( 'style' );
		}
	} );
}( jQuery ) );
