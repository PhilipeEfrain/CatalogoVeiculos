<?php get_header(); ?>

        <section class="text-white-50">
            <div class="background-cover bg-secondary overflow-hidden pb-4 pb-md-5 pe-4 pe-lg-5 ps-4 ps-lg-5 pt-5" style="background-image: url('https://images.unsplash.com/photo-1534361960057-19889db9621e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ'); background-repeat: no-repeat; background-position: center center; background-size: cover;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'top_img' ), 'large' ).')' ?>;">
                <div class="pb-md-5 pt-5 row">
                    <div class="col-md-8 col-xl-6 pb-md-5 pt-5">
                        <p class="h5 text-primary text-uppercase" style="color:<?php echo get_theme_mod( 'top_call_color' ); ?> !important;"><?php echo get_theme_mod( 'top_call', __( 'Adopt A Pet', 'modelo2' ) ); ?></p>
                        <h1 class="display-4 fw-bold text-capitalize text-white" style="color:<?php echo get_theme_mod( 'top_title_color' ); ?> !important;"><?php echo get_theme_mod( 'top_title', __( 'Thousands of homeless dogs, one act of kindness', 'modelo2' ) ); ?></h1>
                        <p class="fw-light mb-4" style="color:<?php echo get_theme_mod( 'top_describe_color' ); ?> !important;"><?php echo get_theme_mod( 'top_describe', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac sagittis neque, vel egestas est.', 'modelo2' ) ); ?></p>
                        <div class="d-flex flex-wrap gap-2"> <a href="<?php echo get_theme_mod( 'top_button_link', '#' ); ?>" class="btn btn-light pb-2 pe-4 ps-4 pt-2 rounded-pill" style="background-color:<?php echo get_theme_mod( 'top_button_color' ); ?>;color:<?php echo get_theme_mod( 'top_button_text_color' ); ?> !important;"><?php echo get_theme_mod( 'top_button', __( 'Learn More', 'modelo2' ) ); ?></a> 
                        </div>
                    </div>
                    <div class="col-md-auto mb-4 mt-4 order-first order-md-last pb-5 pt-5">
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
            <section class="bg-dark pb-5 pt-5 text-light"> 
                <div class="container  pb-5 pt-5"> 
                    <div class="align-items-center row"> 
                        <div class="col-lg-9"> 
                            <h2 class="h6 text-primary text-uppercase"><?php _e( 'The Latest', 'modelo2' ); ?></h2> 
                            <h3 class="fw-bold h2 mb-4 mb-lg-0 text-white"><?php _e( 'Our ability to feel, act and communicate is indistinguishable from magic.', 'modelo2' ); ?></h3>
                        </div>                         
                        <div class="col-lg-auto ms-auto"> <a href="#" class="btn btn-primary text-uppercase"><?php _e( 'Read More', 'modelo2' ); ?></a> 
                        </div>                         
                    </div>                     
                </div>                 
            </section>
            <div class="container">
                <section class="bg-light pb-5 pt-5"> 
                    <div class="container-fluid pb-5 pt-5"> 
                        <div class="align-items-center mb-3 row"> 
                            <div class="col-xl-4 pb-4 ps-xl-5 pe-xl-5 pt-4"> 
                                <h2 class="h6 mb-1 text-primary"><?php _e( 'Services', 'modelo2' ); ?></h2> 
                                <h3 class="fw-bold h2 mb-1"><?php _e( 'We can do useful things for our clients', 'modelo2' ); ?></h3>
                                <p class="fw-light"> <?php _e( 'You never change things by fighting the existing reality. To change something, build a new model that makes the existing model obsolete.', 'modelo2' ); ?> </p> <a href="#" class="btn btn-primary"><?php _e( 'Read More', 'modelo2' ); ?></a> 
                            </div>                             
                            <div class="col-xl-8 ms-auto"> 
                                <div class="row"> 
                                    <div class="col-md-4 pb-3 pt-3"> 
                                        <div class="pb-3 pt-3"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="currentColor" class="mb-3 text-primary"> 
                                                <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm13.464 12.536L20 12l-3.536-3.536L15.05 9.88 17.172 12l-2.122 2.121 1.414 1.415zM6.828 12L8.95 9.879 7.536 8.464 4 12l3.536 3.536L8.95 14.12 6.828 12zm4.416 5l3.64-10h-2.128l-3.64 10h2.128z"></path>                                                 
                                            </svg>                                             
                                            <h4 class="fw-bold h5 text-dark"><?php _e( 'Development', 'modelo2' ); ?></h4>
                                            <p class="text-secondary"><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.', 'modelo2' ); ?></p><a href="#"><?php _e( 'Learn More', 'modelo2' ); ?></a> 
                                        </div>                                         
                                    </div>                                     
                                    <div class="col-md-4 pb-3 pt-3"> 
                                        <div class="pb-3 pt-3"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="currentColor" class="mb-3 text-primary"> 
                                                <path d="M5.636 12.707l1.828 1.829L8.88 13.12 7.05 11.293l1.414-1.414 1.829 1.828 1.414-1.414L9.88 8.464l1.414-1.414L13.12 8.88l1.415-1.415-1.829-1.828 2.829-2.828a1 1 0 0 1 1.414 0l4.242 4.242a1 1 0 0 1 0 1.414L8.464 21.192a1 1 0 0 1-1.414 0L2.808 16.95a1 1 0 0 1 0-1.414l2.828-2.829zm8.485 5.656l4.243-4.242L21 16.757V21h-4.242l-2.637-2.637zM5.636 9.878L2.807 7.05a1 1 0 0 1 0-1.415l2.829-2.828a1 1 0 0 1 1.414 0L9.88 5.635 5.636 9.878z"></path>                                                 
                                            </svg>                                             
                                            <h4 class="fw-bold h5 text-dark"><?php _e( 'Product Design', 'modelo2' ); ?></h4>
                                            <p class="text-secondary"><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.', 'modelo2' ); ?></p><a href="#"><?php _e( 'Learn More', 'modelo2' ); ?></a> 
                                        </div>                                         
                                    </div>                                     
                                    <div class="col-md-4 pb-3 pt-3"> 
                                        <div class="pb-3 pt-3"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="currentColor" class="mb-3 text-primary"> 
                                                <path d="M15 21h-2v-3h-2v3H9v-2H7v2H4a1 1 0 0 1-1-1v-3h2v-2H3v-2h3v-2H3V9h2V7H3V4a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v9h9a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1h-3v-2h-2v2z"></path>                                                 
                                            </svg>                                             
                                            <h4 class="fw-bold h5 text-dark"><?php _e( 'UI/UX Research', 'modelo2' ); ?></h4>
                                            <p class="text-secondary"><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.', 'modelo2' ); ?></p><a href="#"><?php _e( 'Learn More', 'modelo2' ); ?></a> 
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