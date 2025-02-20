<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * Please note that missing files will produce a fatal error.
 *
 * @package elite designs
 * @since 1.0.0
 */

if ( ! defined( 'ELITEDESIGNS_BLOCK_DIR' ) ) {
	define( 'ELITEDESIGNS_BLOCK_DIR', __DIR__ . '/blocks' );
}


if ( ! defined( 'ELITEDESIGNS_DEFAULT_IMAGE' ) ) {
	define( 'ELITEDESIGNS_DEFAULT_IMAGE', esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp' );
}


$ed_folder_includes = bst_includes( __DIR__ . '/includes/classes' );
/**
 * Checks if any file have error while including it.
 */
foreach ( $ed_folder_includes as $ed_folders ) {
	foreach ( $ed_folders as $ed_file ) {
		$ed_filepath = locate_template( str_replace( __DIR__ . '/', '', $ed_file ) );
		if ( file_exists( $ed_filepath ) ) {
			require_once $ed_filepath;
		} else {
			echo 'Unable to load configuration file ' . esc_html( basename( $ed_file ) ) . ' please check file name in functions.php in your current active theme.';
		}
	}
}
/**
 * Get folder Dir
 *
 * @param string $directory Folder dir path.
 */
function bst_includes( $directory ) {
	$folders = array();

	// Get all files and folders in the specified directory.
	$items = scandir( $directory );

	// Iterate through each item.
	foreach ( $items as $item ) {
		$full_path = $directory . '/' . $item;

		// Check if the item is a directory and not '.' or '..'.
		if ( is_dir( $full_path ) && '.' !== $item && '..' != $item ) {
			$folders[ $item ] = glob( __DIR__ . '/includes/classes/' . $item . '/*.php' );
		}
	}
	$folders['other'] = array(
		__DIR__ . '/includes/cpt.php',
		__DIR__ . '/includes/project.php',
	);

	return $folders;
}
