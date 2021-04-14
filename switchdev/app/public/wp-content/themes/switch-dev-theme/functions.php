<?php

// Denny direct access
if (!defined('ABSPATH')) {
    exit;
}

// Uncomment as necessary
require get_template_directory() . '/includes/enqueues.php';
require get_template_directory() . '/includes/svg-loader.php';
require get_template_directory() . '/includes/disable-comments.php';

function switch_files() {
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Nunito&family=Roboto:wght@400;700&display=swap');
    wp_enqueue_style('fontawesome_css', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
  }
  
add_action('wp_enqueue_scripts', 'switch_files');

add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters) {
  $exclude_filters[] = 'themes/switch-dev-theme/node_modules';
  return $exclude_filters;
}