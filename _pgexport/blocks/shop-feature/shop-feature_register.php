<?php

        PG_Blocks::register_block_type( array(
            'name' => 'catalogo-veiculos/shop-feature',
            'title' => __( 'Shop Feature', 'catalogo_veiculos' ),
            'category' => 'shop',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/shop-feature/shop-feature.js',
            'attributes' => array(
                'image' => array(
                    'type' => 'object',
                    'default' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3rem" height="3rem" class="mb-3 text-dark"> 
    <g> 
        <path fill="none" d="M0 0h24v24H0z"/> 
        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"/> 
    </g>     
</svg>', 'alt' => null)
                ),
                'title' => array(
                    'type' => 'text',
                    'default' => 'Free Shipping'
                ),
                'text' => array(
                    'type' => 'text',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod'
                )
            ),
            'example' => array(
'image' => array('id' => 0, 'url' => '', 'size' => '', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3rem" height="3rem" class="mb-3 text-dark"> 
    <g> 
        <path fill="none" d="M0 0h24v24H0z"/> 
        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"/> 
    </g>     
</svg>', 'alt' => null), 'title' => 'Free Shipping', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod'
            ),
            'dynamic' => false
        ) );
