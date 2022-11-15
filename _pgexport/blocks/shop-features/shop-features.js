
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
    
    const block = registerBlockType( 'catalogo-veiculos/shop-features', {
        apiVersion: 2,
        title: 'Shop Features',
        icon: 'block-default',
        category: 'shop',
        keywords: [],
        supports: {color: {background: false,text: false,gradients: false,link: false,},typography: {fontSize: false,},anchor: false,align: false,},
        attributes: {
        },
        example: { attributes: {  } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'mb-5 pb-5 pt-5 text-center' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = useInnerBlocksProps({ className: 'justify-content-center row' }, {
                allowedBlocks: [ 'catalogo-veiculos/shop-feature' ],
                template: [
    [ 'catalogo-veiculos/shop-feature', {} ],
    [ 'catalogo-veiculos/shop-feature', {} ],
    [ 'catalogo-veiculos/shop-feature', {} ]
],
            } );
                            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, el('div', { className: 'container' }, el('div', { ...innerBlocksProps }))),                        
                
            ]);
        },

        save: function(props) {
            const blockProps = useBlockProps.save({ className: 'mb-5 pb-5 pt-5 text-center' });
            return el('section', { ...blockProps }, el('div', { className: 'container' }, el('div', { className: 'justify-content-center row' }, el(InnerBlocks.Content, { allowedBlocks: [ 'catalogo-veiculos/shop-feature' ] }))));
        }                        

    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
