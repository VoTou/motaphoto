<?php

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu( 'main-menu', __( 'Menu principal', 'text-domain' ) );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'theme_style', get_template_directory_uri() . '/assets/css/theme.css');
}

function theme_setup() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_setup');


// Inclut le fichier menus.php
require_once get_template_directory() . '/menus.php';
