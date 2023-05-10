<?php
required_once('header.php');

/**
 * El archivo principal del tema
 *
 * Este archivo es utilizado para mostrar el blog o la página principal.
 *
 * @package MiTema
 */

get_header(); ?>

<main id="content" role="main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </h2>
                </header>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>

                <footer class="entry-footer">
                    <a href="<?php the_permalink(); ?>"><?php _e('Leer más', 'MiTema'); ?></a>
                </footer>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <p><?php _e('Lo siento, no hay publicaciones que coincidan con tus criterios.', 'MiTema'); ?></p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>