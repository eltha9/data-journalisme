<?php

add_action('wp_head', 'style');

function style(){
    wp_register_style( 'main_style', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'main_style' );
}

add_action('wp_footer', 'script');

function script(){
    wp_register_script( 'main_script', get_template_directory_uri() . '/assets/script/home.js' );
    wp_enqueue_script( 'main_script' );
}
