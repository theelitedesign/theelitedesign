jQuery( document ).on( 'scroll', function() {
	if ( jQuery( document ).scrollTop() > 0 ) {
		jQuery( 'header, body' ).addClass( 'shrink' );
	} else {
		jQuery( 'header, body' ).removeClass( 'shrink' );
	}
} );
jQuery.noConflict();

jQuery( window ).on( 'load', function() {
	if ( jQuery( document ).scrollTop() > 0 ) {
		const $header_height = jQuery( 'header' ).outerHeight();
		jQuery( '.hero-section' ).css( 'padding-top', $header_height + 'px' );
		if ( jQuery( 'body' ).hasClass( 'logged-in admin-bar' ) ) {
			const $header_height = jQuery( 'header' ).outerHeight() + 32;
			jQuery( '.hero-section' ).css( 'padding-top', $header_height + 'px' );
		}
	} else {
		const $header_height = jQuery( 'header' ).outerHeight();
		jQuery( '.hero-section' ).css( 'padding-top', $header_height + 'px' );
		if ( jQuery( 'body' ).hasClass( 'logged-in admin-bar' ) ) {
			const $header_height = jQuery( 'header' ).outerHeight() + 32;
			jQuery( '.hero-section' ).css( 'padding-top', $header_height + 'px' );
		}
	}

	if ( jQuery( 'h1' ).length > 0 ) {
		jQuery( 'h1' ).css( {
			opacity: 1,
			visibility: 'visible',
		} );

		const heroTitle = document.querySelectorAll( 'h1' );
		gsap.registerPlugin( SplitText );

		let textAnim;

		const doText = () => {
			textAnim && textAnim.progress( 1 );
			const text = new SplitText( 'h1', { types: 'lines,char', linesClass: 'lineChild' } );
			const mask = new SplitText( 'h1', { types: 'lines,char', linesClass: 'lineParent' } );

			textAnim = gsap.fromTo( '.lineChild', { yPercent: 100 }, {
				yPercent: 0,
				duration: 0.8,
				stagger: 0.2,
			} );
		};
		doText();
	}

	if ( jQuery( '.textAnimation' ).length > 0 ) {
		jQuery( '.textAnimation .headingLine' ).css( 'opacity', '1' );

		const textAnimation = new SplitText( '.textAnimation', { type: 'words,chars' } );

		gsap.from( textAnimation.words, { y: '100%', stagger: 0.05 } );
		gsap.from( textAnimation.chars, { y: '100%', stagger: 0.05 } );
	}

	// gsap.registerPlugin( ScrollTrigger, ScrollSmoother );

	// const smoother = ScrollSmoother.create( {
	// 	smooth: 2,
	// 	effects: true,
	// 	normalizeScroll: true,
	// 	dataScroll: 'true',
	// } );
} );
jQuery.noConflict();

