<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="masthead" class="site-header">
        <div class="header-container">
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php else : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <p class="site-description"><?php bloginfo('description'); ?></p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">

                <?php
                // Used this method to simply get the link to the Project Archive page
                // $projects_archive_link = get_post_type_archive_link('project');
                // echo '<a href="' . esc_url($projects_archive_link) . '">View All Projects</a>';

                // Created header-menu in Appearance->Menus
                wp_nav_menu(
                    array(
                        'menu' => 'header-menu',
                        'container_class' => 'menu-container'
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
            <div class="social-container">
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </div><!-- .social-container -->
            <div class="category-chooser">
                <?php
                $categories = get_categories();
                ?>
                <div class="category-list">
                    <h3>Categories</h3>
                    <ul>
                        <?php foreach ($categories as $category) : ?>
                            <li>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="tag-chooser">
                <?php
                $tags = get_tags();
                ?>
                <div class="tag-list">
                    <h3>Tags</h3>
                    <ul>
                        <?php foreach ($tags as $tag) : ?>
                            <li>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div><!-- .container -->
    </header><!-- #masthead -->