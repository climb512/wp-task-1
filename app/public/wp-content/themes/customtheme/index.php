<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        the_content();
                        ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->

            <?php endwhile;
        else :
            ?>
            <p><?php esc_html_e('No posts found.', 'custom-theme'); ?></p>
        <?php endif; ?>
    </div><!-- .container -->
</main><!-- #primary -->

<?php
get_footer();