jQuery( function() {
	jQuery( '.menu-btn' ).click( function() {
		jQuery( this ).toggleClass( 'active' );
		jQuery( '.nav-overlay' ).toggleClass( 'open' );
		jQuery( 'html, body' ).toggleClass( 'no-overflow' );
		jQuery( '.header-nav ul li.active' ).removeClass( 'active' );
		jQuery( '.header-nav ul.sub-menu' ).slideUp();
	} );

	jQuery.noConflict();

	jQuery( 'li' ).each( function() {
		if ( jQuery( this ).hasClass( 'menu-item-has-children' ) ) {
			jQuery( this ).prepend( '<span class="submenu-icon"></span>' );
		}
	} );

	jQuery.noConflict();

	jQuery( '.header-nav .submenu-icon' ).click( function() {
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

	jQuery.noConflict();

	/**
	 *
	 * Video
	 *
	 */

	jQuery( 'a.video-btn' ).magnificPopup( {
		type: 'iframe',
	} );

	jQuery.noConflict();

	/**
	 *
	 * Footer Hover
	 *
	 */

	jQuery( '.footer-hover-button,.change-bg-on-hover' ).on( 'mouseenter', function() {
		jQuery( '.footer-section,.changeable-bg' ).addClass( 'purple-bg' );
	} );

	jQuery.noConflict();

	jQuery( '.footer-hover-button,.change-bg-on-hover' ).on( 'mouseleave', function() {
		jQuery( '.footer-section,.changeable-bg' ).removeClass( 'purple-bg' );
	} );

	jQuery.noConflict();

	/**
	 *
	 * Images Slider
	 *
	 */

	jQuery( '.images-slider-ctn' ).owlCarousel( {
		loop: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 1,
			},
			1000: {
				items: 1,
			},
		},
	} );

	jQuery.noConflict();

	/**
	 *
	 * Testimonial Slider
	 *
	 */

	jQuery( '.image-swiper--slider' ).owlCarousel( {
		loop: false,
		nav: false,
		dots: false,
		margin: 0,
		autoWidth: true,
		responsive: {
			0: {
				items: 1,
			},
		},
	} );
	
   
    
    jQuery('.image-swiper--slider').owlCarousel({
        // loop: false,
        // nav: false,
        // dots: false,
        // margin: 0,
        // autoWidth: true,
		// autoplayTimeout: 10000,
		// smartSpeed: 1000,
		// // mouseDrag: true,
	    // // touchDrag: true,
	    // // freeDrag: true,
		
		margin: 0,
		items: 1,
		loop: false,
		nav: false,
		dots: false,
		autoHeight: true,
		rewind: true,
		// autoplay: true,
		autoplayTimeout: 10000,
		smartSpeed: 1000,
        responsive: {
            0: {
                items: 1,
            },
        },
    });

	jQuery.noConflict();

	if (jQuery('.services-ctn').length > 0) {
    jQuery('.services-ctn').closest('.wrapper').parents().find('section').addClass('overflow-hidden');
  }

	jQuery( '.testi-ctn' ).owlCarousel( {
		loop: false,
		nav: true,
		dots: false,
		margin: 0,
		responsive: {
			0: {
				items: 1,
			},
		},
	} );

	jQuery.noConflict();

	/**
	 *
	 * Large Text Slider
	 *
	 */

	jQuery( '.cta-bottom-text' ).owlCarousel( {
		loop: true,
		nav: false,
		dots: false,
		autoWidth: true,
		autoplay: true,
		slideTransition: 'linear',
		autoplayTimeout: 10000,
		autoplaySpeed: 10000,
		margin: 0,
		responsive: {
			0: {
				items: 1,
			},
		},
	} );

	jQuery.noConflict();

	/**
	 *
	 *
	 *	Stat counter
	 *
	 *
	 */

	// if ( jQuery( '#cursor' ).length > 0 ) {
	// 	function curSorDesign() {
	// 		const cursor = document.querySelector( '#cursor' );
	// 		const cursorCircle = cursor.querySelector( '.cursor__circle' );
	// 		const mouse = {
	// 			x: -100,
	// 			y: -100,
	// 		};
	// 		const pos = {
	// 			x: 0,
	// 			y: 0,
	// 		};
	// 		const speed = 0.1;
	// 		const updateCoordinates = ( e ) => {
	// 			mouse.x = e.clientX;
	// 			mouse.y = e.clientY;
	// 		};
	// 		window.addEventListener( 'mousemove', updateCoordinates );
	// 		function getAngle( diffX, diffY ) {
	// 			return ( Math.atan2( diffY, diffX ) * 180 ) / Math.PI;
	// 		}
	// 		function getSqueeze( diffX, diffY ) {
	// 			const distance = Math.sqrt(
	// 				Math.pow( diffX, 2 ) + Math.pow( diffY, 2 )
	// 			);
	// 			const maxSqueeze = 0.15;
	// 			const accelerator = 1500;
	// 			return Math.min( distance / accelerator, maxSqueeze );
	// 		}
	// 		const updateCursor = () => {
	// 			const diffX = Math.round( mouse.x - pos.x );
	// 			const diffY = Math.round( mouse.y - pos.y );
	// 			pos.x += diffX * speed;
	// 			pos.y += diffY * speed;
	// 			const angle = getAngle( diffX, diffY );
	// 			const squeeze = getSqueeze( diffX, diffY );
	// 			const scale =
	// 				'scale(' + ( 1 + squeeze ) + ', ' + ( 1 - squeeze ) + ')';
	// 			const rotate = 'rotate(' + angle + 'deg)';
	// 			const translate =
	// 				'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';
	// 			cursor.style.transform = translate;
	// 		};
	// 		function loop() {
	// 			updateCursor();
	// 			requestAnimationFrame( loop );
	// 		}
	// 		requestAnimationFrame( loop );
	// 		const cursorModifiers = document.querySelectorAll( '[cursor-class]' );
	// 		cursorModifiers.forEach( ( curosrModifier ) => {
	// 			curosrModifier.addEventListener( 'mouseenter', function() {
	// 				const className = this.getAttribute( 'cursor-class' );
	// 				cursor.classList.add( className );
	// 			} );
	// 			curosrModifier.addEventListener( 'mouseleave', function() {
	// 				const className = this.getAttribute( 'cursor-class' );
	// 				cursor.classList.remove( className );
	// 			} );
	// 		} );
	// 	}
	// 	curSorDesign();
	// }

	// jQuery.noConflict();

	/**
	 *
	 *
	 *	Stat counter
	 *
	 *
	 */

	if ( jQuery( '.stats-ctn' ).length > 0 ) {
		const a = [];
		function isElementInViewport( el ) {
			const rect = el.getBoundingClientRect();
			return rect.bottom > 0 && rect.right > 0 && rect.left < ( window.innerWidth || document.documentElement.clientWidth ) && rect.top < ( window.innerHeight || document.documentElement.clientHeight );
		}
		jQuery( window ).on( 'scroll', function() {
			jQuery( '.stats-ctn' ).each( function( index ) {
				if ( ! a[ index ] && isElementInViewport( this ) ) {
					jQuery( this ).find( '.fig-number' ).each( function() {
						const $this = jQuery( this ),
							countTo = $this.attr( 'data-number' );
						jQuery( {
							countNum: $this.text(),
						} ).animate( {
							countNum: countTo,
						}, {
							duration: 5000,
							easing: 'swing',
							step() {
								$this.text( Math.ceil( this.countNum ) );
							},
							complete() {
								$this.text( Math.ceil( this.countNum ) );
							},
						} );
					} );
					a[ index ] = true;
				}
			} );
		} );

		// Trigger scroll event on initial page load to check if elements are in viewport.
		jQuery( window ).trigger( 'scroll' );
	}

	jQuery.noConflict();

	// if ( jQuery( '.swiper-container' ).length > 0 ) {
	// 	const mySwiper = new Swiper( '.swiper-container', {
	// 		slidesPerView: 'auto',
	// 		spaceBetween: 0,
	// 		freeMode: true,
	// 		parallax: false,
	// 		watchSlidesVisibility: true,
	// 		loop: false,
	// 		lazy: true,
	// 	} );
	// }
	// jQuery.noConflict();

	jQuery( '.faqs__item--title' ).on( 'click', function() {
		if ( jQuery( this ).hasClass( 'active' ) ) {
			jQuery( this ).removeClass( 'active' );
			jQuery( this ).removeClass( 'active' );
			jQuery( this ).siblings( '.faqs__item--desc' ).slideUp();
		} else {
			jQuery( '.faqs__item--title' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery( '.faqs__item--desc' ).slideUp();

			jQuery( this ).addClass( 'active' );
			jQuery( this ).siblings( '.faqs__item--desc' ).slideDown();
		}
	} );

	jQuery.noConflict();

	if ( jQuery( '.team-block-collage' ).length > 0 ) {
		jQuery( '.collage-image-link' ).magnificPopup( {
			type: 'inline',
			midClick: true,
			fixedContentPos: true,
			overflowY: 'hidden',
		} );

		jQuery( document ).on( 'click', '.team-close-btn', function( e ) {
			e.preventDefault();
			jQuery.magnificPopup.close();
		} );
	}

	jQuery.noConflict();

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
	}

	jQuery.noConflict();

	/**
	 *
	 * 	* Single post sidebar links
	 *
	 */

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

	// if (jQuery('.single-page-content').length > 0) {
	//     const headings = jQuery('.blog-detail__content h2, .blog-detail__content h3, .blog-detail__content h4');
	//     const headingList = jQuery('.heading-lists');

	//     let count = 1;
	//     let lastH2Item; // Track the last h2 item for nesting h3 and h4

	//     headings.each(function() {
	//         const id = jQuery(this).text().trim().toLowerCase().replace(/[^a-zA-Z0-9 ]/g, '').replace(/\s/g, '-');
	//         jQuery(this).attr('id', id);

	//         if (jQuery(this).is('h2')) {
	//             lastH2Item = jQuery('<li></li>');
	//             const anchor = jQuery('<a></a>');
	//             anchor.attr('href', '#' + id).html(jQuery(this).text());
	//             lastH2Item.append(anchor);
	//             headingList.append(lastH2Item);
	//         } else if (jQuery(this).is('h3')) {
	//             if (!lastH2Item) return; // Skip h3 if there's no parent h2
	//             const h3Item = jQuery('<li></li>');
	//             const anchor = jQuery('<a></a>');
	//             anchor.attr('href', '#' + id).html(jQuery(this).text());
	//             h3Item.append(anchor);
	//             lastH2Item.append('<ul></ul>');
	//             lastH2Item.children('ul').append(h3Item);
	//         } else if (jQuery(this).is('h4')) {
	//             if (!lastH2Item) return; // Skip h4 if there's no parent h2
	//             const h4Item = jQuery('<li></li>');
	//             const anchor = jQuery('<a></a>');
	//             anchor.attr('href', '#' + id).html(jQuery(this).text());
	//             h4Item.append(anchor);
	//             lastH2Item.children('ul').append(h4Item);
	//         }

	//         count++;
	//     });

	//     // Hide table of content if it's empty
	//     if (headingList.html().trim() === '') {
	//         jQuery('.table-of-content-list').hide();
	//         jQuery('.sidebar-headings').hide(); // Hide sidebar headings if no h2 elements are found
	//     }

	//     // Function to check if element is in viewport
	//     function isInViewport(elem) {
	//         const bounding = elem[0].getBoundingClientRect();
	//         return (
	//             bounding.top >= 0 &&
	//             bounding.left >= 0 &&
	//             bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
	//             bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
	//         );
	//     }

	//     // Highlight active section in sidebar based on viewport
	//     jQuery(window).on('scroll', function() {
	//         let prevActiveIndex = -1;
	//         headings.each(function(index) {
	//             if (isInViewport(jQuery(this))) {
	//                 prevActiveIndex = index;
	//             }
	//         });

	//         if (prevActiveIndex !== -1) {
	//             jQuery('.heading-lists li a').removeClass('active');
	//             jQuery('.heading-lists li:eq(' + prevActiveIndex + ') a').addClass('active');
	//         }
	//     });
	// }



	// gsap.registerPlugin(ScrollTrigger)

	// const heightContentContent = jQuery( '.single-page-content-area.blog-detail__content' ).outerHeight();

	// gsap.to( '.single-page-sidebar-area', {
	// 	ease: 'power1.out',
	// 	duration: 1,
	// 	x: '0',
	// 	scrollTrigger: {
	// 		trigger: '.single-page-sidebar-area',
	// 		start: `top 150px top 0`,
	// 		end: `+=${ heightContentContent  }`,
	// 		scrub: 1,
	// 		pin: true,
	// 		pinSpacing: true,
	// 		// markers: true,
	// 	},

	// } );

	// gsap.to( '.hero--home', {
	// 	ease: 'slow',
	// 	opacity: 0.25,
	// 	scrollTrigger: {
	// 		trigger: '.hero--home',
	// 		scrub: 1,
	// 		start: 'top 0 top 50%',
	// 		end: 'bottom +=100',
	// 		markers: true,
	// 		// pin: true,
	// 		// pinSpacing: false,
	// 	},
	// } );

	/**
	 *
	 * 	* Label up down
	 *
	 */

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

	jQuery.noConflict();
} );
