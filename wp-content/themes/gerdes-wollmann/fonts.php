<?php
if ( ! function_exists( 'gerdes_wollmann_fonts' ) ) {
    function gerdes_wollmann_fonts() {
        wp_enqueue_style(
            'gerdes-wollmann-fonts',
            'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=DM+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Source+Serif+4:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Outfit:wght@300;400;500;600;700&family=Nunito+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Fraunces:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap',
            array(),
            null
        );
    }
}
add_action( 'enqueue_block_assets', 'gerdes_wollmann_fonts' );
