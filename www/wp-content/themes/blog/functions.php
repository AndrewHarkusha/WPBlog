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

//Includes support for menus

//add_theme_support('menus');

register_nav_menus([
    'header_menu' => 'Header',
    'footer_menu' => 'Footer',
]);

//Includes support for sidebar
register_sidebar([
    'id' => 'right_sidebar',
    'name' => 'Правая колонка',
    'description' => 'Правая боковая панель',
    'before_widget' =>'<div id="%1s" class="panel panel-default %2s">',
    'after_widget' =>'</div></div>',
    'before_title' =>'<div class="panel-heading">',
    'after_title' =>'</div><div class="panel-body">',
]);