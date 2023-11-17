<?php
/**
 * Custom related functions
 *
 * @link
 *
 * @package Base Theme Package
 * @since 1.0.0
 */

namespace BaseTheme\Custom;

/**
 * Template Class For Custom
 *
 * Template Class
 *
 * @category Setting_Class
 * @package  Base Theme Package
 */
class WP_Theme_Custom {



	/**
	 * Define class Constructor
	 **/
	public function __construct() {

	}



	/**
	 * Helper function that builds button from ACF link object
	 *
	 * @param object $object is a acf button object.
	 * @param string $classes are the string of classes of acf button.
	 *
	 * @return string
	 */
	public static function button( $object, $classes = '' ) {
		if ( $object['url'] ) {
			$link  = '';
			$link  = "<a href='" . esc_url( $object['url'] ) . "'";
			$link .= " title='" . esc_html( $object['title'] ) . "'";
			if ( '' !== $object['target'] ) {
				$link .= " target='" . $object['target'] . "'";
			}
			if ( '' !== $classes ) {
				$link .= " class='" . $classes . "'";
			}
			$link .= '>' . esc_html( $object['title'] ) . '</a>';
			return $link;
		}
		return null;
	}

	/**
	 * Excerpt Function
	 *
	 * @param number $count is a number of words needed in the excerpt
	 *
	 * Function used to create custom excerpt.
	 */
	public static function excerpt( $count ) {
		global $post;
		if ( has_excerpt() ) {

			$excerpt = get_the_excerpt();
			$excerpt = wp_strip_all_tags( $excerpt );
			$excerpt = substr( $excerpt, 0, $count );
			$excerpt = substr( $excerpt, 0, strripos( $excerpt, ' ' ) );
			$excerpt = $excerpt . ' ...';
			$excerpt = $excerpt;
			return $excerpt;
		}
		return '';
	}


	/**
	 * Excerpt with no read more option
	 *
	 * Function used to create custom excerpt.
	 *
	 * @param number $count is a number of words needed in the excerpt.
	 *
	 * @return string
	 */
	public static function excerpt_nomore( $count ) {
		global $post;
		if ( has_excerpt() ) {
			$excerpt = get_the_excerpt();
			$excerpt = wp_strip_all_tags( $excerpt );
			$excerpt = substr( $excerpt, 0, $count );
			$excerpt = substr( $excerpt, 0, strripos( $excerpt, ' ' ) );
			$excerpt = $excerpt;
			return $excerpt;
		}
		return '';
	}

	/**
	 * Youtube id handler.
	 *
	 * Possible Combination are following.
	 *
	 * https://youtu.be/osCyC2whgW8
	 * https://www.youtube.com/watch?v=osCyC2whgW8
	 * https://www.youtube.com/embed/osCyC2whgW8
	 *
	 * @param string $url facebook url.
	 *
	 * @return string
	 */
	public static function youtube_id( $url ) {
		if ( str_contains( $url, 'youtu.be' ) ) {
			$youtube_id = explode( '/', $url )[ count( explode( '/', $url ) ) - 1 ];
		} elseif ( str_contains( $url, 'youtube.com' ) && str_contains( $url, 'watch' ) ) {
			$youtube_id = explode( '=', $url )[1];
		} elseif ( str_contains( $url, 'youtube.com' ) && str_contains( $url, 'embed' ) ) {
			$youtube_id = explode( '/', $url )[ count( explode( '/', $url ) ) - 1 ];
		} else {
			$youtube_id = 0;
		}
		return $youtube_id;
	}

	/**
	 * Youtube url handler.
	 *
	 * Possible Combination are following.
	 *
	 * https://youtu.be/osCyC2whgW8
	 * https://www.youtube.com/watch?v=osCyC2whgW8
	 * https://www.youtube.com/embed/osCyC2whgW8
	 *
	 * @param string $url facebook url.
	 *
	 * @return string
	 */
	public static function youtube_url( $url ) {
		if ( 0 === self::youtube_id( $url ) ) {
			$youtube_url = 'Wrong Url';
		} else {
			$youtube_url = 'https://www.youtube.com/watch?v=' . self::youtube_id( $url );
		}
		return $youtube_url;
	}

	/**
	 * Output advance form acf field data.
	 *
	 * @param array $form facebook url.
	 *
	 * @return string
	 */
	public static function advance_form( $form ) {
		$bst_form_provider = $form['form_provider'] ?? null;
		if ( 'gform' === $form['form_provider'] ) {
			$bst_gform = $form['gform'] ?? null;
			if ( $bst_gform ) {
				echo do_shortcode( '[gravityform id="' . $bst_gform . '" title=false description=false ajax=true]' );
			}
		} else {
			$bst_hubspot = $form['hubspot'] ?? null;
			if ( $bst_hubspot ) {
				echo html_entity_decode( $bst_hubspot );
			}
		}
		return '';
	}

