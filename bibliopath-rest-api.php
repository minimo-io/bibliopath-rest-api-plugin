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
define( 'BIBLIOPATH_REST_API_VERSION', '1.0.1' );

function bpath_custom_avatar_field( $user ) { ?>
	<h3>Custom Avatar</h3>

	<table>
	<tr>
	<th><label for="be_custom_avatar">Custom Avatar URL:</label></th>
	<td>
	<input type="text" name="be_custom_avatar" id="be_custom_avatar" value="<?php echo esc_url_raw( get_the_author_meta( 'be_custom_avatar', $user->ID ) ); ?>" /><br />
	<span>Type in the URL of the image you'd like to use as your avatar. This will override your default Gravatar, or show up if you don't have a Gravatar. <br /><strong>Image should be 70x70 pixels.</strong></span>
	</td>
	</tr>
	</table>
	<?php
}
add_action( 'show_user_profile', 'bpath_custom_avatar_field' );
add_action( 'edit_user_profile', 'bpath_custom_avatar_field' );

?>
