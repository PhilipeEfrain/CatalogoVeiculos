<?php get_header(); ?>

        <section class="text-white-50">
            <div class="background-cover bg-secondary overflow-hidden pb-4 pb-md-5 pe-4 pe-lg-5 ps-4 ps-lg-5 pt-5" style="background-image: url('https://images.unsplash.com/photo-1534361960057-19889db9621e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ'); background-repeat: no-repeat; background-position: center center; background-size: cover;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'top_img' ), 'large' ).')' ?>;">
                <div class="container">
                    <div class="pb-md-5 pt-5 row">
                        <div class="col-md-8 col-xl-4 pb-md-5 pt-5">
                            <p class="h5 text-primary text-uppercase" style="color:<?php echo get_theme_mod( 'top_call_color' ); ?> !important;"><?php echo get_theme_mod( 'top_call', __( 'Adopt A Pet', 'modelo2' ) ); ?></p>
                            <h1 class="display-4 fw-bold text-capitalize text-white" style="color:<?php echo get_theme_mod( 'top_title_color' ); ?> !important;"><?php echo get_theme_mod( 'top_title', __( 'Thousands of homeless dogs, one act of kindness', 'modelo2' ) ); ?></h1>
                            <p class="fw-light mb-4" style="color:<?php echo get_theme_mod( 'top_describe_color' ); ?> !important;"><?php echo get_theme_mod( 'top_describe', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac sagittis neque, vel egestas est.', 'modelo2' ) ); ?></p>
                            <div class="d-flex flex-wrap gap-2"> <a href="<?php echo get_theme_mod( 'top_button_link', '#' ); ?>" class="btn btn-light pb-2 pe-4 ps-4 pt-2 rounded-pill" style="background-color:<?php echo get_theme_mod( 'top_button_color' ); ?>;color:<?php echo get_theme_mod( 'top_button_text_color' ); ?> !important;"><?php echo get_theme_mod( 'top_button', __( 'Learn More', 'modelo2' ) ); ?></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
</div>
        </section>
        <section id="catalog" class="catalogbase">
            <section> 
                <div class="container pb-4 pt-4"> 
                    <div class="align-items-center row"> 
                        <div class="col"> 
                            <hr class="mb-0 mt-0"/> 
                        </div>                         
                        <div class="col-auto"> 
                            <h2 class="fw-normal lead mb-0 text-dark"><?php _e( 'Catálogo', 'modelo2' ); ?></h2> 
                        </div>                         
                        <div class="col"> 
                            <hr class="mb-0 mt-0"/> 
                        </div>                         
                    </div>                     
                </div>                 
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-9">
                            <div class="justify-content-center row"> 
                                <?php
                                    $product_query_args = array(
                                        'post_type' => 'product',
                                        'posts_per_page' => 16,
                                        'paged' => get_query_var( 'paged' ) ?: 1,
                                        'order' => 'DESC',
                                        'orderby' => 'date'
                                    )
                                ?>
                                <?php
                                    $product_query_args['meta_query'] = WC()->query->get_meta_query(); 
                                    if( $product_query_args[ 'orderby' ] ) {
                                        switch( $product_query_args[ 'orderby' ] ) {
                                            case 'price':
                                                $product_query_args[ 'orderby' ] = 'meta_value_num';
                                                $product_query_args[ 'meta_key' ] = '_price';
                                                break;
                                            case 'rating':
                                                $product_query_args[ 'orderby' ] = 'meta_value_num';
                                                $product_query_args[ 'meta_key' ] = '_wc_average_rating';
                                                break;
                                            case 'total_sales':
                                                $product_query_args[ 'orderby' ] = 'meta_value_num';
                                                $product_query_args[ 'meta_key' ] = 'total_sales';
                                                break;
                                            case 'review_count':
                                                $product_query_args[ 'orderby' ] = 'meta_value_num';
                                                $product_query_args[ 'meta_key' ] = '_wc_review_count';
                                                break;
                                        }
                                }?>
                                <?php $product_query = new WP_Query( $product_query_args ); ?>
                                <?php if ( $product_query->have_posts() ) : ?>
                                    <?php while ( $product_query->have_posts() ) : $product_query->the_post(); ?>
                                        <?php global $product, $post; ?>
                                        <?php PG_Helper::rememberShownPost(); ?>
                                        <div <?php wc_product_class( 'col-6 col-lg-3 col-md-4 pb-3 pt-3' , $product ); ?> id="post-<?php the_ID(); ?>"> 
                                            <div class="position-relative"> <a href="<?php echo esc_url( apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product ) ); ?>" class="d-block mb-3"><?php wc_get_template( 'loop/product-image.php' ) ?></a>
                                                <?php $terms = get_the_terms( get_the_ID(), 'product_cat' ) ?>
                                                <?php if( !empty( $terms ) ) : ?>
                                                    <?php foreach( $terms as $term ) : ?>
                                                        <a href="<?php echo esc_url( get_term_link( $term, 'product_cat' ) ) ?>" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php echo $term->name; ?></a>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                <a href="<?php echo esc_url( apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product ) ); ?>" class="link-dark text-decoration-none"><?php wc_get_template( 'loop/title.php' ) ?></a> 
                                                <?php woocommerce_template_loop_price() ?> 
                                                <?php woocommerce_show_product_loop_sale_flash() ?> 
                                            </div>                                             
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'modelo2' ); ?></p>
                                <?php endif; ?>                                                                                                                                                                                                                                        
                            </div>                             
                        </div>
                        <?php if ( is_active_sidebar( 'search' ) ) : ?>
                            <div class="activeboardradius bg-dark col col-md col-sm order-first order-md-0 order-sm-first text-white">
                                <?php dynamic_sidebar( 'search' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>                     
                    <div class="pb-4 pt-4 text-center"> <a href="<?php echo get_theme_mod( 'link_shop_button_link', '#' ); ?>" class="btn btn-dark pb-2 ps-4 pe-4 pt-2"><?php echo get_theme_mod( 'name_shop_button', __( 'Veja todo o catalogo', 'modelo2' ) ); ?></a>
                    </div>                     
                </div>                 
            </section>
        </section>
        <section id="info">
            <section class="bg-black bg-dark pb-5 pt-5"> 
                <div class="container  pb-5 pt-5"> 
                    <div class="align-items-center row"> 
                        <div class="col-lg-9"> 
                            <h2 class="h6 text-primary text-uppercase" style="color:<?php echo get_theme_mod( 'financieamento_topo_cor' ); ?> !important;"><?php echo get_theme_mod( 'financieamento_top', __( 'The Latest', 'modelo2' ) ); ?></h2> 
                            <h3 class="fw-bold h2 mb-4 mb-lg-0 text-white" style="color:<?php echo get_theme_mod( 'financieamento_chamada_cor' ); ?> !important;"><?php echo get_theme_mod( 'financieamento_chamada', __( 'Our ability to feel, act and communicate is indistinguishable from magic.', 'modelo2' ) ); ?></h3>
                        </div>                         
                        <div class="col-lg-auto ms-auto"> <a href="<?php echo get_theme_mod( 'top_button_link', '#' ); ?>" class="btn btn-light pb-2 pe-4 ps-4 pt-2 rounded-pill" style="background-color:<?php echo get_theme_mod( 'top_button_color' ); ?>;color:<?php echo get_theme_mod( 'top_button_text_color' ); ?> !important;"><?php echo get_theme_mod( 'top_button', __( 'Learn More', 'modelo2' ) ); ?></a> 
                        </div>                         
                    </div>                     
                </div>                 
            </section>
            <div class="container">
                <section class="pb-5 pt-5"> 
                    <div class="container-fluid pb-5 pt-5"> 
                        <div class="align-items-center mb-3 row"> 
                            <div class="col-xl-4 pb-4 pt-4"> 
                                <h2 class="h6 mb-1 text-primary" style="color:<?php echo get_theme_mod( 'color_chamada' ); ?> !important;"><?php echo get_theme_mod( 'insticional_chamada', __( 'Services', 'modelo2' ) ); ?></h2> 
                                <h3 class="fw-bold h2 mb-1"><?php echo get_theme_mod( 'insticional_titulo', __( 'We can do useful things for our clients', 'modelo2' ) ); ?></h3>
                                <p class="fw-light"><?php echo get_theme_mod( 'insticional_texto', __( 'You never change things by fighting the existing reality. To change something, build a new model that makes the existing model obsolete.', 'modelo2' ) ); ?></p> <a href="<?php echo get_theme_mod( 'insticional_button_link', '#' ); ?>" class="bg-black btn pb-2 pe-4 ps-4 pt-2 rounded-pill text-white"><?php echo get_theme_mod( 'insticional_button', __( 'Learn More', 'modelo2' ) ); ?></a> 
                            </div>                             
                            <div class="col-xl-8 ms-auto"> 
                                <div class="row"> 
                                    <div class="col-md-4 pb-3 pt-3"> 
                                        <div class="pb-3 pt-3"> 
                                            <?php if ( get_theme_mod( 'show_icon01' ) ) : ?>
                                                <i class="fa-2x fa-money-check fas iconsmarging <?php echo get_theme_mod( 'insticional_bloco01_icon', 'fa-2x fa-money-check fas iconsmarging' ); ?>"></i>
                                            <?php endif; ?> 
                                            <h4 class="fw-bold h5 text-dark"><?php echo get_theme_mod( 'insticional_bloco01', __( 'Compra', 'modelo2' ) ); ?></h4>
                                            <p class="text-secondary"><?php echo get_theme_mod( 'insticional_bloco01_texto', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.', 'modelo2' ) ); ?></p><a href="<?php echo get_theme_mod( 'insticional_bloco01_botao_link', '#' ); ?>" class="text-black"><?php echo get_theme_mod( 'insticional_bloco01_botao', __( 'Learn More', 'modelo2' ) ); ?></a> 
                                        </div>                                         
                                    </div>                                     
                                    <div class="col-md-4 pb-3 pt-3"> 
                                        <div class="pb-3 pt-3"> 
                                            <?php if ( get_theme_mod( 'show_icon02' ) ) : ?>
                                                <i class="fa-2x fa-hand-holding-usd fas iconsmarging <?php echo get_theme_mod( 'insticional_bloco02_icon', 'fa-2x fa-hand-holding-usd fas iconsmarging' ); ?>"></i>
                                            <?php endif; ?> 
                                            <h4 class="fw-bold h5 text-dark"><?php echo get_theme_mod( 'insticional_bloco02', __( 'Venda', 'modelo2' ) ); ?></h4>
                                            <p class="text-secondary"><?php echo get_theme_mod( 'insticional_bloco02_texto', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.', 'modelo2' ) ); ?></p><a href="<?php echo get_theme_mod( 'insticional_bloco02_botao_link', '#' ); ?>" class="text-black"><?php echo get_theme_mod( 'insticional_bloco02_botao', __( 'Learn More', 'modelo2' ) ); ?></a> 
                                        </div>                                         
                                    </div>                                     
                                    <div class="col-md-4 pb-3 pt-3"> 
                                        <div class="pb-3 pt-3"> 
                                            <?php if ( get_theme_mod( 'show_icon03' ) ) : ?>
                                                <i class="fa-2x fa-phone-volume fas iconsmarging <?php echo get_theme_mod( 'insticional_bloco03_icon', 'fa-2x fa-phone-volume fas iconsmarging' ); ?>"></i>
                                            <?php endif; ?> 
                                            <h4 class="fw-bold h5 text-dark"><?php echo get_theme_mod( 'insticional_bloco03', __( 'Ligamos pra você', 'modelo2' ) ); ?></h4>
                                            <p class="text-secondary"><?php echo get_theme_mod( 'insticional_bloco03_texto', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.', 'modelo2' ) ); ?></p><a href="<?php echo get_theme_mod( 'insticional_bloco03_botao_link', '#' ); ?>" class="text-black"><?php echo get_theme_mod( 'insticional_bloco03_botao', __( 'Learn More', 'modelo2' ) ); ?></a> 
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </section>
            </div>
        </section>        

<?php get_footer(); ?>