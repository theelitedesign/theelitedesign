<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package DevDives
 * @since 1.0.0
 */

// Include header.
get_header();

list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = EliteDesigns::defaults();

?>

<section id="page-section" class="page-section">

	<section id="hero-section" class="hero-section ctn-dblue">
		<div class="hero hero-ctn hero--team">
			<div class="s-96"></div>
			<div class="wrapper">
				<div class="hero-content">
					<h1>Search <span>Results</span></h1>
					<div class="s-48"></div>
					<div class="t3">
						<p>
							<?php
								printf(
									/* translators: %s: search term. */
									esc_html__( 'Results for "%s"', 'elitedesigns_td' ),
									'<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
								);
							?>
						</p>
					</div>
				</div>
			</div>
			<div class="s-96"></div>
		</div>
	</section>

	<div class="wrapper">
<div class="s-96"></div>
		<div class="post-archive resources-ctn">
			<!-- Content Start -->
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					// Include specific template for the content.
					get_template_part( 'partials/content-archive-post' );
				}
			} else {
				// If no content, include the "No posts found" template.
				get_template_part( 'partials/content', 'none' );
			}
			?>
			<!-- Content End -->
		</div>
	</div>
</section>
<?php get_footer(); ?>
