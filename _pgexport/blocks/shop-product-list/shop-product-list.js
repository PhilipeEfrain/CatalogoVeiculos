
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
    
    const block = registerBlockType( 'catalogo-veiculos/shop-product-list', {
        apiVersion: 2,
        title: 'Shop Product List',
        icon: 'block-default',
        category: 'shop',
        keywords: [],
        supports: {color: {background: false,text: false,gradients: false,link: false,},typography: {fontSize: false,},anchor: false,align: false,},
        attributes: {
            title: {
                type: 'text',
                default: `Popular this Week`,
            },
            count: {
                type: 'text',
                default: '4',
            },
            orderby: {
                type: 'text',
                default: '',
            },
            direction: {
                type: 'text',
                default: '',
            },
            sale: {
                type: 'text',
                default: '',
            },
            tags: {
                type: 'text',
                default: '',
            },
            cats: {
                type: 'text',
                default: '',
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
        example: { attributes: { title: `Popular this Week`, count: '', orderby: '', direction: '', sale: '', tags: '', cats: '', show_ratings: '', button_link: {post_id: 0, url: '', title: '', 'post_type': null}, button_label: `View More` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({});
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                
                        el( ServerSideRender, {
                            block: 'catalogo-veiculos/shop-product-list',
                            httpMethod: 'POST',
                            attributes: props.attributes,
                            innerBlocksProps: innerBlocksProps,
                            blockProps: blockProps
                        } ),                        
                
                    el( InspectorControls, {},
                        [
                            
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
                                    el(SelectControl, {
                                        value: props.attributes.count,
                                        label: __( 'How many products to show?' ),
                                        onChange: function(val) { setAttributes({count: val}) },
                                        options: [
                                            { value: '', label: '-' },
                                            { value: '1', label: '1' },
                                            { value: '2', label: '2' },
                                            { value: '3', label: '3' },
                                            { value: '4', label: '4' },
                                            { value: '5', label: '5' },
                                            { value: '6', label: '6' },
                                            { value: '7', label: '7' },
                                            { value: '8', label: '8' },
                                            { value: '9', label: '9' },
                                            { value: '10', label: '10' },
                                            { value: '11', label: '11' },
                                            { value: '12', label: '12' }
                                        ]
                                    }),
                                    el(SelectControl, {
                                        value: props.attributes.orderby,
                                        label: __( 'Order by' ),
                                        onChange: function(val) { setAttributes({orderby: val}) },
                                        options: [
                                            { value: '', label: '-' },
                                            { value: 'name', label: 'Slug' },
                                            { value: 'title', label: 'Title' },
                                            { value: 'price', label: 'Price' },
                                            { value: 'rating', label: 'Average rating' },
                                            { value: 'review_count', label: 'Review count' },
                                            { value: 'total_sales', label: 'Total sales' },
                                            { value: 'date', label: 'Date' },
                                            { value: 'modified', label: 'Modified date' },
                                            { value: 'ID', label: 'Id' },
                                            { value: 'description', label: 'Description' },
                                            { value: 'comment_count', label: 'Comment count' },
                                            { value: 'menu_order', label: 'Menu order' },
                                            { value: 'meta_value', label: 'Meta value' },
                                            { value: 'meta_value_num', label: 'Meta value numeric' },
                                            { value: 'rand', label: 'Random' }
                                        ]
                                    }),
                                    el(SelectControl, {
                                        value: props.attributes.direction,
                                        label: __( 'Order direction' ),
                                        onChange: function(val) { setAttributes({direction: val}) },
                                        options: [
                                            { value: '', label: '-' },
                                            { value: 'asc', label: 'Ascending' },
                                            { value: 'desc', label: 'Descending' }
                                        ]
                                    }),
                                    el(SelectControl, {
                                        value: props.attributes.sale,
                                        label: __( 'On sale' ),
                                        onChange: function(val) { setAttributes({sale: val}) },
                                        options: [
                                            { value: '', label: '-' },
                                            { value: 'true', label: 'Yes' },
                                            { value: 'false', label: 'No' }
                                        ]
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.tags,
                                        help: __( 'List tags...' ),
                                        label: __( 'Product tags' ),
                                        onChange: function(val) { setAttributes({tags: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.cats,
                                        help: __( 'List categories...' ),
                                        label: __( 'Product categories' ),
                                        onChange: function(val) { setAttributes({cats: val}) },
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
