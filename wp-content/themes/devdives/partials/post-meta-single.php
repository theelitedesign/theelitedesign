<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package DevDives
 * @since 1.0.0
 */

list($ed_var_author_avatar,$ed_var_author_name) = DevDives::get_author_data( get_the_ID() );
// Post Tags & Categories.
$ed_var_post_tags       = get_the_tags( $ed_var_post_id );
$ed_var_post_categories = get_categories( $ed_var_post_id );

?>

	<div class="post-box-meta">
		<div class="post-author-ctn d-flex">
			<?php if ( $ed_var_author_avatar ) { ?>
				<div class="post-author-img"
					style="background-image: url(<?php echo esc_html( $ed_var_author_avatar ); ?>); width:50px; height:50px; background-size:cover">
				</div>
			<?php } ?>
			<div class="author-meta">
				<?php if ( $ed_var_author_name ) { ?>
					<div class="post-author-name"><?php esc_html_e( 'By:', 'devdives_td' ); ?> <?php echo esc_html( $ed_var_author_name ); ?></div>
				<?php } ?>
				<div class="post-meta-date"><?php the_time( ELITEDESIGNS_PROJECT_DTFORMAT ); ?></div>
			</div>
		</div>
	</div>
