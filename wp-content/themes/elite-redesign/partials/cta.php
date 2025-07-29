<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package DevDives
 * @since 1.0.0
 */

list( $ed_var_post_id, $ed_fields, $ed_option_fields, $ed_queried_object ) = EliteDesigns::defaults();

$ed_var_to_cta_headline = $ed_option_fields['bst_var_to_cta_headline'] ?? null;

$ed_var_page_cta_pagevisibility = $ed_fields['bst_var_page_cta_pagevisibility'] ?? null;
$ed_var_ftrcta_headline         = $ed_fields['bst_var_page_cta_headline'] ?? $ed_var_to_cta_headline;
?>


<div class="footer-cta">
	<div class="s-96"></div>
	<div class="wrapper">
		<div class="job-cta center-align">
			<h2 class="color-yellow">Ready to start your project?</h2>
			<div class="s-24"></div>
				<p>
					Let’s bring your ideas to life with a high-performing, custom website. Whether you’re scaling your business or making an impact, we’re here to help. Get in touch today and let’s create something amazing!
				</p>
			<div class="s-48"></div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="button black">Let's Talk</a>
		</div>
		<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
		<div id="calendly-popup" class="zoom-anim-dialog mfp-hide">
			<iframe src="https://calendly.com/elitedesignsstudio/60" frameborder="0"></iframe>
		</div>
	</div>
	<div class="s-96"></div>
</div>
