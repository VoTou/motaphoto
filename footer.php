
        <footer id="site-footer" class="header-footer-group">
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
        <?php get_template_part( 'template-parts/contact-modal' ); ?>
      <?php wp_footer(); ?>
   </body>
</html>