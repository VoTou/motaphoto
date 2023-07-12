<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
	<header id="masthead" class="site-header">
    <?php
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
    ?>
    <nav role="navigation" class="nav-header" aria-label="<?php _e('Menu principal', 'text-domain'); ?>"><?php 
        /**
         * Affiche le menu "Menu principal" enregistré au préalable.
         */
        wp_nav_menu([
            'theme_location' => 'main-menu',
            'container'      => false, // On retire le conteneur généré par WP
            'walker'         => new A11y_Walker_Nav_Menu()
        ]);
    ?>
    </nav>
	</header><!-- #masthead -->

