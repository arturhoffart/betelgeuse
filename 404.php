<?php
/**
 * O template para exibir a página de erro 404 (Não Encontrado)
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container" style="text-align: center; padding: 100px 20px;">

        <section class="error-404 not-found">
            
            <header class="page-header">
                <h1 style="font-size: 8rem; color: var(--btl-primary); margin: 0; line-height: 1;">404</h1>
                <h2 class="page-title" style="font-size: 2rem; margin-bottom: 20px;">
                    Ops! Essa estrela sumiu do mapa.
                </h2>
            </header>

            <div class="page-content" style="max-width: 600px; margin: 0 auto;">
                <p style="font-size: 1.2rem; color: #64748b; margin-bottom: 40px;">
                    Parece que o link que você tentou acessar não existe ou foi movido. 
                    Que tal tentar uma busca ou voltar para a página inicial?
                </p>

                <div class="search-form-wrapper" style="margin-bottom: 40px; padding: 20px; background: #fff; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                    <?php get_search_form(); ?>
                </div>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button" style="text-decoration: none; display: inline-block;">
                    Voltar para a Home
                </a>
            </div>

        </section>

    </main>
</div>

<?php
get_footer();