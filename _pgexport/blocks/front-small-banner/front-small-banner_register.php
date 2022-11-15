<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/front-small-banner',
            'title' => __( 'Front Small Banner', 'catalogo_veiculos' ),
            'category' => 'shop',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/front-small-banner/front-small-banner.js',
            'attributes' => array(
                'image' => array(
                    'type' => 'object',
                    'default' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1467043237213-65f2da53396f?fp-z=3.75&fp-y=.5&fp-x=0&crop=focalpoint&fit=crop&w=280&h=200', 'size' => '', 'svg' => '', 'alt' => 'Product image')
                ),
                'title' => array(
                    'type' => 'text',
                    'default' => 'Mens Summer Collection'
                ),
                'link_label' => array(
                    'type' => 'text',
                    'default' => 'View Collection'
                ),
                'link_url' => array(
                    'type' => 'object',
                    'default' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
                )
            ),
            'example' => array(
'image' => array('id' => 0, 'url' => 'https://images.unsplash.com/photo-1467043237213-65f2da53396f?fp-z=3.75&fp-y=.5&fp-x=0&crop=focalpoint&fit=crop&w=280&h=200', 'size' => '', 'svg' => '', 'alt' => 'Product image'), 'title' => 'Mens Summer Collection', 'link_label' => 'View Collection', 'link_url' => array('post_id' => 0, 'url' => '#', 'post_type' => '', 'title' => '')
            ),
            'dynamic' => false
        ) );
