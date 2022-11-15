
( function ( blocks, element, blockEditor ) {
    const el = element.createElement,
        registerBlockType = blocks.registerBlockType,
        ServerSideRender = PgServerSideRender,
        InspectorControls = blockEditor.InspectorControls,
        useBlockProps = blockEditor.useBlockProps;
        
    const {__} = wp.i18n;
    const {ColorPicker, TextControl, ToggleControl, SelectControl, Panel, PanelBody, Disabled, TextareaControl, BaseControl} = wp.components;
    const {useSelect} = wp.data;
    const {RawHTML, Fragment} = element;
   
    const {InnerBlocks, URLInputButton, RichText} = wp.blockEditor;
    const useInnerBlocksProps = blockEditor.useInnerBlocksProps || blockEditor.__experimentalUseInnerBlocksProps;
    
    const propOrDefault = function(val, prop, field) {
        if(block.attributes[prop] && (val === null || val === '')) {
            return field ? block.attributes[prop].default[field] : block.attributes[prop].default;
        }
        return val;
    }
    
    const block = registerBlockType( 'catalogo-veiculos/shop-product-pick', {
        apiVersion: 2,
        title: 'Shop Product Pick',
        icon: 'block-default',
        category: 'shop',
        keywords: [],
        supports: {color: {background: false,text: false,gradients: false,link: false,},typography: {fontSize: false,},anchor: false,align: false,},
        attributes: {
            title: {
                type: 'text',
                default: `Hand picked products`,
            },
            products: {
                type: 'array',
                default: [],
            },
            show_ratings: {
                type: 'text',
                default: '',
            },
            button_link: {
                type: 'object',
                default: {post_id: 0, url: '', title: '', 'post_type': null},
            },
            button_label: {
                type: 'text',
                default: `View More`,
            }
        },
        example: { attributes: { title: `Hand picked products`, products: [], show_ratings: '', button_link: {post_id: 0, url: '', title: '', 'post_type': null}, button_label: `View More` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({});
            const setAttributes = props.setAttributes; 
            
            const products_posts = useSelect(function( select ) {
                const s = {};
                if(props.attributes.products) {
                    props.attributes.products.forEach(function(p) {
                        s['products_' + p.id] = select('core').getEntityRecord('postType', 'product', p.id);
                    })
                }  
                
                return s;
            }, [props.attributes.products] );
            
            if(props.attributes.products) {
                props.attributes.products.forEach(function(p) {
                    props['products_' + p.id] = products_posts['products_' + p.id];
                })
            }  
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                
                        el( ServerSideRender, {
                            block: 'catalogo-veiculos/shop-product-pick',
                            httpMethod: 'POST',
                            attributes: props.attributes,
                            innerBlocksProps: innerBlocksProps,
                            blockProps: blockProps
                        } ),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgPostSelectorControl('products', setAttributes, props, 'Shown products', '', 'product' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.title,
                                        help: __( '' ),
                                        label: __( 'Title' ),
                                        onChange: function(val) { setAttributes({title: val}) },
                                        type: 'text'
                                    }),
                                    el(ToggleControl, {
                                        checked: props.attributes.show_ratings === '1',
                                        label: __( 'Show ratings' ),
                                        onChange: function(val) { setAttributes({show_ratings: val ? '1' : null}) },
                                        help: __( '' ),
                                    }),
                                    pgUrlControl('button_link', setAttributes, props, 'Button link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.button_label,
                                        help: __( '' ),
                                        label: __( 'Button label' ),
                                        onChange: function(val) { setAttributes({button_label: val}) },
                                        type: 'text'
                                    }),    
                                ])
                            )
                        ]
                    )                            

            ]);
        },

        save: function(props) {
            return null;
        }                        

    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
