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

if ( ! class_exists( 'ACF_Location' ) ) {
	return;
}

use \ACF_Location;
/**
 * Template Class For Multi Site ACF setting
 *
 * Template Class
 *
 * @category Multisite_Class
 * @package  Base Theme Package
 */
class WP_Theme_Acf_Multisite_Support extends \ACF_Location {
	/**
	 * Initialize the basic acf values
	 *
	 * @return void
	 */
	public function initialize() {
		$this->name     = 'multi-sites-id';
		$this->label    = __( 'Sites', '' );
		$this->category = 'user';
	}

	/**
	 * Starts the list before the elements are added.
	 *
	 * @param array $rule is a array with acf rule values.
	 *
	 * @return array
	 */
	public function get_values( $rule ) {

		$choices = array();
		foreach ( get_sites() as $site ) {
			$current_blog_details      = get_blog_details( array( 'blog_id' => $site->blog_id ) );
			$choices[ $site->blog_id ] = $current_blog_details->blogname;
		}

		return $choices;
	}

	/**
	 * Starts the list before the elements are added.
	 *
	 * @param array $rule is a array with acf rule values.
	 * @param array $screen is a location where the field will show.
	 * @param array $field_group is the group of the field.
	 *
	 * @return array
	 */
	public function match( $rule, $screen, $field_group ) {

		$result = ( get_current_blog_id() === (int) $rule['value'] );

		if ( '!=' === $rule['operator'] ) {
			return ! $result;
		}

		return $result;

	}
}
