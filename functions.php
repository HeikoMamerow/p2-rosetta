<?php

//require_once( get_theme_root() . '/rosetta/functions.php' );


// Enqueue CSS from parent
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style')  );
}


// Deregister sidebar
//function remove_sidebar(){
////	unregister_sidebar( 'sidebar-1' );
//}
//add_action( 'widgets_init', 'remove_sidebar', 11 );