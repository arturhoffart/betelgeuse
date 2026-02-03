<?php
/**
 * O template para exibir resultados de busca
 */

get_header(); ?>

<div class="container" style="display: flex; gap: 40px; margin-top: 40px; padding: 0 20px;">
    
    <main id="primary" class="content-area" style="flex: 1;">

        <?php if ( have_posts() ) : ?>

            <header class="page-header" style="margin-bottom: 40px; border-bottom: 2px solid #f1f5f9; padding-bottom: 20px;">
                <h1 class="page-title" style="font-size: 1.8rem;">
                    <?php
                    /* translators: %s: busca term. */
                    printf( esc_html__( 'Resultados da busca para: %s', 'bettlegeuse' ), '<span style="color: var(--btl-primary);">' . get_search_query() . '</span>' );
                    ?>
                </h1>
            </header>

            <?php while ( have_posts() ) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('btl-card'); ?> style="margin-bottom: 30px; padding: 20px; background: #fff; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <header class="entry-header">
                        <h2 style="margin: 0 0 10px 0;">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #1e293b;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </header>

                    <div class="entry-summary" style="color: #64748b; line-height: 1.6;">
                        <?php the_excerpt(); ?>
                    </div>
                    
                    <a href="<?php the_permalink(); ?>" style="color: var(--btl-primary); font-weight: 600; text-decoration: none; font-size: 0.9rem;">
                        Leia mais →
                    </a>
                </article>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <section class="no-results not-found" style="text-align: center; padding: 60px 0;">
                <header class="page-header">
                    <h1 style="font-size: 2rem;">Nada encontrado</h1>
                </header>
                <p>Desculpe, mas nada corresponde aos seus termos de busca. Tente novamente com palavras diferentes.</p>
                <div style="max-width: 400px; margin: 20px auto;">
                    <?php get_search_form(); ?>
                </div>
            </section>

        <?php endif; ?>

    </main>

    <?php get_sidebar(); ?>

</div>

<?php
get_footer();