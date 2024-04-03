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

            <div class="category-chooser">
                <?php
                $categories = get_categories();
                ?>
                <div class="category-list">
                    <h3>Categories by link:</h3>
                    <ul>
                        <?php foreach ($categories as $category) : ?>
                            <li>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="ajax-category-container">
                    <label for="select-list">Choose a category to retrieve by AJAX:</label>
                    <select class="category-filter" onchange="fetchProjectsByCategory(this.value)">
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo esc_attr($category->term_id); ?>"><?php echo esc_html($category->name); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div><!-- .category-chooser -->
            <div class="tag-chooser">
                <?php
                $tags = get_tags();
                ?>
                <div class="tag-list">
                    <h3>Tags by link:</h3>
                    <ul>
                        <?php foreach ($tags as $tag) : ?>
                            <li>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="ajax-tag-container">
                    <label for="select-list">Choose a tag to retrieve by AJAX:</label>
                    <select class="tag-filter" onchange="fetchProjectsByTag(this.value)">
                        <?php foreach ($tags as $tag) : ?>
                            <option value="<?php echo esc_attr($tag->term_id); ?>"><?php echo esc_html($tag->name); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div><!-- .tag-chooser -->
        </div><!-- .container -->
    </header><!-- #masthead -->