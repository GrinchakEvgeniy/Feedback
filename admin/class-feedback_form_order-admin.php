<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       plugin.com
 * @since      1.0.0
 *
 * @package    Feedback_form_order
 * @subpackage Feedback_form_order/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Feedback_form_order
 * @subpackage Feedback_form_order/admin
 * @author     Grinchak Evgeniy <kukulalatutu@gmail.com>
 */
class Feedback_form_order_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;
	public $database_form;
	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action("admin_menu", array($this, "register_my_custom_submenu_page"));

	}


function register_my_custom_submenu_page() {
	add_submenu_page( 'plugins.php', 'Дополнительная страница инструментов', 'FeedbackForm', 'manage_options', 'my-custom-submenu-page', array($this, 'my_custom_submenu_page_callback') ); 
}

function my_custom_submenu_page_callback() {
	// контент страницы
	$this->database_form = new DatabaseForm();
	$data_feedback = $this->database_form->getOrders();

	require plugin_dir_path(dirname(__FILE__)).'admin/partials/feedback_form_order-admin-display.php';

}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Feedback_form_order_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Feedback_form_order_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/feedback_form_order-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Feedback_form_order_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Feedback_form_order_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/feedback_form_order-admin.js', array( 'jquery' ), $this->version, false );

	}

}
