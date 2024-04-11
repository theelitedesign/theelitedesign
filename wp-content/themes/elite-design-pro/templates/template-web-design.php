<?php
/**
 * Template Name: Web Design
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
				<h1>Make your story  <br> with <span> design	</span></h1>
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
						We try to connect with users emotionally at every step of our creative process. By guiding them through a journey that's tailored to their needs, we inspire them to take important actions.
					</p>
				</div>
			</div>
			<div class="s-192"></div>
			<div class=" overflow-hidden">
				<div class="wrapper">
					<div class="design-proccess-ctn">
						<div class="section-head">
							<h2>Design process</h2>
						</div>
						<div class="s-96"></div>
						<div class="proccess-area flex">
							<div class="single-proccess col-538"><span class="number">01</span> Kick of meeting</div>
							<div class="single-proccess col-538"><span class="number">02</span>Discovery and research</div>
							<div class="single-proccess col-538"><span class="number">03</span>Architecture and content</div>
							<div class="single-proccess col-538"><span class="number">04</span>Website storyframes</div>
							<div class="single-proccess col-538"><span class="number">05</span>Web design</div>
							<div class="single-proccess col-538"><span class="number">06</span>Website prototype</div>
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
				<div class="s-192"></div>
				<div class="wrapper">
					<div class="design-proccess-ctn">
						<div class="section-head">
							<h2>Design approach</h2>
						</div>
						<div class="s-96"></div>
						<div class="proccess-area flex">
							<div class="single-proccess col-538"><span class="number">01</span>Mobile First</div>
							<div class="single-proccess col-538"><span class="number">02</span>Responsive</div>
							<div class="single-proccess col-538"><span class="number">03</span>Usable</div>
							<div class="single-proccess col-538"><span class="number">04</span>Accessible</div>
						</div>
					</div>
				</div>
				<div class="s-192"></div>
				<section class="ctn-gray ">
					<div class="s-192"></div>
					<div class="wrapper">
						<div class="design-tool">
							<div class="section-head">
								<h2 class="heading-2">Design tools</h2>
							</div>
							<div class="s-48"></div>
							<div class="design-tool-item flex-between-start">
								<div class="design-tool-title t2 font-med">
									<div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/tool-logo-01.svg" alt=""></div>
									<div class="design-tool-inner-title">Octopus.do</div>
								</div>
								<div class="design-tool-text">Our preferred tool for structuring information and strategizing content. An essential part of our planning process.</div>
							</div>
							<div class="design-tool-item flex-between-start">
								<div class="design-tool-title t2 font-med">
									<div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/tool-logo-02.svg" alt=""></div>
									<div class="design-tool-inner-title">Figma</div>
								</div>
								<div class="design-tool-text">Our teamwork platform streamlines our process. Design, present, and track feedback all in one place. It's online; no software installation needed for design.</div>
							</div>
							<!-- <div class="design-tool-item flex-between-start">
								<div class="design-tool-title t2 font-med">
									<div class="design-tool-icon"><img src="<?php // echo esc_url( get_template_directory_uri() ); ?>/assets/img/tool-logo-04.svg" alt=""></div>
									<div class="design-tool-inner-title">Blender</div>
								</div>
								<div class="design-tool-text">For projects that warrant it, our go-to 3D graphic creation tool.</div>
							</div> -->
							<div class="design-tool-item flex-between-start">
								<div class="design-tool-title t2 font-med">
									<div class="design-tool-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/tool-logo-05.svg" alt=""></div>
									<div class="design-tool-inner-title">Index Page</div>
								</div>
								<div class="design-tool-text">To improve Figma for presentations, we made our own tool. The Index Page plugin organizes screens with thumbnails.
									<a href="https://www.figma.com/community/plugin/976837040692846864/index-page">Give it a go!</a>

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
										<div class="faqs__item--title body-text-36">What happens during the Kick Off Meeting?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>The Kick Off Meeting starts our project journey, aligning everyone's goals, timelines, and expectations.</p>
										</div>
									</div>
									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">What's involved in Discovery & Research? <div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Discovery & Research dives deep into your business and audience to shape our design strategy.</p>
										</div>
									</div>

									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">What happens during Architecture & Content? <div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Architecture & Content phase organizes website structure and content for user engagement.</p>
										</div>
									</div>

									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">You don’t do wireframes? <div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>No. Instead of drawing arbitrary boxes in a frame, we put the messaging first and create storyframes instead. This allows our designers to be as creative as possible while keeping the story of the brand at the forefront.</p>
										</div>
									</div>

									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">How are Website Prototypes created? <div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Website Prototypes test interactions to ensure a seamless user experience before development.</p>
										</div>
									</div>

									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">When is design done?<div class="faq-icon"></div></div>
										<div class="faqs__item--desc">
											<p>Design is done when you are happy! After you are satisfied with the designs.</p>
										</div>
									</div>

									<div class="faqs__item">
										<div class="faqs__item--title body-text-36">Do you offer web development services? <div class="faq-icon"></div></div>
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
							<div class="s-96"></div>
							<div class="services-lists">
								<div class="service-list-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>web-development" class="no-link-style">
										<div class="service-item-content">
											<div class="service-count">01</div>
											<div class="service-title">Web development</div>
										</div>
										<div class="service-item-image h-img-cover">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
										</div>
									</a>
								</div>
								<div class="service-list-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>seo" class="no-link-style">
										<div class="service-item-content">
											<div class="service-count">02</div>
											<div class="service-title">Search engine optimization</div>
										</div>
										<div class="service-item-image h-img-cover">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
										</div>
									</a>
								</div>

								<div class="service-list-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>continuous-improvements" class="no-link-style">
										<div class="service-item-content">
											<div class="service-count">03</div>
											<div class="service-title">Continuous improvement</div>
										</div>
										<div class="service-item-image h-img-cover">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
										</div>
									</a>
								</div>
								<div class="service-list-item">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>support" class="no-link-style">
										<div class="service-item-content">
											<div class="service-count">04</div>
											<div class="service-title">Website maintenance & support</div>
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
