<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://extensionforge.com
 * @since      1.0.0
 *
 * @package    Vnr_Submit
 * @subpackage Vnr_Submit/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vnr_Submit
 * @subpackage Vnr_Submit/includes
 * @author     Steve Kraft & Peter Mertzlin <support@extensionforge.com>
 */
class Vnr_Submit_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vnr-submit',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
