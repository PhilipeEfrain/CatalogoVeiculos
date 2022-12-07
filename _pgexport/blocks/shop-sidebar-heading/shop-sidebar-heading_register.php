<?php

        PG_Blocks::register_block_type( array(
            'name' => 'modelo2/shop-sidebar-heading',
            'title' => __( 'Shop Sidebar Heading', 'modelo2' ),
            'category' => 'shop',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/shop-sidebar-heading/shop-sidebar-heading.js',
            'attributes' => array(
                'heading' => array(
                    'type' => 'text',
                    'default' => 'Search'
                )
            ),
            'example' => array(
'heading' => 'Search'
            ),
            'dynamic' => false
        ) );