	/**
	 * Pagination Function
	 *
	 * The pagination function to display pagination on any archive page
	 *
	 * @param number $pages are total number of pages.
	 * @param number $range is a range of pagination.
	 *
	 * @return void
	 */
	public static function pagination( $pages = '', $range = 4 ) {
		$showitems = ( $range * 2 ) + 1;

		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

		if ( '' === $pages ) {
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if ( ! $pages ) {
				$pages = 1;
			}
		}

		if ( 1 !== $pages ) {
			echo '<div class="pagination"><span>Page ' . esc_html( $paged ) . ' of ' . esc_html( $pages ) . '</span>';
			if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
				echo "<a href='" . esc_url( get_pagenum_link( 1 ) ) . "'>&laquo; First</a>";
			}
			if ( $paged > 1 && $showitems < $pages ) {
				echo "<a href='" . esc_url( get_pagenum_link( $paged - 1 ) ) . "'>&lsaquo; Previous</a>";
			}

			for ( $i = 1; $i <= $pages; $i++ ) {
				if ( 1 !== $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
					echo ( $paged === $i ) ? '<span class="current">' . esc_html( $i ) . '</span>' : "<a href='" . esc_url( get_pagenum_link( $i ) ) . "' class=\"inactive\">" . esc_html( $i ) . '</a>';
				}
			}

			if ( $paged < $pages && $showitems < $pages ) {
				echo '<a href="' . esc_url( get_pagenum_link( $paged + 1 ) ) . '">Next &rsaquo;</a>';
			}
			if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
				echo "<a href='" . esc_url( get_pagenum_link( $pages ) ) . "'>Last &raquo;</a>";
			}
			echo "<div class='clear'></div></div>\n";
		}
	}

	/**
	 * Return escaped string
	 *
	 * @param string $string string to decode.
	 *
	 * @return string
	 */
	public static function html_entity_remove( $string ) {
		return sanitize_text_field( html_entity_decode( $string ) );
	}

	/**
	 * Fallback function for menus
	 *
	 * @return void
	 */
	public static function nav_fallback() {

		if ( is_user_logged_in() ) {
			?>
			<ul>
				<li> <?php echo esc_html__( 'Go to admin area to create navigation menu', 'basetheme_td' ); ?></li>
			</ul>
			<?php
		}
	}




	/**
	 * A Function that check if post exist then print class;
	 *
	 * @param string $class post class.
	 *
	 * @return void
	 */
	public static function have_post_class( $class ) {
		if ( have_posts() ) {
			echo esc_html( $class );
		}
	}

	/**
	 * A Function that check if site is live of not
	 *
	 * @return boolean
	 */
	public static function if_live() {

		if ( 'local' === wp_get_environment_type() ) {
			return false;
		} elseif ( 'development' === wp_get_environment_type() ) {
			return false;
		} elseif ( 'staging' === wp_get_environment_type() ) {
			return false;
		} elseif ( 'production' === wp_get_environment_type() ) {
			return true;
		} else {
			return false;
		}
	}



	/**
	 * Defaults For Theme.
	 *
	 * @param string $item_id ID of the item.
	 * @return array Array of $post_id, $fields, $option_fields, $queried_object.
	 */
	public static function defaults( $item_id = null ) {
		if ( $item_id ) {
			$post_id = $item_id;
		} else {
			$post_id = get_the_ID();
			if ( is_home() ) {
				$post_id = get_option( 'page_for_posts' );
			}

			if ( is_404() || is_archive() || is_category() || is_search() ) {
				$post_id = get_option( 'page_on_front' );
			}
		}
		$queried_object = get_queried_object();
		$option_fields  = self::get_fields_escaped( 'option' );
		$fields         = self::get_fields_escaped( $post_id );

		return array( $post_id, $fields, $option_fields, $queried_object );
	}



	/**
	 * Helper function to get escaped field from ACF
	 * and also normalize values.
	 *
	 * @param string $field_key is the acf key name.
	 * @param string $escape_method is the method of escaping html.
	 *
	 * @return mixed
	 */
	public static function get_fields_escaped( $field_key, $escape_method = 'esc_html' ) {
		if ( function_exists( 'get_fields' ) ) {
			$field = get_fields( $field_key );
		}
		/* Check for null and falsy values and always return space */
		if ( false === $field || null === $field ) {
			$field = '';
		}

		/* Handle arrays */
		if ( is_array( $field ) || is_object( $field ) ) {
			$field_escaped = array();
			foreach ( $field as $key => $value ) {
				if ( is_array( $value ) || is_object( $value ) ) {
					$field_escaped[ $key ] = self::get_sub_field_escaped( $value, $escape_method );
				} else {
					$field_escaped[ $key ] = self::if_exist( ( null === $escape_method ) ? $value : self::keep_types( $value, $escape_method( $value ) ) );
					// $field_escaped[$key] =   esc_html($value);
				}
			}
			return $field_escaped;
		} else {
			return self::if_exist( ( null === $escape_method ) ? $field : self::keep_types( $field, $escape_method( $field ) ) );
		}
	}

	/**
	 * Helper function to get escaped field for a sub-field from ACF inside a parent
	 * and also normalize values.
	 *
	 * @param string $parent is the acf key name.
	 * @param string $escape_method is the method of escaping html.
	 *
	 * @return mixed
	 */
	private static function get_sub_field_escaped( $parent = null, $escape_method = 'esc_html' ) {
		$field = $parent;
		/* Check for null and falsy values and always return space */
		if ( false === $field || null === $field ) {
			$field = '';
		}

		/* Handle arrays */
		if ( is_array( $field ) || is_object( $value ) ) {
			$field_escaped = array();
			foreach ( $field as $key => $value ) {
				if ( is_array( $value ) || is_object( $value ) ) {
					if ( is_object( $value ) ) {
						$obj = new \stdClass();

						foreach ( $value as $obj_k => $obj_v ) {

							$obj->$obj_k = self::if_exist( ( null === $escape_method ) ? $obj_v : self::keep_types( $obj_v, $escape_method( $obj_v ) ) );
						}
						$field_escaped[ $key ] = $obj;
					} else {
						$field_escaped[ $key ] = self::get_sub_field_escaped( $value, $escape_method );
					}
				} else {

					$field_escaped[ $key ] = self::if_exist( ( null === $escape_method ) ? $value : self::keep_types( $value, $escape_method( $value ) ) );
				}
			}
			return $field_escaped;
		} else {
			return self::if_exist( ( null === $escape_method ) ? $field : self::keep_types( $field, $escape_method( $field ) ) );
		}

	}


	/**
	 * A Function that return text color based on bg color
	 *
	 * @param string $bg_color  background color.
	 *
	 * @return string
	 */
	public static function get_contrasting_text_color( $bg_color ) {
		// Remove the leading '#' if present.
		if ( strpos( $bg_color, '#' ) === 0 ) {
			$bg_color = substr( $bg_color, 1 );
		}

		// Convert the hexadecimal color to RGB values.
		$r = hexdec( substr( $bg_color, 0, 2 ) );
		$g = hexdec( substr( $bg_color, 2, 2 ) );
		$b = hexdec( substr( $bg_color, 4, 2 ) );

		// Calculate the relative luminance of the color.
		$luminance = ( 0.299 * $r + 0.587 * $g + 0.114 * $b ) / 255;

		// Choose the text color based on the luminance threshold (adjust the threshold as needed).
		$text_color = $luminance > 0.5 ? '#000000' : '#ffffff';

		return $text_color;
	}

	/**
	 * Register custom Gutenberg blocks category
	 *
	 *  @param array $block is a array of block styles.
	 *
	 *  @return string
	 */
	public static function convert_to_css( $block ) {
		$typography = ( isset( $block['style']['typography'] ) ) ? $block['style']['typography'] : null;
		$font_sizes = array(
			'small'   => '16px',
			'medium'  => '18px',
			'large'   => '20px',
			'x-large' => '26px',
		);
		$font_size  = ( isset( $block['fontSize'] ) ) ? $block['fontSize'] : null;
		$css        = '';
		if ( $typography ) {

			foreach ( $typography as $property => $value ) {
				$property = preg_replace( '/(?<!^)[A-Z]/', '-$0', $property );
				$css     .= $property . ': ' . $value . '; ';
			}
		}
		if ( $font_size ) {

			$css .= 'font-size:' . $font_sizes[ $font_size ];
		}
		return $css;
	}

	/**
	 * Check if value exist
	 *
	 * @param mixed $value value to be checked.
	 *
	 * @return string
	 */
	public static function if_exist( $value ) {
		return ( isset( $value ) && '' !== $value ) ? $value : null;
	}

	/**
	 * Retain the type value
	 *
	 * @param mixed $item value to be checked.
	 * @param mixed $value actual value that will be returned.
	 *
	 * @return mixed
	 */
	public static function keep_types( $item, $value ) {
		$type = gettype( $item );
		settype( $value, $type );
		return $value;
	}
}

class_alias( 'BaseTheme\Custom\WP_Theme_Custom', 'BaseTheme' );
