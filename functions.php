<?php

function theme_support() {
    // diamic title tag
    add_theme_support( 'title-tag' );
}

add_action('after_setup_theme','theme_support');

function load_css() {
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style( 'tailwindcss', get_template_directory_uri(  ).'/style.css',array(), $version, 'all' );
}

add_action('wp_enqueue_scripts','load_css');