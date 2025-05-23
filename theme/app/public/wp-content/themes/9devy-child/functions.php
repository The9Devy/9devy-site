<?php
/**
 * Enqueue parent and child styles.
 */
function nine_devy_child_enqueue_styles() {
    // Parent stylesheet
    wp_enqueue_style(
        'nine-devy-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme('9devy-theme')->get('Version')
    );
    // Child stylesheet
    wp_enqueue_style(
        'nine-devy-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('nine-devy-parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'nine_devy_child_enqueue_styles');
