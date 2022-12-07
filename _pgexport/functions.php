<?php
if ( ! function_exists( 'modelo2_setup' ) ) :

function modelo2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'modelo2', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'modelo2' ),
        'social'  => __( 'Social Links Menu', 'modelo2' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    register_nav_menu(  'menu_footer', __( 'Menu Footer', 'modelo2' )  );

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // modelo2_setup

add_action( 'after_setup_theme', 'modelo2_setup' );


if ( ! function_exists( 'modelo2_init' ) ) :

function modelo2_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // modelo2_setup

add_action( 'init', 'modelo2_init' );


if ( ! function_exists( 'modelo2_custom_image_sizes_names' ) ) :

function modelo2_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'modelo2_custom_image_sizes_names' );
endif;// modelo2_custom_image_sizes_names



if ( ! function_exists( 'modelo2_widgets_init' ) ) :

function modelo2_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Pesquisa Avançada', 'modelo2' ),
        'id' => 'search',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Incorporar mapa', 'modelo2' ),
        'id' => 'map',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Compartilhar nas redes sociais', 'modelo2' ),
        'id' => 'compartilhar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Enviar proposta', 'modelo2' ),
        'id' => 'envie_proposta',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Simular financiamento', 'modelo2' ),
        'id' => 'simular_financiamento',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'modelo2_widgets_init' );
endif;// modelo2_widgets_init



if ( ! function_exists( 'modelo2_customize_register' ) ) :

