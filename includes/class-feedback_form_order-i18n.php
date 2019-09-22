<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       plugin.com
 * @since      1.0.0
 *
 * @package    Feedback_form_order
 * @subpackage Feedback_form_order/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Feedback_form_order
 * @subpackage Feedback_form_order/includes
 * @author     Grinchak Evgeniy <kukulalatutu@gmail.com>
 */
class Feedback_form_order_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'feedback_form_order',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
