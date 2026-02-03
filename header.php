<?php
/**
 * Header do Bettlegeuse
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); // ESSENCIAL: Carrega o CSS e scripts do topo ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container" style="display:flex; justify-content: space-between; align-items: center;">
        
<div class="site-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" 
             alt="Bettlegeuse" 
             style="height: 50px; width: auto;">
    </a>
</div>
        <nav class="main-navigation" style="display: flex; align-items: center; gap: 30px;">
            <?php
            // Menu de Navegação (Home, About, etc.)
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
            ) );
            ?>

            <div class="social-links" style="border-left: 1px solid #ddd; padding-left: 20px; display: flex; gap: 15px;">
                <a href="#" target="_blank">𝕏</a>
                <a href="#" target="_blank">Ig</a>
                <a href="#" target="_blank">In</a>
            </div>
        </nav>
    </div>
</header>