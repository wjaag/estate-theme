<?php

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';


function estate_theme_assets() {

    wp_enqueue_style(
        'estate-theme-base',
        get_template_directory_uri() . '/assets/css/base.css',
        array(),
        '1.0'
    );

}

add_action(
    'wp_enqueue_scripts',
    'estate_theme_assets'
);