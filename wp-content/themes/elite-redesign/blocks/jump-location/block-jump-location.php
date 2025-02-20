<?php
/**
 * Block Name: Jump Link
 *
 * The template for displaying the custom gutenberg block named Jump Link.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package elite designs
 * @since 1.0.0
 */

EliteDesigns::block(
	$block,
	function ( $ed_block_id, $ed_block_name,$ed_block_fields, $ed_option_fields ) {

		// Block variables.
		$ed_blkjmplctn_hashid = $ed_block_fields['bst_blkjmplctn_hashid'] ?? '';

		echo html_entity_decode( '<div class="theme-jumplink" id="' . $ed_blkjmplctn_hashid . '"></div>' );

	}
);

