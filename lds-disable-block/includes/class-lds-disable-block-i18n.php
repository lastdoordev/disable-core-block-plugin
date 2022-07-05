<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://lastdoorsolutions.com/
 * @since      1.0.0
 *
 * @package    Lds_Disable_Block
 * @subpackage Lds_Disable_Block/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Lds_Disable_Block
 * @subpackage Lds_Disable_Block/includes
 * @author     Last Door Solutions <hello@lastdoorsolutions.com>
 */
class Lds_Disable_Block_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'lds-disable-block',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
