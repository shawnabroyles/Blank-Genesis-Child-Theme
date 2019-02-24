<?php

/**
 * Exclude Autoptimize from running on Woo pages
 *
 * @package Blank Child Theme
 * @author  Patrick Boehner
 * @license GPL-2.0+
 * @link    http://example.com/
 */


// If this file is called directly, abort.
//**********************
if( !defined( 'ABSPATH' ) ) exit;


//* Stop Autoptimize on Services Pages
//*********************************


/**
 * JS optimization exclude strings, as configured in admin page.
 *
 * @param $exclude: comma-seperated list of exclude strings
 * @return: comma-seperated list of exclude strings
 */
add_filter('autoptimize_filter_js_exclude','pb_ao_override_js_exclude', 30, 1 );
function pb_ao_override_js_exclude( $exclude ) {

	// Exclude theme scripts that are allready defered or asynced
	return $exclude.", global.min.js, social-share.min.js, top-banner.min.js, lazyload.min.js";

}


/**
 * CSS optimization exclude strings, as configured in admin page.
 *
 * @param $exclude: comma-seperated list of exclude strings
 * @return: comma-seperated list of exclude strings
 */
add_filter('autoptimize_filter_css_exclude','my_ao_override_cssexclude', 30, 1);
function my_ao_override_cssexclude( $exclude ) {

	// Exclude theme css that has specific function
	return $exclude.", header.min.css, content-area.min.css, comments.min.css, site-footer.min.css, print.min.css, login-style.min.css, block-front-end.min.css, global-style.min.css";

}
