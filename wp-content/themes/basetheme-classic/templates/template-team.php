<?php
/**
 * Template Name: Team
 * Template Post Type: page
 *
 * This template is for displaying team page.
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
			<div class="banner-content ">
				<h1><?php echo esc_html( $bst_var_pagetitle ); ?></h1>
			</div>
		</div>
	</div>
	<!-- Hero End -->
</section>

<section id="page-section" class="page-section">
	<!-- Content Start -->
	<div class="wrapper">
		<div class="section-team">
			<div class="team-post-archive four-columns ">
				<?php
					// WP_Query .
					global $paged;
					$bst_args = array(
						'post_type'      => array( 'team' ),
						'posts_per_page' => -1, // how many posts you need.
						'paged'          => ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ),
					);
					// The Query.
					$bst_query = new WP_Query( $bst_args );
					// The Loop.
					if ( $bst_query->have_posts() ) {
						while ( $bst_query->have_posts() ) {
							$bst_query->the_post();
							// Include specific template for the content.
							get_template_part( 'partials/content', 'archive-team' );
						}
						?>
						<?php
					} else {
						// If no content, include the "No posts found" template.
						get_template_part( 'partials/content', 'none' );
					}
					?>
			</div>
			<div class="gl-s9"></div>
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
			<div class="gl-s11"></div>
			<!-- Content End -->
		</div>
	</div>
</section>

<?php
get_footer();
