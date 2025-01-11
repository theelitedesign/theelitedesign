<?php
/**
 * The template for displaying all posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ELITE Design
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;
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
				<h1 class="heading-2 mb-0"><?php the_title(); ?></h1>
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
									<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title();?>" target="_blank"
					rel="noopener" rel="noreferrer"
					onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank">Fb</a>
								</li>
								<li>
									<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title();?>&amp;url=<?php the_permalink();?>"
					target="_blank" rel="noopener" rel="noreferrer"
					onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank">Li</a>
								</li>
								<li>
									<a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title();?>&amp;url=<?php the_permalink();?>"
					target="_blank" rel="noopener" rel="noreferrer"
					onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank">Tw</a>
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


<section id="page-section" class="page-section">

	<div class="white-ctn">
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
					<?php while ( have_posts() ) { the_post();
						the_content();
					} ?>
				</div>
			</div>
		</div>
		<div class="s-192"></div>
	</div>
	</div>
</section>

<?php get_footer();
