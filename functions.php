<?php

function theme_register_menus() {
    register_nav_menus(
        array(
            'main-menu' 	=> __( 'Menu principal', 'motaphoto' ),
            'footer-menu' 	=> __( 'Menu pied de page', 'motaphoto' ),
        )
    );
}
add_action('init', 'theme_register_menus');


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
