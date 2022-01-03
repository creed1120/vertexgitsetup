<?php

// Enqueue Styles and Scripts
function tailwindwp_add_styles() {
    // wp_enqueue_style( 'tailwindwp_css', get_stylesheet_uri() );
    wp_enqueue_style( 'tailwindwp_css', get_template_directory_uri() . '/dist/css/app.css', array(), 1.0 );

    wp_enqueue_script( 'tailwindwp_js', get_template_directory_uri() . '/dist/js/app.js', NULL, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'tailwindwp_add_styles')

?>