<?php get_header(); ?>

<?php global $product; ?>
<?php do_action( 'woocommerce_before_single_product' ); ?>
<?php
    if ( post_password_required() ) {
        echo get_the_password_form();
        return;
    }
?>
<?php WC()->structured_data->generate_product_data(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div <?php wc_product_class( ' mt-5 product text-secondary' , $product ); ?> id="post-<?php the_ID(); ?>">
            <div class=" container pb-5 pt-2">
                <div class="gx-lg-5 gy-4 mb-5 row">
                    <div class="col-md-6">
                        <div class="position-relative">
                            <?php woocommerce_show_product_images(); ?>
                            <?php woocommerce_show_product_sale_flash() ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="infocar">
                            <h4><?php _e( 'Ficha técnica:', 'catalogo_veiculos' ); ?></h4>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Marca:', 'catalogo_veiculos' ); ?> </p>
                            <?php $terms = get_the_terms( get_the_ID(), 'vehicle_brand' ) ?>
                            <?php if( !empty( $terms ) ) : ?>
                                <?php foreach( $terms as $term ) : ?>
                                    <p class="infodatacar"><?php echo $term->name; ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Modelo:', 'catalogo_veiculos' ); ?></p>
                            <p class="infodatacar"><?php echo get_field( 'modelo' ); ?></p>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Ano:', 'catalogo_veiculos' ); ?></p>
                            <p class="infodatacar"><?php echo get_field( 'ano' ); ?></p>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Motor:', 'catalogo_veiculos' ); ?></p>
                            <p class="infodatacar"><?php echo get_field( 'motor' ); ?></p>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Válvulas:', 'catalogo_veiculos' ); ?></p>
                            <p class="infodatacar"><?php echo get_field( 'valvulas' ); ?></p>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Combustível:', 'catalogo_veiculos' ); ?></p>
                            <?php $terms = get_the_terms( get_the_ID(), 'fuel_vehicle' ) ?>
                            <?php if( !empty( $terms ) ) : ?>
                                <?php foreach( $terms as $term ) : ?>
                                    <p class="infodatacar"><?php echo $term->name; ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Câmbio:', 'catalogo_veiculos' ); ?></p>
                            <?php $terms = get_the_terms( get_the_ID(), 'exchange' ) ?>
                            <?php if( !empty( $terms ) ) : ?>
                                <?php foreach( $terms as $term ) : ?>
                                    <p class="infodatacar"><?php echo $term->name; ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Final da placa:', 'catalogo_veiculos' ); ?></p>
                            <?php $terms = get_the_terms( get_the_ID(), 'plate' ) ?>
                            <?php if( !empty( $terms ) ) : ?>
                                <?php foreach( $terms as $term ) : ?>
                                    <p class="infodatacar"><?php echo $term->name; ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'KM:', 'catalogo_veiculos' ); ?></p>
                            <p class="infodatacar"><?php echo get_field( 'quilometragem' ); ?></p>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Número de portas:', 'catalogo_veiculos' ); ?></p>
                            <p class="infodatacar"><?php echo get_field( 'numero_de_portas' ); ?></p>
                        </div>
                        <div class="infocar">
                            <p class="titleinfocar"><?php _e( 'Cor:', 'catalogo_veiculos' ); ?></p>
                            <p class="infodatacar"><?php echo get_field( 'cor' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <?php woocommerce_breadcrumb() ?>
                        <?php woocommerce_template_single_title() ?>
                        <?php woocommerce_template_single_rating() ?>
                        <?php woocommerce_template_single_excerpt() ?>
                        <?php woocommerce_template_single_price() ?>
                        <?php echo wc_get_stock_html( $product ) ?>
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'catalogo_veiculos' ); ?></p>
<?php endif; ?>
<?php do_action( 'woocommerce_after_single_product' ); ?>

<?php get_footer(); ?>