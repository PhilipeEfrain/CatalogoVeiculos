<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/shop-newsletter',
            'title' => __( 'Shop Newsletter', 'catalogo_veiculos' ),
            'category' => 'shop',
            'render_template' => 'blocks/shop-newsletter/shop-newsletter.php',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/shop-newsletter/shop-newsletter.js',
            'attributes' => array(
                'title' => array(
                    'type' => 'text',
                    'default' => 'Join our newsletter and get 15% off'
                ),
                'subtitle' => array(
                    'type' => 'text',
                    'default' => 'Sign up for our newsletter to receive updates and exclusive offers'
                )
            ),
            'example' => array(
'title' => 'Join our newsletter and get 15% off', 'subtitle' => 'Sign up for our newsletter to receive updates and exclusive offers'
            ),
            'dynamic' => true
        ) );
