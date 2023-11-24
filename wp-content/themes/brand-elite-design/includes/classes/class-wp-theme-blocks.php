<?php
/**
 * Blocks related functions
 *
 * @link
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

namespace BaseTheme\Blocks;

/**
 * Template Class For Blocks
 *
 * Template Class
 *
 * @category Setting_Class
 * @package  Base Theme Package
 */
class WP_Theme_Blocks {
	/**
	 * Define class Constructor
	 **/
	public function __construct() {
		add_action( 'init', array( $this, 'register_acf_blocks' ) );
	}

	/**
	 * A function in which all acf blocks are registered
	 *
	 *  @return void
	 */
	public function register_acf_blocks() {

		register_block_type( BASETHEME_BLOCK_DIR . '/section-container' );
		// Register a block - FAQ.
		self::register_acf_block( 'faqs' );
		// Register a block - Media Alongside Text.
		self::register_acf_block( 'media-alongside-text' );
		// Register a block - AcfBlock.
		self::register_acf_block(
			'acfblock',
			array( 'jquery', 'owl-carousel' ),
			function() {
				// wp_enqueue_script( 'owl-carousel', BASETHEME_BD_ASSETS . '/js/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );.
			},
			true
		);
		// [register_here].
	}


	/**
	 * A function which is used to register a block
	 *
	 * @param string   $block_name is the name of the block.
	 * @param array    $block_script_order is a array of registered scripts in the correct order.
	 * @param function $block_function is function to use when need external file in the block.
	 * @param boolean  $has_script is boolean value that determines if block need to include script or not.
	 *
	 *  @return void
	 */
	protected static function register_acf_block( $block_name = null, $block_script_order = array( 'jquery' ), $block_function = null, $has_script = false ) {
		if ( $has_script ) {
			$block_version = filemtime( get_template_directory() . '/blocks/' . $block_name . '/' . $block_name . '.js' );
			if ( $block_function ) {
				$block_function();
			}
			wp_register_script( 'block-' . $block_name, BASETHEME_BD_ASSETS . '/' . $block_name . '/' . $block_name . '.js', $block_script_order, $block_version, true );
		}
		register_block_type( BASETHEME_BLOCK_DIR . '/' . $block_name );
	}
}
new WP_Theme_Blocks();
