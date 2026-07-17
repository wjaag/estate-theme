<?php

function estate_theme_assets() {

    wp_enqueue_style(
        'estate-base',
        get_template_directory_uri() . '/assets/css/base.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'estate-components',
        get_template_directory_uri() . '/assets/css/components.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'estate-animation',
        get_template_directory_uri() . '/assets/css/animations.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'estate-search',
        get_template_directory_uri()
        .'/assets/css/search.css',
        [],
        '1.0'
    );

    wp_enqueue_script(
        'estate-animation',
        get_templet_directory_uri()
        .'/assets/js/animations.js',
        [],
        '1.0',
        true
    );

    wp_enqueue_script(
        'estate-interactions',
        get_template_directory_uri()
        .'/assets/js/interactons.js',
        [],
        '1.0',
        true
        
    );

}

add_action(
    'wp_enqueue_scripts',
    'estate_theme_assets'
);