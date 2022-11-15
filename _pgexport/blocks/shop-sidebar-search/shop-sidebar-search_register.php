<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/shop-sidebar-search',
            'title' => __( 'Shop Sidebar Search', 'catalogo_veiculos' ),
            'category' => 'shop',
            'render_template' => 'blocks/shop-sidebar-search/shop-sidebar-search.php',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/shop-sidebar-search/shop-sidebar-search.js',
            'attributes' => array(

            ),
            'example' => array(

            ),
            'dynamic' => true
        ) );
