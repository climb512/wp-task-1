<?php

/**
 * Custom Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom Theme
 * @since Custom Theme 1.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

add_theme_support('post-thumbnails');

// Register Custom Post Type
function create_project_post_type()
{
    $labels = array(
        'name'                  => _x('Projects', 'Post Type General Name', 'custom-theme'),
        'singular_name'         => _x('Project', 'Post Type Singular Name', 'custom-theme'),
        'menu_name'             => __('Projects', 'custom-theme'),
        'name_admin_bar'        => __('Project', 'custom-theme'),
        'archives'              => __('Project Archives', 'custom-theme'),
        'attributes'            => __('Project Attributes', 'custom-theme'),
        'parent_item_colon'     => __('Parent Project:', 'custom-theme'),
        'all_items'             => __('All Projects', 'custom-theme'),
        'add_new_item'          => __('Add New Project', 'custom-theme'),
        'add_new'               => __('Add New', 'custom-theme'),
        'new_item'              => __('New Project', 'custom-theme'),
        'edit_item'             => __('Edit Project', 'custom-theme'),
        'update_item'           => __('Update Project', 'custom-theme'),
        'view_item'             => __('View Project', 'custom-theme'),
        'view_items'            => __('View Projects', 'custom-theme'),
        'search_items'          => __('Search Project', 'custom-theme'),
        'not_found'             => __('Not found', 'custom-theme'),
        'not_found_in_trash'    => __('Not found in Trash', 'custom-theme'),
        'featured_image'        => __('Featured Image', 'custom-theme'),
        'set_featured_image'    => __('Set featured image', 'custom-theme'),
        'remove_featured_image' => __('Remove featured image', 'custom-theme'),
        'use_featured_image'    => __('Use as featured image', 'custom-theme'),
        'insert_into_item'      => __('Insert into project', 'custom-theme'),
        'uploaded_to_this_item' => __('Uploaded to this project', 'custom-theme'),
        'items_list'            => __('Projects list', 'custom-theme'),
        'items_list_navigation' => __('Projects list navigation', 'custom-theme'),
        'filter_items_list'     => __('Filter projects list', 'custom-theme'),
    );
    $args = array(
        'label'                 => __('Project', 'custom-theme'),
        'description'           => __('Post Type Description', 'custom-theme'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
        'taxonomies'            => array('category', 'post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio', // You can use any Dashicons: https://developer.wordpress.org/resource/dashicons/
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type('project', $args);
}
add_action('init', 'create_project_post_type', 0);
