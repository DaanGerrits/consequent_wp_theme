<?php

/*
  =======================
    VACATURES POST TYPE
  =======================
*/

 function post_type_Vacatures() {
   $labels = array(
     'name' => 'Vacatures',
     'singular_name' => 'Vacature',
     'add_new' => 'Nieuwe Vacature',
     'all_items' => 'Alle Vacatures',
     'add_new_item' => 'Vacature toevoegen',
     'edit_item' => 'Vacature bewerken',
     'new_item' => 'Nieuwe Vacature',
     'view_item' => 'Alle Vacatures',
     'search_items' => 'Zoek Vacature',
     'not_found' => 'Geen Vacatures Gevonden',
     'not_found_in_trash' => 'Geen Vacatures Gevonden in Prullenbak',
     'parent_item_colon' => 'Parent item'
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
     'menu_position' => 5,
     'exclude_from_search' => false
   );
   register_post_type('vacatures', $args);
 }

 add_action('init', 'post_type_vacatures');
