<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * This template is for displaying home page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package DevDives
 * @since 1.0.0
 */

// Include header.
get_header();

?>

<section id="" class="page-section">
	<section id="hero-section" class="hero-section ctn-dblue">
		<div class="hero hero-ctn hero--team">
			<div class="s-96"></div>
			<div class="wrapper">
				<div class="hero-content">
					<h1>Next step <br>
						<span> Connect with Us</span>
					</h1>
				</div>
			</div>
			<div class="s-96"></div>
		</div>
	</section>

	<section>
		<div class="s-128"></div>
		<div class="wrapper">
			<div class="contact-form flex-between-start">
				<div class="contact-form-content">
					<div class="contact-form-inner-area">
						<div class="s-12"></div>
						<div class="p3 label font-med"> Contact Information</div>
						<div class="s-12"></div>
						<div class="p1">
							<a href="mailto:hello@theelitedesign.com">hello@devdives.com</a> <br>
							<div class="s-12"></div>
							<a href="tel:+971 57 787 8300">Call+971 57 787 8300</a>
						</div>
					</div>
					<div class="s-48"></div>
					<div class="contact-form-inner-area">
						<div class="p3 label font-med"> Support help?</div>
						<div class="s-12"></div>
						<div class="p1">
							<a href="mailto:support@theelitedesign.com">support@elitedesigns.studio</a> <br>
						</div>
					</div>
				</div>
				<div class="contact-form-form">
					<?php echo do_shortcode('[contact-form-7 id="d181600" title="Let\'s Talk Form"]'); ?>
				</div>
			</div>
			<div class="s-128"></div>
		</div>
	</section>
</section>


<?php get_footer(); ?>
