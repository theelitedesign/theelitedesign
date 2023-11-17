<?php
/**
 * Custom functions added to all projects
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

//@codingStandardsIgnoreStart
namespace BaseTheme\Settings;

/**
 * Template Class For Theme Settings
 *
 * Template Class
 *
 * @category Setting_Class
 * @package  Base Theme Package
 */
class WP_Theme_Post_Type_Order {

	/**
	 * Define class Constructor
	 **/
	public function __construct() {
		$menu_order_check = get_option( 'menu_order_check' );
		if ( $menu_order_check != 'yes' ) {
			add_action( 'admin_init', array( $this, 'init_activation' ) );
		}

		add_action( 'admin_menu', array( $this, 'admin_menu' ) );

	}

	function init_activation() {
		global $wpdb;

			$result = $wpdb->query( "DESCRIBE $wpdb->blogs `menu_order`" );
		if ( ! $result ) {
			$query  = "ALTER TABLE $wpdb->posts ADD `menu_order` INT( 4 ) NULL DEFAULT '0'";
			$result = $wpdb->query( $query );
		}

		update_option( 'menu_order_check', 'yes' );
	}
	function admin_menu() {
		add_options_page(
			__( 'Custom Post Type Order', 'basetheme_td' ),
			__( 'Custom Post Type Order', 'basetheme_td' ),
			'manage_options',
			'custom-post-type-order',
			array( $this, 'custom_post_type_order' )
		);
	}

	function custom_post_type_order() {

	}

}
new WP_Theme_Post_Type_Order();
