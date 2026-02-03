<?php
/**
 * O template para exibir posts individuais (Single Posts)
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container" style="max-width: 800px; margin: 40px auto;">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header" style="margin-bottom: 30px; text-align: center;">
                    <?php the_title( '<h1 class="entry-title" style="font-size: 3rem; color: var(--btl-text);">', '</h1>' ); ?>
                    
                    <div class="entry-meta" style="color: #64748b; margin-top: 10px;">
                        Postado em <?php echo get_the_date(); ?> por <?php the_author(); ?>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail" style="margin-bottom: 30px; border-radius: 12px; overflow: hidden;">
                        <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:auto;' ) ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="font-size: 1.2rem; line-height: 1.8;">
                    <?php
                    the_content(); // Aqui entra o texto completo do post
                    
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'betelgeuse' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

                <footer class="entry-footer" style="margin-top: 50px; padding-top: 20px; border-top: 1px solid #e2e8f0;">
                    <div class="post-categories">Categorias: <?php the_category( ', ' ); ?></div>
                    <div class="post-tags"><?php the_tags( 'Tags: ', ', ' ); ?></div>
                </footer>

            </article>

            <?php
            // Se houver comentários, carrega o template de comentários
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

            // Navegação entre o post anterior e o próximo
            the_post_navigation( array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Anterior:', 'betelgeuse' ) . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Próximo:', 'betelgeuse' ) . '</span> <span class="nav-title">%title</span>',
            ) );

        endwhile;
        ?>

    </main>
</div>

<?php
get_footer();