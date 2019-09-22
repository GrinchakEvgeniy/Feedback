<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              plugin.com
 * @since             1.0.0
 * @package           Feedback_form_order
 *
 * @wordpress-plugin
 * Plugin Name:       FeedbackForm
 * Plugin URI:        plugin.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Grinchak Evgeniy
 * Author URI:        plugin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       feedback_form_order
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
define( 'FEEDBACK_FORM_ORDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-feedback_form_order-activator.php
 */
function activate_feedback_form_order() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-feedback_form_order-activator.php';
	Feedback_form_order_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-feedback_form_order-deactivator.php
 */
function deactivate_feedback_form_order() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-feedback_form_order-deactivator.php';
	Feedback_form_order_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_feedback_form_order' );
register_deactivation_hook( __FILE__, 'deactivate_feedback_form_order' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-feedback_form_order.php';

require plugin_dir_path( __FILE__ ) . 'public/class-feedback_form_order-initWidgets-public.php';
		
add_action( 'widgets_init', 'register_foo_widget' );
	
function register_foo_widget() {
		register_widget( 'Foo_Widget' );
	}
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_feedback_form_order() {

	$plugin = new Feedback_form_order();
	$plugin->run();
	

}
add_action('init', 'run_feedback_form_order');

