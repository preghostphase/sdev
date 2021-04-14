<?php

// custom post types
function switch_post_types () {
  // event post type
  register_post_type('service', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array(
      'slug' => 'services'
    ),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Add New Service',
      'edit_item' => 'Edit Service',
      'all_items' => 'All Services',
      'singular_name' => 'Service'
    ),
    'menu_icon' => 'dashicons-format-aside'
  ));
}
add_action('init', 'switch_post_types');
