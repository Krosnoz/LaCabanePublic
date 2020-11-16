<?php 

//Permet d'enregister des menus pour que le client les modifies, et les classes CSS
function custom_nav_menus() {
	register_nav_menus( array(
		'menu-home' => 'Menu Accueil',
		'menu-reseaux' => 'Menu Réseaux Sociaux'
	) );
}
add_action( '1', 'custom_nav_menus' );

//Permet d'enregister le style.css + bootstrap pour ceux qui l'utiliseront
function custom_theme_assets() {
	wp_enqueue_style('main-style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets');
