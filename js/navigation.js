/* global jQuery */

( function( $ ) {
	$( '#toggle' ).click( function( e ) {
		$( '.menu-container-mobile' ).slideToggle( 500 );
		e.preventDefault();
	} );

	$( window ).on( 'resize', function() {
		// TODO: read breakpoint from tailwind.config.js
		if ( window.innerWidth >= 768 ) {
			$( '.menu-container-mobile' ).removeAttr( 'style' );
		}
	} );

	$( '.menu-container-mobile li' ).on( 'click', function() {
		$( '.menu-container-mobile' ).removeAttr( 'style' );
	} );
}( jQuery ) );
