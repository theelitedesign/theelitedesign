<?php
/**
 * Template Name: Resources
 * Template Post Type: page
 *
 * This template is for displaying resource page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

// Include header.
get_header();

list( $bst_var_post_id, $bst_fields, $bst_option_fields ) = BaseTheme::defaults();

$bst_var_pagetitle          = $bst_fields['bst_var_pagetitle'] ?? get_the_title();
$bst_var_trcho_feature_post = $bst_fields['bst_var_trcho_feature_post'] ?? null;

?>


<section id="hero-section" class="hero-section">
	<div class="blog-hero">
		<div class="wrapper">
			<div class="banner-content">
				<h1><?php echo esc_html( $bst_var_pagetitle ); ?></h1>
			</div>
			<div class="gl-s11"></div>
			<?php
			if ( $bst_var_trcho_feature_post ) {
				?>
				<?php
				foreach ( $bst_var_trcho_feature_post as $bst_var_post_id ) {

					$bst_var_post_title     = get_the_title( $bst_var_post_id );
					$bst_var_post_excerpt   = get_the_excerpt( $bst_var_post_id );
					$bst_var_post_date      = get_the_date( 'M d Y', $bst_var_post_id );
					$bst_var_post_parmalink = get_the_permalink( $bst_var_post_id );
					$bst_var_post_tags      = get_the_tags( $bst_var_post_id );
					?>

				<div class="resources-post-box featured-post">
					<div class="resources-inner two-columns align-items-center justify-content-between">
						<?php if ( $post_image ) { ?>
							<div class="rc-post-img post-image rs-view-100">
								<a href="<?php echo esc_url( $post_parmalink ); ?>">
									<?php
									if ( ! has_post_thumbnail( $bst_var_post_id ) ) {
										echo '<img class="" src="' . esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp" >';
									} else {
										echo get_the_post_thumbnail(
											$bst_var_post_id,
											'thumb_900',
										);
									}
									?>
								</a>
							</div>
						<?php } ?>
						<div class="post-content rs-view-100">
							<?php if ( $post_title ) { ?>
								<div class="post-box-title">
									<h2><a href="<?php echo esc_url( $post_parmalink ); ?>"><?php echo esc_html( $post_title ); ?></a></h2>
								</div>
							<?php } ?>
							<!-- post excerpt -->
							<?php if ( $post_excerpt ) { ?>
								<div class="post-box-excerpt">
									<p>
										<?php echo esc_html( $post_excerpt ); ?>
									</p>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
					<?php
				}
			}
			?>
		</div>
	</div>
	<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<!-- Content Start -->
	<div class="wrapper">
		<div class="rc-post-archive three-columns">
		<?php
			// WP_Query arguments.
			global $paged;
			$bst_args = array(
				'post_type'      => array( 'resource' ),
				// 'meta_key' => 'bst_var_trcho_feature_post',
				'posts_per_page' => 9, // how many posts you need.
				'paged'          => ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ),
				// 'meta_query' => array(
				// array(
				// 'key'     => 'bst_var_trcho_feature_post',
				// 'value'   => '1',
				// 'compare' => '!=',
				// )
				// ),
			);
			// The Query.
			$bst_query = new WP_Query( $bst_args );
			// The Loop.
			if ( $bst_query->have_posts() ) {
				while ( $bst_query->have_posts() ) {
					$bst_query->the_post();
					// Include specific template for the content.
					get_template_part( 'partials/content', 'archive-resource' );
				}
			} else {
				// If no content, include the "No posts found" template.
				get_template_part( 'partials/content', 'none' );
			}
			?>
		</div>

		<div class="ts-40"></div>
			<?php
			if ( have_posts() ) {
				if ( class_exists( 'BaseTheme' ) && $wp_query->max_num_pages > 1 ) {
					?>
				<div class="center-align">
						<?php BaseTheme::pagination( $wp_query->max_num_pages ); ?>
				</div>
					<?php
				}
			}
			?>
		<div class="ts-80"></div>
		<!-- Content End -->
	</div>
</section>

<?php
get_footer();
