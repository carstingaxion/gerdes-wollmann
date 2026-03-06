<?php
require_once __DIR__ . '/styles.php';
require_once __DIR__ . '/fonts.php';
require_once __DIR__ . '/theme-assets-rewrite.php';

if ( ! function_exists( 'gerdes_wollmann_setup' ) ) {
    function gerdes_wollmann_setup() {
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'responsive-embeds' );
    }
}
add_action( 'after_setup_theme', 'gerdes_wollmann_setup' );
