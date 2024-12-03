<?php
/**
 * Template Name: Company
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
				<h1>Company</h1>
			</div>
		</div>
		<div class="s-96"></div>
	</div>
</section>
<div id="page-section" class="page-section">
	<section class="white-ctn">
		<div class="s-192"></div>
		<div class="wrapper">

				<div class="t1">
					WordPress agency in Pakistan offering full service digital marketing. Elite Design has a reputation for top-class digital solutions that get results.
				</div>

		</div>
		<div class="s-192"></div>
		<div class="wrapper">
			<div class="hat-ctn flexarea sb">
				<div class="hat-title">
					<h2 class="heading-4">What you will get from us</h2>
				</div>
				<div class="hat-text">
					<div class="t3">
						We value strong relationships and passion in our work, always improving and taking responsibility for our promises, even if it means saying no.
					</div>
				</div>
			</div>
			<div class="s-192"></div>
			<div class="text-columns-ctn">
				<div class="text-columns flex align-start">
					<div class="text-column col-645">
						<h3 class="heading-4">High quality work</h3>
						<p>Life’s one long series of personal connections—the more genuine, the more meaningful they
							are, the
							stronger we become. This is it, so let’s face it TOGETHER!</p>
					</div>
					<div class="text-column col-645">
						<h3 class="heading-4">Designed for excellence</h3>
						<p>Life’s one long series of personal connections—the more genuine, the more meaningful they
							are, the
							stronger we become. This is it, so let’s face it TOGETHER!</p>
					</div>
				</div>
			</div>
			<div class="s-192"></div>
			<div class="iat-ctn flex">
				<div class="iat-img-area img-cover col-645 rd-10">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/uploads/iat-img-01.webp" alt="Image alongside text image">
				</div>
				<div class="iat-content-area col-595">
					<h2>Built for enterprise-scale growth</h2>
					<div class="big-body">
						<p> Fast and scalable hosting, advanced security, dedicated partnership, and much more. </p>
					</div>
					<div class="s-48"></div>
					<a href="#" class="button black">Contact Us</a>
				</div>
			</div>
			<div class="s-192"></div>
		</div>
	</section>
	<section>
		<div class="s-48"></div>
		<div class="floating-ctn inner-wrapper center">
			<h2 class="t1 font-bold mb-0">
				<a href="#">Now hiring: view open positions</a>
			</h2>
		</div>
		<div class="s-48"></div>
	</section>
	<section class="white-ctn">
		<div class="wrapper">
			<div class="s-192"></div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
