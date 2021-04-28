<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage LightBox Challenge
 * @since LightBox Challenge 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

function my_theme_enqueue_styles() {
    $parent_style = 'twentytwentyone'; 
    $child_style = 'lightboxchallenge';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $child_style, get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 20 );

function register_my_menu() {
register_nav_menu( 'secondary', __('Footer Menu LightBox', 'lightboxchallenge'));
}
add_action( 'after_setup_theme', 'register_my_menu' );

