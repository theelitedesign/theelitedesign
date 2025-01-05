<?php
/**
 * Template Name: Team
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

<div class="team-bg"></div>

<section id="hero-section" class="hero-section">
	<div class="hero hero-ctn hero--team">
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="hero__content">
				<h1>About <span>elite design</span></h1>
				<div class="scroll-down__button">
					<a href="#page-section" aria-label="Down to First section">
						<svg width="16" height="37" viewBox="0 0 16 37" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path class="dropdown-item1" id="arrow" d="M3.33398 16L8.00065 20.6667L12.6673 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>

							<g class="dropdown-item2" opacity="0.15">
								<path d="M3.33398 6L8.00065 10.6667L12.6673 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</g>

							<g class="dropdown-item3" opacity="0.15">
								<path d="M3.33398 27L8.00065 31.6667L12.6673 27" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
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
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/company-hero.webp" alt="Image">
			</div>
		</div>
	</div>
</section>
<div id="page-section" class="page-section">
	<section class="white-ctn">
		<div class="wrapper">
			<div class="s-192"></div>
			<div class="hat-ctn hat-horizontal">
				<h2 class="heading-6">What we believe in</h2>
				<div class="t1">
					At elite, we create WordPress themes that help businesses and nonprofits succeed online. We focus on making websites that look great, are easy to use, and work well. Our goal is to build an online presence that supports your needs.
				</div>
			</div>
			<div class="s-192"></div>
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
				</div>
			</div>
			<div class="s-192"></div>
			<div class="image-collage-ctn team-block-collage ">
				<div class="collage-image">
					<div class="collage-image-link flex">
						<div class="collage-image-area">
							<img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/profile-image.jpeg" alt="">
						</div>
						<div class="collage-image-detail">
							<div class="t1 font-med">Bahar Hussain</div>
							<div class="s-12"></div>
							<div class="p1 font-reg">Founder & CEO</div>
							<div class="s-48"></div>
							<blockquote>
								<p>
									elite is your best choice for web development. We create exceptional designs and top-notch websites. Our service always WOWs. Let us exceed your expectations today.
								</p>
							</blockquote>
						</div>
					</div>
					<!-- <div id="bahar" class="team-detail white-ctn p2">
						<div class="team-detail-content">
							<div class="team-detail-head">
								<h2 class="heading-3 team-title">Bahar Hussain</h2>
								<div class="p2 team-designation">CEO & Founder</div>
							</div>
							<div class="s-48"></div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet natus voluptas illo tempore, asperiores quis dolorem maiores nobis obcaecati deserunt?</p>
							<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident porro vel, veniam natus nesciunt esse. Deserunt nisi fuga recusandae!</p>
							<div class="s-48"></div>
							<div class="blog-detail__social-ctn mobile-hide">
								<div class="p3 font-med"> Social Media</div>
								<div class="s-24"></div>
								<div class="blog-detail__social-shares">
									<ul>
										<li>
											<a href="#" target="_blank">Fb</a>
										</li>
										<li>
											<a href="#" target="_blank">Li</a>
										</li>
										<li>
											<a href="#" target="_blank">Tw</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="s-48"></div>
							<div class="popup-close-btn ">
								<span class="button black small team-close-btn">Close</span>
							</div>
						</div>
						<div class="team-detail-image img-cover">
							<img src="<?php // echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/profile-image.jpeg" alt="Image">
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<div class="s-192"></div>
		<!-- <div class="image-collage-ctn team-block-collage flexarea">
			<div class="collage-image img-cover col">
				<a href="#bahar" class="collage-image-link no-link-style">
					<img src="<?php // echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/profile-image.jpeg" alt="">
					<div class="collage-image-detail">
						<div class="p1 font-med">Bahar Hussain</div>
						<div class="s-12"></div>
						<div class="p2 font-reg">Founder & CEO</div>
					</div>
				</a>
				<div id="bahar" class="team-detail white-ctn p2">
					<div class="team-detail-content">
						<div class="team-detail-head">
							<h2 class="heading-3 team-title">Bahar Hussain</h2>
							<div class="p2 team-designation">CEO & Founder</div>
						</div>
						<div class="s-48"></div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet natus voluptas illo tempore, asperiores quis dolorem maiores nobis obcaecati deserunt?</p>
						<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident porro vel, veniam natus nesciunt esse. Deserunt nisi fuga recusandae!</p>
						<div class="s-48"></div>
						<div class="blog-detail__social-ctn mobile-hide">
							<div class="p3 font-med"> Social Media</div>
							<div class="s-24"></div>
							<div class="blog-detail__social-shares">
								<ul>
									<li>
										<a href="#" target="_blank">Fb</a>
									</li>
									<li>
										<a href="#" target="_blank">Li</a>
									</li>
									<li>
										<a href="#" target="_blank">Tw</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="s-48"></div>
						<div class="popup-close-btn ">
							<span class="button black small team-close-btn">Close</span>
						</div>
					</div>
					<div class="team-detail-image img-cover">
						<img src="<?php // echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/profile-image.jpeg" alt="Image">
					</div>
				</div>
			</div>
			<div class="collage-image img-cover col">
				<a href="#" class="collage-image-link no-link-style">
					<img src="<?php // echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/profile-image.jpeg" alt="">
					<div class="collage-image-detail">
						<div class="p1 font-med">Team Member Name</div>
						<div class="s-12"></div>
						<div class="p2 font-reg">Team Member Designation</div>
					</div>
				</a>
			</div>
			<div class="collage-image img-cover col">
				<a href="#" class="collage-image-link no-link-style">
					<img src="<?php // echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/profile-image.jpeg" alt="">
					<div class="collage-image-detail">
						<div class="p1 font-med">Team Member Name</div>
						<div class="s-12"></div>
						<div class="p2 font-reg">Team Member Designation</div>
					</div>
				</a>
			</div>
		</div> -->
		<div class="ctn-gray">
			<div class="wrapper">
				<div class="s-192"></div>
				<div class="text-columns-ctn">
					<div class="text-columns">
						<div class="text-column col-645">
							<h3 class="heading-4">Our Mission</h3>
							<div class="s-24"></div>
							<ul>
								<li><strong>For Our Clients:</strong> We design custom WordPress themes that meet your specific needs, helping you achieve your goals and connect with your audience.</li>
								<li><strong>For Our Team:</strong> We believe in fostering a positive and supportive environment where everyone can grow and succeed together.</li>
								<li><strong>For Our Society:</strong> We strive to make a difference by supporting nonprofits and causes that matter.</li>
							</ul>
						</div>
						<div class="text-column col-645">
							<h3 class="heading-4">Our Vision</h3>
							<div class="s-24"></div>
							<p>
								<strong>Our vision is simple:</strong>
								To lead the way in WordPress theme development by creating innovative, user-friendly websites for businesses and nonprofits. We aim to build strong, lasting relationships with our clients and help them grow by providing websites that are both beautiful and functional.
							</p>
						</div>
					</div>
				</div>
				<!-- <div class="s-192"></div> -->
				<!-- <div class="four-images-ctn">
					<h2 class="heading-3"> ELITE Family</h2>
					<div class="gallrey-images">
						<div class="gallrey-image">
							<img src="http://theelitedesign.local/wp-content/themes/elite-design-pro/assets/img/uploads/project-img-01.webp" alt="">
						</div>
						<div class="gallrey-image">
							<img src="http://theelitedesign.local/wp-content/themes/elite-design-pro/assets/img/uploads/project-img-01.webp" alt="">
						</div>
						<div class="gallrey-image">
							<img src="http://theelitedesign.local/wp-content/themes/elite-design-pro/assets/img/uploads/project-img-01.webp" alt="">
						</div>
						<div class="gallrey-image">
							<img src="http://theelitedesign.local/wp-content/themes/elite-design-pro/assets/img/uploads/project-img-01.webp" alt="">
						</div>
					</div>
				</div> -->
			</div>
			<div class="s-192"></div>
		</div>
		<div class="s-192"></div>
		<div class="wrapper">
			<div class="job-cta center">
				<h2 class="color-yellow">Ready to start your project?</h2>
				<p>We’d love to hear from you! Whether you’re a business looking to grow or a nonprofit working to make an impact, we’re here to help. Contact us today, and let’s build something great together!</p>
					<div class="s-48"></div>
					<a href="http://theelitedesign.local/contact" class="button black">Let's Talk</a>
			</div>
		</div>
		<div class="s-192"></div>
	</section>


</div>

<?php get_footer(); ?>
