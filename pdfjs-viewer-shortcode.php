<?php
/**
 * Plugin Name:     PDF.js viewer shortcode
 * Plugin URI:      https://github.com/rexrana/pdfjs-viewer-shortcode
 * Description:     Embed PDFs with the gorgeous PDF.js viewer - based on Ben Lawson's version
 * Author:          Rex Rana Design and Development Ltd.
 * Author URI:      https://rexrana.ca/
 * Text Domain:     pdfjs-viewer-shortcode
 * Domain Path:     /languages
 * Version:         1.3
 * License:         GPLv2
 *
 * @package         Pdfjs_Viewer_Shortcode
 */

define( 'PDFJS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PDFJS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once( PDFJS_PLUGIN_DIR . 'inc/settings.php' );
require_once( PDFJS_PLUGIN_DIR . 'inc/shortcode.php' );
