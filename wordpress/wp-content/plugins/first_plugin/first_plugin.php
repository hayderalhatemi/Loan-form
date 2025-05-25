<?php
/**
* Plugin Name: First 
* Description: My first Plugin.
* Version: 0.1
* Author: Hayder
**/

add_shortcode('vat_calculator', 'load_vat_calculator_form');
add_shortcode('upload_image', 'load_upload_image');

function load_vat_calculator_form() {
    wp_enqueue_style('forms-style', plugins_url( 'style/style.css', __FILE__ ));
	wp_enqueue_script( 'script',  plugins_url() . '/calc/js/script.js', ['jquery'], '0.1', true);
	require_once (dirname(__FILE__) . '/form/form.php');
	return  vat_calculator_form();

}

function load_upload_image() {
    wp_enqueue_style('forms-style', plugins_url( 'style/style.css', __FILE__ ));
	wp_enqueue_script( 'script',  plugins_url() . '/calc/js/script.js', ['jquery'], '0.1', true);
	require_once (dirname(__FILE__) . '/form/upload_image.php');
	return  upload_image();

}

?>