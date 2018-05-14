<?php
  register_nav_menus( array(
  	'primary' => __( 'Primary Menu', 'consequent' ),
  ));

  // Register Custom Navigation Walker
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
?>
