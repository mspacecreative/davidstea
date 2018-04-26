<?php
/*
 * Plugin Name: Press Release
 * Plugin URI: http://mspacecreative.com
 * Description: Accordion style menu, slides up and down
 * Version: 1.0
 * Author: Matt Cyr
 * Author URI: http://mspacecreative.com
 */
 
 function press_releases() {
     ob_start();
     	include(plugin_dir_path( __FILE__ ) . 'includes/press_releases_layout.php');
     return ob_get_clean();
 }
 
 add_shortcode( 'press_releases', 'press_releases' );