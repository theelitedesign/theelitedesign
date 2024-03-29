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
				<div class="s-48"></div>
				<div class="hero__content">
					<h1 style="display:none"></h1>
					<div class="mb-0  font-bold d2 textAnimation">
						<div class="headingLine">Beauty  </div>
						<div class="headingLine"><span>for</span> Results</div>
					</div>
				</div>
				<div class="s-96"></div>
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
							<a href="http://theelitedesign.local/web-design" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">01</div>
									<div class="service-title">Web Design</div>
								</div>
								<div class="service-item-image h-img-cover">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="#" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">02</div>
									<div class="service-title">Web Development</div>
								</div>
								<div class="service-item-image h-img-cover">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="#" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">03</div>
									<div class="service-title">Search Engine Optimization</div>
								</div>
								<div class="service-item-image h-img-cover">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="#" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">04</div>
									<div class="service-title">Paid Search Advertising</div>
								</div>
								<div class="service-item-image h-img-cover">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="#" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">05</div>
									<div class="service-title">Continuous Improvement</div>
								</div>
								<div class="service-item-image h-img-cover">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="#" class="no-link-style">
								<div class="service-item-content">
									<div class="service-count">06</div>
									<div class="service-title">Website Maintenance & Support</div>
								</div>
								<div class="service-item-image h-img-cover">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
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
							<cite class="font-med"><strong>Bahar Hussain</strong> Founder - ELITE Design</cite>
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
							<div class="work-item-image h-img-cover" cursor-class="read-more">
								<a href="#" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/iat-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker p2 font-med">Kicker</div>
								<a href="#" class="work-title t2 font-med">Project Title</a>
								<div class="work-exerpt p2 font-med">Work description</div>
							</div>
						</div>
						<div class="work-item">
							<div class="work-item-image h-img-cover" cursor-class="read-more">
								<a href="#" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/iat-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker  p2 font-med">Kicker</div>
								<a href="#" class="work-title t2 font-med">Project Title</a>
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
							<a href="#" class="no-link-style">
								<div class="service-item-content">
									<div class="service-label">Industry Insights
										PPC</div>
									<div class="service-title">How to Generate Leads with Google Ads for your New
										Website</div>
								</div>
								<div class="service-item-image h-img-cover">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="#" class="no-link-style">
								<div class="service-item-content">
									<div class="service-label">SEO
										Web Design & Development</div>
									<div class="service-title">Web Design and SEO: How We Build Websites that Rank
									</div>
								</div>
								<div class="service-item-image h-img-cover">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
								</div>
							</a>
						</div>
						<div class="service-list-item">
							<a href="#" class="no-link-style">
								<div class="service-item-content">
									<div class="service-label">SEO</div>
									<div class="service-title">How to Avoid (and Fix) Organic Traffic Drop After a
										Website Redesign
									</div>
								</div>
								<div class="service-item-image h-img-cover">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
								</div>
							</a>
						</div>
					</div>
					<div class="center-align blog-posts-button">
						<div class="s-48"></div>
						<a href="#" class="see-all-button button black">See All</a>
					</div>
				</div>
			</div>
			<div class="s-192"></div>
			</div>
		</section>
	</div>

<?php get_footer(); ?>
