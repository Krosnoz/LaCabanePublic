<?php 

register_nav_menus( array(
	'menu-principal' => 'Menu principal'
) );

function wpdocs_theme_name_scripts() {
	wp_register_style('main-style', get_template_directory_uri().'/style.css', array(), true);
	wp_enqueue_style('main-style');
	wp_register_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), true);
	wp_enqueue_style('bootstrap-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

// ajout du title 

function ajout_titre() {
	add_theme_support("title-tag");
};

add_action('after_setup_theme', 'ajout_titre');


// ajout du style et js 

function ajout_style() {
	wp_enqueue_style('general', get_template_directory_uri().'/style.css');
	wp_enqueue_script('special', get_template_directory_uri().'js/script.js');
};

add_action('wp_enqueue_scripts', 'ajout_style');

?>