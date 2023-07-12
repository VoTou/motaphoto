<?php get_header(); ?>
<div class="hero-header">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/nathalie-11.jpeg'; ?>"  alt="Hero header" >
    <h1 class="hero-header-title">Photographe Event</h1>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php
$args = array(
    'post_type' => 'photo',
    'posts_per_page' => 1,
    'orderby'        => 'rand',
    'order' => 'ASC' 
);
?>

<?php $my_query = new WP_Query( $args ); ?>

<?php  
if( $my_query->have_posts() ) : 
    while( $my_query->have_posts() ) : 
    $my_query->the_post();?>

    
<?php
    endwhile;
endif;
wp_reset_postdata();
?>

<?php the_content(); ?><!-- Contenu de la page -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>