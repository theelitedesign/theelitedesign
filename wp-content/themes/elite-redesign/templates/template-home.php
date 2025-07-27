<?php
/**
 * Template Name: Home
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
	<section id="hero-section" class="hero-section overflow-hidden ctn-dblue">
		<div class=" hero-ctn">
			<div class="wrapper">
				<div class="s-48"></div>
				<div class="hero-content">
					<h1 style="display:none">Beauty for results</h1>
					<h2 class="mb-0  font-bold d2">
						<div class="headingLine">beauty </div>
						<div class="headingLine"><span>for </span> results</div>
					</h2>
					<div class="s-48"></div>
					<div class="t3">
						 We design and build websites, improve search rankings, <br> keep them updated, and provide ongoing support.
					</div>

					<div class="scroll-down">
						<div class="scroll-down__button">
							<a href="#intro-section" aria-label="Down to First section">
								<svg width="16" height="37" viewBox="0 0 16 37" fill="none" role="presentation"
									xmlns="http://www.w3.org/2000/svg">
									<path class="dropdown-item1" id="arrow"
										d="M3.33398 16L8.00065 20.6667L12.6673 16" stroke="#ffffff"
										stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									</path>

									<g class="dropdown-item2" opacity="0.15">
										<path d="M3.33398 6L8.00065 10.6667L12.6673 6" stroke="#ffffff"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										</path>
									</g>

									<g class="dropdown-item3" opacity="0.15">
										<path d="M3.33398 27L8.00065 31.6667L12.6673 27" stroke="#ffffff"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										</path>
									</g>
								</svg>
								<div class="">Scroll Down</div>
							</a>
						</div>
					</div>
				</div>
				<div class="s-96"></div>
			</div>
		</div>
	</section>
	<section class="overflow-hidden">
		<div id="intro-section"></div>
		<div class="s-128"></div>
		<div class="wrapper">
			<h2 class="t1 font-reg">
				<p>
					We specialize in custom WordPress theme development, Full Site Editing (FSE), web design, SEO, and ongoing website support. With 5+ years of experience, we create functional, visually stunning, and high-performing websites tailored to your business needs.
				</p>
			</h2>
		</div>
		<div class="s-128"></div>
		<div class="wrapper">
			<div class="services-ctn">
				<div class="section-head">
					<h2>Services</h2>
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
								<div class="service-title">Search Engine Optimization</div>
							</div>
						</a>
					</div>
					<div class="service-list-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>continuous-improvements" class="no-link-style">
							<div class="service-item-content">
								<div class="service-count">04</div>
								<div class="service-title">Continuous improvement</div>
							</div>
						</a>
					</div>
					<div class="service-list-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>maintenance-support" class="no-link-style">
							<div class="service-item-content">
								<div class="service-count">05</div>
								<div class="service-title">Website maintenance & support</div>
							</div>
						</a>
					</div>
				</div>
				<div class="center-align blog-posts-button">
					<div class="s-96"></div>
					<a href="<?php ?><?php echo esc_url( home_url( '/' ) ); ?>company" class="see-all-button button black">Read more about us</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="s-128"></div>
		<div class="wrapper">
			<div class="work-ctn">
				<div class="section-head">
					<h2>elite <span>Work</span></h2>
				</div>
				<div class="s-96"></div>
				<div class="work-lists two-columns">
					<?php
						// WP_Query.
						$ed_args = array(
							'post_type'      => 'Portfolio',
							'posts_per_page' => 8,
							'orderby'        => 'date', // Order by date.
							'order'          => 'DESC', // Show most recent first.
							'paged'          => ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ),
						);

						// The Query.
						$ed_query = new WP_Query( $ed_args );

						// The Loop.
						if ( $ed_query->have_posts() ) {
							while ( $ed_query->have_posts() ) {
								$ed_query->the_post();
								// Include specific template for the content.
								get_template_part( 'partials/content', 'archive-portfolio' );
							}
						}

						// Reset post data.
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</section>
	<div class="s-156"></div>
	<section class="overflow-hidden">
		<div class="wrapper">
			<div class="d1-title">
				<h2 class="heading-2">
					Our clients
				</h2>
			</div>
			<div class="s-48"></div>
			<div class="logos-area">
				<div class="logo-row four-columns">
					<div class="logo-column flex-center">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/spring-white-logo.png" alt="Spring Design">
					</div>

					<div class="logo-column flex-center">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/branson-logo.svg" alt="Branson">
					</div>
					<div class="logo-column flex-center">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/manymoons-wordmark.svg" alt="Manymoons">
					</div>
					<div class="logo-column flex-center">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/sim-call-logo.png" alt="SIM Call">
					</div>
				</div>
				<div class="logo-row four-columns">
					<div class="logo-column flex-center">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/alfa-logo.svg" alt="Alfa">
					</div>

					<div class="logo-column flex-center">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/yoke-logo.png" alt="Yoke">
					</div>
					<div class="logo-column flex-center">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/swiss-activities-logo.svg" alt="Swiss Activities">
					</div>

					<div class="logo-column flex-center">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/my-tribe-talk-logo.svg" alt="My Tribe Talk">
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
	<div class="s-156"></div>
	<section class="overflow-hidden">
		<div class="ctn-gray">
			<div class="s-128"></div>
			<div class="wrapper">
				<div class="d1-title">
					<h2 class="heading-2">
						Insightful resources
					</h2>
				</div>
				<div class="s-96"></div>
				<div class="services-ctn resources-ctn">
					<div class="services-lists">
						<?php
							// WP_Query.
							$ed_args = array(
								'post_type'      => 'post',
								'posts_per_page' => 3, // Show only 3 posts.
								'orderby'        => 'date', // Order by date.
								'order'          => 'DESC', // Show most recent first.
								'paged'          => ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ),
							);

							// The Query.
							$ed_query = new WP_Query( $ed_args );

							// The Loop.
							if ( $ed_query->have_posts() ) {
								while ( $ed_query->have_posts() ) {
									$ed_query->the_post();
									// Include specific template for the content.
									get_template_part( 'partials/content', 'archive-post' );
								}
							} else {
								// If no content, include the "No posts found" template.
								get_template_part( 'partials/content', 'none' );
							}

							// Reset post data.
							wp_reset_postdata();
						?>
					</div>

					<div class="center-align blog-posts-button">
						<div class="s-96"></div>
						<a href="<?php ?><?php echo esc_url( home_url( '/' ) ); ?>blog" class="see-all-button button black">See All</a>
					</div>
				</div>
			</div>
			<div class="s-128"></div>
		</div>
	</section>
	<section class="overflow-hidden">
		<div class="s-128"></div>
		<div class="wrapper">
			<div class="hat-ctn flexarea sb">
				<div class="hat-title">
					<h2 class="heading-3">Frequently Asked Questions</h2>
					<div class="s-24"></div>
					<div class="faq-mobile-hide">
						<a href="/faqs" class="button">View All FAQs</a>
					</div>
				</div>
				<div class="hat-text">
					<div class="faqs__area">
						<div class="faqs__item">
							<div class="faqs__item--title body-text-36" role="button"
								aria-expanded="false">Can you build a custom website for my business?
								<div class="faq-icon"></div>
							</div>
							<div class="faqs__item--desc" role="region" aria-hidden="true">
								<p>Yes, we create <strong>custom websites</strong> tailored to your brand, audience, and goals.</p>
							</div>
						</div>
						<div class="faqs__item">
							<div class="faqs__item--title body-text-36" role="button"
								aria-expanded="false">Will my website be optimized for mobile and SEO?
								<div class="faq-icon"></div>
							</div>
							<div class="faqs__item--desc" role="region" aria-hidden="true">
								<p>Absolutely. Every website we build is <strong>mobile-friendly</strong> and SEO-ready.</p>
							</div>
						</div>

						<div class="faqs__item">
							<div class="faqs__item--title body-text-36" role="button"
								aria-expanded="false">Which content management system (CMS) do you use?<div class="faq-icon"></div>
							</div>
							<div class="faqs__item--desc" role="region" aria-hidden="true">
								<p>We only use <strong>WordPress </strong> because we’re experts at building fast, easy-to-manage sites.</p>
							</div>
						</div>
						<div class="faqs__item">
							<div class="faqs__item--title body-text-36" role="button"
								aria-expanded="false">How long does it take to complete a website project? <div class="faq-icon">
								</div>
							</div>
							<div class="faqs__item--desc" role="region" aria-hidden="true">
								<p>Most websites are completed within <strong>4 to 6 weeks </strong>, depending on the project scope.</p>
							</div>
						</div>
						<div class="faqs__item">
							<div class="faqs__item--title body-text-36" role="button"
								aria-expanded="false">Can you improve and maintain a website built by someone else? <div class="faq-icon"></div>
							</div>
							<div class="faqs__item--desc" role="region" aria-hidden="true">
								<p>We offer keyword research, on-page optimization, technical SEO, and performance tracking.</p>
							</div>
						</div>
						<div class="faqs__item">
							<div class="faqs__item--title body-text-36" role="button"
								aria-expanded="false"> Do you offer website support after launch? <div class="faq-icon"></div>
							</div>
							<div class="faqs__item--desc" role="region" aria-hidden="true">
								<p>Yes, we provide ongoing support, including updates, backups, and security monitoring.</p>
							</div>
						</div>
						<div class="faqs__item">
							<div class="faqs__item--title body-text-36" role="button"
								aria-expanded="false"> Can you improve and maintain a website built by someone else? <div class="faq-icon"></div>
							</div>
							<div class="faqs__item--desc" role="region" aria-hidden="true">
								<p>Yes, after a quick site review, we can take over maintenance and upgrades.</p>
							</div>
						</div>
					</div>
					<div class="faq-desktop-hide">
						<div class="s-48"></div>
						<a href="/faqs" class="button">View All FAQs</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
<?php get_footer(); ?>
