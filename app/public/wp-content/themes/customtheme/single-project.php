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
        <!-- Image -->
        <?php
        // Get the regular featured image
        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');

        // Get the custom fields
        $banner_image = get_field('banner'); // Field created using ACF
        $location_text = get_field('location'); // Field created using ACF
        $completion_text = get_field('completion'); // Field created using ACF

        // Use the banner image if it's set, otherwise fallback to the regular featured image
        $image_url = !empty($banner_image) ? $banner_image : $featured_image;
        ?>

        <div class="banner">
            <img src="<?php echo esc_url($image_url); ?>" width="100%" alt="Banner Image">
        </div>

        <!-- Breadcrumbs -->
        <nav class="breadcrumbs" aria-label="Breadcrumb">
            <span>
                <a href="#">Home</a> >>
                <a href="#">Projects</a> >>
                <?php echo single_post_title(); ?>
            </span>
        </nav>

        <!-- Project Overview -->
        <div class="content-container">
            <div class="content-column">
                <section>
                    <h2><?php echo single_post_title(); ?></h2>
                    <p><?php echo the_content(); ?></p>
                </section>
            </div>
            <!-- Project Details -->
            <div class="content-column project-details">
                <section>
                    <h2>Location</h2>
                    <p><?php echo $location_text ?></p>
                </section>

                <section>
                    <h2>Completion</h2>
                    <p><?php echo $completion_text ?></p>
                </section>

                <section>
                    <h2>Services</h2>
                    <ul>
                        <li>Concrete Structure</li>
                        <li>Structural Steel</li>
                        <li>Tilt-Up Panels</li>
                    </ul>
                </section>

            </div><!-- .project-details -->
        </div><!-- .contnet-container -->


    </main>
</div>

<footer>
    <!-- Footer content goes here -->
    <p>&copy; <?php echo date("Y"); ?> Your Website</p>
</footer>