<?php

/**
 * Modify Gallery Attributes
 *
 * @package Blank Child Theme
 * @author  Patrick Boehner
 * @license GPL-2.0+
 * @link    http://example.com/
 */


// If this file is called directly, abort.
//**********************
if( !defined( 'ABSPATH' ) ) exit;


// Change default link style for images
add_action( 'admin_init', 'pb_default_attachment_display_settings', 10 );
function pb_default_attachment_display_settings() {

	$image_link_setting  = get_option( 'image_default_link_type' );
	$image_align_setting = get_option( 'image_default_align' );
	$image_size_setting  = get_option( 'image_default_size' );

	// Avoid the option being set every time, and instead only do it if not allready set.
	if ( $image_link_setting && $image_align_setting && $image_size_setting  !== 'none' ) {
		update_option( 'image_default_link_type', 'none' );
		// Set link type (file, post, custom, none)
		update_option( 'image_default_align', 'center' );
		// Set image alignment (left, right, center, none)
		update_option( 'image_default_size', 'large' );
		// Set image size (thumbnail, medium, large, full)
	}

}


// Register the three useful image sizes for use in Add Media modal
// add_filter( 'image_size_names_choose', 'pa_add_medium_large_size_selection' );
// function pa_add_medium_large_size_selection( $sizes ) {
//     return array_merge( $sizes, array(
//         'medium_large' => __( 'Medium Large' ),
//     ) );
// }


// Change Default Gallery Image Size
// add_filter( 'shortcode_atts_gallery', 'pb_change_gallery_atts', 10, 3 );
// function pb_change_gallery_atts( $output, $pairs, $atts ) {
//
// 	$output['size'] = 'medium_thumbnail';
// 	return $output;
//
// }
