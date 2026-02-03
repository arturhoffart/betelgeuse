<?php
/**
 * O template para exibir todas as páginas estáticas
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container" style="max-width: 1000px; margin: 40px auto;">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header" style="margin-bottom: 40px;">
                    <?php the_title( '<h1 class="entry-title" style="font-size: 2.5rem; color: var(--btl-text); border-bottom: 3px solid var(--btl-primary); display: inline-block; padding-bottom: 10px;">', '</h1>' ); ?>
                </header>

                <div class="entry-content" style="font-size: 1.1rem; line-height: 1.7; color: #334155;">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'betelgeuse' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

            </article>

            <?php
            // Comentários em páginas são raros, mas o WordPress permite.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile;
        ?>

    </main>
</div>

<?php
get_footer();