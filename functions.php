<?php

include_once('inc/project.php');
// require dirname(__FILE__).'/lib/wp-less/bootstrap-for-theme.php';
require_once( 'wp-less/wp-less.php' );

function theme_styles() {

  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css' );
  wp_enqueue_style( 'page', get_template_directory_uri() . '/css/page.css' );
  wp_enqueue_style( 'my_css', get_template_directory_uri() . '/less/main.less' );
  // wp_enqueue_style( 'my_css', get_template_directory_uri() . '/scss/main.scss' );
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

function create_widget( $name, $id, $description ) {

  register_sidebar(array(
    'name' => __( $name ),
    'id' => $id,
    'description' => __( $description ),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));

}

create_widget( 'Footer column 1', 'footer_widget_1', 'Footer widget' );
create_widget( 'Footer column 2', 'footer_widget_2', 'Footer widget' );
create_widget( 'Footer column 3', 'footer_widget_3', 'Footer widget' );
