<?php
/**
 * Functions for template
 */
if (!is_admin()) {
    function blog_styles()
    {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', ['bootstrap']);
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css');
    }
    add_action('wp_enqueue_scripts', 'blog_styles');
}