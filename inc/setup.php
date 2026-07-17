<?php

function estate_theme_setup() {

    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);

}

add_action(
    'after_setup_theme',
    'estate_theme_setup'
);