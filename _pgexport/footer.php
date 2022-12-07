
</section>
        <section id="footer">
            <?php if ( is_active_sidebar( 'map' ) ) : ?>
                <div class="container pg-empty-placeholder">
                    <?php dynamic_sidebar( 'map' ); ?>
                </div>
            <?php endif; ?>
            <footer class="bg-dark pt-5 text-white"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-xl-4 me-auto py-3" style="display: flex; flex-direction: column; justify-content: center; align-items: flex-start;"> 
                            <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'navbar_image', esc_url( get_template_directory_uri() . '/assets/img/logo_BMotors-01.png' ) ), 'large' ) ?>" style="max-width: 100%;"/> 
                            <div class="d-inline-flex flex-wrap"> <a href="<?php echo get_theme_mod( 'address_contact_facebook', '#' ); ?>" class="p-1 text-white" aria-label="facebook" target="_blank"> <i class="fa-facebook fa-lg fab"></i> </a> <a href="<?php echo get_theme_mod( 'address_contact_instagram', '#' ); ?>" class="p-1 text-white" aria-label="twitter" target="_blank"><i class="fa-instagram fa-lg fab"></i> </a>
                                <a href="<?php echo get_theme_mod( 'address_contact_tiktop', '#' ); ?>" class="p-1 text-white" aria-label="twitter" target="_blank"><i class="fa-lg fa-tiktok fab"></i> </a> 
                            </div>                             
                        </div>                         
                        <div class="col-sm col-xl-4 py-3"> 
                            <h2 class="fw-bold h5 mb-4 text-uppercase text-white-50"><?php echo get_theme_mod( 'footer_menu', __( 'About', 'modelo2' ) ); ?></h2> 
                            <ul class="list-unstyled">
                                <?php echo get_theme_mod( 'footer_info_01' ); ?>
                            </ul>                             
                        </div>                         
                        <div class="col-sm col-xl-2 py-3"> 
                            <h2 class="fw-bold h5 mb-4 text-uppercase text-white-50"><?php echo get_theme_mod( 'footer_bloco02', __( 'Services', 'modelo2' ) ); ?></h2> 
                            <?php if ( has_nav_menu( 'menu_footer' ) ) : ?>
                                <?php
                                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="mb-3 {CLASSES}" id="{ID}"> <a class="text-white" {ATTRS}>{TITLE}</a> 
                                                                    </li>';
                                    wp_nav_menu( array(
                                        'container' => '',
                                        'theme_location' => 'menu_footer',
                                        'items_wrap' => '<ul class="%2$s list-unstyled" id="%1$s">%3$s</ul>',
                                        'walker' => new PG_Smart_Walker_Nav_Menu()
                                ) ); ?>
                            <?php endif; ?> 
                        </div>                         
                    </div>                     
                    <div class="pb-3 pt-3 text-center"> 
                        <hr class="border-secondary mt-0"/>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-0 text-center text-md-start text-sm-center"><?php echo get_theme_mod( 'copyright', __( 'Copyright © 2020 Company Name', 'modelo2' ) ); ?></p> 
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0 text-end text-md-end text-sm-center"><?php echo get_theme_mod( 'dev', __( 'Copyright © 2020 Company Name', 'modelo2' ) ); ?></p> 
                            </div>
                        </div>                         
                    </div>                     
                </div>                 
            </footer>
        </section>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <?php wp_footer(); ?>
    </body>
</html>
