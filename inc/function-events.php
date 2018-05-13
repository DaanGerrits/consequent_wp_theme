<?php

/*
  ====================
    EVENTS POST TYPE
  ====================
*/

 function post_type_events() {
   $labels = array(
     'name' => 'Agenda',
     'singular_name' => 'Agenda',
     'add_new' => 'Nieuw Item',
     'all_items' => 'Alle Items',
     'add_new_item' => 'Item Toevoegen',
     'edit_item' => 'Item Bewerken',
     'new_item' => 'Nieuw Item',
     'view_item' => 'Alle Items',
     'search_items' => 'Zoek Item',
     'not_found' => 'Geen Items Gevonden',
     'not_found_in_trash' => 'Geen Items Gevonden in Prullenbak',
     'parent_item_colon' => 'Parent Item'
   );

   $args = array(
     'labels' => $labels,
     'public' => true,
     'has_archive' => true,
     'publicly_queryable' => true,
     'query_var'=> true,
     'rewrite' => true,
     'capability_type' => 'post',
     'hierarchical' => false,
     'supports' => array(
       'title',
       'editor',
       'excerpt',
       'thumbnail',
       'revision',
     ),
     'taxonomies' => array(
       'category',
       'post_tag'
     ),
     'menu_position' => 4,
     'exclude_from_search' => false
   );
   register_post_type('agenda', $args);
 }

 add_action('init', 'post_type_events');

//  add_filter( 'pre_get_posts', 'events_get_posts' );
//
// function events_get_posts( $query ) {
//
//  if ( is_home() && $query->is_main_query() )
//   $query->set( 'post_type', array( 'agenda') );
//
//  return $query;
// }
