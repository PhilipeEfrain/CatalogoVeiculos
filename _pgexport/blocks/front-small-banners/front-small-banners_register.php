<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/front-small-banners',
            'title' => __( 'Front Small Banners', 'catalogo_veiculos' ),
            'category' => 'shop',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/front-small-banners/front-small-banners.js',
            'attributes' => array(

            ),
            'example' => array(

            ),
            'dynamic' => false,
            'has_inner_blocks' => true
        ) );
