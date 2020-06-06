<?php

function wpbinge_theme_support()
{
    // adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wpbinge_theme_support');

function wpbinge_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'wpbinge_menus');

function wpbinge_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('wpbinge-style', get_template_directory_uri()."/style.css", $version, 'all');
    wp_enqueue_style('wpbinge-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'wpbinge_register_styles');


function wpbinge_register_scripts()
{
    wp_enqueue_script('wpbinge-font-awesome', 'https://kit.fontawesome.com/2641fe0f3e.js', array(), '5.0', true);
    wp_enqueue_script('wpbinge-main', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'wpbinge_register_scripts');

function wpbinge_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'

        )
    );
}

add_action('widgets_init', 'wpbinge_widget_areas');

?>


