<?php
/**
 * Block Name: Media Alongside Text
 *
 * The template for displaying the custom gutenberg block named Media Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package elite designs
 * @since 1.0.0
 */

EliteDesigns::block(
	$block,
	function ( $ed_block_id, $ed_block_name, $ed_block_fields, $ed_option_fields ) {

		// Block variables.
		$ed_var_blk_mat_title        = $ed_block_fields['bst_var_blk_mat_title'] ?? null;
		$ed_var_blk_mat_text        = $ed_block_fields['bst_var_blk_mat_text'] ?? null;
		$ed_var_blk_mat_button        = $ed_block_fields['bst_var_blk_mat_button'] ?? null;
		$ed_var_blk_mat_image        = $ed_block_fields['bst_var_blk_mat_image'] ?? null;
		$ed_var_blk_mat_img_location        = ("left" === $ed_block_fields['bst_var_blk_mat_img_location']) ? "image-at-left" : "image-at-right";
		?>

			<div class="iat-section two-columns justify-content-between align-items-center <?php echo $ed_var_blk_mat_img_location; ?>">
				<div class="iat-image column" tabindex="0" role="img" aria-label="Image illustrating the content of this block">
					<?php if ( $ed_var_blk_mat_image ) { ?>
						<?php EliteDesigns::the_attachment_image( $ed_var_blk_mat_image, 1000 ); ?>
					<?php } ?>
				</div>
				<div class="iat-text column">
					<?php if ( EliteDesigns::is_block_title( $ed_var_blk_mat_title ) ) { ?>
						<?php EliteDesigns::the_block_title( $ed_var_blk_mat_title, 'heading-2' ); ?>
					<?php } ?>
					<?php if ( $ed_var_blk_mat_text ) {  ?>
						<?php echo html_entity_decode( $ed_var_blk_mat_text ); ?>
					<?php } ?>
					<?php if ( $ed_var_blk_mat_button ) { ?>
						<?php echo EliteDesigns::button( $ed_var_blk_mat_button, 'button' ); ?>
					<?php } ?>
				</div>
			</div>

		<?php
	}
);

