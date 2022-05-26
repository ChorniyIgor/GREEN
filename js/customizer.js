/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'contact_phone_usa', function( value ) {
		value.bind( function( to ) {
			$( '.contact_phone_usa a' ).html( to );
			$( '.contact_phone_usa a' ).attr('href', 'tel:' + to );
		} );
	} );
	wp.customize( 'contact_phone_intl', function( value ) {
		value.bind( function( to ) {
			$( '.contact_phone_intl a' ).html( to );
			$( '.contact_phone_intl a' ).attr('href', 'tel:' + to );
		} );
	} );
	wp.customize( 'contact_email_1', function( value ) {
		value.bind( function( to ) {
			$( '.contact_email_1 a' ).html( to );
			$( '.contact_email_1 a' ).attr('href', 'mailto:' + to );
		} );
	} );
	wp.customize( 'contact_email_2', function( value ) {
		value.bind( function( to ) {
			$( '.contact_email_2 a' ).html( to );
			$( '.contact_email_2 a' ).attr('href', 'mailto:' + to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$( '.site-title a, .site-description' ).css( {
					color: to,
				} );
			}
		} );
	} );
}( jQuery ) );
