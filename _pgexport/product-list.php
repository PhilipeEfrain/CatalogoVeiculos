<?php get_header(); ?>

        <div class="container">
</div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <div class="container pb-5 pt-5">
            <?php woocommerce_breadcrumb() ?>
            <div class="gx-lg-5 gy-4 row">
                <div class="col-lg-9 col-md-8">
                    <div class="align-items-center justify-content-between row">
                        <div class="col-auto">
                            <h1 class="mb-4 text-dark"><?php woocommerce_page_title(); ?></h1>
                        </div>
                        <?php woocommerce_catalog_ordering() ?>
                        <?php woocommerce_result_count() ?>
                    </div>
                    <?php if ( woocommerce_product_loop() ) : ?>
                        <?php if ( wc_get_loop_prop( 'total' ) ) : ?>
                            <div class="gy-4 mb-5 row row-cols-lg-3 row-cols-sm-2">
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <?php global $product, $post; ?>
                                    <?php PG_Helper::rememberShownPost(); ?>
                                    <div <?php wc_product_class('', $product ); ?> id="post-<?php the_ID(); ?>">
                                        <div class="position-relative"> <a href="<?php echo esc_url( apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product ) ); ?>" class="d-block mb-3"><?php wc_get_template( 'loop/product-image.php' ) ?></a>
                                            <?php $terms = get_the_terms( get_the_ID(), 'product_cat' ) ?>
                                            <?php if( !empty( $terms ) ) : ?>
                                                <?php foreach( $terms as $term_i => $term ) : ?>
                                                    <a href="<?php echo esc_url( get_term_link( $term, 'product_cat' ) ) ?>" class="d-inline-block mb-2 small text-secondary"><?php echo $term->name; ?></a><?php if( $term_i < count( $terms ) - 1 ) echo ', '; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?><a href="<?php echo esc_url( apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product ) ); ?>" class="text-dark text-decoration-none"><?php wc_get_template( 'loop/title.php' ) ?></a>
                                            <?php woocommerce_template_loop_price() ?>
                                            <?php woocommerce_show_product_loop_sale_flash() ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php do_action( 'woocommerce_no_products_found' ); ?>
                    <?php endif; ?>
                    <?php woocommerce_pagination() ?>
                </div>
                <?php if ( is_active_sidebar( 'shop' ) ) : ?>
                    <?php woocommerce_get_sidebar() ?>
                <?php endif; ?>
            </div>
        </div>        

<?php get_footer(); ?>