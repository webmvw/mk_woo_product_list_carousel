<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://webmkit.com
 * @since             1.0.0
 * @package           Mk_Woo_Product_List
 *
 * @wordpress-plugin
 * Plugin Name:       MK Woo Product List
 * Plugin URI:        https://webmkit.com/mk-woo-product-list
 * Description:       Category-wise products can be shown with this plugin which has a carousel facility.
 * Version:           1.0.0
 * Author:            webmk
 * Author URI:        https://webmkit.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mk-woo-product-list
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
define( 'MK_WOO_PRODUCT_LIST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mk-woo-product-list-activator.php
 */
function activate_mk_woo_product_list() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mk-woo-product-list-activator.php';
	Mk_Woo_Product_List_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mk-woo-product-list-deactivator.php
 */
function deactivate_mk_woo_product_list() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mk-woo-product-list-deactivator.php';
	Mk_Woo_Product_List_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mk_woo_product_list' );
register_deactivation_hook( __FILE__, 'deactivate_mk_woo_product_list' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mk-woo-product-list.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mk_woo_product_list() {

	$plugin = new Mk_Woo_Product_List();
	$plugin->run();

}
run_mk_woo_product_list();
