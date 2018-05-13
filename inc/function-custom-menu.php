<?php
  /*
    ===============
      CUSTOM MENU
    ===============
  */

  // implement Menu's to theme settings
  function consequent_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
  }
  add_action('after_setup_theme', 'consequent_theme_setup');

  // Render clean menu markup
  function clean_custom_menus() {
  	$menu_name = 'main-navigation'; // specify custom menu slug
  	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
  		$menu = wp_get_nav_menu_object($locations[$menu_name]);
  		$menu_items = wp_get_nav_menu_items($menu->term_id);

  		$menu_list = '<nav>' ."\n";
  		$menu_list .= "\t\t\t\t". '<ul>' ."\n";
  		foreach ((array) $menu_items as $key => $menu_item) {
  			$title = $menu_item->title;
  			$url = $menu_item->url;
  			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
  		}
  		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
  		$menu_list .= "\t\t\t". '</nav>' ."\n";
  	} else {
  		// $menu_list = '<!-- no list defined -->';
  	}
  	echo $menu_list;
  }
  add_action('init', 'clean_custom_menus');
?>
