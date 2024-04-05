<?php

/**
 * The template for displaying archive pages for tags.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Theme
 */

get_header();

if ($tag_id) {
    $tag = get_term($tag_id, 'post_tag');
    $tag_name = $tag->name;
    $args = array(
        'post_type' => 'project', // Specify the post type to query
        'posts_per_page' => -1, // Display all posts
        'tax_query' => array(
            array(
                'taxonomy' => 'post_tag', // Specify the taxonomy (default tags)
                'field'    => 'term_id', // Specify the field to query (term ID)
                'terms'    => $tag_id, // Specify the tag ID to query posts
            ),
        ),
    );
}
$query = new WP_Query($args);
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if ($query->have_posts()) {
            $tag = get_tag($tag_id); // Retrieve the WP_Term object
            if ($tag) {
                $tag_name = $tag->name; // Retrieve the name property of the WP_Term object
            }
        ?>

            <h1 class="page-title"><?php _e('Tag: ' . $tag_name, 'custom-theme'); ?></h1>

            <div id="project-list">

                <?php
                // Start the Loop.
                while ($query->have_posts()) :
                    $query->the_post();
                ?>

                    <figure class="grid-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(array(285, 285)) ?>
                            <figcaption class="caption"><span><?php the_title() ?></span></figcaption>
                        </a>
                    </figure>
                <?php
                endwhile;
                wp_reset_postdata();
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
