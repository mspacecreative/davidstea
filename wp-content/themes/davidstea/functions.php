<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    wp_register_script('object-fit', get_stylesheet_directory_uri() . 'js/object-fit-polyfill.js', array('jquery'), null, true);
    wp_enqueue_script('object-fit');
    
    wp_register_script('my-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('my-scripts');
    
    wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fontawesome');
    
    wp_register_script('animate-js', get_stylesheet_directory_uri() . '/js/css3-animate-it.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('animate-js');
    
    wp_register_style('typekit', 'https://use.typekit.net/ucx3vdm.css', array(), '1.0', 'all');
    wp_enqueue_style('typekit');
    
    wp_register_style('animate', get_stylesheet_directory_uri() . '/css/animations.css', array(), '1.0', 'all');
    wp_enqueue_style('animate');

}

//TINY MCE CUSTOM STYLES

function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}

function my_mce_before_init_insert_formats( $init_array ) { 
	$style_formats = array( 
	array( 
		'title' => 'Boxed Link Button', 
		'inline' => 'a', 
		'classes' => 'article-link',	
		'wrapper' => true,
		)
); 

$init_array['style_formats'] = json_encode( $style_formats ); 
	return $init_array; 
}

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );