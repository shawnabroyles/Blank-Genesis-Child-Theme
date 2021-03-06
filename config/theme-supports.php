<?php
/**
 * Theme supports.
 *
 * @package Blank Child Theme
 * @author  Patrick Boehner
 * @license GPL-2.0-or-later
 * @link    http://example.com/
 */

return [
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
		'script',
		'style',
	],
	'structural-wraps'								=> [
		'header',
		'nav',
		// 'footer-widgets',
		'footer',
	],
	'genesis-accessibility'           => [
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links'
	],
	'genesis-lazy-load-images'        => '',
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 0,
	'genesis-menus'                   => [
		'primary'   => __( 'Header Menu', 'genesis-sample' ),
		'secondary' => __( 'Footer Menu', 'genesis-sample' ),
	],
];
