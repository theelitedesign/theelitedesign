/**
 * Sticky Header
 * Adds a class to header on scroll
 */
import magnificPopup from '../vendors/jquery-magnificpopup';
import organicTabs from '../vendors/organic-tab';
import slick from '../vendors/slick.min';
import Owl from '../vendors/owl.carousel.min';
jQuery( document ).on( 'scroll', function() {
	if ( jQuery( document ).scrollTop() > 0 ) {
		jQuery( 'header, body' ).addClass( 'shrink' );
	} else {
		jQuery( 'header, body' ).removeClass( 'shrink' );
	}
} );

/**
 * Document Ready Function
 * Triggered when document get's ready
 */

// jQuery('img').on('load', function(){
// 	alert("loaded");
// 	console.log("loaded");
// 	// jQuery(this).addClass('loaded');
// });



// jQuery(".wp-image-10").on('load', function () {
//         console.log("loaded");
//     }
// );
jQuery( function() {

	// Perfect Wp-images


	const extLink = jQuery( 'body a' ).filter( function() {
		return this.hostname && this.hostname !== location.hostname;
	} );
	extLink.each( function() {
		jQuery( this ).attr( 'target', '_blank' );
		jQuery( this ).addClass( 'external-link' );
	} );

	jQuery( window ).load( function() {
		if ( jQuery( document ).scrollTop() > 0 ) {
			const $header_height = jQuery( 'header' ).outerHeight();
			jQuery( 'body' ).css( 'padding-top', $header_height + 'px' );
		} else {
			const $header_height = jQuery( 'header' ).outerHeight();
			jQuery( 'body' ).css( 'padding-top', $header_height + 'px' );
		}
	} );
	/**
	 * Toggle menu for mobile
	 */
	// accessible sub menu
	jQuery( '.menu-item-has-children > a' )
		.focus( function() {
			jQuery( this ).siblings( '.sub-menu' ).addClass( 'focused' );
		} )
		.blur( function() {
			jQuery( this ).siblings( '.sub-menu' ).removeClass( 'focused' );
		} );

	// var $header_height = jQuery("header").outerHeight();
	// jQuery("body").css('padding-top', $header_height+'px');
	//  jQuery(window).resize(function() {
	// 	});

	// jQuery(window).trigger('resize');

	// jQuery(window).scroll(function(){
	// 	$header_height = jQuery("header").outerHeight();
	// 	jQuery("body").css('padding-top', $header_height+'px');
	// });

	jQuery( '.menu-btn' ).on( 'click', function() {
		jQuery( this ).toggleClass( 'active' );
		jQuery( '.nav-overlay' ).toggleClass( 'open' );
		jQuery( 'html, body' ).toggleClass( 'no-overflow' );
		jQuery( '.header-nav ul li.active' ).removeClass( 'active' );
		jQuery( '.header-nav ul.sub-menu' ).slideUp();
	} );
	jQuery.noConflict();

	/**
	 * Add span tag to multi-level accordion menu for mobile menus
	 */
	jQuery( 'li' ).each( function() {
		if ( jQuery( this ).hasClass( 'menu-item-has-children' ) ) {
			jQuery( this )
				.find( 'a:first' )
				.after( '<span class="submenu-icon"></span>' );
		}
	} );
	/**
	 * Slide Up/Down internal sub-menu when mobile menu arrow clicked
	 */
	jQuery( '.header-nav .submenu-icon' ).on( 'click', function() {
		const link = jQuery( this );
		const closestUl = link.closest( 'ul' );
		const parallelActiveLinks = closestUl.find( '.active' );
		const closestLi = link.closest( 'li' );
		const linkStatus = closestLi.hasClass( 'active' );
		let count = 0;

		closestUl.find( 'ul' ).slideUp( function() {
			if ( ++count === closestUl.find( 'ul' ).length ) {
				parallelActiveLinks.removeClass( 'active' );
			}
		} );

		if ( ! linkStatus ) {
			closestLi.children( 'ul' ).slideDown();
			closestLi.addClass( 'active' );
		}
	} );

	// Style Variations
	 const modeOptions = jQuery( 'input[name="mode"]' );
	const body = jQuery( 'body' );

	// Function to update the mode based on the selected radio button
	function updateMode() {
		const selectedMode = modeOptions.filter( ':checked' ).attr( 'id' );

		body.removeClass( 'dark-mode light-dark-mode high-contrast-mode' );

		if ( selectedMode === 'dark-mode' ) {
			body.addClass( 'dark-mode' );
			localStorage.setItem( 'mode', 'dark-mode' );
		} else if ( selectedMode === 'light-dark-mode' ) {
			body.addClass( 'light-dark-mode' );
			localStorage.setItem( 'mode', 'light-dark-mode' );
		} else if ( selectedMode === 'high-contrast-mode' ) {
			body.addClass( 'high-contrast-mode' );
			localStorage.setItem( 'mode', 'high-contrast-mode' );
		} else {
			// Default to light mode if no radio button is selected
			body.addClass( 'light-mode' );
			localStorage.setItem( 'mode', 'light-mode' );
		}
	}

	// Check local storage for user preference
	const userPreference = localStorage.getItem( 'mode' );
	if ( userPreference ) {
		modeOptions.filter( `#${ userPreference }` ).prop( 'checked', true );
		updateMode();
	}

	// Handle radio button change events
	modeOptions.change( updateMode );
} );
