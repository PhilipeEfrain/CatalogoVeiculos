<!DOCTYPE html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"/> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>          
        <meta name="author" content=""/>          
        <!-- Bootstrap core CSS -->                  
        <!-- Custom styles for this template -->                                             
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?> 
        <section id="contact"> 
            <div class="bg-light header_top py-1"> 
                <div class="container"> 
                    <div class="align-items-center g-0 row"> 
                        <div class="col"> 
                            <div class="row"> 
                                <div class="col-md-auto"> <i class="fa-phone-alt fa-sm fas"></i> <a href="<?php echo get_theme_mod( 'address_contact_number_link', '#' ); ?>" class="me-md-2 text-black underlinenot"><?php echo get_theme_mod( 'address_contact_number', '<span class="me-md-1"> </span> <span class="d-md-inline d-none"> +0-123-456-789 </span>' ); ?></a> 
                                </div>                                 
                                <div class="col-md-auto"> <span class="me-md-1"> <i class="fa-envelope fa-sm fas"></i> </span> <a href="<?php echo get_theme_mod( 'address_contact_email_link', '#' ); ?>" class="me-md-2 text-black underlinenot"><?php echo get_theme_mod( 'address_contact_email', '<span class="d-md-inline d-none"> info@company.com </span>' ); ?></a> 
                                </div>                                 
                            </div>                             
                        </div>                         
                        <div class="col-auto"> 
                            <div class="py-1"> <a href="<?php echo get_theme_mod( 'address_contact_facebook', '#' ); ?>" aria-label="facebook" class="text-black underlinenot" target="_blank"> <i class="fa-facebook fa-lg fab"></i> </a> <a href="<?php echo get_theme_mod( 'address_contact_instagram', '#' ); ?>" aria-label="instagram" class="text-black underlinenot" target="_blank"> <i class="fa-instagram fa-lg fab"></i> </a>
                                <a href="<?php echo get_theme_mod( 'address_contact_tiktop', '#' ); ?>" aria-label="twitter" class="text-black underlinenot" target="_blank"> <i class="fa-lg fa-tiktok fab"></i> </a> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section id="navbar"> 
            <div class="container"> 
                <nav class="navbar navbar-dark navbar-expand-lg pb-3 position-relative pt-3 shadow-none"> 
                    <div class="container position-relative"> <a class="align-items-center d-inline-flex fw-bold gap-1 navbar-brand text-uppercase" href="#"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'navbar_image', esc_url( get_template_directory_uri() . '/assets/img/logo_BMotors-01.png' ) ), 'large' ) ?>" style="max-width: 100%;"/></a> 
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-2" aria-controls="navbarNavDropdown-2" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
                        </button>                         
                        <div class="collapse navbar-collapse " id="navbarNavDropdown-2"> 
                            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                <?php
                                    PG_Smart_Walker_Nav_Menu::init();
                                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item"> <a class="nav-link pb-lg-3 pe-lg-4 ps-lg-4 pt-lg-3 {CLASSES}" aria-current="page" id="{ID}" {ATTRS}>{TITLE}</a> 
                                                                    </li>';
                                    PG_Smart_Walker_Nav_Menu::$options['current_class'] = 'active';
                                    wp_nav_menu( array(
                                        'container' => '',
                                        'theme_location' => 'primary',
                                        'items_wrap' => '<ul class="%2$s ms-auto navbar-nav" id="%1$s">%3$s</ul>',
                                        'walker' => new PG_Smart_Walker_Nav_Menu()
                                ) ); ?>
                            <?php endif; ?> 
                        </div>                         
                    </div>                     
                </nav>                 
            </div>             
        </section>         
        <section class="pg-empty-placeholder">