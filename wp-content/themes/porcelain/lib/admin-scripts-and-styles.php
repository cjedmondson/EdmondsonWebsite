<?php
/**
 * This file contains the main initialization code for the admin:
 * -enqueuing CSS and JS files
 * -inserting the JavaScript init code into the head
 *
 * @author Pexeto
 */

if ( !defined( 'PEXETO_CSS_URL' ) )
	define( 'PEXETO_CSS_URL', PEXETO_LIB_URL.'css/' );
if ( !defined( 'PEXETO_SCRIPT_URL' ) )
	define( 'PEXETO_SCRIPT_URL', PEXETO_LIB_URL.'js/' );
if ( !defined( 'PEXETO_UTILS_URL' ) )
	define( 'PEXETO_UTILS_URL', PEXETO_LIB_URL.'utils/' );


/**
 * ADD THE ACTIONS
 */
add_action( 'admin_enqueue_scripts', 'pexeto_register_admin_scripts_and_styles' );
add_action( 'admin_print_scripts', 'pexeto_print_admin_scripts' );

if ( !function_exists( 'pexeto_register_admin_scripts_and_styles' ) ) {
	function pexeto_register_admin_scripts_and_styles() {

		//register the scripts
		wp_register_script( 'pexeto-colorpicker', PEXETO_SCRIPT_URL.'colorpicker.js', array( 'jquery' ) );
		wp_register_script( 'pexeto-jquery-form', PEXETO_SCRIPT_URL.'jquery-form.js', array( 'jquery' ) );
		wp_register_script( 'pexeto-widgets', PEXETO_SCRIPT_URL.'widgets.js', array(
				'jquery',
				'jquery-ui-core',
				'jquery-ui-widget',
				'jquery-ui-sortable',
				'jquery-ui-dialog',
				'pexeto-jquery-form',
				'pexeto-colorpicker' ) );
		wp_register_script( 'pexeto-page-options', PEXETO_SCRIPT_URL.'page-options.js', array(
				'jquery',
				'pexeto-widgets',
				'underscore' ) );
		wp_register_script( 'pexeto-jquery-co', PEXETO_SCRIPT_URL.'jquery-co.js', array( 'jquery' ) );
		wp_register_script( 'pexeto-options', PEXETO_SCRIPT_URL.'options.js', array(
				'jquery',
				'pexeto-widgets',
				'underscore' ) );
		wp_register_script( 'pexeto-custom-page', PEXETO_SCRIPT_URL.'custom-page.js', array( 'pexeto-widgets' ) );
		wp_register_script( 'pexeto-update', PEXETO_SCRIPT_URL.'update-notifier.js' );
		wp_register_script( 'pexeto-custom-order', PEXETO_SCRIPT_URL.'custom-order.js', array(
				'jquery',
				'jquery-ui-core',
				'jquery-ui-widget',
				'jquery-ui-sortable',
				'underscore' ) );

		//register the styles
		wp_register_style( 'pexeto-colorpicker-style', PEXETO_CSS_URL.'colorpicker.css' );
		wp_register_style( 'pexeto-page-style', PEXETO_CSS_URL.'page-style.css' );
		wp_register_style( 'pexeto-widgets-style', PEXETO_CSS_URL.'widgets.css' );
		wp_register_style( 'pexeto-options-style', PEXETO_CSS_URL.'options.css' );
		wp_register_style( 'pexeto-custom-page-style', PEXETO_CSS_URL.'custom-page.css' );
		wp_register_style( 'pexeto-update-style', PEXETO_CSS_URL.'update-notifier.css' );
		wp_register_style( 'pexeto-custom-order-style', PEXETO_CSS_URL.'custom-order.css' );

		pexeto_enqueue_admin_scripts_and_styles();

	}
}

if ( !function_exists( 'pexeto_enqueue_admin_scripts_and_styles' ) ) {
	function pexeto_enqueue_admin_scripts_and_styles() {
		global $current_screen, $pexeto;
		$scripts = array();
		$styles = array();

		if ( $current_screen->base=='post' ) {
			//it is a single post/page edit section
			$scripts = array(
				'jquery',
				'jquery-ui-core',
				'jquery-ui-sortable',
				'jquery-ui-dialog',
				'jquery-ui-widget',
				'underscore',
				'pexeto-jquery-form',
				'pexeto-colorpicker',
				'pexeto-widgets',
				'pexeto-page-options' );

			$styles = array(
				'wp-jquery-ui-dialog',
				'pexeto-colorpicker-style',
				'pexeto-page-style',
				'pexeto-widgets-style' );

		}elseif ( isset( $_GET['page'] ) && $_GET['page']==PEXETO_OPTIONS_PAGE ) {
			//it is the Pexeto Options page
			$scripts = array(
				'jquery',
				'jquery-ui-core',
				'jquery-ui-sortable',
				'jquery-ui-dialog',
				'jquery-ui-widget',
				'underscore',
				'pexeto-jquery-form',
				'pexeto-jquery-co',
				'pexeto-colorpicker',
				'pexeto-widgets',
				'pexeto-options' );

			$styles = array(
				'wp-jquery-ui-dialog',
				'pexeto-colorpicker-style',
				'pexeto-widgets-style',
				'pexeto-options-style' );

		}elseif ( isset( $_GET['page'] ) && !empty( $pexeto->custom_pages )
			&& in_array( $_GET['page'], array_keys( $pexeto->custom_pages ) ) ) {
			//it is the Custom Page section (for adding custom content such as slider items)

			$scripts = array(
				'jquery',
				'jquery-ui-core',
				'jquery-ui-sortable',
				'jquery-ui-dialog',
				'jquery-ui-widget',
				'underscore',
				'pexeto-jquery-form',
				'pexeto-widgets',
				'pexeto-custom-page' );

			$styles = array(
				'wp-jquery-ui-dialog',
				'pexeto-colorpicker-style',
				'pexeto-widgets-style',
				'pexeto-custom-page-style' );

		}elseif ( isset( $_GET['page'] ) && ( $_GET['page']==PEXETO_UPDATE_PAGE_NAME ) ) {
			//it is the update notifier page
			$scripts = array(
				'jquery',
				'jquery-ui-dialog',
				'pexeto-update' );

			$styles = array(
				'wp-jquery-ui-dialog',
				'pexeto-widgets-style',
				'pexeto-update-style' );

		}elseif ( strpos( $current_screen->base, PexetoOrderManager::slug ) ) {
			//it is a custom order page
			$scripts = array(
				'jquery',
				'jquery-ui-core',
				'jquery-ui-sortable',
				'jquery-ui-widget',
				'underscore',
				'pexeto-custom-order' );

			$styles = array(
				'pexeto-custom-order-style' );
		}

		//enqueue the scripts
		foreach ( $scripts as $script ) {
			wp_enqueue_script( $script );
		}

		//enqueue the styles
		foreach ( $styles as $style ) {
			wp_enqueue_style( $style );
		}
	}
}

if(!function_exists('pexeto_print_admin_scripts')){
	function pexeto_print_admin_scripts(){
		
		$script = '<script type="text/javascript">';
		$script.='var PEXETO = PEXETO || {};';
		$script.='PEXETO.theme_uri="'.get_template_directory_uri().'";';
		if ( current_user_can( 'edit_posts' ) ) {
			$nonce = wp_create_nonce( 'pexeto_upload' );
			$script.='PEXETO.uploadNonce = "'.$nonce.'";';
		}
		$script.='</script>';
		echo $script;
	}
}
