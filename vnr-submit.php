<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://extensionforge.com
 * @since             1.0.0
 * @package           Vnr_Submit
 *
 * @wordpress-plugin
 * Plugin Name:       VNR Submit
 * Plugin URI:        https://github.com/Extensionforge/vnr-submit
 * Description:       Handling users interest and triggers nss api when user logs in. Store user-newsletter triggered to database.
 * Version:           1.0.0
 * Author:            Steve Kraft & Peter Mertzlin
 * Author URI:        https://extensionforge.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vnr-submit
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
define( 'VNR_SUBMIT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vnr-submit-activator.php
 */
function activate_vnr_submit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vnr-submit-activator.php';
	Vnr_Submit_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vnr-submit-deactivator.php
 */
function deactivate_vnr_submit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vnr-submit-deactivator.php';
	Vnr_Submit_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vnr_submit' );
register_deactivation_hook( __FILE__, 'deactivate_vnr_submit' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vnr-submit.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vnr_submit() {

	$plugin = new Vnr_Submit();
	$plugin->run();

}
run_vnr_submit();
