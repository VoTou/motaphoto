<?php

function motaphoto_register_menus() {
    register_nav_menus(
        array(
            'main-menu' 	=> __( 'Menu principal', 'motaphoto' ),
            'footer-menu' 	=> __( 'Menu pied de page', 'motaphoto' ),
        )
    );
}
add_action('init', 'motaphoto_register_menus');

// Déclaration des styles
function motaphoto_enqueue_styles() {
    wp_enqueue_style( 'theme_style', get_template_directory_uri() . '/assets/css/theme.css');
    wp_enqueue_style( 'single-photo', get_template_directory_uri() . '/assets/css/single-photo.css');
    wp_enqueue_style( 'front-page', get_template_directory_uri() . '/assets/css/front-page.css');
}
add_action( 'wp_enqueue_scripts', 'motaphoto_enqueue_styles' );

// Déclaration des scripts
function motaphoto_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'motaphoto_enqueue_scripts' );


function motaphoto_setup() {
    // Ajouter la prise en charge des logos
    add_theme_support('custom-logo');
    // Ajouter la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );
    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support( 'title-tag' );
    get_template_part( 'menus' );
}
add_action('after_setup_theme', 'motaphoto_setup');


//Fonction pour ajouter le bouton Contact dans le menu pour afficher la modale
function contact_btn( $items, $args ) {
    if ( $args->theme_location === 'main-menu' ) {
        $items .= '<a href="#id01" class="contact-btn menu-item contact-close">Contact</a>';
    }
    return $items;
}

add_filter( 'wp_nav_menu_items', 'contact_btn', 10, 2 );






