<section <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array() ); else echo 'data-wp-block-props="true"'; ?>> 
    <div class="container pb-4 pt-4"> 
        <div class="align-items-center row"> 
            <div class="col"> 
                <hr class="mb-0 mt-0"/> 
            </div>             
            <div class="col-auto"> 
                <h2 class="fw-normal lead mb-0 text-dark"><?php echo PG_Blocks::getAttribute( $args, 'title' ) ?></h2> 
            </div>             
            <div class="col"> 
                <hr class="mb-0 mt-0"/> 
            </div>             
        </div>         
    </div>     
    <div class="container"> 
        <?php
            $products_query_args = array(
                'post__in' => PG_Blocks::getAttributeAsPostIds( $args, 'products' ),
                'post_type' => 'product',
                'post_status' => 'any',
                'posts_per_page' => -1,
                'ignore_sticky_posts' => true,
                'orderby' => 'post__in',
                'sale' => PG_Blocks::getAttributeForAction( $args, 'sale' ),
                'tax_query' => array_filter( array(PG_Helper::getTaxonomyQuery( 'product_cat', PG_Blocks::getAttributeForAction( $args, 'cats' ) ), PG_Helper::getTaxonomyQuery( 'product_tag', PG_Blocks::getAttributeForAction( $args, 'tags' ) )) )
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
            }
            if( $product_query_args[ 'sale' ] === 'true' ) {
                $product_query_args[ 'post__in' ] = array_merge( array( 0 ), wc_get_product_ids_on_sale() );
            } else if( $product_query_args[ 'sale' ] === 'false' ) {
                $product_query_args[ 'post__not_in' ] = array_merge( array( 0 ), wc_get_product_ids_on_sale() );
            }
            unset( $product_query_args[ 'sale' ] );
        ?>
        <?php $products_query = new WP_Query( $products_query_args ); ?>
        <?php if ( $products_query->have_posts() ) : ?>
            <div class="justify-content-center row"> 
                <?php while ( $products_query->have_posts() ) : $products_query->the_post(); ?>
                    <?php global $product, $post; ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div <?php wc_product_class( 'col-6 col-lg-3 col-md-4 pb-3 pt-3' , $product ); ?> id="post-<?php the_ID(); ?>"> 
                        <div class="position-relative"> <a href="<?php echo esc_url( apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product ) ); ?>" class="d-block mb-3"><?php wc_get_template( 'loop/product-image.php' ) ?></a> 
                            <?php $terms = get_the_terms( get_the_ID(), 'product_cat' ) ?>
                            <?php if( !empty( $terms ) ) : ?>
                                <?php foreach( $terms as $term_i => $term ) : ?>
                                    <?php if( $term_i == 0 ) : ?>
                                        <a href="<?php echo esc_url( get_term_link( $term, 'product_cat' ) ) ?>" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php echo $term->name; ?></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?> <a href="<?php echo esc_url( apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product ) ); ?>" class="link-dark text-decoration-none"><?php wc_get_template( 'loop/title.php' ) ?></a> 
                            <?php woocommerce_template_loop_price() ?> 
                            <?php if ( PG_Blocks::getAttribute( $args, 'show_ratings', false ) ) : ?>
                                <?php woocommerce_template_loop_rating() ?>
                            <?php endif; ?> 
                            <?php PG_WC_Helper::withTemplateVariant( 'dark', function() { woocommerce_show_product_loop_sale_flash(); } ); ?> 
                        </div>                         
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>                                                    
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'catalogo_veiculos' ); ?></p>
        <?php endif; ?> 
        <?php if ( PG_Blocks::getLinkUrl( $args, 'button_link', false ) ) : ?>
            <div class="pb-4 pt-4 text-center"><a href="<?php echo PG_Blocks::getLinkUrl( $args, 'button_link' ) ?>" class="btn btn-dark pb-2 ps-4 pe-4 pt-2"><?php echo PG_Blocks::getAttribute( $args, 'button_label' ) ?></a> 
            </div>
        <?php endif; ?> 
    </div>     
</section>