<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_css_handler' ) ):
    function child_theme_css_handler() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'secondpress-style' ) );

        wp_enqueue_style('animate-css', trailingslashit( get_stylesheet_directory_uri() ) . 'css/animate.min.css', array(), null, false );
        wp_enqueue_script( 'custom-js', trailingslashit( get_stylesheet_directory_uri() ) . 'js/custom.js', array(), null, true );

    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_css_handler', 20 );


/**
 * Implement the Custom Header feature.
 */
require get_stylesheet_directory() . '/inc/custom-header.php';