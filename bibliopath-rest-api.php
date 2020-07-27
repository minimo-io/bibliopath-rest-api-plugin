<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Bibliopath REST API
 * Plugin URI:        https://minimo.io/en/2020/bibliopath/
 * Description:       A REST API for Bibliopath.net
 * Version:           1.0.0
 * Author:            Minimo
 * Author URI:        http://minimo.io/en/nicolas
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bibliopath-rest-api
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BIBLIOPATH_REST_API_VERSION', '1.0.0' );
