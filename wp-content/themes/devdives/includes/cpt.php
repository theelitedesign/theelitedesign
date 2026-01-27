<?php
/**
 * Functions for custom post types
 *
 * @link https://developer.wordpress.org/themes/basics/post-types/
 *
 * @package DevDives
 * @since 1.0.0
 */

use DevDives\CPT\WP_Theme_CPT;

new WP_Theme_CPT(
	array(
		'labels'    => array(
			'singular_capital'   => 'Portfolio',
			'plural_capital'     => 'Portfolios',
			'singular_lowercase' => 'portfolio',
			'plural_lowercase'   => 'portfolios',
			// CPT Slug & Name.
			'register_key'       => 'portfolio',
			'slug'               => 'portfolio',
		),
		'supports'  => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
		'menu_icon' => 'dashicons-groups',
		'public'    => true,
	)
);
