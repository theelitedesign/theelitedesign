<?php
/**
 * Template Name: Company
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
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="hero-content">
				<h1>About <span>elite design</span></h1>
				<div class="scroll-down__button">
					<a href="#intro-section" aria-label="Down to First section">
						<svg width="16" height="37" viewBox="0 0 16 37" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path class="dropdown-item1" id="arrow" d="M3.33398 16L8.00065 20.6667L12.6673 16"
								stroke="#ffffff" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round"></path>

							<g class="dropdown-item2" opacity="0.15">
								<path d="M3.33398 6L8.00065 10.6667L12.6673 6" stroke="#ffffff" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round"></path>
							</g>

							<g class="dropdown-item3" opacity="0.15">
								<path d="M3.33398 27L8.00065 31.6667L12.6673 27" stroke="#ffffff"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</g>
						</svg>
						<div class="">Learn more about us</div>
					</a>
				</div>
			</div>
			<div class="s-96"></div>
		</div>
		<div class="hero__bottom-row flex-between-start">
			<div class="hero-bottom-content p1">
			</div>
			<div class="hero-bottom-image">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/uploads/company-hero.webp"
					alt="Image">
			</div>
		</div>
	</section>
	<div id="intro-section"></div>
	<section class="white-ctn overflow-hidden">
		<div class="wrapper">
			<div class="s-128"></div>
			<div class="hat-ctn hat-horizontal">
				<h2 class="heading-5">Who we are</h2>
				<div class="t1">

					<p>
						Founded by Bahar, Elite was established to help businesses and organizations build powerful digital experiences through expert web design, development, SEO, and website support.
					</p>

					<p>
						Over the years, we’ve grown into a dedicated software house with a strong presence in the industry. While our core team drives innovation and quality, we also collaborate with talented professionals, allowing us to scale, adapt, and deliver exceptional results.
					</p>

					<p>
						At Elite, we believe great work comes from passion and creativity. We embrace new challenges, stay ahead of industry trends, and continuously refine our craft. We celebrate our successes, value collaboration, and enjoy the journey of building meaningful digital solutions.
					</p>

				</div>
			</div>
			<div class="s-128"></div>
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
			</div>
			<div class="s-128"></div>
			<div class="image-collage-ctn team-block-collage">
				<div class="collage-image">
					<div class="collage-image-link">
						<div class="collage-image-area">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/bahar-image.jpeg"
								alt="Bahar Image">
						</div>
						<div class="collage-image-detail">
							<div class="t1 font-med">Bahar Hussain</div>
							<div class="s-12"></div>
							<div class="p1 font-reg">Founder &amp; CEO</div>
							<div class="s-48"></div>
							<blockquote>
								<p>
									At Elite, we are driven by a passion for crafting high-quality, custom WordPress solutions. I, Bahar, along with my expertise, focus on creating visually stunning, high-performing, and user-friendly websites that help brands grow and succeed online. We believe that a well-designed and optimized website is the foundation of a strong digital presence. With innovation, functionality, and long-term support at our core, Elite is your trusted partner in building websites that truly make an impact.
								</p>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="s-128"></div>
		<div class="wrapper">
			<div class="section-head">
				<h2>Our Values</h2>
			</div>
			<div class="s-96"></div>
			<div class="values-ctn">
				<div class="values-lists three-columns">
					<div class="value-list-item">
						<div class="value-item-content">
							<div class="value-count">01</div>
							<div class="value-detail-content">
								<h3 class="value-title heading-5">Innovation</h3>
								<div class="value-description">We embrace new ideas and technologies to create cutting-edge solutions.</div>
							</div>
						</div>
					</div>
					<div class="value-list-item">
						<div class="value-item-content">
							<div class="value-count">02</div>
							<div class="value-detail-content">
								<h3 class="value-title heading-5">Excellence in Execution</h3>
								<div class="value-description">We strive for perfection, delivering high-quality and impactful results.</div>
							</div>
						</div>
					</div>
					<div class="value-list-item">
						<div class="value-item-content">
							<div class="value-count">03</div>
							<div class="value-detail-content">
								<h3 class="value-title heading-5">Collaboration & Teamwork</h3>
								<div class="value-description">We believe in teamwork, valuing diverse ideas to achieve great results.</div>
							</div>
						</div>
					</div>
					<div class="value-list-item">
						<div class="value-item-content">
							<div class="value-count">04</div>
							<div class="value-detail-content">
								<h3 class="value-title heading-5">Integrity & Transparency</h3>
								<div class="value-description">We operate with honesty, trust, and open communication in everything we do.</div>
							</div>
						</div>
					</div>
					<div class="value-list-item">
						<div class="value-item-content">
							<div class="value-count">05</div>
							<div class="value-detail-content">
								<h3 class="value-title heading-5">Sustainability & Social Impact</h3>
								<div class="value-description">We prioritize ethical practices and create solutions that benefit society.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="s-128"></div>
		<div class="ctn-gray">
			<div class="wrapper">
				<div class="s-128"></div>
				<div class="text-columns-ctn">
					<div class="text-columns">
						<div class="text-column col-645">
							<h3 class="heading-4">Our Mission</h3>
							<div class="s-24"></div>
							<ul>
								<li><strong>For Our Clients:</strong> We design custom WordPress themes that
									meet your
									specific needs, helping you achieve your goals and connect with your
									audience.</li>
								<li><strong>For Our Team:</strong> We believe in fostering a positive and
									supportive
									environment where everyone can grow and succeed together.</li>
								<li><strong>For Our Society:</strong> We strive to make a difference by
									supporting
									nonprofits and causes that matter.</li>
							</ul>
						</div>
						<div class="text-column col-645">
							<h3 class="heading-4">Our Vision</h3>
							<div class="s-24"></div>
							<p>
								<strong>Our vision is simple:</strong>
								To lead the way in WordPress theme development by creating innovative,
								user-friendly
								websites for businesses and nonprofits. We aim to build strong, lasting
								relationships with
								our clients and help them grow by providing websites that are both beautiful and
								functional.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="s-128"></div>
		</div>
	</section>
</section>




<?php get_footer(); ?>
