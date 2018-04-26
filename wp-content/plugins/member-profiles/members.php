<?php 
/*
 * Plugin Name: Member Profiles
 * Plugin URI: http://mspacecreative.com
 * Description: Displays a list of members with bio in lightbox
 * Version: 1.0
 * Author: Matt Cyr
 * Author URI: http://mspacecreative.com
 */
 
 function nominees_styles() {
 		wp_enqueue_style( 'nominees', plugin_dir_url( __FILE__ ) . 'css/nominees.css', array(), null );
 		wp_enqueue_script( 'nominees-js', plugin_dir_url( __FILE__ ) . 'js/nominees.js', array( 'jquery' ), '1.0', true );
 }
 
 function member_profiles() {
     ob_start();
     	include(plugin_dir_path( __FILE__ ) . 'includes/members_layout.php');
     return ob_get_clean();
 }
 
 add_action( 'wp_enqueue_scripts', 'nominees_styles' );
 add_shortcode( 'member_profiles', 'member_profiles' );