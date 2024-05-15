<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'animations', get_stylesheet_directory_uri() . '/js/animations.js',  array(), _S_VERSION, array( 
        'strategy'  => 'defer',
    )  );
    wp_enqueue_script( 'menu-burger', get_stylesheet_directory_uri() . '/js/menu.js',  array(), '1.0.0', true);

    //Ajout script skrollr
    wp_enqueue_script( 'skrollr-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js');
    wp_enqueue_script( 'skrollr', get_stylesheet_directory_uri() . '/js/skrollr.js', array(), '1.0.0', true);

    //Ajout script et style swiperjs
    wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
    wp_enqueue_script( 'swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), _S_VERSION, array( 
        'strategy'  => 'defer',
    )  );
    wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/js/swiper.js', array(), _S_VERSION, array( 
        'strategy'  => 'defer',
    )  );

}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}