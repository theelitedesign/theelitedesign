<?php
/**
 * Block Name: Image Gallery
 *
 * The template for displaying the custom gutenberg block named Lead Paragraph.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package DevDives
 * @since 1.0.0
 */


EliteDesigns::block(
	$block,
	function ( $ed_block_id, $ed_block_name, $ed_block_fields, $ed_option_fields ) {


		// Block variables.
		$el_var_blkhat_title = $ed_block_fields['el_var_blkhat_title'] ?? null;
		$el_var_blkimg_gallery_imgs      = $ed_block_fields['el_var_blkimg_gallery_imgs'] ?? null;

		?>

			<?php if ( $el_var_blkhat_title ) { ?>
				<div class="section-head">
					<h2 class="heading-2"><?php echo html_entity_decode( $el_var_blkhat_title ); ?></h2>
				</div>
				<div class="s-96"></div>
			<?php } ?>

			<div class="image-gallery-images swiper-container">
				<div class="swiper-wrapper">
					<?php if ( $el_var_blkimg_gallery_imgs ) { ?>
						<?php foreach ( $el_var_blkimg_gallery_imgs as $key => $el_var_blkimg_gallery_img ) {
							$clo_var_img = $el_var_blkimg_gallery_img['image'] ?? null; ?>
							<div class="image-gallery-image-item swiper-slide">
								<?php EliteDesigns::the_attachment_image( $clo_var_img, 2000 ); ?>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>


		<?php
	}
);

