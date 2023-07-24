<?php get_header(); ?>

<main id="primary" class="site-main main-single-photo">
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <article class="post">
      <div class="container-post">
        <div class="post__meta">
            <h1><?php the_title(); ?></h1>
            <ul class="desc-liste">
              <li id="ref" data-reference="<?php echo esc_attr( get_field( 'reference' ) ); ?>">Référence : <?php the_field( 'reference' ); ?></li>
              <li>Catégorie : <?php the_terms( $post->ID, 'categorie'); ?></li>
              <li>Format : <?php the_terms( $post->ID, 'format'); ?></li>
              <li>Type : <?php the_field( 'type' ); ?></li>
              <li>Année : <?php the_terms( $post->ID, 'annee'); ?></li>
            </ul>
            <hr class="horizontal-line">
        </div>
        <div class="post-thumbnail">
          <div class="post-thumbnail-overlay">
                <svg class="fullscreen-overlay" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                    <circle cx="17" cy="17" r="17" fill="black"/>
                    <line x1="15" y1="10.5" x2="10" y2="10.5" stroke="white"/>
                    <line y1="-0.5" x2="5" y2="-0.5" transform="matrix(-1 8.74227e-08 8.74227e-08 1 15 24)" stroke="white"/>
                    <line x1="9.5" y1="16" x2="9.5" y2="10" stroke="white"/>
                    <line y1="-0.5" x2="6" y2="-0.5" transform="matrix(4.37114e-08 1 1 -4.37114e-08 10 18)" stroke="white"/>
                    <line y1="-0.5" x2="5" y2="-0.5" transform="matrix(1 -8.74227e-08 -8.74227e-08 -1 19 10)" stroke="white"/>
                    <line y1="-0.5" x2="6" y2="-0.5" transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 24 16)" stroke="white"/>
                    <line x1="19" y1="23.5" x2="24" y2="23.5" stroke="white"/>
                    <line x1="24.5" y1="18" x2="24.5" y2="24" stroke="white"/>
                </svg>
                <span class="overlay-category"><?php the_terms( $post->ID, 'categorie'); ?></span>
                <span class="overlay-ref"><?php the_field( 'reference' ); ?></span>
            </div>
          <?php the_post_thumbnail(); ?>
        </div>
        
      </div>
      <div class="post__contact">
        <div class="contact-container">
          <p class="contact-text">Cette photo vous intéresse ?<p>
          <a href="#id01" class="btn-style contact-close color-change-btn" >Contact</a>
        </div>
        <div class="container-nav-photo">
          <div class="photo-nav-photo">
            <?php
            $prev_post_thumbnail = get_the_post_thumbnail_url(get_adjacent_post(false, '', true)->ID, 'thumbnail');
            $next_post_thumbnail = get_the_post_thumbnail_url(get_adjacent_post(false, '', false)->ID, 'thumbnail');
            ?>
            <img class="prev-thumbnail" src="<?php echo esc_url($prev_post_thumbnail); ?>" alt="">
            <img class="next-thumbnail" src="<?php echo esc_url($next_post_thumbnail); ?>" alt="">
          </div>  
          <div class="arrows-nav-photo">
            <div class="arrow-nav-photo arrow-left">
            <?php previous_post_link('%link', '&#10141;'); ?>  <!-- &#10141; Code pour afficher une flèche -->
            </div>
            <div class="arrow-nav-photo arrow-right">
            <?php next_post_link('%link', '&#10141;'); ?>
            </div>
          </div>
        </div>
      </div>
      <hr class="horizontal-line-large">
        <p class="photo-parent-text">Vous aimerez aussi</p>
    </article>

  <?php get_template_part( 'templates-part/photo-block' ); ?>
  
  <?php endwhile; endif; ?>
  <div class="container-btn-center">
    <a href="<?php echo home_url(); ?>" class="btn-style color-change-btn" >Toutes les photos</a>
  </div>
  

  </main>

<?php get_footer(); ?>