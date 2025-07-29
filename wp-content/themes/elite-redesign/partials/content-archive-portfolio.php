<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DevDives
 * @since 1.0.0
 */

list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = EliteDesigns::defaults();

?>
<div class="work-list-item">
	<div class="work-image">
		<a href="<?php the_permalink(); ?>" title="<?php echo esc_html(wp_strip_all_tags(html_entity_decode(get_the_title()))); ?>" aria-label="<?php echo esc_html(wp_strip_all_tags(html_entity_decode(get_the_title()))); ?>" class="no-link-style">
		<?php
			if ( ! has_post_thumbnail( $ed_var_post_id ) ) {
				echo '<img class="" src="' . esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp">';
			} else {
				echo get_the_post_thumbnail( $ed_var_post_id, 'thumb_800' );
			}
		?>
		</a>
	</div>
	<div class="work-content">
		<div class="s-24"></div>
		<h3 class="t1 work-title">
			<a href="<?php the_permalink(); ?>">
				<?php echo esc_html(wp_strip_all_tags(html_entity_decode(get_the_title()))); ?>
			</a>
		</h3>
		<div class="work-btn">
			<a href="<?php the_permalink(); ?>">See details</a>
		</div>
	</div>
</div>
