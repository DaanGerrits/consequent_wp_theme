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
    <link rel="stylesheet" href="css/libs/owl.carousel.min.css">
    <link rel="stylesheet" href="css/libs/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/header.css">

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

            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>

                <li class="dropdown">
                  <a href="/over-ons" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Over Ons <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/over-ons/visie-en-werkwijze">Visie en Werkwijze</a></li>
                    <li><a href="/over-ons/onze-mensen">Onze Mensen</a></li>
                    <li><a href="/over-ons/locatie">Locatie</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/over-ons/algemene-voorwaarden">Algemene Voorwaarden</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="/trainingen" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trainingen <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/trainingen/groepscursussen">Groepscursussen</a></li>
                    <li><a href="/trainingen/prive-trainingen">Privé Trainingen / Gedragstherapie</a></li>
                    <li><a href="/trainingen/coachen">Coachen met Honden</a></li>
                  </ul>
                </li>

                <li><a href="/inschrijven">Inschrijven</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/vacatures">Vacatures</a></li>
              </ul>
            </div> -->

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
