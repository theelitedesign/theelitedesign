<?php
/**
 * Template Name: Blog
 * Template Post Type: page
 *
 * This template is for displaying blog page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package DevDives
 * @since 1.0.0
 */

// Include header.
get_header();

list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = EliteDesigns::defaults();

$ed_var_pagetitle           = $ed_fields['bst_var_tblgho_title'] ?? get_the_title( $ed_var_post_id );
$ed_var_tblgho_feature_post = $ed_fields['bst_var_tblgho_feature_post'] ?? null;
$ed_var_author_avatar       = $ed_fields['bst_var_author_avatar'] ?? null;

$ed_var_post_catagories = get_categories( $ed_var_post_id );

?>

<section id="page-section" class="page-section">
	<section id="hero-section" class="hero-section ctn-dblue">
		<div class="el-s96"></div>
		<div class="hero-blog hero">
			<div class="wrapper">
				<div class="hero-content">
					<h1 class="mb-0">elite <span>Solutions</span></h1>
				</div>
			</div>
		</div>
		<div class="el-s96"></div>
	</section>
	<div class="overflow-hidden">
		<div class="wrapper">
		<div class="post-archive resources-ctn">
			<div class="s-156"></div>
			<?php
				// WP_Query .
				$ed_args = array(
					'post_type'      => array( 'post' ),
					'posts_per_page' => get_option( 'posts_per_page' ), // how many posts you need.
					'paged'          => ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ),
				);
				// The Query.
				$ed_query = new WP_Query( $ed_args );
				// The Loop.
				if ( $ed_query->have_posts() ) {
					while ( $ed_query->have_posts() ) {
						$ed_query->the_post();
						// Include specific template for the content.
						get_template_part( 'partials/content', 'archive-post' );
					}
					?>
					<?php
				} else {
					// If no content, include the "No posts found" template.
					get_template_part( 'partials/content', 'none' );
				}
				?>
				</div>
				<?php
				if ( have_posts() ) {
					if ( class_exists( 'EliteDesigns' ) && $ed_query->max_num_pages > 1 ) {
						?>
						<div class="center-align">
							<?php echo EliteDesigns::pagination( $ed_query->max_num_pages ); ?>
						</div>
						<?php
					}
				}
				?>
			<!-- Content End -->
		</div>
	</div>
</section>
<?php
get_footer();
