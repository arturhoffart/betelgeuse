<?php
/**
 * Index principal do Bettlegeuse
 */
get_header(); ?>

<div class="container" style="display: flex; gap: 40px; margin-top: 40px; padding: 0 20px;">
    
    <main id="primary" class="content-area" style="flex: 1;">
        
        <?php if ( have_posts() ) : ?>
            
            <?php while ( have_posts() ) : the_post(); ?>
                
                <article class="btl-card" style="margin-bottom: 30px;">
                    <h2>
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: var(--btl-text);">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-image" style="margin-bottom: 20px; border-radius: 8px; overflow: hidden;">
        <?php the_post_thumbnail('large', array('style' => 'width:100%; height:auto; display:block;')); ?>
    </div>
<?php endif; ?>

            <?php endwhile; ?>

            <?php 
            // Paginação simples
            the_posts_navigation(); 
            ?>

        <?php else : ?>
            <p>Nenhum conteúdo encontrado por enquanto.</p>
        <?php endif; ?>

    </main>

    <?php 
    // Chama o arquivo sidebar.php que criamos
    get_sidebar(); 
    ?>

</div>

<?php get_footer(); ?>