<?php
// Theme setup
function nine_devy_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  register_nav_menus(array(
    'primary' => __('Primary Menu', '9devy-theme'),
  ));
}
add_action('after_setup_theme', 'nine_devy_theme_setup');

// Enqueue styles and scripts
function nine_devy_enqueue_scripts() {
  wp_enqueue_style('9devy-style', get_stylesheet_uri());
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css');
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'nine_devy_enqueue_scripts');
?>