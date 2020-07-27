<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://minimo.io/en/nicolas
 * @since      1.0.0
 *
 * @package    Bibliopath_Rest_Api
 * @subpackage Bibliopath_Rest_Api/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bibliopath_Rest_Api
 * @subpackage Bibliopath_Rest_Api/includes
 * @author     Minimo <nicolas@minimo.io>
 */
class Bibliopath_Rest_Api_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bibliopath-rest-api',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
