<?php
/**
 * @package Cotfield CSS/JS
 * @version 0.1
 */
/*
Plugin Name: Cotfield CSS/JS
Author: AllSpark
*/
function css_js() {
	wp_enqueue_style( 'xyz', plugins_url('css/style.css', __FILE__ ));
	//wp_enqueue_script( 'abc', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'css_js' );
