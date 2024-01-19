<?php

function load_css() {
    wp_enqueue_style( 'tailwindcss', get_template_directory_uri(  ).'/style.css',array(), '1.0', 'all' );
}

add_action('wp_enqueue_scripts','load_css');