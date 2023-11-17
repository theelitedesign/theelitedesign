<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

list( $bst_var_post_id, $bst_fields, $bst_option_fields ) = BaseTheme::defaults();

// Page Tags - Advanced custom fields variables.
$bst_var_tracking = $bst_option_fields['custom_scripts'] ?? '';
$bst_var_ccss     = $bst_option_fields['custom_css'] ?? '';
$bst_var_hscripts = $bst_option_fields['head_scripts'] ?? '';
$bst_var_bscripts = $bst_option_fields['body_scripts'] ?? '';

$bst_var_tohdr_btn     = $bst_option_fields['bst_var_tohdr_btn'] ?? null;
$bst_var_tohdr_btn_two = $bst_option_fields['bst_var_tohdr_btn_two'] ?? null;
$bst_var_tohdr_tbar    = $bst_option_fields['bst_var_tohdr_tbar'] ?? null;
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
	if ( BaseTheme::if_live() ) {

		if ( '' !== $bst_var_hscripts ) {
			echo html_entity_decode( $bst_var_hscripts, ENT_QUOTES );
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
	<meta name="theme-color" content="#0047FE">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Base Theme Package">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton_color" content="#0047FE">
	<meta name="msapplication-TileColor" content="#0047FE">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="msapplication-TileImage"
		content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/pwa-icon-144.png">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0047FE">
	<?php
		// Tracking Code.
	if ( '' !== $bst_var_tracking ) {
		echo html_entity_decode( $bst_var_tracking, ENT_QUOTES );
	}

		// Custom CSS.
	if ( '' !== $bst_var_ccss ) {
		echo '<style type="text/css">';
		echo html_entity_decode( $bst_var_ccss, ENT_QUOTES );
		echo '</style>';
	}
	?>
	<?php wp_head(); ?> <script>
	"serviceWorker" in navigator && window.addEventListener("load", function() {
		navigator.serviceWorker.register("/sw.js").then(function(e) {
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

	function imageLoading(e) {
		jQuery(e).addClass('loaded');
		jQuery(e).siblings(".thumb-20").addClass('hide-thumb');
	}
	</script>

</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?>
	<?php
	if ( BaseTheme::if_live() ) {
		if ( '' !== $bst_var_bscripts ) {
			?>
			<div style="display: none;">
				<?php echo html_entity_decode( $bst_var_bscripts, ENT_QUOTES ); ?>
			</div>
			<?php
		}
	}
	?>

	<a class="skip-link screen-reader-text"
		href="#page-section"><?php esc_html_e( 'Skip to content', 'basetheme_td' ); ?></a>
	<header id="header-section" class="header-section">
		<!-- Header Start -->
		<div class="top-bar center-align" id="top-bar-ajax" style="display:none;">
			<div class="header-wrapper">
				<div class="top-bar-text">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					<?php
					if ( $bst_var_tohdr_btn ) {
						echo BaseTheme::button( $bst_var_tohdr_btn, '' );
					}
					?>
				</div>
			</div>
			<div class="top-bar-cross">
				<span>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/topbar-cross-icon.svg"
						width="16" height="16" alt="<?php esc_attr_e( 'Top bar', 'basetheme_td' ); ?>">
				</span>
			</div>
		</div>
		<div class="header-wrapper header-inner d-flex align-items-center justify-content-between">
			<div class="header-logo logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/site-logo.svg"
						alt="Site Logo" /></a>
			</div>
			<div class="right-header header-navigation">
				<div class="nav-overlay">
					<div class="nav-container">
						<div class="header-nav">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'header-nav',
									'fallback_cb'    => 'BaseTheme::nav_fallback',
								)
							);
							?>
						</div>
						<?php if ( $bst_var_tohdr_btn || $bst_var_tohdr_btn_two ) { ?>
						<div class="header-btns desktop-hide">
							<?php
							if ( $bst_var_tohdr_btn ) {
								echo BaseTheme::button( $bst_var_tohdr_btn, 'button' );
							}

							if ( $bst_var_tohdr_btn_two ) {
								echo BaseTheme::button( $bst_var_tohdr_btn_two, 'button' );
							}
							?>

						</div>
						<?php } ?>
					</div>
				</div>
				<div class="menu-btn">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</div>
			<?php if ( $bst_var_tohdr_btn || $bst_var_tohdr_btn_two ) { ?>
			<div class="header-btns">
				<?php
				if ( $bst_var_tohdr_btn ) {
					echo BaseTheme::button( $bst_var_tohdr_btn, 'button' );
				}

				if ( $bst_var_tohdr_btn_two ) {
					echo BaseTheme::button( $bst_var_tohdr_btn_two, 'button' );
				}
				?>
			</div>
			<?php } ?>
			<!-- header buttons -->
		</div>
		<!-- Header End -->
	</header>
	<!-- Main Area Start -->
	<main id="main-section" class="main-section">
