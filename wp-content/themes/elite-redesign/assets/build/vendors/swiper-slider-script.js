if ( jQuery( '.image-gallery-images' ).length > 0 ) {
	const imageGallerySlider = new Swiper( '.image-gallery-images', {
		slidesPerView: 'auto',
		spaceBetween: 32,
		freeMode: true,
		navigation: {
			nextEl: '.image-gallery-next',
			prevEl: '.image-gallery-prev',
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 'auto',
			},
		},
	} );
}
