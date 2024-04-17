<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ELITE Design
 * @since 1.0.0
 */
// Global variables
global $option_fields;
global $pID;
global $fields;

$pID = get_the_ID();

if ( is_home() ) {
	$pID = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_category() || is_search() ) {
	$pID = get_option( 'page_on_front' );
}

if (function_exists('get_fields') && function_exists('get_fields_escaped')) {
	$option_fields = get_fields_escaped( 'option' );
	$fields        = get_fields_escaped( $pID );
}
?> <?php

// Default Footer Options

// $footer_scripts = (isset($option_fields['footer_scripts'])) ? $option_fields['footer_scripts'] : null;



// Schema Markup - ACF variables.


// $elitedesign_schema_check = $option_fields['elitedesign_schema_check'];
// if($elitedesign_schema_check){
// 	$elitedesign_schema_business_name 			= html_entity_remove($option_fields['elitedesign_schema_business_name']);
// 	$elitedesign_schema_business_legal_name 	= html_entity_remove($option_fields['elitedesign_schema_business_legal_name']);
// 	$elitedesign_schema_street_address 		= html_entity_remove($option_fields['elitedesign_schema_street_address']);
// 	$elitedesign_schema_locality 				= html_entity_remove($option_fields['elitedesign_schema_locality']);
// 	$elitedesign_schema_region 				= html_entity_remove($option_fields['elitedesign_schema_region']);
// 	$elitedesign_schema_postal_code 			= html_entity_remove($option_fields['elitedesign_schema_postal_code']);
// 	$elitedesign_schema_map_short_link 		= html_entity_remove($option_fields['elitedesign_schema_map_short_link']);
// 	$elitedesign_schema_latitude 				= html_entity_remove($option_fields['elitedesign_schema_latitude']);
// 	$elitedesign_schema_longitude 				= html_entity_remove($option_fields['elitedesign_schema_longitude']);
// 	$elitedesign_schema_opening_hours 			= html_entity_remove($option_fields['elitedesign_schema_opening_hours']);
// 	$elitedesign_schema_telephone 				= html_entity_remove($option_fields['elitedesign_schema_telephone']);
// 	$elitedesign_schema_business_email 		= html_entity_remove($option_fields['elitedesign_schema_business_email']);
// 	$elitedesign_schema_business_logo 			= html_entity_remove($option_fields['elitedesign_schema_business_logo']);
// 	$elitedesign_schema_price_range 			= html_entity_remove($option_fields['elitedesign_schema_price_range']);
// 	$elitedesign_schema_type 					= html_entity_remove($option_fields['elitedesign_schema_type']);
// }
// Custom - ACF variables.

// $elitedesign_ftr_phone = ( isset( $option_fields['elitedesign_ftr_phone'] ) ) ? $option_fields['elitedesign_ftr_phone'] : null;
// $elitedesign_ftr_email = ( isset( $option_fields['elitedesign_ftr_email'] ) ) ? $option_fields['elitedesign_ftr_email'] : null;

// $elitedesign_social_in = ( isset( $option_fields['elitedesign_social_in'] ) ) ? $option_fields['elitedesign_social_in'] : null;
// $elitedesign_social_fb = ( isset( $option_fields['elitedesign_social_fb'] ) ) ? $option_fields['elitedesign_social_fb'] : null;
// $elitedesign_social_tw = ( isset( $option_fields['elitedesign_social_tw'] ) ) ? $option_fields['elitedesign_social_tw'] : null;
// $elitedesign_social_li = ( isset( $option_fields['elitedesign_social_li'] ) ) ? $option_fields['elitedesign_social_li'] : null;

// Copyright Text
// $elitedesign_ftr_copyright_text = ( isset( $option_fields['elitedesign_ftr_copyright_text'] ) ) ? $option_fields['elitedesign_ftr_copyright_text'] : null;


?> </main>
<footer class="footer-section">
	<div class="s-96"></div>
	<div class="wrapper">
		<div class="cta-ctn">
			<div class="flex">
				<h4>Ready for a journey with elite?</h4>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="button footer-hover-button">Let’s Talk</a>
			</div>
		</div>
		<div class="s-96"></div>
		<div class="footer-ctn flex-ctn">
			<div class="footer-left">
				<div class="footer-logo">
					<a href="#">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/site-logo.svg" alt="Footer Logo" />
					</a>
				</div>
			</div>
			<div class="footer-right">
				<div class="footer-menu-widgets flexarea">
					<div class="footer-widget footer-nav animated-hover">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>web-design">Web design</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>web-development">Web development</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>search-engine-optimization">Search engine optimization</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>continuous-improvements">Continuous improvement</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>maintenance-support">Maintenance + support</a></li>
						</ul>
					</div>
					<div class="footer-widget footer-nav animated-hover">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services">Service</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>work">Work</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>team">Company</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company">Careers</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about">About</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
		<div class="s-96"></div>
		<div class="flex-ctn">
			<div class="footer-left">

				<!-- <div class="site-socials">
					<div class="big-body">Follow us</div>
					<ul class="flexarea">
						<li>
							<a href="#" class="no-link-style">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/facebook-icon.svg" alt="" />
							</a>
						</li>
						<li>
							<a href="#" class="no-link-style">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/twitter-icon.svg" alt="" />
							</a>
						</li>
						<li>
							<a href="#" class="no-link-style">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/instagram-icon.svg" alt="" />
							</a>
						</li>
						<li>
							<a href="#" class="no-link-style">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pinterest-icon.svg" alt="" />
							</a>
						</li>
					</ul>
				</div> -->

				<div class="blog-detail__social-ctn">
						<div class="p3 font-med"> Follow us</div>
						<div class="s-24"></div>
						<div class="blog-detail__social-shares">
							<ul>
								<li>
									<a href="#" target="_blank">Fb</a>
								</li>
								<li>
									<a href="#" target="_blank">Li</a>
								</li>
								<li>
									<a href="#" target="_blank">Tw</a>
								</li>
							</ul>
						</div>
					</div>
			</div>
			<div class="footer-right">
				<div class="elitedesign-contact animated-hover">
					<div class="big-body"><a href="tel:+923474849527">Call923474849527</a></div>
					<div class="big-body"><a href="mailto:hello@theelitedesign.com">hello@theelitedesign.com</a></div>
				</div>
			</div>
		</div>
		<div class="s-192"></div>
		<div class="footer-bottom flex p2">
			<div class="copyright-area animated-hover">
				<p>147 B Rana Town Lahore 54500 <br>
				© 2024 <a href="https://www.theelitedesign.com">elitedesign</a> ®
			</p>
			</div>
			<div class="legal-nav animated-hover">
				<ul>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact us</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-and-conditions">Terms & policey</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap">Sitemap</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="s-96"></div>
	</div>
</footer>

	</div>
</div>

<?php wp_footer(); ?>

	<?php // if ( $footer_scripts != '' ) { ?>
	<div style="display: none;">
	<?php // echo html_entity_decode($footer_scripts,ENT_QUOTES ); ?> </div>
	<?php // } ?>


</body>

</html>