function modelo2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'top', array(
        'title' => __( 'Topo', 'modelo2' )
    ));

    $wp_customize->add_section( 'link_shop', array(
        'title' => __( 'Link da loja', 'modelo2' )
    ));

    $wp_customize->add_section( 'financieamento', array(
        'title' => __( 'Financiamento', 'modelo2' )
    ));

    $wp_customize->add_section( 'insticional', array(
        'title' => __( 'Institucional', 'modelo2' )
    ));

    $wp_customize->add_section( 'address_contact', array(
        'title' => __( 'Informações de contato', 'modelo2' )
    ));

    $wp_customize->add_section( 'navbar', array(
        'title' => __( 'Navbar', 'modelo2' )
    ));

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer', 'modelo2' )
    ));

    $wp_customize->add_section( 'financieamento', array(
        'title' => __( 'Financiamento', 'modelo2' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'top_img', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'top_img', array(
        'label' => __( 'Imagem do topo', 'modelo2' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'top'
    ) ) );

    $wp_customize->add_setting( 'top_call', array(
        'type' => 'theme_mod',
        'default' => __( 'Adopt A Pet', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'top_call', array(
        'label' => __( 'Chamada', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'top'
    ));

    $wp_customize->add_setting( 'top_call_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_call_color', array(
        'label' => __( 'Cor da chamada', 'modelo2' ),
        'type' => 'color',
        'section' => 'top'
    ) ) );

    $wp_customize->add_setting( 'top_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Thousands of homeless dogs, one act of kindness', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'top_title', array(
        'label' => __( 'Título', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'top'
    ));

    $wp_customize->add_setting( 'top_title_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_title_color', array(
        'label' => __( 'Cor do título', 'modelo2' ),
        'type' => 'color',
        'section' => 'top'
    ) ) );

    $wp_customize->add_setting( 'top_describe', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac sagittis neque, vel egestas est.', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'top_describe', array(
        'label' => __( 'Descrição', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'top'
    ));

    $wp_customize->add_setting( 'top_describe_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_describe_color', array(
        'label' => __( 'Cor da cescrição', 'modelo2' ),
        'type' => 'color',
        'section' => 'top'
    ) ) );

    $wp_customize->add_setting( 'top_button', array(
        'type' => 'theme_mod',
        'default' => __( 'Learn More', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'top_button', array(
        'label' => __( 'Botão de chamada', 'modelo2' ),
        'type' => 'text',
        'section' => 'top'
    ));

    $wp_customize->add_setting( 'top_button_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'top_button_link', array(
        'label' => __( 'Link do botão de chamada', 'modelo2' ),
        'type' => 'url',
        'section' => 'top'
    ));

    $wp_customize->add_setting( 'top_button_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_button_color', array(
        'label' => __( 'Cor do botão de chamada', 'modelo2' ),
        'type' => 'color',
        'section' => 'top'
    ) ) );

    $wp_customize->add_setting( 'name_shop_button', array(
        'type' => 'theme_mod',
        'default' => __( 'Veja todo o catalogo', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'name_shop_button', array(
        'label' => __( 'Nome do botção', 'modelo2' ),
        'type' => 'text',
        'section' => 'link_shop'
    ));

    $wp_customize->add_setting( 'link_shop_button_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_shop_button_link', array(
        'label' => __( 'Link do botão', 'modelo2' ),
        'type' => 'url',
        'section' => 'link_shop'
    ));

    $wp_customize->add_setting( 'financieamento_top', array(
        'type' => 'theme_mod',
        'default' => __( 'The Latest', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'financieamento_top', array(
        'label' => __( 'Topo Texto', 'modelo2' ),
        'type' => 'text',
        'section' => 'financieamento'
    ));

    $wp_customize->add_setting( 'financieamento_topo_cor', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'financieamento_topo_cor', array(
        'label' => __( 'Cor do texto de topo', 'modelo2' ),
        'type' => 'color',
        'section' => 'financieamento'
    ) ) );

    $wp_customize->add_setting( 'financieamento_chamada', array(
        'type' => 'theme_mod',
        'default' => __( 'Our ability to feel, act and communicate is indistinguishable from magic.', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'financieamento_chamada', array(
        'label' => __( 'Chamada Texto', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'financieamento'
    ));

    $wp_customize->add_setting( 'financieamento_chamada_cor', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'financieamento_chamada_cor', array(
        'label' => __( 'Cor da chamada', 'modelo2' ),
        'type' => 'color',
        'section' => 'financieamento'
    ) ) );

    $wp_customize->add_setting( 'top_button', array(
        'type' => 'theme_mod',
        'default' => __( 'Learn More', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'top_button', array(
        'label' => __( 'Botão de chamada', 'modelo2' ),
        'type' => 'text',
        'section' => 'financieamento'
    ));

    $wp_customize->add_setting( 'top_button_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'top_button_link', array(
        'label' => __( 'Link do botão de chamada', 'modelo2' ),
        'type' => 'url',
        'section' => 'financieamento'
    ));

    $wp_customize->add_setting( 'top_button_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_button_color', array(
        'label' => __( 'Cor do botão de chamada', 'modelo2' ),
        'type' => 'color',
        'section' => 'financieamento'
    ) ) );

    $wp_customize->add_setting( 'insticional_chamada', array(
        'type' => 'theme_mod',
        'default' => __( 'Services', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_chamada', array(
        'label' => __( 'Chamada', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'color_chamada', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_chamada', array(
        'label' => __( 'Cor do texto da chamada', 'modelo2' ),
        'type' => 'color',
        'section' => 'insticional'
    ) ) );

    $wp_customize->add_setting( 'insticional_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'We can do useful things for our clients', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_titulo', array(
        'label' => __( 'Título', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'You never change things by fighting the existing reality. To change something, build a new model that makes the existing model obsolete.', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_texto', array(
        'label' => __( 'Texto', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_button', array(
        'type' => 'theme_mod',
        'default' => __( 'Learn More', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_button', array(
        'label' => __( 'Botão de chamada', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_button_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_button_link', array(
        'label' => __( 'Link do botão de chamada', 'modelo2' ),
        'type' => 'url',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco01_icon', array(
        'type' => 'theme_mod',
        'default' => __( 'fa-2x fa-money-check fas iconsmarging', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco01_icon', array(
        'label' => __( 'Ícone Bloco 01', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'show_icon01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_icon01', array(
        'label' => __( 'Mostrar icone 01', 'modelo2' ),
        'type' => 'checkbox',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco01', array(
        'type' => 'theme_mod',
        'default' => __( 'Compra', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco01', array(
        'label' => __( 'Título Bloco 01', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco01_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco01_texto', array(
        'label' => __( 'Texto Bloco 01', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco01_botao', array(
        'type' => 'theme_mod',
        'default' => __( 'Learn More', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco01_botao', array(
        'label' => __( 'Botão Bloco 01', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco01_botao_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco01_botao_link', array(
        'label' => __( 'Link Bloco 01', 'modelo2' ),
        'type' => 'url',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco02_icon', array(
        'type' => 'theme_mod',
        'default' => __( 'fa-2x fa-hand-holding-usd fas iconsmarging', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco02_icon', array(
        'label' => __( 'Ícone Bloco 02', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'show_icon02', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_icon02', array(
        'label' => __( 'Mostrar icone 02', 'modelo2' ),
        'type' => 'checkbox',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco02', array(
        'type' => 'theme_mod',
        'default' => __( 'Venda', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco02', array(
        'label' => __( 'Título Bloco 02', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco02_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco02_texto', array(
        'label' => __( 'Texto Bloco 02', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco02_botao', array(
        'type' => 'theme_mod',
        'default' => __( 'Learn More', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco02_botao', array(
        'label' => __( 'Botão Bloco 02', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco02_botao_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco02_botao_link', array(
        'label' => __( 'Link Bloco 02', 'modelo2' ),
        'type' => 'url',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco03_icon', array(
        'type' => 'theme_mod',
        'default' => __( 'fa-2x fa-phone-volume fas iconsmarging', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco03_icon', array(
        'label' => __( 'Ícone Bloco 03', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'show_icon03', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'show_icon03', array(
        'label' => __( 'Mostrar icone 03', 'modelo2' ),
        'type' => 'checkbox',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco03', array(
        'type' => 'theme_mod',
        'default' => __( 'Ligamos pra você', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco03', array(
        'label' => __( 'Título Bloco 03', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco03_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco03_texto', array(
        'label' => __( 'Texto Bloco 03', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco03_botao', array(
        'type' => 'theme_mod',
        'default' => __( 'Learn More', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco03_botao', array(
        'label' => __( 'Botão Bloco 03', 'modelo2' ),
        'type' => 'text',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'insticional_bloco03_botao_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'insticional_bloco03_botao_link', array(
        'label' => __( 'Link Bloco 03', 'modelo2' ),
        'type' => 'url',
        'section' => 'insticional'
    ));

    $wp_customize->add_setting( 'address_contact_number', array(
        'type' => 'theme_mod',
        'default' => '<span class="me-md-1"> </span> <span class="d-md-inline d-none"> +0-123-456-789 </span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'address_contact_number', array(
        'label' => __( 'Numero de contato', 'modelo2' ),
        'type' => 'text',
        'section' => 'address_contact'
    ));

    $wp_customize->add_setting( 'address_contact_number_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'address_contact_number_link', array(
        'label' => __( 'Link do número de contato', 'modelo2' ),
        'type' => 'url',
        'section' => 'address_contact'
    ));

    $wp_customize->add_setting( 'address_contact_email', array(
        'type' => 'theme_mod',
        'default' => '<span class="d-md-inline d-none"> info@company.com </span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'address_contact_email', array(
        'label' => __( 'E-mail de contato', 'modelo2' ),
        'type' => 'text',
        'section' => 'address_contact'
    ));

    $wp_customize->add_setting( 'address_contact_email_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'address_contact_email_link', array(
        'label' => __( 'Link do email', 'modelo2' ),
        'type' => 'url',
        'section' => 'address_contact'
    ));

    $wp_customize->add_setting( 'address_contact_facebook', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'address_contact_facebook', array(
        'label' => __( 'Link facebook', 'modelo2' ),
        'type' => 'url',
        'section' => 'address_contact'
    ));

    $wp_customize->add_setting( 'address_contact_instagram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'address_contact_instagram', array(
        'label' => __( 'Link instagram', 'modelo2' ),
        'type' => 'url',
        'section' => 'address_contact'
    ));

    $wp_customize->add_setting( 'address_contact_tiktop', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'address_contact_tiktop', array(
        'label' => __( 'Link tiktop', 'modelo2' ),
        'type' => 'url',
        'section' => 'address_contact'
    ));

    $wp_customize->add_setting( 'navbar_image', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'navbar_image', array(
        'label' => __( 'Logo do site', 'modelo2' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'navbar'
    ) ) );

    $wp_customize->add_setting( 'footer_menu', array(
        'type' => 'theme_mod',
        'default' => __( 'About', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_menu', array(
        'label' => __( 'Bloco 01', 'modelo2' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'footer_info_01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_info_01', array(
        'label' => __( 'Informações do bloco 01', 'modelo2' ),
        'type' => 'textarea',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'footer_bloco02', array(
        'type' => 'theme_mod',
        'default' => __( 'Services', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_bloco02', array(
        'label' => __( 'Bloco 02', 'modelo2' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'copyright', array(
        'type' => 'theme_mod',
        'default' => __( 'Copyright © 2020 Company Name', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'copyright', array(
        'label' => __( 'Copyright', 'modelo2' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'dev', array(
        'type' => 'theme_mod',
        'default' => __( 'Copyright © 2020 Company Name', 'modelo2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'dev', array(
        'label' => __( 'Desenvolvido', 'modelo2' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'modelo2_customize_register' );
endif;// modelo2_customize_register


if ( ! function_exists( 'modelo2_enqueue_scripts' ) ) :
    function modelo2_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'modelo2-popper' );
    wp_enqueue_script( 'modelo2-popper', get_template_directory_uri() . '/assets/js/popper.min.js', false, null, true);

    wp_deregister_script( 'modelo2-bootstrap' );
    wp_enqueue_script( 'modelo2-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'modelo2-all' );
    wp_enqueue_script( 'modelo2-all', 'https://use.fontawesome.com/releases/v5.13.1/js/all.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'modelo2-bootstrap' );
    wp_enqueue_style( 'modelo2-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'modelo2-blocks' );
    wp_enqueue_style( 'modelo2-blocks', get_template_directory_uri() . '/blocks.css', false, null, 'all');

    wp_deregister_style( 'modelo2-style' );
    wp_enqueue_style( 'modelo2-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    wp_deregister_style( 'modelo2-fontawesome' );
    wp_enqueue_style( 'modelo2-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'modelo2-all' );
    wp_enqueue_style( 'modelo2-all', 'https://use.fontawesome.com/releases/v5.13.1/css/all.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'modelo2_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wc_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";
require_once "inc/wp_pg_pagination.php";

    /* Pinegrow generated Include Resources End */

/* Setting up theme supports options */

function modelo2_setup_theme_supports() {
    // Don't edit anything between the following comments.
    /* Pinegrow generated Theme Supports Begin */

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    /* Pinegrow generated Theme Supports End */
}
add_action('after_setup_theme', 'modelo2_setup_theme_supports');

/* End of setting up theme supports options */


/* Setting up WooCommerce filters */
/* Pinegrow generated WooCommerce Filters Begin */

    /* This filter lets us multiple variants of the same template name. It also handles locating the templates that are present in the theme or plugin. */        
    add_filter( 'wc_get_template', function( $template, $template_name, $args, $template_path, $default_path ) {
        global $pg_wc_use_template, $pg_wc_use_template_cache_modelo2;
        if(!isset($pg_wc_use_template_cache_modelo2)) $pg_wc_use_template_cache_modelo2 = array();
        
        if( !empty($pg_wc_use_template) ) {
            $template_variant = trailingslashit( get_template_directory() ) . 'woocommerce/' . str_replace( '.php', '-'.$pg_wc_use_template.'.php', $template_name);
            $template_key = $template_name . '-' . $pg_wc_use_template;
        } else {
            $template_key = $template_name;
            $template_variant = trailingslashit( get_template_directory() ) . 'woocommerce/' . $template_name;
        }
            
        if(isset($pg_wc_use_template_cache_modelo2[ $template_key ])) {
            if($pg_wc_use_template_cache_modelo2[ $template_key ]) {
                $template = $template_variant;
            }
        } else if(file_exists($template_variant)) {
            $template = $template_variant;
            $pg_wc_use_template_cache_modelo2[ $template_key ] = true;
        } else {
            $pg_wc_use_template_cache_modelo2[ $template_key ] = false;
        }
 
        return $template;
    }, 10, 5 );  
            
    /* Pinegrow generated WooCommerce Filters End */
/* End Setting up WooCommerce filters */


/* Creating Editor Blocks with Pinegrow */

function modelo2_blocks_init() {
    // Register blocks. Don't edit anything between the following comments.
    /* Pinegrow generated Register Pinegrow Blocks Begin */

    /* Pinegrow generated Register Pinegrow Blocks End */
}
add_action('init', 'modelo2_blocks_init');

/* End of creating Editor Blocks with Pinegrow */


/* Register Blocks Categories */

function modelo2_register_blocks_categories( $categories ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Register Blocks Category Begin */

$categories = array_merge( $categories, array( array(
        'slug' => 'shop',
        'title' => __( 'Shop blocks', 'modelo2' )
    ) ) );

    /* Pinegrow generated Register Blocks Category End */
    
    return $categories;
}
add_action( version_compare('5.8', get_bloginfo('version'), '<=' ) ? 'block_categories_all' : 'block_categories', 'modelo2_register_blocks_categories');

/* End of registering Blocks Categories */

?>