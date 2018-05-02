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
