<?php get_header(); ?>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <article class="post">
      <?php the_post_thumbnail(); ?>

      <h1><?php the_title(); ?></h1>

      <div class="post__meta">
          <ul class="desc">
            <li id="ref" data-reference="<?php echo esc_attr( get_field( 'reference' ) ); ?>">Référence : <?php the_field( 'reference' ); ?></li>
            <li>Catégorie : <?php the_terms( $post->ID, 'categorie'); ?></li>
            <li>Format : <?php the_terms( $post->ID, 'format'); ?></li>
            <li>Type : <?php the_field( 'type' ); ?></li>
            <li>Année : <?php the_terms( $post->ID, 'annee'); ?></li>
          </ul>
        </p>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>