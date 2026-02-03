<?php
// Carregar as customizações do tema
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-functions.php';



function betelgeuse_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'align-wide' ); // Suporte a blocos largos do Gutenberg
    
    // Registra o menu principal
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'betelgeuse' ),
    ) );
}
add_action( 'after_setup_theme', 'betelgeuse_setup' );

function betelgeuse_scripts() {
    wp_enqueue_style( 'betelgeuse-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'betelgeuse_scripts' );

function bettelgeuse_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Barra Lateral Principal', 'bettelgeuse' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Adicione widgets aqui para aparecerem na lateral.', 'bettelgeuse' ),
        'before_widget' => '<section id="%1$s" class="widget btl-card %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bettelgeuse_widgets_init' );

// Certifique-se de que o menu está registrado
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'bettelgeuse' ),
    'social'  => __( 'Menu Redes Sociais', 'bettelgeuse' ),
) );
function betelgeuse_fonts() {
    wp_enqueue_style( 'btl-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'betelgeuse_fonts' );
function bettlegeuse_setup() {
    // Faz o tema aceitar tradução
    load_theme_textdomain( 'bettlegeuse', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'bettlegeuse_setup' );