<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elite designs
 * @since 1.0.0
 */

// Include header.
get_header();


list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = EliteDesigns::defaults();

$ed_var_tmp_def_title  = $ed_fields['bst_var_tmp_def_title'] ?? get_the_title();
$ed_var_tmp_def_text   = $ed_fields['bst_var_tmp_def_text'] ?? null;
$ed_var_tmp_def_button = $ed_fields['bst_var_tmp_def_button'] ?? null;

?>

<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->

	<div class="hero-ctn">
		<div class="wrapper">
			<h1><?php echo html_entity_decode( $ed_var_tmp_def_title ); ?></h1>
		</div>
	</div>
	<!-- Hero End -->
</section>

<section id="page-section" class="page-section">
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
	<div class="ts-80"></div>
	<!-- Content End -->
</section>
<?php get_footer(); ?>
