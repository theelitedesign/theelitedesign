<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elite designs
 * @since 1.0.0
 */

list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = EliteDesigns::defaults();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'service-list-item' ); ?>>
	<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="no-link-style">
		<div class="service-item-content">
			<div class="service-label post-categories-row">
				<?php
					$categories = get_the_category();
					if ( ! empty( $categories ) ) {
						foreach ( $categories as $category ) {
							echo '<span class="category">' . esc_html( $category->name ) . '</span> ';
						}
					}
				?>
			</div>
			<div class="service-title"><?php echo esc_html( get_the_title() ); ?>
			</div>
		</div>
	</a>
</article>

