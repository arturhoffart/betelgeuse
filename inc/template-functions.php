<?php
function betelgeuse_dynamic_css() {
    // Puxa a cor escolhida no painel (veremos no próximo passo)
    $primary_color = get_theme_mod( 'betelgeuse_primary_color', '#e63946' );

    $custom_css = "
        :root { --btl-primary: {$primary_color}; }
        a { color: var(--btl-primary); }
        .button, button { background-color: var(--btl-primary); }
    ";

    wp_add_inline_style( 'betelgeuse-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'betelgeuse_dynamic_css' );