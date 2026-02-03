<?php
/**
 * Betelgeuse Customizer - O cérebro visual do tema
 */

function betelgeuse_customize_register( $wp_customize ) {

    // 1. Criar uma Seção Única para Ajustes
    $wp_customize->add_section( 'btl_theme_options', array(
        'title'       => __( 'Ajustes do Bettlegeuse', 'betelgeuse' ),
        'priority'    => 30,
        'description' => 'Personalize as cores e textos da sua estrela.',
    ) );

    // 2. Configuração de Cor Principal
    $wp_customize->add_setting( 'btl_primary_color', array(
        'default'           => '#6d28d9',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh', 
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btl_primary_color_control', array(
        'label'    => __( 'Cor Principal / Links', 'betelgeuse' ),
        'section'  => 'btl_theme_options',
        'settings' => 'btl_primary_color',
    ) ) );

    // 3. Configuração do Texto do Rodapé
    $wp_customize->add_setting( 'btl_footer_text', array(
        'default'           => 'Bettlegeuse - Estelarmente Clean',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( 'btl_footer_text', array(
        'label'    => __( 'Texto do Rodapé', 'betelgeuse' ),
        'section'  => 'btl_theme_options',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'betelgeuse_customize_register' );

/**
 * Injeta o CSS dinâmico no cabeçalho do site
 */
function betelgeuse_customize_css() {
    $primary_color = get_theme_mod( 'btl_primary_color', '#6d28d9' );
    ?>
    <style type="text/css">
        :root { --btl-primary: <?php echo esc_attr( $primary_color ); ?>; }
        a { color: <?php echo esc_attr( $primary_color ); ?>; }
        .button, button, input[type="submit"], .site-header h1 a { color: <?php echo esc_attr( $primary_color ); ?>; }
        .btl-card:hover { border-color: <?php echo esc_attr( $primary_color ); ?>; }
    </style>
    <?php
}
add_action( 'wp_head', 'betelgeuse_customize_css' );