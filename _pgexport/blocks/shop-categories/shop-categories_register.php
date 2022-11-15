<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/shop-categories',
            'title' => __( 'Shop Categories', 'catalogo_veiculos' ),
            'category' => 'shop',
            'render_template' => 'blocks/shop-categories/shop-categories.php',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/shop-categories/shop-categories.js',
            'attributes' => array(
                'parent' => array(
                    'type' => 'text',
                    'default' => '0'
                ),
                'title' => array(
                    'type' => 'text',
                    'default' => 'Subcategories'
                )
            ),
            'example' => array(
'parent' => '', 'title' => 'Subcategories'
            ),
            'dynamic' => true
        ) );
