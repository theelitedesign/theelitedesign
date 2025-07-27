<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elite designs
 * @since 1.0.0
 */

list( $ed_var_post_id, $ed_fields, $ed_option_fields ) = EliteDesigns::defaults();

// Page Tags - Advanced custom fields variables.
$ed_var_tracking = $ed_option_fields['custom_scripts'] ?? '';
$ed_var_ccss     = $ed_option_fields['custom_css'] ?? '';
$ed_var_hscripts = $ed_option_fields['head_scripts'] ?? '';
$ed_var_bscripts = $ed_option_fields['body_scripts'] ?? '';

$ed_var_tbar_vsblty     = $ed_option_fields['bst_var_tbar_vsblty'] ?? null;
$ed_var_tbar_text    = $ed_option_fields['bst_var_tbar_text'] ?? null;
$ed_var_tohdr_btn     = $ed_option_fields['bst_var_tohdr_btn'] ?? null;


// Page variables - Advanced custom fields variables.

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<?php
		// Add Head Scripts.
	if ( EliteDesigns::if_live() ) {

		if ( '' !== $ed_var_hscripts ) {
			echo html_entity_decode( $ed_var_hscripts, ENT_QUOTES );
		}
	}
	?>
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/favicon-16x16.png">
	<link rel="icon" sizes="any"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/favicon.ico">
	<link rel="icon" type="image/svg+xml"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/icon.svg">
	<link rel="manifest"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/site.webmanifest">
	<meta name="theme-color" content="#52247f">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="elite designs">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton_color" content="#52247f">
	<meta name="msapplication-TileColor" content="#52247f">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="msapplication-TileImage"
		content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/pwa-icon-144.png">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#52247f">
	<meta name="google-site-verification" content="IYXzOvDGqqgY3Fl2eywGqh7BYOAgYvAw4niPl7AFAOg" />
    <meta name="msvalidate.01" content="738520458226193B09BDB8581DB4679F" />
    <meta name="p:domain_verify" content="3151c7da4cff8c9676c68880caa798e0"/>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php
		// Tracking Code.
	if ( '' !== $ed_var_tracking ) {
		echo html_entity_decode( $ed_var_tracking, ENT_QUOTES );
	}

		// Custom CSS.
	if ( '' !== $ed_var_ccss ) {
		echo '<style type="text/css">';
		echo html_entity_decode( $ed_var_ccss, ENT_QUOTES );
		echo '</style>';
	}
	?>
	<?php wp_head(); ?> <script>
	"serviceWorker" in navigator && window.addEventListener("load", function() {
		navigator.serviceWorker.register("/wp-content/elite-redesign-29aprill/assets/src/images/pwa/sw.js").then(function(e) {
			console.log("ServiceWorker registration successful with scope: ", e.scope)
		}, function(e) {
			console.log("ServiceWorker registration failed: ", e)
		})
	});
	jQuery(document).ready(function() {
		if (jQuery('#top-bar-ajax').length > 0) {
			jQuery('#top-bar-ajax').topBar();
		}
	});
	</script>

</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?>
	<?php
	if ( EliteDesigns::if_live() ) {
		if ( '' !== $ed_var_bscripts ) {
			?>
			<div style="display: none;">
				<?php echo html_entity_decode( $ed_var_bscripts, ENT_QUOTES ); ?>
			</div>
		<?php }
	}
	?>

	<a class="skip-link screen-reader-text" href="#intro-section"><?php esc_html_e( 'Skip to content', 'elitedesigns_td' ); ?></a>
		<header class="header-section">
			<?php
				if ( $ed_var_tbar_vsblty ) {
					if ( $ed_var_tbar_text ) { ?>
					<div class="top-bar" id="top-bar-ajax" style="display:none;">
						<div class="header-wrapper header-inner">
							<div class="top-bar-text"><?php
								if ( $ed_var_tbar_text ) {
									echo html_entity_decode( $ed_var_tbar_text );
								}
								?>
							</div>
							<div class="top-bar-cross">
								<span>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/topbar-cross-icon.svg" width="16" height="16" alt="Top bar">
								</span>
							</div>
						</div>
					</div>
					<?php
					}
				}
			?>
			<div class="header-wrapper header-inner">
				<div class="header-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/site-logo.svg" alt="Site Logo">
					</a>
				</div>
				<div class="right-header header-navigation">
					<div class="nav-overlay">
						<div class="nav-container">
							<div class="header-nav">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'header-nav',
											'fallback_cb'    => 'EliteDesigns::nav_fallback',
											'walker'         => new EliteDesigns\Walker\WP_Theme_Walker_Nav(),
											'container'      => 'nav',
										)
									);
								?>
							</div>
							<div class="header-btns">
								<?php if ( $ed_var_tohdr_btn ) { ?>
								<a href="https://calendly.com/elitedesignsstudio/60" target="_blank" title="Schedule a call" aria-label="Schedule a call" class="button white footer-hover-button">Schedule a call</a>
							<?php } ?>
							</div>
						</div>
					</div>
					<div class="menu-btn">
						<span class="top"></span>
						<span class="bottom"></span>
					</div>
				</div>
			</div>
		</header>
		<div class="floating-button">
			<a href="/contact" title="Start your project" class="button">
				Start your project
			</a>
		</div>
	<!-- Main Area Start -->
	<main id="main-section" class="main-section">
