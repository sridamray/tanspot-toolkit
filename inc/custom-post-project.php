<?php

class Tanspot_Project_Post
{

    function __construct()
    {
        add_action('init', array($this, 'register_custom_post_type'));
        add_action('init', array($this, 'create_cat'));
        add_filter('template_include', array($this, 'project_template_include'));
    }

    public function project_template_include($template)
    {
        // For single car page
        if (is_singular('project')) {
            return $this->get_template('single-project.php');
        }

        // // For archive car page
        // if (is_post_type_archive('car')) {
        //     return $this->get_template('archive-car.php');
        // }

        return $template;
    }

    public function get_template($template)
    {
        // Check if theme has the template, otherwise fallback to plugin template
        if ($theme_file = locate_template(array($template))) {
            $file = $theme_file;
        } else {
            $file = TANSPOT_TOOLKIT_DIR . '/inc/template/' . $template;
        }
        return apply_filters(__FUNCTION__, $file, $template);
    }

    public function register_custom_post_type()
    {
        $labels = array(
            'name' => esc_html__('Projects', 'tanspot-toolkit'),
            'singular_name' => esc_html__('Project', 'tanspot-toolkit'),
            'menu_name' => esc_html__('Project', 'tanspot-toolkit'),
            'name_admin_bar' => esc_html__('Project', 'tanspot-toolkit'),
            'add_new' => esc_html__('Add New', 'tanspot-toolkit'),
            'add_new_item' => esc_html__('Add New Project', 'tanspot-toolkit'),
            'new_item' => esc_html__('New Project', 'tanspot-toolkit'),
            'edit_item' => esc_html__('Edit Project', 'tanspot-toolkit'),
            'view_item' => esc_html__('View Project', 'tanspot-toolkit'),
            'all_items' => esc_html__('All Projects', 'tanspot-toolkit'),
            'search_items' => esc_html__('Search Projects', 'tanspot-toolkit'),
            'not_found' => esc_html__('No Projects found.', 'tanspot-toolkit'),
            'not_found_in_trash' => esc_html__('No Projects found in Trash.', 'tanspot-toolkit'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects', 'with_front' => false),
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-media-spreadsheet',
        );


        register_post_type('project', $args);
    }

    public function create_cat()
    {
        $labels = array(
            'name' => esc_html__('Project', 'tanspot-toolkit'),
            'singular_name' => esc_html__('Project Category', 'tanspot-toolkit'),
            'search_items' => esc_html__('Search Project Categories', 'tanspot-toolkit'),
            'all_items' => esc_html__('All Project Categories', 'tanspot-toolkit'),
            'edit_item' => esc_html__('Edit Project Category', 'tanspot-toolkit'),
            'update_item' => esc_html__('Update Project Category', 'tanspot-toolkit'),
            'add_new_item' => esc_html__('Add New Project Category', 'tanspot-toolkit'),
            'new_item_name' => esc_html__('New Car Project Name', 'tanspot-toolkit'),
            'menu_name' => esc_html__('Project Categories', 'tanspot-toolkit'),
        );

        $args = array(
            'hierarchical' => true,
            'labels' => $labels,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
        );

        register_taxonomy('project-cat', 'project', $args);
    }
}

new Tanspot_Project_Post();
