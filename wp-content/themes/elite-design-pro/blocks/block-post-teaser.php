<?php
/**
 * Block Name: Blog Teaser Block
 *
 * The template for displaying the custom gutenberg block named Blog Teaser Block.
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
$elite_blog_title = $block_fields['elite_blog_title']; // for keeping html from input
$elite_blog_posts = $block_fields['elite_blog_posts']; // for keeping html from input
$see_all_posts_link = $block_fields['see_all_posts_link']; // for keeping html from input

?>

<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
	<section class="white-ctn">
		<div class="ctn-gray">
			<div class="s-192"></div>
			<div class="wrapper">
				<div class="d1-title">
					<?php if ( $elite_blog_title ) { ?>
						<h2 class="heading-1">
							<?php
								echo esc_html( $elite_blog_title ); 
								?>
						</h2>
					<?php } ?>
				</div>	
				<div class="s-96"></div>
				<div class="services-ctn resources-ctn">
					<div class="services-lists">
						<?php foreach ($elite_blog_posts as $blog_post) {
							$postID = $blog_post->ID;
							$post_title = get_the_title($postID);
							$post_image = get_the_post_thumbnail($postID);
							$post_excerpt = get_the_excerpt($postID);
							
							$thepost_terms = get_the_terms($postID, 'post_tag');

							?>

					
							<div class="service-list-item">
								<a href="<?php the_permalink($postID); ?>" class="no-link-style">
									<div class="service-item-content">
										<div class="service-label">
										<?php if($thepost_terms){  foreach($thepost_terms as $tag) { ?>
											<div class="label"><?php echo $tag->name; ?></div>
										<?php } } ?>
										</div>
										<?php if($post_title){ ?>
											<div class="service-title"><?php echo $post_title; ?></div>
										<?php } ?>
									</div>
									<?php if($post_image) { ?>
										<div class="service-item-image h-img-cover">
											<?php echo $post_image; ?>
										</div>
									<?php } ?>
								</a>
							</div>
						<?php } ?>
					</div>
					<?php if ($see_all_posts_link) { ?>
						<div class="center-align blog-posts-button">
							<div class="s-48"></div>
							
							<a href="<?php echo $see_all_posts_link['url']; ?>" class="see-all-button button black" target="<?php echo $see_all_posts_link['target']; ?>">
								<?php echo $see_all_posts_link['title']; ?>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		<div class="s-192"></div>
		</div>
	</section>
</div>
