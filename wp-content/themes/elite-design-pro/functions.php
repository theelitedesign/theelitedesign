<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * Please note that missing files will produce a fatal error.
 *
 * @package ELITE Design
 * @since 1.0.0
 */

$file_includes = array(
	'includes/setup.php',           	// Basic theme setup
	'includes/scripts.php',         	// Enqueue theme styles and scripts
	'includes/project.php',         	// Custom functions for this specific project
	'includes/acf.php',             	// Advanced custom fields functions
	'includes/blocks.php',          	// Custom Gutenberg blocks
	'includes/cpt.php',             	// Custom post types setup
	'includes/custom.php',          	// Custom functions
	'includes/ajax.php',           		// Ajax related functions
	'includes/editor.php',          	// Editor styles
	'includes/nav-walker.php',      	// Header nav Walker
	'includes/api.php',      			// Api
	'includes/plugin-activation.php',   // Plugin Acticator Library
);

/**
 * Checks if any file have error while including it.
 */
foreach ( $file_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'elitedesign_td' ), $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
unset( $file, $filepath );


class WP_Theme_GForm_Settings {

	/**
	 * Define class Constructor
	 **/
	public function __construct() {
		add_filter( 'gform_init_scripts_footer', '__return_true' );
		add_filter( 'gform_tabindex', '__return_false' );
		add_filter( 'gform_disable_css', '__return_true' );
		add_filter( 'gform_confirmation_anchor', '__return_false' );
		add_filter( 'gform_field_validation', array( $this, 'gform_field_validation_callback' ), 10, 4 );
	}


	/**
	 * Gravity form messages override
	 *
	 * @param array  $result the return message value.
	 * @param mixed  $value the field value.
	 * @param array  $form all form settings.
	 * @param object $field all field settings.
	 *
	 * @return $results.
	 */
	public function gform_field_validation_callback( $result, $value, $form, $field ) {

		$error_messages = array(
			'text'          => 'Please enter text in this field. It cannot be blank.',
			'number'        => 'This field requires a numeric value.',
			'textarea'      => 'Please enter text in this field. It cannot be blank.',
			'select'        => 'Please select an option from the dropdown menu. This field cannot be left blank',
			'checkbox'      => 'No checkbox selected. Please choose at least one option.',
			'radio'         => 'Error: This field is required. Please select one option from the available choices.',
			// 'radio'    => 'Error: Please select one option. This field cannot be left empty.',
			'phone'         => 'Error: Please enter your phone number. This field cannot be left empty.',
			// 'phone'    => 'Error: invalid format. Please enter your phone number in the format (XXX) XXX-XXXX.',
			'email'         => 'Error: Please enter your email address. This field cannot be left empty',
			// 'email'    => 'Error: Invalid email format. Please enter a valid email address (e.g., yourname@example.com).',
			'list'          => 'This field cannot be left empty.',
			'website'       => 'Error: Please enter the website URL. This field cannot be left empty.',
			// 'website'  => 'Error: The website URL is required. Please provide this information.',
			'multiselect'   => 'Please select at least one option. This field cannot be left empty.',
			'date'          => 'Please enter a date. This field cannot be left empty.',
			'time'          => 'Please enter a time. This field cannot be left empty.',
			'fileupload'    => 'Please enter a file. This field cannot be left empty.',
			'post_title'    => 'Please enter a title for your post. This field cannot be left empty.',
			'post_content'  => 'Please enter content for your post. This field cannot be left empty.',
			'post_excerpt'  => 'Post excerpt is required.',
			'post_category' => 'Please select an option from the dropdown menu. This field cannot be left blank',
			'post_tags'     => 'Please enter tags for your post. This field cannot be left empty.',
			'post_image'    => 'Please select a file. This field cannot be left empty.',
			'product'       => 'Error: Negative values are not allowed. Please enter a positive price.',
			// 'product'       => 'Error: Please enter a price. This field cannot be left empty.',
			'quantity'      => 'Please enter a quantity. This field cannot be left empty.',

		);
		foreach ( $error_messages as $field_type => $error_message ) {
			if ( $field_type === $field->type ) {
				if ( $field->isRequired ) {
					$result['message'] = $error_message;
				}
			}
		}
		return $result;
	}

}
new WP_Theme_GForm_Settings();
