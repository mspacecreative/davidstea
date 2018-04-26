<?php
/*
 * Plugin Name: Accordion Menu
 * Plugin URI: http://mspacecreative.com
 * Description: Accordion style menu, slides up and down
 * Version: 1.0
 * Author: Matt Cyr
 * Author URI: http://mspacecreative.com
 */
 
 function accordion_scripts() {
 	wp_enqueue_style( 'accordion-css', plugin_dir_url( __FILE__ ) . 'css/accordion.css', array(), null );
 	wp_enqueue_script( 'accordion-script', plugin_dir_url( __FILE__ ) . 'js/accordion.js', array( 'jquery' ), '1.0', true );
 }
 
 function accordion_menu() {
     ob_start();
     	include(plugin_dir_path( __FILE__ ) . 'includes/accordion.php');
     return ob_get_clean();
 }
 
 add_shortcode( 'accordion_menu', 'accordion_menu' );
 add_action( 'wp_enqueue_scripts', 'accordion_scripts' );