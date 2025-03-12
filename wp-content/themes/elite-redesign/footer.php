<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elite designs
 * @since 1.0.0
 */

list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = EliteDesigns::defaults();
// Default Footer Options.
$ed_var_footer_scripts = $ed_option_fields['footer_scripts'] ?? '';



// Schema Markup - ACF variables.
$ed_var_schema_check = $ed_option_fields['bst_var_schema_check'] ?? null;
if ( $ed_var_schema_check ) {
	$ed_var_schema_business_name       = $ed_option_fields['bst_var_schema_business_name'] ?? null;
	$ed_var_schema_business_legal_name = $ed_option_fields['bst_var_schema_business_legal_name'] ?? null;
	$ed_var_schema_street_address      = $ed_option_fields['bst_var_schema_street_address'] ?? null;
	$ed_var_schema_locality            = $ed_option_fields['bst_var_schema_locality'] ?? null;
	$ed_var_schema_region              = $ed_option_fields['bst_var_schema_region'] ?? null;
	$ed_var_schema_postal_code         = $ed_option_fields['bst_var_schema_postal_code'] ?? null;
	$ed_var_schema_map_short_link      = $ed_option_fields['bst_var_schema_map_short_link'] ?? null;
	$ed_var_schema_latitude            = $ed_option_fields['bst_var_schema_latitude'] ?? null;
	$ed_var_schema_longitude           = $ed_option_fields['bst_var_schema_longitude'] ?? null;
	$ed_var_schema_opening_hours       = $ed_option_fields['bst_var_schema_opening_hours'] ?? null;
	$ed_var_schema_telephone           = $ed_option_fields['bst_var_schema_telephone'] ?? null;
	$ed_var_schema_business_email      = $ed_option_fields['bst_var_schema_business_email'] ?? null;
	$ed_var_schema_business_logo       = $ed_option_fields['bst_var_schema_business_logo'] ?? null;
	$ed_var_schema_price_range         = $ed_option_fields['bst_var_schema_price_range'] ?? null;
	$ed_var_schema_type                = $ed_option_fields['bst_var_schema_type'] ?? null;
}
// Custom - ACF variables.

$ed_var_ftrop_title     = $ed_option_fields['bst_var_ftrop_title'] ?? null;
$ed_var_ftrop_text      = $ed_option_fields['bst_var_ftrop_text'] ?? null;
$ed_var_ftrop_copyright = $ed_option_fields['bst_var_ftrop_copyright'] ?? null;
$ed_var_social_profiles = $ed_option_fields['bst_var_social_profiles'] ?? null;

?>
<?php get_template_part( 'partials/cta' ); ?>
</main>
<footer id="footer-section" class="footer-section">
	<div class="s-96"></div>
	<!-- Footer Start -->
	<div class="wrapper">
		<div class="cta-ctn">
			<div class="flex">
				<h4>Call Us to Discuss Your Project</h4>
				<!-- <a href="<?php //echo esc_url( home_url( '/' ) ); ?>contact" class="button white footer-hover-button">Schedule a chat</a> -->
				<a href="#calendly-popup" class="button white footer-hover-button call-popup">Schedule a chat</a>
			</div>
		</div>
		<div class="s-96"></div>
		<div class="footer-ctn flex-ctn footer-new-row">
			<div class="footer-left">
				<div class="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/site-logo.svg" alt="Site Logo">
					</a>
				</div>
			</div>
			<div class="footer-right">
				<div class="footer-menu-widgets flexarea">
					<div class="footer-widget footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav',
									'fallback_cb'    => 'EliteDesigns::nav_fallback',
									'walker'         => new EliteDesigns\Walker\WP_Theme_Walker_Nav(),
									'container'      => 'nav',
								)
							);
						?>
					</div>
					<div class="footer-widget footer-nav">
						<ul>
							<!-- <li><a href="services">Services</a></li> -->
							<!-- <li><a href="work">Work</a></li> -->
							<!-- <li><a href="team">Company</a></li>
							<li><a href="company">Careers</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="s-96"></div>
		<div class="flex-ctn footer-copyright-row">
			<div class="footer-left">
				<div class="blog-detail__social-ctn">
					<div class="p3 font-med"> Follow us</div>
					<div class="s-24"></div>
					<div class="blog-detail__social-shares">
						<ul>
							<li>
								<a href="#" target="_blank">Fb</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/theelitedesign/" target="_blank">Li</a>
							</li>
							<li>
								<a href="#" target="_blank">Tw</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-right">
				<div class="elitedesign-contact">
					<div class="big-body"><a href="tel:+923474849527">Call 923474849527</a></div>
					<div class="big-body"><a href="mailto:hello@elitedesigns.studio">hello@elitedesigns.studio</a>
					</div>
				</div>
			</div>
		</div>
		<div class="s-96"></div>
		<div class="footer-bottom flex p2">
			<div class="copyright-area">
				<p> Johar Town Lahore, Pakistan
					© <?php echo date('Y'); ?> <a href="<?php echo esc_url(home_url('/')); ?>">elite designs</a>
				</p>
			</div>
			<div class="legal-nav">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'legal-nav',
							'fallback_cb'    => 'EliteDesigns::nav_fallback',
							'walker'         => new EliteDesigns\Walker\WP_Theme_Walker_Nav(),
							'container'      => 'nav',
						)
					);
				?>
			</div>
		</div>
		<div class="s-96"></div>
	</div>
	<!-- Footer End -->
	<?php
	if ( $ed_var_schema_check ) {
		?>
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "<?php echo esc_html( $ed_var_schema_type ); ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo esc_html( $ed_var_schema_locality ); ?>",
			"addressRegion": "<?php echo esc_html( $ed_var_schema_region ); ?>",
			"postalCode": "<?php echo esc_html( $ed_var_schema_postal_code ); ?>",
			"streetAddress": "<?php echo esc_html( $ed_var_schema_street_address ); ?>"
		},
		"hasMap": "<?php echo esc_html( $ed_var_schema_map_short_link ); ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo esc_html( $ed_var_schema_latitude ); ?>",
			"longitude": "<?php echo esc_html( $ed_var_schema_longitude ); ?>"
		},
		"name": "<?php echo esc_html( $ed_var_schema_business_name ); ?>",
		"openingHours": "<?php echo esc_html( $ed_var_schema_opening_hours ); ?>",
		"telephone": "<?php echo esc_html( $ed_var_schema_telephone ); ?>",
		"email": "<?php echo esc_html( $ed_var_schema_business_email ); ?>",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo esc_html( $ed_var_schema_business_logo ); ?>",
		"legalName": "<?php echo esc_html( $ed_var_schema_business_legal_name ); ?>",
		"priceRange": "<?php echo esc_html( $ed_var_schema_price_range ); ?>"
	}
	</script> <?php } ?>
</footer>

<?php wp_footer(); ?>
<?php
if ( '' !== $ed_var_footer_scripts ) {
	?>
<div style="display: none;">
	<?php echo html_entity_decode( $ed_var_footer_scripts, ENT_QUOTES ); ?>
</div>
<?php } ?>
</body>

</html>
