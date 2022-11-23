<?php
add_action( 'wp_enqueue_scripts', 'mandy_theme_css',999);
function mandy_theme_css() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'theme-menu-style', get_template_directory_uri() . '/css/theme-menu.css' );
	wp_enqueue_style( 'default-css', get_stylesheet_directory_uri()."/css/default.css" );
	wp_enqueue_style( 'element-style', get_template_directory_uri() . '/css/element.css' );
	wp_enqueue_style( 'media-responsive', get_template_directory_uri() . '/css/media-responsive.css' );
	wp_dequeue_style('appointment-default',get_template_directory_uri() .'/css/default.css');
}

/*
	 * Let WordPress manage the document title.
	 */
	function mandy_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mandy_setup' );


// Add category metabox to page 
//add_meta_box('categorydiv', __('Categories'), 'post_categories_meta_box', 'page', 'side', 'core');
//register_taxonomy_for_object_type('category', 'page');  
function myplugin_settings() {  
// Add tag metabox to page
register_taxonomy_for_object_type('post_tag', 'page'); 
// Add category metabox to page
register_taxonomy_for_object_type('category', 'page');  
}
 // Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );
?>