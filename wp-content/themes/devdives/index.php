<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DevDives
 * @since 1.0.0
 */

get_header();
	list( $ed_var_post_id, $ed_fields, $ed_option_fields,$ed_query_object ) = DevDives::defaults();

?>

<section id="hero-section" class="hero-section overflow-hidden ctn-dblue">
	<div class="s-96"></div>
	<div class="wrapper">
		<div class="hero-content">
			<h1 class="mb-0">elite <span>Solutions</span</h1>
		</div>
		<div class="s-96"></div>
	</div>
</section>

<section id="page-section" class="page-section">
	<div class="wrapper">
		<!-- <div class="<?php // DevDives::have_post_class( '' ); ?>">
			<?php // $ed_query = DevDives::query(); ?>
			<div class="ts-80"></div>
		</div> -->

		<div class="resources-ctn">
			<div class="el-s128"></div>

			<?php
				global $wp_query;
				$clo_post_count = $wp_query->post_count;
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						// Include specific template for the content.
						// $clo_post_id_var = get_the_ID();
						get_template_part( 'partials/content-archive', 'post' );
					}

				} else {
					// If no content, include the "No posts found" template.
					get_template_part( 'partials/content', 'none' );
				}
			?>
		</div>

	</div>
</section>
<?php get_footer(); ?>
