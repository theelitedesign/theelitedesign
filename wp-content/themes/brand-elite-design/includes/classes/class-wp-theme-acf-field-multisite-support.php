<?php
/**
 * Template Class For Walker ACF setting
 *
 * Template Class
 *
 * @category Multisite_Class
 * @package  Base Theme Package
 */

namespace BaseTheme\Walker\Settings\ACF;

/**
 * Template Class For Multi Site ACF setting
 *
 * Template Class
 *
 * @category Multisite_Class
 * @package  Base Theme Package
 */
class WP_Theme_Acf_Field_Multisite_Support {
	/**
	 * Define class Constructor
	 **/
	public function __construct() {

		add_action( 'acf/render_field_settings', 'render_field_settings' );
		add_filter( 'acf/prepare_field', 'prepare_field' );
	}

	/**
	 * For Rendering Acf Settings
	 *
	 * @param object $field is acf field object.
	 **/
	public function render_field_settings( $field ) {
		$choices = array();
		foreach ( get_sites() as $site ) {
			$current_blog_details      = get_blog_details( array( 'blog_id' => $site->blog_id ) );
			$choices[ $site->blog_id ] = $current_blog_details->blogname;
		}
		acf_render_field_setting(
			$field,
			array(
				'label'        => __( 'Sites', 'basetheme_td' ),
				'instructions' => '',
				'name'         => 'site_id',
				'type'         => 'select',
				'choices'      => $choices,
				'ui'           => 0,

			),
			true
		); // If adding a setting globally, you MUST pass true as the third parameter!
	}

	/**
	 * For Rendering Acf prepare field
	 *
	 * @param object $field is acf field object.
	 **/
	public function prepare_field( $field ) {
		// Bail early if no 'admin_only' setting or if set to false.
		if ( empty( $field['site_id'] ) ) {
			return $field;
		}

		// Prevent field from displaying if current user is not an admin.
		if ( get_current_blog_id() !== (int) $field['site_id'] ) {
			return false;
		}

		// Return the original field otherwise.
		return $field;
	}
}
