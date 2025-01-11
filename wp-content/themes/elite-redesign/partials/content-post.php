<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ELITE Design
 * @since 1.0.0
 */


$post_data=get_queried_object();
$pID  = get_the_ID();
if (function_exists('get_fields') && function_exists('get_fields_escaped')) {
	$post_fields = get_fields_escaped( $pID );
}

// Post Tags & Categories
// $elitedesign_post_tags = get_the_tags($pID);
$elitedesign_post_categories = get_categories($pID);

$elitedesign_posttitle=glide_page_title('elitedesign_posttitle');

?>

<div class="container-980 hi">
	<div class="wrapper">
		


		<article id="post-<?php the_ID(); ?>" <?php post_class('post-ctn'); ?>>
				<?php get_template_part( 'partials/content' ); ?>
				<div class="clear"></div>
				<div class="post-details">
					<div class="post-pagination"> <?php the_posts_pagination() ?> </div>
					<div class="post-comments"> <?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						?>
					</div>
				</div>
			</div>

			<?php
			wp_reset_query();
			wp_reset_postdata();

			$elitedesign_rp_selection_criteria = isset($fields['elitedesign_rp_selection_criteria']) ? $fields['elitedesign_rp_selection_criteria'] : null;
			if($elitedesign_rp_selection_criteria == 'random'){

				$args = array(
					'posts_per_page' => 3,
					'post__not_in'   => array( $post->ID ),
					'orderby'        => 'rand',
				);

				$query = new WP_Query( $args );

				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						//Include specific template for the content.
						get_template_part( 'partials/content', 'archive-post' );
					}
				?> <div class="clear"></div> <?php
				}
			}
			else {
				global $post;
				$elitedesign_selected_posts = array();
				$elitedesign_selected_posts = isset($fields['elitedesign_rp_selected_posts']) ? $fields['elitedesign_rp_selected_posts'] : null;
				if ( $elitedesign_selected_posts ) { ?> <div class="related-posts ">
				<h3><?php _e( 'Related Posts', 'elitedesign_td' ) ?></h3> <?php
								foreach ( $elitedesign_selected_posts as $elitedesign_post ) {
									$post = $elitedesign_post;
									setup_postdata( $post );
									$pID         = $post->ID;
									$post_fields = get_fields( $pID );
									$custom_field  = $post_fields['custom_field'];
									$src         = wp_get_attachment_image_src( get_post_thumbnail_id( $pID ), 'thumb_600', false );
									if ( ! $src ) {
										$src = get_template_directory_uri() . '/assets/img/admin/defaults/default-image.webp';
									} else {
										$src = $src[0];
									}
										get_template_part( 'partials/content', 'archive-post' );
								}
							?>
			</div> <?php } wp_reset_query();
				wp_reset_postdata();
				}
				?>
		</article>



	</div>

	
</div>

