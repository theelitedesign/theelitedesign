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
					<div class="mb-0  font-bold d2">
						<div class="headingLine">beauty </div>
						<div class="headingLine"><span>for </span> results</div>
					</div>
					<div class="s-48"></div>
					<div class="t3">
						 We design and build websites, improve search rankings, <br> keep them updated, and provide ongoing support.
					</div>

					<div class="scroll-down">
						<div class="scroll-down__button">
							<a href="#intro-section" aria-label="Down to First section">
								<svg width="16" height="37" viewBox="0 0 16 37" fill="none"
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
			<div class="t1">
				<p>
					We specialize in custom WordPress theme development, Full Site Editing (FSE), web design, SEO, and ongoing website support. With 5+ years of experience, we create functional, visually stunning, and high-performing websites tailored to your business needs.
				</p>
			</div>
		</div>
		<div class="s-128"></div>
		<div class="wrapper">
			<div class="services-ctn">
				<div class="section-head">
					<h2>Elite Services</h2>
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
		<div class="s-128"></div>
	</section>
	<section>
		<div class="wrapper">
			<div class="work-ctn">
				<div class="section-head">
					<h2>elite Work</h2>
				</div>
				<div class="s-96"></div>
				<div class="work-lists two-columns">
					<div class="work-list-item">
						<div class="work-image">
							<a href="#" class="no-link-style">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/ideas-wp.webp" alt="Project 1 Image">
							</a>
						</div>
						<div class="work-content">
							<div class="s-24"></div>
							<h3><a href="#">Work 1</a></h3>
							<div class="p1">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod nisi vitae
									molestie
								</p>
							</div>
							<div class="s-24"></div>
							<div class="work-btn">
								<a href="#">See details</a>
							</div>
						</div>

					</div>
					<div class="work-list-item">
						<div class="work-image">
							<a href="#" class="no-link-style">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/ideas-wp.webp" alt="Project 1 Image">
							</a>
						</div>
						<div class="work-content">
							<div class="s-24"></div>
							<h3><a href="#">Work 1</a></h3>
							<div class="p1">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod nisi vitae
									molestie
								</p>
							</div>
							<div class="s-24"></div>
							<div class="work-btn">
								<a href="#">See details</a>
							</div>
						</div>
					</div>
					<div class="work-list-item">
						<div class="work-image">
							<a href="#" class="no-link-style">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/uploads/ideas-wp.webp" alt="Project 1 Image">
							</a>
						</div>
						<div class="work-content">
							<div class="s-24"></div>
							<h3><a href="#">Work 1</a></h3>
							<div class="p1">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod nisi vitae
									molestie
								</p>
							</div>
							<div class="s-24"></div>
							<div class="work-btn">
								<a href="#">See details</a>
							</div>
						</div>

					</div>
			</div>
		</div>
	</section>
	<div class="s-156"></div>
	<section class="ctn-dblue overflow-hidden">
		<div class="s-128"></div>
		<div class="wrapper">
			<div class="quotes-ctn">
				<div class="quote-content center-align">
					<h2 class="heading-5 small-title" tabindex="0">Message</h2>
					<blockquote>
						<p>
							At Elite, we are driven by a passion for crafting high-quality, custom WordPress solutions. I, Bahar, along with my expertise, focus on creating visually stunning, high-performing, and user-friendly websites that help brands grow and succeed online. We believe that a well-designed and optimized website is the foundation of a strong digital presence. With innovation, functionality, and long-term support at our core, Elite is your trusted partner in building websites that truly make an impact.
						</p>
						<cite class="font-med"><strong>Bahar Hussain</strong> Founder - elite design</cite>
					</blockquote>
				</div>
			</div>
		</div>
		<div class="s-128"></div>
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
</section>
<?php get_footer(); ?>
