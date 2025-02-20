<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package elite designs
 * @since 1.0.0
 */

list($ed_var_author_avatar,$ed_var_author_name) = EliteDesigns::get_author_data( get_the_ID() );

// Post Tags & Categories.
$ed_var_post_tag = get_the_tags( get_the_ID() );

?>


<div class="post-box-meta d-flex justify-content-between">
	<div class="post-date">
		<?php the_time( ELITEDESIGNS_PROJECT_DTFORMAT ); ?>
	</div>
	<?php if ( $ed_var_post_tag ) { ?>
		<div class="ac-post-cat">
		<?php foreach ( $ed_var_post_tag as $ed_var_category ) { ?>
			<a href="<?php echo esc_url( get_category_link( $ed_var_category ) ); ?>"><?php echo esc_html( $ed_var_category->name ); ?></a>
		<?php } ?>
		</div>
	<?php } ?>
</div>
