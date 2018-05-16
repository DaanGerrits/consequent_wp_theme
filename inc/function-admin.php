<?php

/*
  =================
    ADMIN PAGE
  =================
*/

function consequent_add_admin_page() {

  add_menu_page(
    'Consequent Theme Options',
    'Consequent',
    'manage_options',
    'consequent',
    'consequent_theme_create_page',
    'dashicons-carrot',
    110
  );

}
add_action('admin_menu', 'consequent_add_admin_page');

function consequent_theme_create_page() {
  // generate admin page
  echo '<h1>Consequent Theme Options</h1>';
}

function consequent_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_theme_support( 'custom-logo', $defaults );

/*
  ================
    ADD SIDEBAR
  ================
*/

if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));
}

// Homepage SIDEBAR
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'Homepage Sidebar',
    'id' => 'homepage-sidebar',
    'description' => 'Sidebar for custom homepage',
    'before_widget' => '<div><li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li></div>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));
}

/*
  ===============================
    FRONT-END ENQUEUE FUNCTIONS
  ===============================
*/

function consequent_load_scripts() {
  // libs can be included here
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/libs/owl.carousel.min.css');
  wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/libs/owl.theme.default.min.css');
  wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', false, '1.0.0', 'all');
  wp_enqueue_style('testimonials_slider', get_template_directory_uri() . '/css/testimonials.slider.css', false, '1.0.0', 'all');
  wp_enqueue_style('events_widget', get_template_directory_uri() . '/css/events.widget.css', false, '1.0.0', 'all');
  wp_enqueue_style('global', get_template_directory_uri() . '/css/global.css', false, '1.0.0', 'all');

  //wp_dequeue_script( 'jquery' );
  //wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/libs/jquery.v3.3.1.min.js');
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/libs/owl.carousel.min.js', array(), '1.0.0', true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'consequent_load_scripts');
