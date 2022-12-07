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
                    <?php woocommerce_template_single_title() ?>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="position-relative">
                                    <?php woocommerce_show_product_images(); ?>
                                    <?php woocommerce_show_product_sale_flash() ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="infocar">
                                    <h4><?php _e( 'Ficha técnica:', 'modelo2' ); ?></h4>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Marca:', 'modelo2' ); ?> </p>
                                    <?php $terms = get_the_terms( get_the_ID(), 'vehicle_brand' ) ?>
                                    <?php if( !empty( $terms ) ) : ?>
                                        <?php foreach( $terms as $term ) : ?>
                                            <p class="infodatacar"><?php echo $term->name; ?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Modelo:', 'modelo2' ); ?></p>
                                    <p class="infodatacar"><?php echo get_field( 'modelo' ); ?></p>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Ano:', 'modelo2' ); ?></p>
                                    <p class="infodatacar"><?php echo get_field( 'ano' ); ?></p>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Motor:', 'modelo2' ); ?></p>
                                    <p class="infodatacar"><?php echo get_field( 'motor' ); ?></p>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Válvulas:', 'modelo2' ); ?></p>
                                    <p class="infodatacar"><?php echo get_field( 'valvulas' ); ?></p>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Combustível:', 'modelo2' ); ?></p>
                                    <?php $terms = get_the_terms( get_the_ID(), 'fuel_vehicle' ) ?>
                                    <?php if( !empty( $terms ) ) : ?>
                                        <?php foreach( $terms as $term ) : ?>
                                            <p class="infodatacar"><?php echo $term->name; ?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Câmbio:', 'modelo2' ); ?></p>
                                    <?php $terms = get_the_terms( get_the_ID(), 'exchange' ) ?>
                                    <?php if( !empty( $terms ) ) : ?>
                                        <?php foreach( $terms as $term ) : ?>
                                            <p class="infodatacar"><?php echo $term->name; ?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Final da placa:', 'modelo2' ); ?></p>
                                    <?php $terms = get_the_terms( get_the_ID(), 'plate' ) ?>
                                    <?php if( !empty( $terms ) ) : ?>
                                        <?php foreach( $terms as $term ) : ?>
                                            <p class="infodatacar"><?php echo $term->name; ?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'KM:', 'modelo2' ); ?></p>
                                    <p class="infodatacar"><?php echo get_field( 'quilometragem' ); ?></p>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Número de portas:', 'modelo2' ); ?></p>
                                    <p class="infodatacar"><?php echo get_field( 'numero_de_portas' ); ?></p>
                                </div>
                                <div class="infocar">
                                    <p class="titleinfocar"><?php _e( 'Cor:', 'modelo2' ); ?></p>
                                    <p class="infodatacar"><?php echo get_field( 'cor' ); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php if ( is_active_sidebar( 'compartilhar' ) ) : ?>
                                    <div>
                                        <?php dynamic_sidebar( 'compartilhar' ); ?>
                                    </div>
                                <?php endif; ?>
                                <?php woocommerce_breadcrumb() ?>
                                <?php woocommerce_template_single_price() ?>
                                <div>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo"> <button class="accordion-button bg-dark collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php _e( 'Enviar postosta', 'modelo2' ); ?>
                                    </button> </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <?php if ( is_active_sidebar( 'envie_proposta' ) ) : ?>
                                        <div class="accordion-body">
                                            <?php dynamic_sidebar( 'envie_proposta' ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree"> <button class="accordion-button bg-dark collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <?php _e( 'Simular financiamento', 'modelo2' ); ?>
                                    </button> </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <?php if ( is_active_sidebar( 'simular_financiamento' ) ) : ?>
                                        <div class="accordion-body">
                                            <?php dynamic_sidebar( 'simular_financiamento' ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'modelo2' ); ?></p>
<?php endif; ?>
<?php do_action( 'woocommerce_after_single_product' ); ?>

<?php get_footer(); ?>