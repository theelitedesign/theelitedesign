<?php
/**
 * Block Name: Lead Paragraph
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
		$ed_var_blkld_blk_title = $ed_block_fields['ed_var_blkld_blk_title'] ?? null;
		$ed_var_blkld_text      = $ed_block_fields['ed_var_blkld_text'] ?? null;
		var_dump($ed_block_fields);

		?>
		<h1>test</h1>

		<div class="wrapper">
			<?php if ( $ed_var_blkld_text ) { ?>
				<div class="t1">
					<?php echo html_entity_decode( $ed_var_blkld_text ); ?>
				</div>
			<?php } ?>
		</div>

		<?php
	}
);

