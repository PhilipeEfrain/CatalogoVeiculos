<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/shop-product-pick',
            'title' => __( 'Shop Product Pick', 'catalogo_veiculos' ),
            'category' => 'shop',
            'render_template' => 'blocks/shop-product-pick/shop-product-pick.php',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/shop-product-pick/shop-product-pick.js',
            'attributes' => array(
                'title' => array(
                    'type' => 'text',
                    'default' => 'Hand picked products'
                ),
                'products' => array(
                    'type' => 'array',
                    'default' => array()
                ),
                'show_ratings' => array(
                    'type' => 'text',
                    'default' => ''
                ),
                'button_link' => array(
                    'type' => 'object',
                    'default' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => '')
                ),
                'button_label' => array(
                    'type' => 'text',
                    'default' => 'View More'
                )
            ),
            'example' => array(
'title' => 'Hand picked products', 'products' => array(), 'show_ratings' => '', 'button_link' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => ''), 'button_label' => 'View More'
            ),
            'dynamic' => true
        ) );
