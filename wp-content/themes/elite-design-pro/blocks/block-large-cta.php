<?php
/**
 * Block Name: Large CTA
 *
 * The template for displaying the custom gutenberg block named Large CTA.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package ELITE Design
 * @since 1.0.0
 */

// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html

// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace("acf/" , "" , $block_glide_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if( isset( $block['data']['preview_image_help'] )  ) {    /* rendering in inserter preview  */
	echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' .$block_glide_name . "-" . $block['id'];

// Making the unique ID for the block.
if($block['name']){
	$block_name = $block['name'];
	$block_name = str_replace("/" , "-" , $block_name);
	$name = 'block-' .  $block_name;
}

// Block variables


// CTA Title
$elitedesign_lrg_cta_title = html_entity_decode($block_fields['elitedesign_lrg_cta_title']);

// CTA Button
$elitedesign_lrg_cta_button = $block_fields['elitedesign_lrg_cta_button'];

// CTA Text Repeater
$elitedesign_lrg_cta_text_area = $block_fields['elitedesign_lrg_cta_text_area'];

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

		<section>
			<div class="cta-ctn large-heading-ctn">
				<div class="cta-content-area">

						<?php if($elitedesign_lrg_cta_title) { ?>

							<div class="cta-title large-cta-title"><?php echo $elitedesign_lrg_cta_title; ?></div>

						<?php } ?>

						<?php if( $elitedesign_lrg_cta_button ) {

							echo glide_acf_button( $elitedesign_lrg_cta_button, 'button' );

						} ?>
					
				</div>

				<?php if($elitedesign_lrg_cta_text_area) { ?>

						<div class="cta-bottom-text owl-carousel owl-theme">

						<?php 

							foreach ($elitedesign_lrg_cta_text_area as $single_word) {

								$single_word = $single_word['word'];

							if($single_word) { ?>

								<div class="item large-text-item"><?php echo $single_word; ?></div>

							<?php } }?>

						</div>

				<?php } ?>
			</div>
		</section>

</div>
