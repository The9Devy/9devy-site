<?php
/*
Plugin Name: Debug Log Viewer
Description: Adds an endpoint to view the debug log.
Version: 1.0
Author: 9Devy LLC
*/

add_action('init', 'register_debug_log_endpoint');
function register_debug_log_endpoint() {
    add_rewrite_rule('debug-log/?$', 'index.php?debug_log=1', 'top');
}

add_filter('query_vars', 'debug_log_query_vars');
function debug_log_query_vars($vars) {
    $vars[] = 'debug_log';
    return $vars;
}

add_action('template_redirect', 'debug_log_template_redirect');
function debug_log_template_redirect() {
    if (get_query_var('debug_log')) {
        if (!current_user_can('administrator')) {
            wp_die('Access denied. You must be an administrator to view this page.');
        }
        $debug_log_path = ABSPATH . 'wp-content/debug.log';
        if (file_exists($debug_log_path)) {
            echo '<h1>Debug Log</h1>';
            echo '<pre>';
            echo esc_html(file_get_contents($debug_log_path));
            echo '</pre>';
        } else {
            echo 'Debug log not found.';
        }
        exit;
    }
}
