<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://webmkit.com
 * @since      1.0.0
 *
 * @package    Mk_Woo_Product_List
 * @subpackage Mk_Woo_Product_List/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Mk_Woo_Product_List
 * @subpackage Mk_Woo_Product_List/public
 * @author     webmk <masudrana.bbpi@gmail.com>
 */
class Mk_Woo_Product_List_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mk_Woo_Product_List_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mk_Woo_Product_List_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mk-woo-product-list-public.css', array(), $this->version, 'all' );
		wp_enqueue_style('mk_main' , plugin_dir_url(__FILE__).'css/main.css', array(), $this->version, 'all' );
		wp_enqueue_style('mk_bootstrap-select', plugin_dir_url(__FILE__).'css/bootstrap-select.min.css', array(), $this->version, 'all' );
		wp_enqueue_style('mk_bootstrap', plugin_dir_url(__FILE__).'css/bootstrap.min.css', array(), $this->version, 'all' );
		wp_enqueue_style('mk_owl-carousel' , plugin_dir_url(__FILE__).'css/owl.carousel.css', array(), $this->version, 'all' );
		wp_enqueue_style('mk_owl_transitions', plugin_dir_url(__FILE__).'css/owl.transitions.css', array(), $this->version, 'all' );


	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mk_Woo_Product_List_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mk_Woo_Product_List_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mk-woo-product-list-public.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script('mk_bootstrap-hover-dropdown', plugin_dir_url(__FILE__).'js/bootstrap-hover-dropdown.min.js', array('jquery'), $this->version, true );
		wp_enqueue_script('mk_bootstrap-select', plugin_dir_url(__FILE__).'js/bootstrap-select.min.js', array('jquery'), $this->version, true );
		wp_enqueue_script('mk_bootstrap-slider', plugin_dir_url(__FILE__).'js/bootstrap-slider.min.js', array('jquery'), $this->version, true );
		wp_enqueue_script('mk_bootstrap', plugin_dir_url(__FILE__).'js/bootstrap.min.js', array('jquery'), $this->version, true );
		wp_enqueue_script('mk_owl-carousel', plugin_dir_url(__FILE__).'js/owl.carousel.min.js', array('jquery'), $this->version, true );
		wp_enqueue_script('mk_scripts', plugin_dir_url(__FILE__).'js/scripts.js', array('jquery'), $this->version, true );

	}

	public function mk_woo_product_list_shortcode_callback($attr){
		$atts = shortcode_atts(
			array(
				'title' => 'Recent Product',
				'category' => ''
			),
			$attr,
			'mk-woo-product-list'
		);
		// echo "<h1>MK Woo Product List</h1>";
		// echo "<h3>".$atts['title']."</h3>";
		// echo "<p>".$atts['category']."</p>";
		ob_start();
		require_once(plugin_dir_path(__FILE__).'partials/mk-woo-product-list-public-display.php');
		$template = ob_get_contents();
		ob_clean();
		echo $template;
	}

}
