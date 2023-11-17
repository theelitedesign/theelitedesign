<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * Please note that missing files will produce a fatal error.
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

if ( ! defined( 'BASETHEME_BLOCK_DIR' ) ) {
	define( 'BASETHEME_BLOCK_DIR', __DIR__ . '/blocks' );
}


if ( ! defined( 'BASETHEME_DEFAULT_IMAGE' ) ) {
	define( 'BASETHEME_DEFAULT_IMAGE', esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp' );
}

$bst_file_includes = array(
	'includes/classes/class-wp-theme-cpt.php',                  // Custom post types setup.
	'includes/classes/class-wp-theme-ajax.php',                 // Ajax related functions.
	'includes/classes/class-wp-theme-acf.php',                  // Advanced custom fields functions.
	'includes/classes/class-wp-theme-editor.php',               // Editor styles.
	'includes/classes/class-wp-theme-walker-nav.php',           // Header nav Walker.
	'includes/classes/class-wp-theme-walker-acf-settings.php',  // Header nav Walker.
	'includes/classes/class-wp-theme-walker-settings.php',      // Header nav Walker.
	'includes/classes/class-wp-theme-scripts.php',              // Enqueue theme styles and scripts.
	'includes/classes/class-wp-theme-settings.php',             // Settings.
	'includes/classes/class-wp-theme-setup.php',                // Basic theme setup.
	'includes/classes/class-wp-theme-custom.php',               // Basic theme Custom.
	'includes/classes/class-wp-theme-blocks.php',               // Basic theme Blocks.
	'includes/cpt.php',                                         // CPT.
	'includes/project.php',                                     // Project.
	// 'includes/classes/class-wp-theme-post-type-order.php',                // Basic theme setup.
);


/**
 * Checks if any file have error while including it.
 */
foreach ( $bst_file_includes as $bst_file ) {

	$bst_filepath = locate_template( $bst_file );
	if ( file_exists( $bst_filepath ) ) {
		require_once $bst_filepath;
	} else {
		echo 'Unable to load configuration file ' . esc_html( basename( $bst_file ) ) . ' please check file name in functions.php in your current active theme.';
	}
}

