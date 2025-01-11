<?php
/**
 * Template Name: Continuous Improvements
 * Template Post Type: page
 *
 * This template is for displaying resource page.
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
	<div class="hero hero-ctn hero--work">
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="hero__content">
				<h1>Improve your website's <span>impact</span></h1>
			</div>
			<div class="s-96"></div>
			<div class="hero__bottom-row flex-between-start">
				<div class="hero-bottom-content p1">

				</div>
				<div class="hero-bottom-image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/hero-image-default.webp" alt="Image">
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
						Maximize your website's impact, boost visitor engagement, and drive business growth effortlessly.
					</p>
				</div>
			</div>
			<div class="s-192"></div>
			<div class=" overflow-hidden">
				<div class="wrapper">
					<div class="design-tool">
						<div class="design-tool-item flex-between-start">
							<div class="design-tool-title t2 font-med">
								<!-- <div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cms-icon-01.svg" alt=""></div> -->
								<div class="design-tool-inner-title">Analysis & Goal Setting</div>
							</div>
							<div class="design-tool-text">Analyze current performance and set clear improvement goals aligned with business objectives.</div>
						</div>
						<div class="design-tool-item flex-between-start">
							<div class="design-tool-title t2 font-med">
								<!-- <div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cms-icon-02.svg" alt=""></div> -->
								<div class="design-tool-inner-title">Idea Generation & Prioritization</div>
							</div>
							<div class="design-tool-text">Generate improvement ideas, prioritize them based on impact and feasibility.</div>

						</div>
						<div class="design-tool-item flex-between-start">
							<div class="design-tool-title t2 font-med">
								<!-- <div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cms-icon-04.svg" alt=""></div> -->
								<div class="design-tool-inner-title">Implementation & Monitoring</div>
							</div>
							<div class="design-tool-text">Develop and execute improvement plans, monitor progress, and measure key performance indicators.</div>
						</div>
						<div class="design-tool-item flex-between-start">
							<div class="design-tool-title t2 font-med">
								<!-- <div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cms-icon-04.svg" alt=""></div> -->
								<div class="design-tool-inner-title">Feedback Collection & Iteration</div>
							</div>
							<div class="design-tool-text">Gather feedback, make adjustments based on insights, and iterate to optimize results continually.</div>
						</div>

					</div>
				</div>
				<div class="s-192"></div>
				<div class="wrapper">
					<div class="image-slider">
						<div class="image-swiper swiper-container">
							<div class="image-swiper--slider swiper-wrapper owl-carousel owl-theme" cursor-class="read-more">
									<div class="swiper-slide image__slide swiper-slide swiper-lazy">
										<div class="image__slide--img img-cover">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/project-img-01.webp" alt="">
										</div>
									</div>
									<div class="swiper-slide image__slide swiper-slide swiper-lazy">
										<div class="image__slide--img img-cover">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/project-img-01.webp" alt="">
										</div>
									</div>
									<div class="swiper-slide image__slide swiper-slide swiper-lazy">
										<div class="image__slide--img img-cover">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/project-img-01.webp" alt="">
										</div>
									</div>
									<div class="swiper-slide image__slide swiper-slide swiper-lazy">
										<div class="image__slide--img img-cover">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/project-img-01.webp" alt="">
										</div>
									</div>
									<div class="swiper-slide image__slide swiper-slide swiper-lazy">
										<div class="image__slide--img img-cover">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/project-img-01.webp" alt="">
										</div>
									</div>


							</div>
						</div>
					</div>
				</div>
				<section class="white-ctn">
					<!-- <div class="s-192"></div> -->
					<div class="wrapper">
						<!-- <div class="hat-ctn flexarea sb">
							<div class="hat-title">
								<h2 class="heading-3">Your questions?</h2>
							</div>
							<div class="hat-text">
								<div class="faqs__area">
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Why is website maintenance important?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Regular maintenance ensures your website stays secure, performs well, and remains up-to-date with the latest technologies. It helps prevent downtime and ensures a positive user experience.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">How many times should I update my website?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>You should update your website regularly whenever there are new software releases, security patches, or content changes. How often you update depends on how complex your website is and how quickly technology is changing.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">What security measures are included in website maintenance?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Security measures may include regular security scans, malware detection and removal, SSL certificate installation, firewall setup, and implementing best practices to safeguard against cyber threats.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Do you provide backup services for websites?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Yes, we offer regular backups to protect your website data. This ensures that in case of any data loss or website issues, we can restore your site to a previous, stable state.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Can you help with website performance optimization?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Absolutely. We optimize your website's speed and performance by implementing techniques such as caching, image optimization, code minification, and server optimization.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Do you offer support for e-commerce websites?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Yes, we provide comprehensive support for e-commerce websites, including product updates, inventory management, payment gateway integration, and security enhancements.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">How do you handle website downtime or technical issues?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>We have a dedicated support team available to address any technical issues promptly. Our goal is to minimize downtime and restore your website's functionality as quickly as possible.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Can you assist with content updates and website redesigns?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Yes, we offer content management services to keep your website's content fresh and relevant. Additionally, we can help with website redesigns to improve aesthetics, usability, and functionality.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">What are the costs associated with website support and maintenance?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>The cost varies depending on factors such as the size and complexity of your website, the level of support required, and any additional services requested. We offer customized plans tailored to meet your specific needs and budget.</p>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<div class="s-192"></div>
				</section>
				<section class="ctn-gray ">
					<div class="s-192"></div>
					<div class="wrapper">
						<div class="list-colums flex">
							<div class="list-column lyellow-bg col-49">
								<h2 class="heading-3">Product 1</h2>
								<div class="med-body list-text"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
									consectetur, adipisci velit. </div>
								<ul>
									<li>We're on a quest to build a different kind of agency.</li>
									<li> One where the crazy ideas make the cut and the old ways of doing things get the
										side-eye </li>
									<li>There are many variations of passages of Lorem Ipsum available</li>
									<li>There are many variations of passages of Lorem Ipsum available</li>
								</ul>
							</div>
							<div class="list-column pink-bg col-49">
								<h2 class="heading-3">Product 2</h2>
								<div class="med-body list-text"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
									consectetur, adipisci velit. </div>
								<ul>
									<li>We're on a quest to build a different kind of agency.</li>
									<li> One where the crazy ideas make the cut and the old ways of doing things get the
										side-eye </li>
									<li>There are many variations of passages of Lorem Ipsum available</li>
									<li>There are many variations of passages of Lorem Ipsum available</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="s-192"></div>
				</section>
				<section>
					<div class="s-192"></div>
					<div class="wrapper">
						<div class="services-ctn sm-services">
							<div class="section-head">
								<h2 class="heading-3">Need something else?</h2>
							</div>
							<div class="s-96"></div>
							<div class="services-lists">

								<div class="service-list-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>web-design" class="no-link-style">
										<div class="service-item-content">
											<div class="service-count">02</div>
											<div class="service-title">Web design</div>
										</div>

									</a>
								</div>

								<div class="service-list-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>web-development" class="no-link-style">
										<div class="service-item-content">
											<div class="service-count">01</div>
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
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>maintenance-support" class="no-link-style">
										<div class="service-item-content">
											<div class="service-count">04</div>
											<div class="service-title">Website maintenance & support</div>
										</div>

									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="s-192"></div>
				</section>
			</div>
		</section>
	</div>

<?php get_footer();
