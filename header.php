<?php

  /*
     This is the header template for the Consequent theme.
  */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <link rel="profile" href="//gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Six+Caps" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/libs/owl.carousel.min.css">
    <link rel="stylesheet" href="css/libs/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/header.css"> -->

    <?php // include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="page-wrapper">

      <header>
        <div class="container header--wrapper">
          <nav class="navbar">
            <div class="navbar-header">
              <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
              ?>

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <?php
              wp_nav_menu( array(
                  'theme_location'  => 'primary',
                  'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'    => 'bs-example-navbar-collapse-1',
                  'menu_class'      => 'nav navbar-nav navbar-right',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'          => new WP_Bootstrap_Navwalker(),
                 )
               );
             ?>
          </nav>

        </div> <!-- /.container -->
      </header>
