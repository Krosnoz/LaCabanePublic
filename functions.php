<?php

//Permet d'enregister des menus pour que le client les modifies, et les classes CSS
register_nav_menus( array(
  'menu-principal' => 'Menu Accueil',
  'menu-reseaux' => 'Menu Réseaux Sociaux',
  'menu-leftFooter' => 'Menu Liens'
) );

//Déclarations variable de theme
$args = array(
  'default-image' => get_template_directory_uri() . '/images/home.png',
);
add_theme_support('custom-background', $args);


//Regex RSHeader
function RSHeader_menu($nav) {
  $menu = preg_replace_callback('/<li id="([^"]+)" (class="fab (fa-[^ ]+)[^"]+)([^>]+)><a href="([^"]+)"/i',
  function ($matches) {
    return RSHeader_menu_replace($matches);
  },
  $nav);
  return $menu;
}

function RSHeader_menu_replace($a) {
  list($tmp1, $id, $classes, $icons, $end_of_li, $link) = $a;
  return '<li id="'.$id.'" '.str_replace( 'fab ', '', str_replace( 'fa-', '', $classes )).$end_of_li.'>'.
  '<a href="'.$link.'"/>'.'<i class="fab '.trim($icons).'"></i>'.'</a><span';
}
add_filter('wp_nav_menu', 'RSHeader_menu');

//Regex RSFooter
function RSFooter_menu($nav) {
  $menu = preg_replace_callback('/<li (class="fab (fa-[^ ]+)[^"]+)([^>]+)><a href="([^"]+)"/i',
  function ($matches) {
    return RSFooter_menu_replace($matches);
  },
  $nav);
  return $menu;
}

function RSFooter_menu_replace($a) {
  list($tmp1, $classes, $icons, $end_of_li, $link) = $a;
  return '<li '.str_replace( 'fab ', '', str_replace( 'fa-', '', $classes )).$end_of_li.'>'.
  '<a href="'.$link.'"/>'.'<i class="fab '.trim($icons).'"></i>'.'</a><span';
}
add_filter('wp_nav_menu', 'RSFooter_menu');

//Custom class for page-inside.php
function new_body_class($classes) {

  if ( is_page_template( 'page-template/page-inside.php' ) ) {
    $classes[] = 'pageInsideBody';
  }

  return $classes;
}
add_filter('body_class','new_body_class');

//Permet d'enregister le style.css + bootstrap pour ceux qui l'utiliseront
function custom_theme_assets() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
  wp_enqueue_style('lightgallery-css', get_template_directory_uri() . '/css/lightgallery.min.css');
  wp_enqueue_style('lightslider-css', get_template_directory_uri() . '/css/lightslider.min.css');
  wp_enqueue_style('glight-css', get_template_directory_uri() . '/css/glightbox.min.css');

  wp_enqueue_script('new-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js');
  wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/27acf404e7.js');
  wp_enqueue_script('lightgallery-js', get_template_directory_uri() . '/js/lightgallery.min.js');
  wp_enqueue_script('lightslider-js', get_template_directory_uri() . '/js/lightslider.min.js');
  wp_enqueue_script('glight-js', get_template_directory_uri() . '/js/glightbox.min.js');

  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');
