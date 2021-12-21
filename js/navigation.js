/* global jQuery */
( function( $ ) {
	$( '#toggle' ).click( function( e ) {
		$( '.menu-container-mobile' ).slideToggle( 500 );
		e.preventDefault();
	} );
}( jQuery ) );
