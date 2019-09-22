<?php

/**
 * Fired during plugin activation
 *
 * @link       plugin.com
 * @since      1.0.0
 *
 * @package    Feedback_form_order
 * @subpackage Feedback_form_order/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Feedback_form_order
 * @subpackage Feedback_form_order/includes
 * @author     Grinchak Evgeniy <kukulalatutu@gmail.com>
 */
class Feedback_form_order_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        $sql = "CREATE TABLE " . 'form_feedback' . " (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  name VARCHAR(11) DEFAULT '0' NOT NULL,
	  number_phone tinytext NOT NULL,
	  text text NOT NULL,
	  UNIQUE KEY id (id)
	);";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      dbDelta($sql);
	}

}

