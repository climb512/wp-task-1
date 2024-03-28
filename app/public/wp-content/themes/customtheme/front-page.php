<?php

/**
 * Front page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <section class="hero-section">
            <h1>Welcome to Custom Theme</h1>
            <p>This is a custom homepage created for your WordPress theme, using the front-page.php template.</p>
        </section>

        <section class="featured-posts">
            <h2>Projects</h2>
            <?php
            // Example: Displaying most recent projects.
            $args = array(
                'post_type'      => 'project', // slug of the custom post type
                'posts_per_page' => 3, // Adjust the number of posts to display.
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-<?php the_ID(); ?> -->
                <?php endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>No featured posts found.</p>
            <?php endif; ?>
        </section>
    </div><!-- .container -->
</main><!-- #primary -->

<?php
get_footer();
