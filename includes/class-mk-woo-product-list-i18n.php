<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://webmkit.com
 * @since      1.0.0
 *
 * @package    Mk_Woo_Product_List
 * @subpackage Mk_Woo_Product_List/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mk_Woo_Product_List
 * @subpackage Mk_Woo_Product_List/includes
 * @author     webmk <masudrana.bbpi@gmail.com>
 */
class Mk_Woo_Product_List_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mk-woo-product-list',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
