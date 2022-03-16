<?php
/**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'vertexgitsetup_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function vertexgitsetup_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'vertexgitsetup', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to &lt;head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'vertexgitsetup' ),
        'top-footer' => __('Top Footer Menu', 'vertexgitsetup' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}

endif; // vertexgitsetup_setup
add_action( 'after_setup_theme', 'vertexgitsetup_setup' );


// Enqueue Styles and Scripts
function tailwindwp_add_styles() {
    // wp_enqueue_style( 'tailwindwp_css', get_stylesheet_uri() );
    wp_enqueue_style( 'tailwindwp_css', get_template_directory_uri() . '/dist/css/app.css', array(), 1.0 );

    wp_enqueue_script( 'tailwindwp_js', get_template_directory_uri() . '/dist/js/app.js', NULL, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'tailwindwp_add_styles')

?>