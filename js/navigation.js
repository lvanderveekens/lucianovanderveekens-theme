/* global jQuery */
( function( $ ) {
	console.log( 'WHAT' );
	$( '#toggle' ).click( function( e ) {
		$( '.menu-container-mobile' ).slideToggle( 500 );
		e.preventDefault();
	} );
}( jQuery ) );
