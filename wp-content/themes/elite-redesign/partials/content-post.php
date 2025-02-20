<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elite designs
 * @since 1.0.0
 */

list( $ed_var_post_id, $ed_fields, $ed_option_fields, $ed_queried_object ) = EliteDesigns::defaults();

// Post Tags & Categories.
$ed_var_post_categories = get_categories( $ed_var_post_id );


$ed_var_posttitle = $ed_fields['bst_var_posttitle'] ?? get_the_title();


?>


<section id="page-section" class="page-section">
	<section id="hero-section" class="hero-section ctn-dblue">
		<div class="hero hero-ctn hero--blog-detail">
			<div class="s-96"></div>
			<div class="wrapper">
				<div class="hero-content">
					<div class="post-tags p3">
											<?php

						if ( ! empty( $ed_var_post_categories ) ) {
							foreach ( $ed_var_post_categories as $category ) {
								echo '<span class="post-tag">' . esc_html( $category->name ) . '</span> ';
							}
						}
						?>
					</div>
					<div class="s-32"></div>
					<h1 class="heading-2 mb-0"><?php echo html_entity_decode( $ed_var_posttitle ); ?></h1>
				</div>
				<div class="s-96"></div>
				<div class="hero__bottom-row flex-between-start">
					<div class="hero-bottom-content p1">
						<p><?php echo esc_html( get_the_excerpt() ); ?></p>

						<div class="s-48"></div>
						<div class="blog-detail__social-ctn mobile-hide">
							<div class="p3 font-med"> Share Article</div>
							<div class="s-24"></div>
							<div class="blog-detail__social-shares">
								<ul>
									<li>
										<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>"
											rel="noopener" rel="noreferrer"
											onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Fb</a>
									</li>
									<li>
										<a  href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"
											rel="noopener" rel="noreferrer"
											onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank">Li</a>
									</li>
									<li>
										<a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"
											rel="noopener" rel="noreferrer"
											onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank">Tw</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="hero-bottom-image img-cover">
						<?php
						if ( ! has_post_thumbnail( $ed_var_post_id ) ) {
							echo '<img class="" src="' . esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp" >';
						} else {
							echo get_the_post_thumbnail(
								$ed_var_post_id,
								'thumb_900',
							);
						}
						?>
					</div>
				</div>

			</div>
		</div>
	</section>


	<div class="wrapper">
		<div class="el-s60"></div>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-ctn' ); ?>>
			<div class="s-96"></div>
			<div class="single-page-content flex-between-start">
				<div class="single-page-sidebar-area">
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
					<?php get_template_part( 'partials/content' ); ?>
				</div>
			</div>
			<div class="post-details">
				<div class="post-pagination"> <?php the_posts_pagination(); ?> </div>
				<div class="post-comments">
				<?php
						// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				?>
				</div>
			</div>
			</div>

			<?php
			wp_reset_postdata();

			$ed_var_rp_selection_criteria = isset( $ed_fields['bst_var_rp_selection_criteria'] ) ? $ed_fields['bst_var_rp_selection_criteria'] : null;
			if ( 'random' === $ed_var_rp_selection_criteria ) {

				$ed_args = array(
					'posts_per_page' => 3,
					'post__not_in'   => array( $post->ID ),
					'orderby'        => 'rand',
				);

				$ed_query = new WP_Query( $ed_args );

				// The Loop.
				if ( $ed_query->have_posts() ) {
					while ( $ed_query->have_posts() ) {
						$ed_query->the_post();
						// Include specific template for the content.
						get_template_part( 'partials/content', 'archive-post' );
					}
					?>
					<?php
				}
			} else {
				global $post;
				$ed_var_selected_posts = array();
				$ed_var_selected_posts = isset( $ed_fields['bst_var_rp_selected_posts'] ) ? $ed_fields['bst_var_rp_selected_posts'] : null;
				if ( $ed_var_selected_posts ) {

					?>
				<div class="related-posts ">
				<h3><?php esc_html__( 'Related Posts', 'elitedesigns_td' ); ?></h3>
					<?php
					foreach ( $ed_var_selected_posts as $ed_var_post ) {
						setup_postdata( $post );

						$ed_post_fields = get_fields( get_the_ID() );
						$ed_var_src     = wp_get_attachment_image_url( get_post_thumbnail_id( $ed_var_post_id ), 'thumb_600', false );
						if ( ! $ed_var_src ) {
							$ed_var_src = get_template_directory_uri() . '/assets/build/images/admin/defaults/default-image.webp';
						}
							get_template_part( 'partials/content', 'archive-post' );
					}
					?>
				</div>
					<?php
				}
				wp_reset_postdata();
			}
			?>
		</article>
	</div>

</section>
