<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/shop-product-list',
            'title' => __( 'Shop Product List', 'catalogo_veiculos' ),
            'category' => 'shop',
            'render_template' => 'blocks/shop-product-list/shop-product-list.php',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/shop-product-list/shop-product-list.js',
            'attributes' => array(
                'title' => array(
                    'type' => 'text',
                    'default' => 'Popular this Week'
                ),
                'count' => array(
                    'type' => 'text',
                    'default' => '4'
                ),
                'orderby' => array(
                    'type' => 'text',
                    'default' => ''
                ),
                'direction' => array(
                    'type' => 'text',
                    'default' => ''
                ),
                'sale' => array(
                    'type' => 'text',
                    'default' => ''
                ),
                'tags' => array(
                    'type' => 'text',
                    'default' => ''
                ),
                'cats' => array(
                    'type' => 'text',
                    'default' => ''
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
'title' => 'Popular this Week', 'count' => '', 'orderby' => '', 'direction' => '', 'sale' => '', 'tags' => '', 'cats' => '', 'show_ratings' => '', 'button_link' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => ''), 'button_label' => 'View More'
            ),
            'dynamic' => true
        ) );
