<?php

/**
 * The template for displaying archive pages for the custom post type "Project".
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Theme
 */

get_header();
?>

<body>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php if (have_posts()) { ?>

                <div id="project-list">

                    <?php
                    // Start the Loop.
                    while (have_posts()) {
                        the_post();
                    ?>
                        <figure class="grid-item">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail(array(285, 285)) ?>
                                <figcaption class="caption"><span><?php the_title() ?></span></figcaption>
                            </a>
                        </figure>

                    <?php
                    }
                    ?>
                </div><!-- #project-list -->

            <?php
                // Previous/next page navigation.
                the_posts_pagination(array(
                    'prev_text' => __('Previous', 'custom-theme'),
                    'next_text' => __('Next', 'custom-theme'),
                ));
            } else {

                // If no content, include the "No posts found" template.
                get_template_part('content', 'none');
            }
            ?>

        </main><!-- #main -->

    </div><!-- #primary -->

    <?php
    get_footer();
