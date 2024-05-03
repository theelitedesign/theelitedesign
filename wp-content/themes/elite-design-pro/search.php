<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ELITE Design
 * @since 1.0.0
 */

// Include header.
get_header();

// Global variables.
global $option_fields;
global $pID;
global $fields;

// Required if you want different search results style for separate CPT etc
// $post_type = get_post_type();

 /**
 * Search Masthead
 *
 */
?>

<section id="hero-section" class="hero-section">
		<div class="hero hero-ctn center-align">
			<div class="s-96"></div>
			<div class="wrapper">
				<div class="hero__content">
					<h1><?php _e( 'Search Results', 'elitedesign_td' ); ?></h1>
					<div class="s-48"></div>
					<?php
					printf(
						/* translators: %s: search term. */
						esc_html__( 'Results for "%s"', 'elitedesign_td' ),
						'<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
					);
				?>
				</div>
			</div>
			<div class="s-96"></div>
		</div>
	</section>
<section id="page-section" class="page-section white-ctn">
	<!-- Content Start -->
	<div class="wrapper">

				<?php if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						// Include specific template for the content
						get_template_part( 'partials/content-archive',get_post_type() );
					} ?>
				<?php }else {
					// If no content, include the "No posts found" template.
					get_template_part( 'partials/content', 'none' );
				} ?>

	</div>
	<!-- Content End -->
</section> <?php get_footer(); ?>
