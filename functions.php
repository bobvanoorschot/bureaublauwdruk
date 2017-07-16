<?php

include_once('inc/project.php');

function theme_styles() {

  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      // 'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function theme_support() {
  add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'init', 'theme_support' );
