<?php
/**
 * Template Name: Blog
 * Template Post Type: page
 *
 * This template is for displaying home page.
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
	<div class="hero hero-ctn hero--team">
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="hero__content">
				<h1>elite <span>Solutions</span></h1>
			</div>
		</div>
		<div class="s-96"></div>
	</div>
</section>
<div id="page-section" class="page-section">
		<section class="white-ctn">
			<div class="wrapper">
				<div class="services-ctn resources-ctn">
					<div class="s-96"></div>
					<div class="services-lists">
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>elite-designs-10-rules-for-amazing-websites" class="no-link-style">
								<div class="service-item-content">
									<div class="service-label">Industry</div>
									<div class="service-title">Elite design's 10 rules for amazing websites</div>
								</div>

							</a>
						</div>
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>exploring-the-benefits-and-boundaries-of-gutenberg-custom-blocks" class="no-link-style">
								<div class="service-item-content">
									<div class="service-label">Gutenberg
										Web Design & Development</div>
									<div class="service-title">Exploring the benefits and
											boundaries of gutenberg custom blocks
									</div>
								</div>

							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="s-96"></div>
		</section>
		<section>
			<div class="s-96"></div>
			<div class="wrapper">
				<div class="mid-page-cta changeable-bg">
					<h2 class="heading-3">Ready for a journey with elite?</h2>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="button change-bg-on-hover">Let’s Talk</a>
				</div>
			</div>
			<div class="s-96"></div>
		</section>
		<section class="white-ctn">
			<div class="wrapper">
				<div class="services-ctn resources-ctn">
					<div class="s-96"></div>
					<div class="services-lists">
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>elite-designs-10-rules-for-amazing-websites" class="no-link-style">
								<div class="service-item-content">
									<div class="service-label">Industry</div>
									<div class="service-title">Elite design's 10 rules for amazing websites</div>
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>exploring-the-benefits-and-boundaries-of-gutenberg-custom-blocks" class="no-link-style">
								<div class="service-item-content">
									<div class="service-label">Gutenberg
										Web Design & Development</div>
									<div class="service-title">Exploring the benefits and
											boundaries of gutenberg custom blocks
									</div>
								</div>

							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="s-96"></div>
		</section>
</div>

<?php get_footer(); ?>
