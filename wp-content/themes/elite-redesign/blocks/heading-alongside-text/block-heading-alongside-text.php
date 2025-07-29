<?php
/**
 * Block Name: Heading alongside text
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
		$el_var_blkhat_text      = $ed_block_fields['el_var_blkhat_text'] ?? null;

		?>


			<div class="hat-ctn flexarea sb hat-project">
				<?php if ( $el_var_blkhat_title ) { ?>
					<div class="hat-title">
						<h2 class="heading-5"><?php echo html_entity_decode( $el_var_blkhat_title ); ?></h2>
					</div>
				<?php } ?>
				<?php if ( $el_var_blkhat_text ) { ?>
					<div class="hat-text">
						<div class="t2">
							<?php echo html_entity_decode( $el_var_blkhat_text ); ?>
						</div>
					</div>
				<?php } ?>
			</div>


		<?php
	}
);

