<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
      <?php the_post_thumbnail(); ?>

      <h1><?php the_title(); ?></h1>

      <div class="post__meta">
        <p>
          Référence : <?php the_field( 'reference' ); ?><br>
          Catégorie : <?php the_terms( $post->ID, 'categorie'); ?><br>
          Format : <?php the_terms( $post->ID, 'format'); ?><br>
          Type : <?php the_field( 'type' ); ?><br>
          Année : <?php the_terms( $post->ID, 'annee'); ?>
        </p>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>