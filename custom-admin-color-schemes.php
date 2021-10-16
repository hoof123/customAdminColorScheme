<?php
/*
 * Plugin Name: custom admin color scheme
 * Description: JP Creative Media custom admin color scheme
 * Version: 1.2
 * Author: Jake Price | JP Creative Media
 * Author URI: https://jpcreativemedia.ca/
 */

class Custom_Color_Schemes {

	/**
	 * List of colors registered in this plugin.
	 *
	 * @since 1.0
	 * @access private
	 * @var array $colors List of colors registered in this plugin.
	 *                    Needed for registering colors-fresh dependency.
	 */
	private $colors = array(
		'jpcreativemedia'
	);

	function __construct() {
		add_action( 'admin_init' , array( $this, 'add_colors' ) );
	}

	// register color schemes
	function add_colors() {
		$suffix = is_rtl() ? '-rtl' : '';

		wp_admin_css_color(
			'jpcreativemedia', __( 'JP Creative Media', 'admin_schemes' ),
			plugins_url( "jpcreativemedia/colors$suffix.css", __FILE__ ),
			array( '#1F2C39', '#2c3e50', '#4B82BC', '#89A6D1' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);

	}

}

global $acs_colors;
$acs_colors = new Custom_Color_Schemes;