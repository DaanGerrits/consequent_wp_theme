<?php

/*
  ====================
    team POST TYPE
  ====================
*/

 function post_type_team() {
   $labels = array(
     'name' => 'team',
     'singular_name' => 'teamlid',
     'add_new' => 'Nieuw teamlid',
     'all_items' => 'Alle team',
     'add_new_item' => 'teamlid toevoegen',
     'edit_item' => 'teamlid bewerken',
     'new_item' => 'Nieuw teamlid',
     'view_item' => 'Alle team',
     'search_items' => 'Zoek teamlid',
     'not_found' => 'Geen team Gevonden',
     'not_found_in_trash' => 'Geen Teamlid Gevonden in Prullenbak',
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
      // 'title',
      'editor',
      // 'excerpt',
       'thumbnail',
       'revision',
     ),
     'taxonomies' => array(
       'category',
       'post_tag'
     ),
     'menu_position' => 8,
     'exclude_from_search' => false
   );
   register_post_type('team', $args);
 }

 add_action('init', 'post_type_team');
