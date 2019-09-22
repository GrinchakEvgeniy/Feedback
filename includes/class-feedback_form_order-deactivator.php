<?php

/**
 * Fired during plugin deactivation
 *
 * @link       plugin.com
 * @since      1.0.0
 *
 * @package    Feedback_form_order
 * @subpackage Feedback_form_order/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Feedback_form_order
 * @subpackage Feedback_form_order/includes
 * @author     Grinchak Evgeniy <kukulalatutu@gmail.com>
 */
class Feedback_form_order_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		global $wpdb;

  		$wpdb->query("DROP TABLE IF EXISTS form_feedback");

	}

}
