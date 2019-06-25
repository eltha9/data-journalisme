<?php

add_action('wp_head', 'style');

function style(){
    wp_register_style( 'main_style', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'main_style' );
    // cart style
    wp_register_style( 'chart_style', get_template_directory_uri() . '/assets/css/chart.css' );
    wp_enqueue_style( 'chart_style' );
}

add_action('wp_footer', 'script');

function script(){
    wp_register_script( 'main_script', get_template_directory_uri() . '/assets/script/home.js' );
    wp_enqueue_script( 'main_script' );
    // chart script

    //exté
    wp_register_script( 'hc_script','https://code.highcharts.com/highcharts.js' );
    wp_enqueue_script( 'hc_script' );

    wp_register_script( 'hc_map_script','http://code.highcharts.com/maps/modules/map.js' );
    wp_enqueue_script( 'hc_map_script' );

    wp_register_script( 'hc_map_data_script','https://code.highcharts.com/mapdata/countries/fr/fr-all-all.js' );
    wp_enqueue_script( 'hc_map_data_script' );

    wp_register_script( 'hc_items_script','https://code.highcharts.com/modules/item-series.js' );
    wp_enqueue_script( 'hc_items_script' );

    //inté
    wp_register_script( 'app_script', get_template_directory_uri() . '/assets/script/app.fetch.js' );
    wp_enqueue_script( 'app_script' );

    wp_register_script( 'map_script', get_template_directory_uri() . '/assets/script/map.js' );
    wp_enqueue_script( 'map_script' );
    
    wp_register_script( 'chart_script', get_template_directory_uri() . '/assets/script/chart.js' );
    wp_enqueue_script( 'chart_script' );
}
