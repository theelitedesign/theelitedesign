<?php
/**
 * Template Name: Home
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
					<div class="t3 hero-description">
						 DevDives empowers marketing leaders to build high-impact digital growth systems through exceptional design, results-focused marketing, and data-driven optimization.
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
					With over two decades of experience in strategy, design, and marketing, our expert team at DevDives has been building high-performing websites and digital growth systems that drive real, measurable ROI. Backed by a proven process, a commitment to quality, and a track record of success<br> —we don't just aim for results, we deliver them
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
					<h2>our <span>Work</span></h2>
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

  <!-- 1 -->
  <div class="faqs__item">
    <div class="faqs__item--title body-text-36" role="button" aria-expanded="false">
      Do you build custom websites tailored to my business?
      <div class="faq-icon"></div>
    </div>
    <div class="faqs__item--desc" role="region" aria-hidden="true">
      <p>Yes! We specialize in creating fully custom websites designed specifically for your brand, goals, and audience. From design to development, everything is tailored to meet your business objectives—not just a template.</p>
    </div>
  </div>

  <!-- 2 -->
  <div class="faqs__item">
    <div class="faqs__item--title body-text-36" role="button" aria-expanded="false">
      Will my website work well on mobile devices and be SEO-optimized?
      <div class="faq-icon"></div>
    </div>
    <div class="faqs__item--desc" role="region" aria-hidden="true">
      <p>Absolutely. Every site we build is fully responsive—meaning it looks and works great on smartphones, tablets, and desktops. We also implement technical and on-page SEO best practices to help your site rank better in search engines from day one.</p>
    </div>
  </div>

  <!-- 3 -->
  <div class="faqs__item">
    <div class="faqs__item--title body-text-36" role="button" aria-expanded="false">
      What platform or CMS do you use?
      <div class="faq-icon"></div>
    </div>
    <div class="faqs__item--desc" role="region" aria-hidden="true">
      <p>We work with a variety of content management systems (CMS) and platforms including WordPress, Shopify, Squarespace, Webflow, and others. The right platform depends on your specific goals, technical needs, and long-term scalability. Whether you're launching an eCommerce store, a marketing site, or a portfolio, we'll help you choose and customize the best platform for your business.</p>
    </div>
  </div>

  <!-- 4 -->
  <div class="faqs__item">
    <div class="faqs__item--title body-text-36" role="button" aria-expanded="false">
      How long does a typical website project take?
      <div class="faq-icon"></div>
    </div>
    <div class="faqs__item--desc" role="region" aria-hidden="true">
      <p>Most custom websites take about <strong>4 to 6 weeks</strong> to complete. The timeline depends on the complexity of the site, the number of pages, and how quickly we receive content and feedback from your side. We’ll provide a clear timeline before starting.</p>
    </div>
  </div>

  <!-- 5 -->
  <div class="faqs__item">
    <div class="faqs__item--title body-text-36" role="button" aria-expanded="false">
      Can you redesign or improve my existing website?
      <div class="faq-icon"></div>
    </div>
    <div class="faqs__item--desc" role="region" aria-hidden="true">
      <p>Yes! Whether your site is outdated, slow, or hard to manage, we can help. After a quick audit, we can recommend improvements or even a full redesign to align with modern web standards, improve usability, and boost performance.</p>
    </div>
  </div>

  <!-- 6 -->
  <div class="faqs__item">
    <div class="faqs__item--title body-text-36" role="button" aria-expanded="false">
      Do you offer website maintenance and support?
      <div class="faq-icon"></div>
    </div>
    <div class="faqs__item--desc" role="region" aria-hidden="true">
      <p>Yes, we offer ongoing maintenance plans that include updates, backups, performance monitoring, and security checks. Whether we built your site or not, we can keep it running smoothly and securely.</p>
    </div>
  </div>

  <!-- 7 -->
  <div class="faqs__item">
    <div class="faqs__item--title body-text-36" role="button" aria-expanded="false">
      What if I don’t have any content or images yet?
      <div class="faq-icon"></div>
    </div>
    <div class="faqs__item--desc" role="region" aria-hidden="true">
      <p>No worries! We can help with content strategy, copywriting, and even stock image sourcing if needed. Our goal is to make the process as smooth as possible, even if you're starting from scratch.</p>
    </div>
  </div>

  <!-- 8 -->
  <div class="faqs__item">
    <div class="faqs__item--title body-text-36" role="button" aria-expanded="false">
      Will I be able to update the website myself?
      <div class="faq-icon"></div>
    </div>
    <div class="faqs__item--desc" role="region" aria-hidden="true">
      <p>Yes! We build with user-friendliness in mind. After launch, we provide documentation or quick training so you can make edits, upload content, and manage your site with confidence—no coding required.</p>
    </div>
  </div>

  <!-- 9 -->
  <div class="faqs__item">
    <div class="faqs__item--title body-text-36" role="button" aria-expanded="false">
      What does a typical website cost?
      <div class="faq-icon"></div>
    </div>
    <div class="faqs__item--desc" role="region" aria-hidden="true">
      <p>Costs vary based on your project needs. A basic site typically starts at $X, while more complex sites with custom features are priced accordingly. We’ll give you a detailed quote after a discovery call to understand your goals.</p>
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
