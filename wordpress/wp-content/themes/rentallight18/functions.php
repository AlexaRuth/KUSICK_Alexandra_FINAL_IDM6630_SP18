<?php

//// LOAD POSTS /////

	function create_unit_post_type() {
		$labels = array(
			'name'      => _x('unit', 'post_type_general_name'),
			'add_new'   => _x( 'add new', 'unit'),
			'edit_item' => 'edit unit',
		);

		$args = array(
			'labels' => $labels,
			'menu_position' => 5,
			'supports' => array('title', 'thumbnail', 'editor'),
			'public' => true,
		);

		register_post_type('unit', $args);
	}


		add_action('init','create_unit_post_type');

		add_theme_support( 'post-thumbnails' );


//// JQUERY SCRIPTS /////

	function my_theme_scripts() {
	    wp_enqueue_script( 'my_theme_scripts', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '3.2.1', true );
	}
		add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );



//// LOAD CSS /////

	function loadCSS() {
		wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/theme-styles.css', false, '20180501' );
	}
		add_action('wp_enqueue_scripts', 'loadCSS'); 



//// LOAD CUSTOM CLASSES /////

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