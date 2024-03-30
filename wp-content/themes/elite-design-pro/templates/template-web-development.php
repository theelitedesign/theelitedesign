<?php
/**
 * Template Name: Web Development
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
				<h1>Easy to customize <br> <span>high performing sites</span></h1>
			</div>
			<div class="s-96"></div>
			<div class="hero__bottom-row flex-between-start">
				<div class="hero-bottom-content p1">

				</div>
				<div class="hero-bottom-image img-cover">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
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
						We build websites using the Gutenberg editor in WordPress, making them user-friendly and visually appealing.
					</p>
				</div>
			</div>
			<div class="s-192"></div>
			<div class=" overflow-hidden">
				<div class="wrapper">
					<div class="design-proccess-ctn">
						<div class="section-head">
							<h2>Development process</h2>
						</div>
						<div class="s-96"></div>
						<div class="proccess-area flex">
							<div class="single-proccess col-538"><span class="number">01</span>Planning & Kickoff</div>
							<div class="single-proccess col-538"><span class="number">02</span>Development</div>
							<div class="single-proccess col-538"><span class="number">03</span>QA / Review</div>
							<div class="single-proccess col-538"><span class="number">05</span>Content Integration</div>
							<div class="single-proccess col-538"><span class="number">05</span>Feedbacks</div>
							<div class="single-proccess col-538"><span class="number">04</span>Launch / SEO</div>
							<div class="single-proccess col-538"><span class="number">06</span>Continuous improvements</div>
							<div class="single-proccess col-538"><span class="number">06</span>Support</div>
						</div>
					</div>
				</div>
				<div class="s-192"></div>
				<div class="wrapper">
					<div class="image-slider">
						<div class="image-swiper swiper-container">
							<div class="image-swiper--slider swiper-wrapper" cursor-class="read-more">
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
				<div class="s-192"></div>
				<section class="ctn-gray ">
					<div class="s-192"></div>
					<div class="wrapper">
						<div class="design-tool">
							<div class="section-head">
								<h2 class="heading-2">CMS we are <br> specialize in </h2>
							</div>
							<div class="s-48"></div>
							<div class="design-tool-item flex-between-start">
								<div class="design-tool-title t2 font-med">
									<div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cms-icon-01.svg" alt=""></div>
									<div class="design-tool-inner-title">WordPress</div>
								</div>
								<div class="design-tool-text">For over 5 years, WordPress has been our primary platform for building websites due to its simplicity, easy of use, and strong support system.</div>
							</div>
							<div class="design-tool-item flex-between-start">
								<div class="design-tool-title t2 font-med">
									<div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cms-icon-02.svg" alt=""></div>
									<div class="design-tool-inner-title">Webflow</div>
								</div>
								<div class="design-tool-text">We like using Webflow because it generates code, which makes development simpler and more streamlined.</div>
							</div>
							<div class="design-tool-item flex-between-start">
								<div class="design-tool-title t2 font-med">
									<div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cms-icon-04.svg" alt=""></div>
									<div class="design-tool-inner-title">Headless</div>
								</div>
								<div class="design-tool-text">Headless CMS separates content and design, which offers more flexibility but can be harder to update content.</div>
							</div>
							<div class="design-tool-item flex-between-start">
								<div class="design-tool-title t2 font-med">
									<div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cms-icon-03.svg" alt=""></div>
									<div class="design-tool-inner-title">Shopify</div>
								</div>
								<div class="design-tool-text">For clients focused on shopping, we recommend a platform with a straightforward interface, lots of customization options, and built-in payment solutions.

								</div>
							</div>
						</div>
					</div>
					<div class="s-96"></div>
				</section>
				<section class="white-ctn">
					<div class="s-192"></div>
					<div class="wrapper">
						<div class="hat-ctn flexarea sb">
							<div class="hat-title">
								<h2 class="heading-3">Your questions?</h2>
							</div>
							<div class="hat-text">
								<div class="faqs__area">
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">What web development services do you offer?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>We offer full-stack web development, including design, coding, and testing.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">How long does it take to build a website? <div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Typically, website development takes 4-12 weeks, varying with complexity.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">What is your pricing structure for web development? <div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Costs depend on features, design intricacy, and additional functionalities.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Do you offer website maintenance and support after launch? <div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Yes, we provide ongoing maintenance and support post-launch.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">How do you ensure the security of websites you develop?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>We implement robust security protocols to protect against cyber threats.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Can you customize websites based on our specific needs and branding?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Yes, we tailor websites to match your specific needs and branding requirements.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Do you provide responsive design to ensure compatibility across devices?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Absolutely, we ensure responsive design for compatibility across all devices.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Will the website be optimized for search engines (SEO)?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Yes, we optimize websites for search engines to improve visibility and attract more traffic.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Can you integrate third-party services or APIs into the website?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>We can seamlessly integrate third-party services and APIs as needed.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">How do you handle website security and protect against cyber threats?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Yes, we're experts in web development and have created numerous top-notch websites.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
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
						<div class="s-48"></div>
						<div class="services-lists">
							<div class="service-list-item">
								<a href="#" class="no-link-style">
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
										<div class="service-count">03</div>
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
										<div class="service-count">04</div>
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
										<div class="service-count">05</div>
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
			</div>
		</section>
	</div>

<?php get_footer();
