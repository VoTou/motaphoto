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
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="post__contact">
        <div class="contact-container">
          <p class="contact-text">Cette photo vous intéresse ?<p>
          <a href="#id01" class="btn-contact contact-close color-change-btn" >Contact</a>
        </div>
        <div class="nav-photo">

        </div>
      </div>
      <hr class="horizontal-line-large">
      <div class="photo-parent">
        <p class="photo-parent-text">Vous aimerez aussi</p>

        <button></button>
      </div>


      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
  </main>

<?php get_footer(); ?>