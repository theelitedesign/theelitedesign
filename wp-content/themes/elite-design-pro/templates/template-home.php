<?php
/**
 * Template Name: Homepage
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

// Global variables
global $option_fields;
global $pID;
global $fields;

?>

	<section id="hero-section" class="hero-section">

		<div class="hero hero-ctn hero--home">
			<div class="wrapper">
				<div class="hero__content">
					<h1>Beauty <br><span>for</span> Results</h1>
					<div class="s-48"></div>
					<div class="p1 home-hero-subtitle">
						<p>
							Custom WordPress Websites Designed to Fit <br> Your Needs and Grow Your Business
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="page-section" class="page-section">
		<section class="white-ctn">
			<div class="s-192"></div>
			<div class="wrapper">
				<div class="lead-paragraph t1">
					<p>
						We support organizations driven by a clear purpose to make a positive impact. With 5 years of experience in Lahore,
						we are serving services to our clients and have happy clients globally.
					</p>
				</div>
			</div>
			<div class="s-192"></div>
			<div class="wrapper">
				<div class="services-ctn">
					<div class="section-head">
						<h2>What we do</h2>
					</div>
					<div class="s-96"></div>
					<div class="services-lists">
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>web-design" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">01</div>
									<div class="service-title">Web design</div>
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>web-development" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">02</div>
									<div class="service-title">Web development</div>
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>search-engine-optimization" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">03</div>
									<div class="service-title">Search engine optimization</div>
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>continuous-improvements" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">05</div>
									<div class="service-title">Continuous improvement</div>
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>maintenance-support" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">06</div>
									<div class="service-title">Website maintenance & support</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="s-192"></div>
		</section>
		<section class="ctn-1000">
			<div class="s-192"></div>
			<div class="wrapper">
				<div class="quotes-ctn center-align">
					<div class="quote-content">
						<blockquote>
							<p>
								ELITE is your best choice for web development. We create exceptional designs and top-notch websites. Our service always WOWs. Let us exceed your expectations today.
							</p>
							<cite class="font-med"><strong>Bahar Hussain</strong> Founder - elite design</cite>
						</blockquote>
					</div>
				</div>
			</div>
			<div class="s-192"></div>
		</section>
		<section class="white-ctn">
			<div class="s-192"></div>

			<div class="wrapper">
				<div class="d1-title">
					<h2 class="heading-1">
						Work we did
					</h2>
				</div>
				<div class="s-96"></div>
				<div class="work-ctn">
					<div class="work-items flex-ctn">
						<div class="work-item">
							<div class="work-item-image h-img-cover">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/project-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker p2 font-med">Kicker</div>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="work-title t2 font-med">Project Title</a>
								<div class="work-exerpt p2 font-med">Work description</div>
							</div>
						</div>
						<div class="work-item">
							<div class="work-item-image h-img-cover">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/project-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker  p2 font-med">Kicker</div>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="work-title t2 font-med">Project Title</a>
								<div class="work-exerpt p2 font-med">Work description</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="s-192"></div>

		</section>
		<section class="white-ctn">
			<div class="ctn-gray">
				<div class="s-192"></div>
			<div class="wrapper">
				<div class="d1-title">
					<h2 class="heading-1">
						Insightful resources
					</h2>
				</div>
				<div class="s-96"></div>
				<div class="services-ctn resources-ctn">
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
					<div class="center-align blog-posts-button">
						<div class="s-96"></div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog" class="see-all-button button black">See All</a>
					</div>
				</div>
			</div>
			<div class="s-192"></div>
			</div>
		</section>
	</div>

<?php get_footer(); ?>
