<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'catalogo_veiculos' ); ?></p>
<?php endif; ?>             

<?php get_footer(); ?>