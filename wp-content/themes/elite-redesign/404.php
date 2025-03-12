<?php
/**
 * The template  displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package elite designs
 * @since   1.0.0
 */

// Include header.
get_header();

list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = EliteDesigns::defaults();

// 404 Page - Advanced custom fields variables.
$ed_var_error_headline         = $ed_option_fields['bst_var_error_headline'] ?? null;
$ed_var_error_sub_headline     = $ed_option_fields['bst_var_error_sub_headline'] ?? null;
$ed_var_error_text             = $ed_option_fields['bst_var_error_text'] ?? null;
$ed_var_error_menu             = $ed_option_fields['bst_var_error_menu'] ?? null;
$ed_var_error_menu_bottom_text = $ed_option_fields['bst_var_error_menu_bottom_text'] ?? null;
$ed_var_error_search           = $ed_option_fields['bst_var_error_search'] ?? false;

?>

<section id="page-section" class="page-section">
	<section id="hero-section" class="hero-section ctn-dblue">
		<div class="hero hero-ctn hero--team">
			<div class="s-96"></div>
			<div class="wrapper">
				<div class="hero-content">
					<h1><?php echo html_entity_decode( $ed_var_error_headline ); ?></h1>
				</div>
			</div>
			<div class="s-96"></div>
		</div>
	</section>

	<!-- Page Content Start -->
	<div class="m-section">
		<div class="wrapper">
			<section class="error-404 not-found">
				<div class="s-96"></div>
				<div class="page-content">
					<?php
					if ( $ed_var_error_text ) {
						echo html_entity_decode( $ed_var_error_text );
					}
					if ( $ed_var_error_menu ) {
						?>
						<div class="s-48"></div>
					<div class="error">
						<?php echo html_entity_decode( $ed_var_error_menu ); ?> </div>
						<?php
					}
					?>
						<div class="s-24"></div>
					<div class="form-404">

						<?php
						if ( $ed_var_error_menu_bottom_text ) {
							echo html_entity_decode( $ed_var_error_menu_bottom_text );
						}
						if ( ! $ed_var_error_search ) {
							get_search_form();
						}
						?>
					</div>
					<!--404-form-->
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>
	</div>
</section>
<?php
get_footer();
