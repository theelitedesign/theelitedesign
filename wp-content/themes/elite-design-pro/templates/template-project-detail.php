<?php
/**
 * Template Name: Project Detail
 * Template Post Type: page
 *
 * This template is for displaying resource page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package ELITE Design
 * @since 1.0.0
 *
 */

// Include header
get_header();

?>
<section id="hero-section" class="hero-section">
	<div class="hero hero-ctn hero--work">
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="hero__content">
				<h1>Project <span>Detail</span></h1>
			</div>
			<div class="s-96"></div>
			<div class="hero__bottom-row flex-between-start">
				<div class="hero-bottom-content p1">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="#">Perspiciatis</a> perferendis nemo, dolor exercitationem?</p>
				</div>
				<div class="hero-bottom-image img-cover">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
				</div>
			</div>
		</div>
	</div>
</section>

<div id="page-section" class="page-section">
	<section class="white-ctn">
			<div class="s-192"></div>
			<div class="wrapper">
				<div class="hat-ctn flexarea sb">
					<div class="hat-title">
						<h2 class="heading-3">Make great things</h2>
					</div>
					<div class="hat-text">
						<div class="p1">
							We design and develop custom websites for easy to use content management systems. Our core focus is WordPress but we also build sites for Webflow, Shopify, and headless.
						</div>
					</div>
				</div>
			</div>
			<div class="s-192"></div>
		</section>
	</div>


<?php get_footer();
