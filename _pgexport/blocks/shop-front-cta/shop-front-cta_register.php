<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/shop-front-cta',
            'title' => __( 'Shop Front CTA', 'catalogo_veiculos' ),
            'category' => 'shop',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/shop-front-cta/shop-front-cta.js',
            'attributes' => array(
                'top_title' => array(
                    'type' => 'text',
                    'default' => ''
                ),
                'text' => array(
                    'type' => 'text',
                    'default' => 'Seasonal Sale Upto 70% off'
                ),
                'link' => array(
                    'type' => 'object',
                    'default' => array('post_id' => 0, 'url' => '', 'post_type' => '', 'title' => '')
                ),
                'label' => array(
                    'type' => 'text',
                    'default' => 'Shop Collection'
                ),
                'image' => array(
                    'type' => 'object',
                    'default' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1610970161790-57a21fc7d775?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=480&h=360&fit=crop', 'size' => '', 'svg' => '', 'alt' => 'CTA image')
                )
            ),
            'example' => array(
'top_title' => 'Grab your collection today', 'text' => 'Seasonal Sale Upto 70% off', 'link' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => ''), 'label' => 'Shop Collection', 'image' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1610970161790-57a21fc7d775?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=480&h=360&fit=crop', 'size' => '', 'svg' => '', 'alt' => 'CTA image')
            ),
            'dynamic' => false
        ) );
