<?php

/**
 * The template for displaying archive pages for categories.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Theme
 */

get_header();
$category_id = get_query_var('cat');
if ($category_id) {
    $args = array(
        'post_type' => 'project',
        'cat' => $category_id, // Use the category ID to query posts
        'posts_per_page' => -1, // Display all posts
    );
}

$query = new WP_Query($args);

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if ($query->have_posts()) {
            $category_name = get_cat_name($category_id);
        ?>

            <h1 class="page-title"><?php _e('Category: ' . $category_name, 'custom-theme'); ?></h1>

            <div class="project-list">

                <?php
                // Start the Loop.
                while ($query->have_posts()) :
                    $query->the_post();
                    // Display post content here
                ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_content(); ?></div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div><!-- .project-list -->

        <?php
            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text' => __('Previous', 'custom-theme'),
                'next_text' => __('Next', 'custom-theme'),
            ));
        } else {

            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content', 'none');
        }
        ?>

    </main><!-- #main -->

</div><!-- #primary -->

<?php
get_footer();