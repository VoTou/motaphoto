
        <footer id="site-footer" class="header-footer-group">
            <?php get_template_part( 'templates-part/contact-modal' ); ?>
            <?php
                /**
                * Affiche le menu "Menu principal" enregistré au préalable.
                */
                wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'container'      => false, // On retire le conteneur généré par WP
                    'walker'         => new A11y_Walker_Nav_Menu()
                ]);
                ?>
              <p class="text-mention">Tous droits réservés<p>
        </footer><!-- #site-footer -->
      <?php wp_footer(); ?>
   </body>
</html>