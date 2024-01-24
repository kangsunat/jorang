<?php

function theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'theme_support');

function load_css()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css", array(), '6.5.1', 'all');
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'load_css');

function tema_anda_register_menus()
{
    $locations = array(
        'head-menus' => 'head menus',
        'footer-menus' => 'footer menus'
    );
    register_nav_menus($locations);
}

add_action('init', 'tema_anda_register_menus');
