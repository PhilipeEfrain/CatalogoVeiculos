
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
    
    const block = registerBlockType( 'catalogo-veiculos/front-small-banners', {
        apiVersion: 2,
        title: 'Front Small Banners',
        icon: 'block-default',
        category: 'shop',
        keywords: [],
        supports: {color: {background: false,text: false,gradients: false,link: false,},typography: {fontSize: false,},anchor: false,align: false,},
        attributes: {
        },
        example: { attributes: {  } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'pt-3' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = useInnerBlocksProps({ className: 'justify-content-center row' }, {
                allowedBlocks: [ 'catalogo-veiculos/front-small-banner' ],
                template: [
    [ 'catalogo-veiculos/front-small-banner', {} ],
    [ 'catalogo-veiculos/front-small-banner', {} ],
    [ 'catalogo-veiculos/front-small-banner', {} ]
],
                orientation: 'horizontal',
            } );
                            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, el('div', { className: 'container' }, el('div', { ...innerBlocksProps }))),                        
                
            ]);
        },

        save: function(props) {
            const blockProps = useBlockProps.save({ className: 'pt-3' });
            return el('section', { ...blockProps }, el('div', { className: 'container' }, el('div', { className: 'justify-content-center row' }, el(InnerBlocks.Content, { allowedBlocks: [ 'catalogo-veiculos/front-small-banner' ], orientation: 'horizontal' }))));
        }                        

    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
