<?php
/**
 * Template Name: Blog Detail
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

<section id="hero-section" class="hero-section">
	<div class="hero hero-ctn hero--blog-detail">
		<div class="s-96"></div>
		<div class="wrapper">
			<div class="hero__content">
				<div class="post-tags p3">
					<div class="post-tag">SEO</div>
					<div class="post-tag">PPC</div>
				</div>
				<div class="s-32"></div>
				<h1 class="heading-2 mb-0">How to Generate Leads with
					Google Ads for your New
					Website</h1>
			</div>
			<div class="s-96"></div>
			<div class="hero__bottom-row flex-between-start">
				<div class="hero-bottom-content p1">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis perferendis nemo, dolor exercitationem?</p>

					<div class="s-48"></div>
					<div class="blog-detail__social-ctn mobile-hide">
						<div class="p3 font-med"> Share Article</div>
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
				</div>
				<div class="hero-bottom-image img-cover">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/product-img-01.webp" alt="Image">
				</div>
			</div>
		</div>
	</div>
</section>
<div id="page-section" class="page-section">
	<div class="s-192"></div>
		<section class="white-ctn">
			<div class="wrapper">
				<div class="s-96"></div>
				<div class="single-page-content flex-between-start">
					<div class="single-page-sidebar-area">
						<!-- <div class="s-48"></div> -->
						<div class="sidebar-headings">
							<div class="p3 single-sidebar-title font-med">Table of contents</div>
							<div class="s-24"></div>
							<div class="table-of-content-list">
								<ul class="heading-lists p3">
								</ul>
							</div>
							<div class="s-48"></div>
						</div>
					</div>
					<div class="single-page-content-area blog-detail__content">
						<h2>Heading 2 -1</h2>
						<h2>Heading 2 -2</h2>
						<h2>Heading 2 -3</h2>
						<h2>Heading 2 -4</h2>
						<h2>Heading 2 -5</h2>
						<h2>Heading 2 -6</h2>
						<h2>Heading 2 -7</h2>
						<h2>Heading 2 -8</h2>
						<h2>Heading 2 -9</h2>
						<h2>Heading 2 10</h2>
					</div>
				</div>
			</div>
			<div class="s-192"></div>
		</section>

</div>

<?php get_footer(); ?>
