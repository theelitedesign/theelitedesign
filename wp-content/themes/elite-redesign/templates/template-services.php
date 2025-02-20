<?php
/**
 * Template Name: Services
 * Template Post Type: page
 *
 * This template is for displaying home page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package elite designs
 * @since 1.0.0
 */

// Include header.
get_header();

?>
	<section id="" class="page-section">
		<section id="hero-section" class="hero-section ctn-dblue">
			<div class="hero hero-ctn hero--work">
				<div class="s-96"></div>
				<div class="wrapper">
					<div class="hero-content">
						<h1>Services that <br> <span> scale your impact.</span></h1>
					</div>
					<div class="s-96"></div>
				</div>
				<div class="hero__bottom-row flex-between-start">
					<div class="hero-bottom-content p1">
					</div>
					<div class="hero-bottom-image full-width">
						<img src="http://elite-redesign.local/wp-content/uploads/2025/02/ideas-wp.webp"
							alt="Image">
					</div>
				</div>
			</div>
		</section>
		<section class="overflow-hidden">
			<div id="intro-section"></div>
			<div class="s-128"></div>
			<section class="white-ctn">
				<div class="wrapper">
					<div class="hat-ctn flexarea sb">
						<div class="t1">
							We are experts in WordPress theme and plugin development. We design and build custom
							websites that are
							easy to manage and look great.
						</div>
					</div>
					<div class="s-128"></div>
					<div class="services-lists">
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/web-design" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">01</div>
									<div class="service-title">Web design</div>
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/web-development" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">02</div>
									<div class="service-title">Web development</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="s-128"></div>
				<div class="wrapper">
					<div class="hat-ctn flexarea sb">
						<div class="hat-title">
							<h2 class="heading-3">Get more visitors</h2>
						</div>
						<div class="hat-text">
							<div class="p1">
								Your website needs visitors to succeed—it's that straightforward. Transform your
								site into your top sales tool with continuous SEO strategies and well-timed PPC
								advertising.
							</div>
						</div>
					</div>
					<div class="s-96"></div>
					<div class="services-lists">
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/search-engine-optimization" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">03</div>
									<div class="service-title">SEO</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="s-128"></div>
				<div class="wrapper">
					<div class="hat-ctn flexarea sb">
						<div class="hat-title">
							<h2 class="heading-3">Keep your website <br>
								up-to-date</h2>
						</div>
						<div class="hat-text">
							<div class="p1">
								Websites need to adapt and grow. Our support services provide peace of mind by
								addressing any issues that may arise. Through Continuous Improvement, we
								consistently make enhancements to boost conversion rates and keep your site
								up-to-date.
							</div>
						</div>
					</div>
					<div class="s-96"></div>
					<div class="services-lists">
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/continuous-improvements" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">05</div>
									<div class="service-title">Continuous improvement</div>
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/maintenance-support" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">06</div>
									<div class="service-title">Website maintenance & support</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="s-128"></div>
			</section>
		</section>

	</section>
<?php get_footer(); ?>
