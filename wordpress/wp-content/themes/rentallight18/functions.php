<?php

function create_unit_post_type() {
	$labels = array(
		'name' => _x('Units', 'post_type_general_name')
	);

	$args = array(
		'labels' => $labels,
		'menu_position' => 5,
		'supports' => array('title', 'thumbnail', 'editor'),
		'public' => true
	);

	register_post_type('unit', $args);
}

add_action('init','create_unit_post_type');


/////////////////////////////////////////////


add_theme_support( 'post-thumbnails' );

function loadCSS() {
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/theme-styles.css' );
}

add_action('wp_enqueue_script', 'loadCSS'); 

function customBodyClasses($classes) {

if (is_single()){
	$classes[] = "my-single-class";
}

	$classes[] = 'my-class';
	$classes[] = 'second';
	$classes[] = 'third';

	return $classes;
}

add_filter( 'body_class', 'customBodyClasses' );

add_filter( 'show_admin_bar', '__return_false'); 

?>