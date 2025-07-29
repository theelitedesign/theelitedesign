<?php
/**
 * Template Name: Services
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
			<div class="hero hero-ctn hero--work">
				<div class="s-96"></div>
				<div class="wrapper">
					<div class="hero-content">
						<h1>Services that <br> <span> scale your impact.</span></h1>
						<div class="scroll-down__button">
							<a href="#intro-section" aria-label="Down to First section">
								<svg width="16" height="37" viewBox="0 0 16 37" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path class="dropdown-item1" id="arrow" d="M3.33398 16L8.00065 20.6667L12.6673 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>

									<g class="dropdown-item2" opacity="0.15">
										<path d="M3.33398 6L8.00065 10.6667L12.6673 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</g>

									<g class="dropdown-item3" opacity="0.15">
										<path d="M3.33398 27L8.00065 31.6667L12.6673 27" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</g>
								</svg>
								<div class="">Explore our services</div>
							</a>
						</div>
					</div>
					<div class="s-96"></div>
				</div>
				<div class="hero__bottom-row flex-between-start">
					<div class="hero-bottom-content p1">
					</div>
					<div class="hero-bottom-image full-width">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/ideas-wp.webp"
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
							We help brands shape their identity, refine their strategy, and achieve growth. More than just a design agency, we create solutions that elevate brands and turn ambitious goals into reality.
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
									<div class="service-count">04</div>
									<div class="service-title">Continuous improvement</div>
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/maintenance-support" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">05</div>
									<div class="service-title">Website maintenance & support</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
		</section>

	</section>
<?php get_footer(); ?>
