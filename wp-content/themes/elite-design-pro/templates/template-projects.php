<?php
/**
 * Template Name: Projects
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
					<h1>
						Great work <br> <span> for great people </span>
					</h1>
				</div>
			</div>
			<div class="s-96"></div>
		</div>
	</section>

	<div id="page-section" class="page-section">

		<section class="white-ctn">
			<div class="s-192"></div>
			<div class="wrapper">
				<div class="work-ctn">
					<div class="work-items flex-ctn">
						<div class="work-item">
							<div class="work-item-image h-img-cover" cursor-class="read-more">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/iat-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker p2 font-med">Kicker</div>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="work-title t2 font-med">Project Title</a>
								<div class="work-exerpt p2 font-med">Work description</div>
							</div>
						</div>
						<div class="work-item">
							<div class="work-item-image h-img-cover" cursor-class="read-more">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/iat-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker  p2 font-med">Kicker</div>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="work-title t2 font-med">Project Title</a>
								<div class="work-exerpt p2 font-med">Work description</div>
							</div>
						</div>
						<div class="work-item">
							<div class="work-item-image h-img-cover" cursor-class="read-more">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/iat-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker p2 font-med">Kicker</div>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="work-title t2 font-med">Project Title</a>
								<div class="work-exerpt p2 font-med">Work description</div>
							</div>
						</div>
						<div class="work-item">
							<div class="work-item-image h-img-cover" cursor-class="read-more">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/iat-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker  p2 font-med">Kicker</div>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="work-title t2 font-med">Project Title</a>
								<div class="work-exerpt p2 font-med">Work description</div>
							</div>
						</div>
						<div class="work-item">
							<div class="work-item-image h-img-cover" cursor-class="read-more">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/iat-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker p2 font-med">Kicker</div>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="work-title t2 font-med">Project Title</a>
								<div class="work-exerpt p2 font-med">Work description</div>
							</div>
						</div>
						<div class="work-item">
							<div class="work-item-image h-img-cover" cursor-class="read-more">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="no-link-style">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/iat-img-01.webp" alt="">
								</a>
							</div>
							<div class="work-item-content">
								<div class="work-kicker  p2 font-med">Kicker</div>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>project-detail" class="work-title t2 font-med">Project Title</a>
								<div class="work-exerpt p2 font-med">Work description</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="s-192"></div>
		</section>
	</div>


<?php get_footer();
