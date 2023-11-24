<?php
/**
 * Functions for editor styles
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

namespace BaseTheme\Editor;

/**
 * Template Class For Acf Settings
 *
 * Template Class
 *
 * @category Setting_Class
 * @package  Base Theme Package
 */
class WP_Theme_Editor {
	/**
	 * Define class Constructor
	 **/
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'editor_css_support' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'custom_editor_assets' ) );
		add_filter( 'block_editor_settings_all', array( $this, 'wp_block_editor_settings' ), 10, 2 );
		add_action( 'rest_api_init', array( $this, 'register_style_variations_json' ) );
	}

	/**
	 * Add support for editor styles
	 *
	 * @return void
	 */
	public function editor_css_support() {
		add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added.
	}

	/**
	 * Add CSS to Gutenberg Editor and the Blocks
	 *
	 * @return void
	 */
	public function custom_editor_assets() {

		// Custom block styles.
		wp_enqueue_script( 'editor-js', esc_url( get_stylesheet_directory_uri() ) . '/assets/build/editor.min.js', array( 'jquery' ), '1.0.0', true );
	}


	/**
	 * Filter by global settings or user roles.
	 *
	 *  SUGGEST: USE THIS CODE TO CONTROL BLOCK SETTINGS, THEN USE THEME.JSON TO CONTROL DEFAULT STYLES.
	 *
	 * @param object $editor_settings .
	 * @param object $editor_context .
	 *
	 * @return object
	 */
	public function wp_block_editor_settings( $editor_settings, $editor_context ) {

		$theme_json                                = \WP_Theme_JSON_Resolver::get_merged_data();
		$editor_settings['__experimentalFeatures'] = $theme_json->get_settings();

		$block_types = \WP_Block_Type_Registry::get_instance()->get_all_registered();
		$types       = array();
		foreach ( $block_types as $key => $item ) {
			if ( 'acf' === explode( '/', $key )[0] ) {
				$types[] = $key;
			}
		}
		$allowed = array(
			'core/paragraph',
			'core/heading',
			'core/buttons',
			'core/button',
			'core/list',
			'core/list-item',
			'core/table',
			'core/quote',
			'core/pullquote',
			'core/image',
			'core/video',
			'core/gallery',
			'core/columns',
			'core/group',
			'core/spacer',
			'core/seperator',
			'core/separator',
			'core/spacer',
			'core/shortcode',
			'basethemepack/section-container',

		);
		$editor_settings['allowedBlockTypes'] = array_merge( $allowed, $types );

		return $editor_settings;
	}
	/**
	 * Get spacing data from theme.json.
	 *
	 * @return void
	 */
	public function register_style_variations_json() {
		register_rest_route(
			'v1',
			'/theme-json/style-variations',
			array(
				'methods'  => 'GET',
				'callback' => function() {
					$theme_json_path = get_template_directory() . '/theme.json';
					if ( isset( $_GET['key'] ) && 'L4DhGjeS6e6nOoRwbWuiYRjKi6tWHRxNKp7ui0L2' === $_GET['key'] ) {

						if ( file_exists( $theme_json_path ) ) {
							$theme_json_content = file_get_contents( $theme_json_path );
							$theme_json_data    = json_decode( $theme_json_content, true );

							return rest_ensure_response( $theme_json_data['settings']['styleVariations'] );
						} else {
							return new WP_Error( 'theme_json_not_found', 'Theme JSON file not found', array( 'status' => 404 ) );
						}
					} else {
						return new WP_Error( 'theme_json_not_found', 'Theme JSON file not found', array( 'status' => 404 ) );
					}
				},
			)
		);
	}


}
new WP_Theme_Editor();
