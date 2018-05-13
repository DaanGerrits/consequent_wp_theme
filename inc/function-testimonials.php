<?php

/*
  ====================
    TESTIMONIALS POST TYPE
  ====================
*/

 function post_type_testimonials() {
   $labels = array(
     'name' => 'Testimonials',
     'singular_name' => 'Testimonial',
     'add_new' => 'Nieuwe testimonial',
     'all_items' => 'Alle testimonials',
     'add_new_item' => 'Testimonial toevoegen',
     'edit_item' => 'Testimonial bewerken',
     'new_item' => 'Nieuwe testimonial',
     'view_item' => 'Alle testimonials',
     'search_items' => 'Zoek testimonial',
     'not_found' => 'Geen Testimonials Gevonden',
     'not_found_in_trash' => 'Geen Testimonials Gevonden in Prullenbak',
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
   register_post_type('testimonials', $args);
 }

 add_action('init', 'post_type_testimonials');
