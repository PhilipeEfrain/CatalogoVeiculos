<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/shop-categories-select',
            'title' => __( 'Shop Categories Select', 'catalogo_veiculos' ),
            'category' => 'shop',
            'render_template' => 'blocks/shop-categories-select/shop-categories-select.php',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/shop-categories-select/shop-categories-select.js',
            'attributes' => array(
                'list' => array(
                    'type' => 'text',
                    'default' => '0'
                ),
                'title' => array(
                    'type' => 'text',
                    'default' => 'Selected categories'
                )
            ),
            'example' => array(
'list' => '', 'title' => 'Selected categories'
            ),
            'dynamic' => true
        ) );
