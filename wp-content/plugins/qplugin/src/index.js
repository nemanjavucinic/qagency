const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { TextControl } = wp.components;
const { withState } = wp.compose;

// Register the block
registerBlockType( 'qplugin/favorite-movie-quote', {
    title: __( 'Favorite Movie Quote' ),
    icon: 'format-quote',
    category: 'design',
    attributes: {
        quote: {
            type: 'string',
        },
    },
    edit: function ( { attributes, setAttributes } ){
        //Updating functions
        function updateQuote(event) {
            setAttributes( {quote: event.target.value} )
        }
       return <input type="text" value={ attributes.quote } onChange={ updateQuote } />;
    },
    
    // The save function defines the HTML output of the block when it's saved
    save: ( { attributes } ) => {
        return <blockquote class="q-favorite-quote">{ attributes.quote }</blockquote>;
    },
} );