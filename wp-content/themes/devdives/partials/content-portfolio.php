<?php
/**
 * Template part for displaying single portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DevDives
 * @since 1.0.0
 */

list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = DevDives::defaults();
// Post Tags & Categories.
$ed_var_post_tags       = get_the_tags( $ed_var_post_id );
$ed_var_post_categories = get_categories( $ed_var_post_id );


$el_var_toport_title = $ed_fields['el_var_toport_title'] ?? get_the_title();

?>

<section id="" class="page-section">
	<section id="hero-section" class="hero-section overflow-hidden ctn-dblue">
		<div class="hero hero-ctn hero--work">
			<div class="s-96"></div>
			<div class="wrapper">
				<div class="hero-content">
					<div class="p1"><?php echo get_the_title(); ?></div>
					<div class="el-s20"></div>
					<h1 class="heading-2"><?php echo html_entity_decode( $el_var_toport_title ); ?></h1>
				</div>
			</div>
			<div class="s-96"></div>
			<div class="hero__bottom-row flex-between-start">
				<div class="hero-bottom-content p1">
				</div>
				<div class="hero-bottom-image hero-bottom-image-portfolio">
					<?php
						if ( ! has_post_thumbnail( $ed_var_post_id ) ) {
							echo '<img class="" src="' . esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp" >';
						} else {
							echo get_the_post_thumbnail(
								$ed_var_post_id,
								'thumb_2000',
							);
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<div class="s-128"></div>
	<div class="overflow-hidden">
		<div class="wrapper">
			<?php get_template_part( 'partials/content' ); ?>
		</div>
	</div>
</section>
