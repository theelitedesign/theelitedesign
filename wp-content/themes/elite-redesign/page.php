<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DevDives
 * @since 1.0.0
 */

// Include header.
get_header();


list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = EliteDesigns::defaults();

$ed_var_tmp_def_title  = $ed_fields['bst_var_tmp_def_title'] ?? get_the_title();
$ed_var_tmp_def_text   = $ed_fields['bst_var_tmp_def_text'] ?? null;
$ed_var_tmp_def_button = $ed_fields['bst_var_tmp_def_button'] ?? null;

?>

<section id="hero-section" class="hero-section ctn-dblue">
	<div class="hero hero-ctn hero--team">
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="hero-content">
				<h1><?php echo html_entity_decode( $ed_var_tmp_def_title ); ?></h1>
			</div>
		</div>
		<div class="s-96"></div>
	</div>
</section>

<section id="page-section" class="page-section">
		<div class="s-96"></div>

	<!-- Content Start -->
	<?php
		global $wp_query;
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			// Include specific template for the content.
				get_template_part( 'partials/content', 'page' );
			}
			?>
			<?php
		} else {
			// If no content, include the "No posts found" template.
			get_template_part( 'partials/content', 'none' );
		}
		?>
	<!-- Content End -->
</section>
<?php get_footer(); ?>
