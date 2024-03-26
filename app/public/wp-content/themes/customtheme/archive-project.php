<?php

/**
 * The template for displaying archive pages for the custom post type "Project".
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php _e('Projects', 'custom-theme'); ?></h1>
            </header><!-- .page-header -->

            <div class="project-list">
                <?php
                // Start the Loop.
                while (have_posts()) :
                    the_post();

                    /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to customize this part further, create a file
                         * called content-project.php and include it here.
                         */
                    get_template_part('template-parts/content', 'project');

                endwhile;
                ?>
            </div><!-- .project-list -->

        <?php
            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text' => __('Previous', 'custom-theme'),
                'next_text' => __('Next', 'custom-theme'),
            ));

        else :

            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
