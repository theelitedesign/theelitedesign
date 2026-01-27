<?php
/**
 * Block Name: Project Overview
 *
 * The template for displaying the custom gutenberg block named Lead Paragraph.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package DevDives
 * @since 1.0.0
 */


DevDives::block(
	$block,
	function ( $ed_block_id, $ed_block_name, $ed_block_fields, $ed_option_fields ) {


		// Block variables.
		$el_var_blkpover_title = $ed_block_fields['el_var_blkpover_title'] ?? null;
		$el_var_blkpover_text      = $ed_block_fields['el_var_blkpover_text'] ?? null;

		?>


			<div class="hat-ctn">
				<?php if ( $el_var_blkpover_title ) { ?>

						<h2 class="heading-5"><?php echo html_entity_decode( $el_var_blkpover_title ); ?></h2>

				<?php } ?>
				<?php if ( $el_var_blkpover_text ) { ?>
						<div class="s-24"></div>
						<div class="t3">
							<?php echo html_entity_decode( $el_var_blkpover_text ); ?>
						</div>

				<?php } ?>
			</div>


		<?php
	}
);

