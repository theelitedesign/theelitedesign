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
<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->
	<section class="m-section">
		<div class="hero-ctn center-align error-page-hero">
			<div class="wrapper">
				<h1><?php echo html_entity_decode( $ed_var_error_headline ); ?></h1>
				<div class="banner-text">
					<p><?php echo html_entity_decode( $ed_var_error_sub_headline ); ?></p>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<!-- Page Content Start -->
	<div class="m-section">
		<div class="wrapper">
			<section class="error-404 not-found">
				<div class="page-content">
					<?php
					if ( $ed_var_error_text ) {
						echo html_entity_decode( $ed_var_error_text );
					}
					if ( $ed_var_error_menu ) {
						?>
					<div class="error">
						<?php echo html_entity_decode( $ed_var_error_menu ); ?> </div>
						<?php
					}
					?>
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
			<div class="ts-80"></div>
		</div>
	</div>
</section>
<?php
get_footer();
