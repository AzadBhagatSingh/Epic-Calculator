<?php
	/*
	*	Plugin Name: Epic-Calculator
	*	Plugin URI: https://www.epicbusinesses.com/
	*	Description: This plugin calculate monthly credit card charges.
	*	Author: Azad Bhagat Singh
	*	Author URI: https://www.epicbusinesses.com/
	*	Version: 1.0.0
	*/

	if(!defined("ABSPATH")){
		exit;
	}

	if(!defined("EB_CALC_DIR_PATH")){
		define("EB_CALC_DIR_PATH",plugin_dir_path( __FILE__ ) );
	}

	if (!defined("EB_CALC_URL")) {
		define("EB_CALC_URL", plugins_url() . '/epic-calculator' );
	}

	function eb_calculator_include_assets()	{
		wp_enqueue_style( 'epic-style.css', EB_CALC_URL . '/assets/css/epic-style.css', $deps = array(), $ver = false, $media = 'all' );

		// wp_deregister_script('jquery');
  //  wp_register_script('jquery', EB_CALC_URL . '/assets/js/jquery.min.js', false, null);
  //  wp_enqueue_script('jquery');

		wp_enqueue_script("jquery");
		// wp_enqueue_script( "jquery.min.js", EB_CALC_URL . '/assets/js/jquery.min.js', $deps = array(), $ver = false, $in_footer = true );
		wp_enqueue_script( "jquery.validate.min.js", EB_CALC_URL . '/assets/js/jquery.validate.min.js', $deps = array(), $ver = false, $in_footer = true );
		wp_enqueue_script( "epic_calculator_script", EB_CALC_URL . '/assets/js/epic_calculator_script.js', $deps = array(), $ver = false, $in_footer = true );
		wp_enqueue_script( "epic_calculator_retirement_script", EB_CALC_URL . '/assets/js/epic_calculator_retirement_script.js', $deps = array(), $ver = false, $in_footer = true );
	}
	add_action("init","eb_calculator_include_assets");

	/*Plugin menu*/
	function eb_calculator_menu(){
		add_menu_page( "Epic-Calculator", 'Epic-Calculator', 'manage_options', 'epic-calc', "eb_calculator_menu_view", "dashicons-building" );
	}
	add_action( "admin_menu","eb_calculator_menu" );

	function eb_calculator_menu_view(){
		include_once( EB_CALC_DIR_PATH . '/views/epic_calculator_install_view.php' );
	}

	function eb_cc_calculator_view(){
		// begin output buffering
    	ob_start();
		include_once( EB_CALC_DIR_PATH . '/views/epic_calculator_view.php' );
		 // end output buffering, grab the buffer contents, and empty the buffer
    	return ob_get_clean();
	}
	add_shortcode("epic_cc_calculator","eb_cc_calculator_view");

	function eb_compound_int_calculator_view(){
		ob_start();
		include_once( EB_CALC_DIR_PATH . '/views/epic_compound_calculator_view.php' );
		return ob_get_clean();
	}
	add_shortcode( "epic_comp_int_calculator", "eb_compound_int_calculator_view" );

	//new retirement calculator as on 31-07-2019
	function eb_new_retirement_calculator_view(){
		ob_start();
		include_once( EB_CALC_DIR_PATH . '/views/retirement_future_calculator_view.php' );
		return ob_get_clean();
	}
	add_shortcode( "epic_retirement_calculator", "eb_new_retirement_calculator_view" );
?>