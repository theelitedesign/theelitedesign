<?php
/**
 * Block Name: Video
 *
 * The template for displaying the custom gutenberg block named Video.
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

// Video BG Image
$elitedesign_video_image = $block_fields['elitedesign_video_image']; 

// Video Video Link
$elitedesign_video_video_link = $block_fields['elitedesign_video_video_link']; 

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

			<div class="wrapper">
				
				<?php if($elitedesign_video_image && $elitedesign_video_video_link ) { ?>

					<div class="video-ctn">

						<?php if($elitedesign_video_image) { ?>

							<img src="<?php echo $elitedesign_video_image; ?>" alt="Video BG">

						<?php }
						
						if($elitedesign_video_video_link) { ?>

							<a href="<?php echo $elitedesign_video_video_link ?>" class="video-btn"></a>

						<?php } ?>
						
					</div>
					
				<?php } ?>

			</div>

</div>