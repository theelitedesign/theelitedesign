<?php
/**
 * Setup function for the project
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

namespace BaseTheme\Script;

/**
 * Theme assets
 *
 * Define variable to store asset directory folder in it.
 *
 * That can be used afterward to call stylesheet / scripts etc
 */

// Time format for the_time().
define( 'BASETHEME_PROJECT_DTFORMAT', 'F j, Y' );

// Define assets folder.
define( 'BASETHEME_ASSETDIR', get_template_directory_uri() . '/assets' );
// Define blocks folder.
define( 'BASETHEME_BD_ASSETS', get_template_directory_uri() . '/blocks' );

// Define bundle version.
define( 'BASETHEME_ASSET_VERSION_JS', filemtime( get_template_directory() . '/assets/build/scripts.min.js' ) );
define( 'BASETHEME_ASSET_VERSION_CSS', filemtime( get_template_directory() . '/assets/build/styles.min.css' ) );
define( 'BASETHEME_ADMIN_ASSET_VERSION_CSS', filemtime( get_template_directory() . '/assets/build/editor.min.css' ) );

/**
 * Theme assets
 *
 * Enqueue and Dequeue required files
 */
class WP_Theme_Scripts {
	/**
	 * Define class Constructor
	 **/
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'theme_assets' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_assets' ) );
	}
	/**
	 * Enqueue Frontend Assets
	 *
	 * @return void
	 */
	public function theme_assets() {

		// Enqueue theme styles.
		wp_enqueue_style( 'theme-stylesheet', BASETHEME_ASSETDIR . '/build/styles.min.css?v=' . BASETHEME_ASSET_VERSION_CSS, false, BASETHEME_ASSET_VERSION_CSS );
		// Eliminate the emoji script.
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		// Enqueue comments reply script on single post pages.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		if ( ! is_admin() && ! is_user_logged_in() ) {

			// Deregister dashicons on frontend.
			wp_deregister_style( 'dashicons' );
		}
		wp_enqueue_script( 'jquery' );
		// Register project scripts.
		wp_register_script( 'theme-scripts', BASETHEME_ASSETDIR . '/build/scripts.min.js?v=' . BASETHEME_ASSET_VERSION_JS, array( 'jquery' ), BASETHEME_ASSET_VERSION_JS, false );
		// Localize.
		wp_localize_script(
			'theme-scripts',
			'localVars',
			array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce'    => esc_html( wp_create_nonce( 'ajax_nonce' ) ),
			)
		);
		// Enqueue project scripts.
		wp_enqueue_script( 'theme-scripts' );
	}
	/**
	 * Enqueue Backend Assets
	 *
	 * @return void
	 */
	public function admin_assets() {
		wp_enqueue_script( 'admin-scripts-acf', BASETHEME_ASSETDIR . '/build/vendors/admin-scripts.js', array( 'acf-input' ), '1.0.0', false );
		wp_enqueue_style( 'sample-editor-styles', BASETHEME_ASSETDIR . '/build/editor.min.css?v=' . BASETHEME_ADMIN_ASSET_VERSION_CSS, false, BASETHEME_ADMIN_ASSET_VERSION_CSS );
	}
}
new WP_Theme_Scripts();

