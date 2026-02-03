( function( $ ) {
    // Escuta a mudança na cor primária
    wp.customize( 'betelgeuse_primary_color', function( value ) {
        value.bind( function( newval ) {
            // Aplica a cor instantaneamente via CSS variável
            document.documentElement.style.setProperty('--btl-primary', newval);
        } );
    } );
} )( jQuery );