/**
 * Sticky Header
 * Adds a class to header on scroll
 */
import magnificPopup from '../vendors/jquery-magnificpopup';
import organicTabs from '../vendors/organic-tab';
import slick from '../vendors/slick.min';
jQuery( document ).on( 'scroll', function() {
	if ( jQuery( document ).scrollTop() > 0 ) {
		jQuery( 'header, body' ).addClass( 'shrink' );
	} else {
		jQuery( 'header, body' ).removeClass( 'shrink' );
	}
} );

jQuery( function() {
	/**
	 * Header Wrapper Height Calculation for Navigation Overlay
	 */

	if ( jQuery( '.header-wrapper' ).length > 0 ) {
		function updateHeaderHeight() {
			jQuery( '.header-wrapper' ).each( function() {
				jQuery( this ).css( '--gb_header-wrapper-default', jQuery( this ).outerHeight() + 'px' );
			} );
		}
		updateHeaderHeight();
		jQuery( window ).resize( updateHeaderHeight );
	}

	if ( jQuery( window ).width() > 1003 ) {
		let lastScrollTop = 0,
			delta = 15;
		let adjustment = 0;

		if ( jQuery( 'body' ).hasClass( 'logged-in admin-bar' ) ) {
			adjustment = 32;
		}
		const totalHeaderHeight = jQuery( '.header-section' ).outerHeight() + adjustment;

		jQuery( window ).scroll( function( event ) {
			const st = jQuery( this ).scrollTop();

			if ( Math.abs( lastScrollTop - st ) <= delta ) {
				return;
			}
			if ( st > lastScrollTop && lastScrollTop > 0 ) {
				jQuery( '.header-section' ).css( 'top', '-' + totalHeaderHeight + 'px' );
			} else {
				jQuery( '.header-section' ).css( 'top', adjustment + 'px' );
			}
			lastScrollTop = st;
		} );
	}	/**
			 
			 
			 * Toggle menu for mobile
			 */
	const navOverlay = jQuery( '.nav-overlay' );
	const htmlBody = jQuery( 'html, body' );

	jQuery( '.menu-btn' ).on( 'click', function() {
		jQuery( this ).toggleClass( 'active' );
		navOverlay.toggleClass( 'open' );
		htmlBody.toggleClass( 'no-overflow' );
		jQuery( '.header-nav ul li.active' ).removeClass( 'active' );
		jQuery( '.header-nav ul.sub-menu' ).slideUp();
	} );

	/**
	 * Add span tag to multi-level accordion menu for mobile menus
	 */

	jQuery( '.menu-item-has-children > a:first-child' ).each( function() {
		jQuery( this ).after( '<span class="submenu-icon"></span>' );
	} );

	/**
	 * Slide Up/Down internal sub-menu when mobile menu arrow clicked
	 */

	jQuery( '.header-nav' ).on( 'click', '.submenu-icon', function() {
		const parentLi = jQuery( this ).closest( 'li' );

		parentLi.siblings( '.active' )
			.removeClass( 'active' )
			.find( 'ul' ).slideUp();

		parentLi.toggleClass( 'active' ).find( 'ul' ).stop( true, true ).slideToggle();
		parentLi.parents( 'ul' ).toggleClass( 'disabled-menu', parentLi.hasClass( 'active' ) );
	} );

	/**
	 *  Accessibility for Simple menu & Mega menu
	 */
	jQuery( '.menu-item-has-children > a' ).on( 'focus blur', function( event ) {
		jQuery( this ).siblings( '.sub-menu, .mega-menu' ).toggleClass( 'focused', event.type === 'focus' );
	} );

	jQuery( '.sub-menu a, .mega-menu a' ).on( 'focus blur', function( event ) {
		jQuery( this ).closest( '.sub-menu, .mega-menu' ).toggleClass( 'focused', event.type === 'focus' );
	} );

	/**
	 * Script for Accessibility of html Tags
	 */
	jQuery( 'h1, h2, h3, h4, h5, h6,p,li,blockquote,cite,strong,dt,dd,th,td,b,i,u,s,em,small,sup,del,ins,abbr,mark,details,pre,kbd,samp,var,address,code,q,figure,figcaption,caption,.top-bar-text,.top-bar-cross,.copy-right,.post-author-img,.post-author-name,.post-meta-date,.post-date' ).each( function() {
		jQuery( this ).attr( {
			tabindex: 0,
		} );
	} );
	jQuery( '.header-nav li, .blog-nav li, .footer-nav li, .legal-nav li' ).each( function() {
		const link = jQuery( this ).find( 'a' );
		if ( link.length > 0 ) {
			jQuery( this ).removeAttr( 'tabindex' );
		} else {
			jQuery( this ).attr( 'tabindex', '0' );
		}
	} );
	jQuery( 'form p' ).each( function() {
		jQuery( this ).removeAttr( 'tabindex' );
	} );

	jQuery( 'a,button:not([href])' ).each( function() {
		jQuery( this ).attr( {
			tabindex: 0,
		} );
	} );

	setTimeout( () => {
		jQuery( '#daextlwcnf-cookie-notice-button-1' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-notice-button-2' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-settings-button-1' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-settings-button-2' ).attr( 'role', 'button' );
	}, 500 );

	autosize();
	function autosize() {
		const text = jQuery( 'textarea' );

		text.each( function() {
			jQuery( this ).attr( 'rows', 5 );
			resize( jQuery( this ) );
		} );

		text.on( 'input', function() {
			resize( jQuery( this ) );
		} );

		function resize( $text ) {
			$text.css( 'min-height', 'auto' );
			$text.css( 'min-height', $text[ 0 ].scrollHeight + 'px' );
		}
	}

	jQuery(
		'input[type="text"],input[type="email"],input[type="tel"]'
	).each( function() {
		jQuery( this ).parent().parent( '.gfield' ).addClass( 'label-down' );
		jQuery( this ).parent( '.gform-grid-col' ).addClass( 'label-down' );
	} );

	jQuery( 'input[type="text"],input[type="email"],input[type="tel"]' ).each(
		function() {
			jQuery( this ).on( 'focus', function() {
				jQuery( this ).parent().parent( '.gfield' ).addClass( 'active' );
			} );

			jQuery( this ).on( 'blur', function() {
				if ( jQuery( this ).val().length == 0 ) {
					jQuery( this )
						.parent()
						.parent( '.gfield' )
						.removeClass( 'active' );
				}
			} );

			if ( jQuery( this ).val() != '' ) {
				jQuery( this ).parent( '.css' ).addClass( 'active' );
			}
		}
	);

	if ( jQuery( '.faqs__area' ).length > 0 ) {
		jQuery( '.faqs__item--title' ).on( 'click keypress', function( e ) {
			if ( e.type === 'click' || ( e.type === 'keypress' && ( e.key === 'Enter' || e.key === ' ' ) ) ) {
				const $currentHeader = jQuery( this );
				const $currentContent = $currentHeader.next( '.faqs__item--desc' );
				const isExpanded = $currentHeader.hasClass( 'active' );
				jQuery( '.faqs__item--title' ).removeClass( 'active' ).attr( 'aria-expanded', 'false' );
				jQuery( '.faqs__item--desc' ).slideUp().attr( 'aria-hidden', 'true' );
				if ( ! isExpanded ) {
					$currentHeader.addClass( 'active' ).attr( 'aria-expanded', 'true' );
					$currentContent.slideDown().attr( 'aria-hidden', 'false' );
				}
			}
		} );

		jQuery( '.faqs__item--title' ).on( 'keydown', function( e ) {
			if ( e.key === 'ArrowDown' ) {
				jQuery( this ).closest( '.faqs__item' ).next( '.faqs__item' ).find( '.faqs__item--title' ).focus();
			} else if ( e.key === 'ArrowUp' ) {
				jQuery( this ).closest( '.faqs__item' ).prev( '.faqs__item' ).find( '.faqs__item--title' ).focus();
			}
		} );
	}

	jQuery.noConflict();

	jQuery( '.footer-hover-button,.change-bg-on-hover' ).on( 'mouseenter', function() {
		jQuery( '.footer-section,.changeable-bg' ).addClass( 'purple-bg' );
	} );

	jQuery.noConflict();

	jQuery( '.footer-hover-button,.change-bg-on-hover' ).on( 'mouseleave', function() {
		jQuery( '.footer-section,.changeable-bg' ).removeClass( 'purple-bg' );
	} );

	if ( jQuery( '.single-page-content' ).length > 0 ) {
		const headings = jQuery( '.blog-detail__content h2' );
		const headingList = jQuery( '.heading-lists' );

		let count = 1;
		headings.each( function() {
			const id = jQuery( this ).text().trim().toLowerCase().replace( /[^a-zA-Z0-9 ]/g, '' ).replace( /\s/g, '-' );
			jQuery( this ).attr( 'id', id );

			if ( jQuery( this ).text() !== '' ) {
				const listItem = jQuery( '<li></li>' );
				const anchor = jQuery( '<a></a>' );
				anchor.attr( 'href', '#' + id ).html( jQuery( this ).text() );
				listItem.append( anchor );
				headingList.append( listItem );
				count++;
			}
		} );

		// Hide table of content if it's empty
		if ( headingList.html().trim() === '' ) {
			jQuery( '.table-of-content-list' ).hide();
			jQuery( '.sidebar-headings' ).hide(); // Hide sidebar headings if no h2 elements are found
		}

		// Function to check if element is in viewport
		function isInViewport( elem ) {
			const bounding = elem[ 0 ].getBoundingClientRect();
			return (
				bounding.top >= 0 &&
            bounding.left >= 0 &&
            bounding.bottom <= ( window.innerHeight || document.documentElement.clientHeight ) &&
            bounding.right <= ( window.innerWidth || document.documentElement.clientWidth )
			);
		}

		// Highlight active section in sidebar based on viewport
		jQuery( window ).on( 'scroll', function() {
			let prevActiveIndex = -1;
			headings.each( function( index ) {
				if ( isInViewport( jQuery( this ) ) ) {
					prevActiveIndex = index;
				}
			} );

			if ( prevActiveIndex !== -1 ) {
				jQuery( '.heading-lists li a' ).removeClass( 'active' );
				jQuery( '.heading-lists li:eq(' + prevActiveIndex + ') a' ).addClass( 'active' );
			}
		} );
	}

	jQuery.noConflict();
} );

