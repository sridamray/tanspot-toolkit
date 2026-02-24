<?php

class Tanspot_Team_Post
{

    function __construct()
    {
        add_action('init', array($this, 'register_custom_post_type'));
        add_action('init', array($this, 'create_cat'));
        add_filter('template_include', array($this, 'team_template_include'));
    }

    public function team_template_include($template)
    {
        // For single car page
        if (is_singular('team')) {
            return $this->get_template('single-team.php');
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
            'name' => esc_html__('Teams', 'tanspot-toolkit'),
            'singular_name' => esc_html__('Team', 'tanspot-toolkit'),
            'menu_name' => esc_html__('Team', 'tanspot-toolkit'),
            'name_admin_bar' => esc_html__('Team', 'tanspot-toolkit'),
            'add_new' => esc_html__('Add New', 'tanspot-toolkit'),
            'add_new_item' => esc_html__('Add New Team', 'tanspot-toolkit'),
            'new_item' => esc_html__('New Team', 'tanspot-toolkit'),
            'edit_item' => esc_html__('Edit Team', 'tanspot-toolkit'),
            'view_item' => esc_html__('View Team', 'tanspot-toolkit'),
            'all_items' => esc_html__('All Teams', 'tanspot-toolkit'),
            'search_items' => esc_html__('Search Teams', 'tanspot-toolkit'),
            'not_found' => esc_html__('No Teams found.', 'tanspot-toolkit'),
            'not_found_in_trash' => esc_html__('No Teams found in Trash.', 'tanspot-toolkit'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'teams', 'with_front' => false),
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-format-aside',
        );


        register_post_type('team', $args);
    }

    public function create_cat()
    {
        $labels = array(
            'name' => esc_html__('Team', 'tanspot-toolkit'),
            'singular_name' => esc_html__('Team Category', 'tanspot-toolkit'),
            'search_items' => esc_html__('Search Team Categories', 'tanspot-toolkit'),
            'all_items' => esc_html__('All Team Categories', 'tanspot-toolkit'),
            'edit_item' => esc_html__('Edit Team Category', 'tanspot-toolkit'),
            'update_item' => esc_html__('Update Team Category', 'tanspot-toolkit'),
            'add_new_item' => esc_html__('Add New Team Category', 'tanspot-toolkit'),
            'new_item_name' => esc_html__('New Car Team Name', 'tanspot-toolkit'),
            'menu_name' => esc_html__('Team Categories', 'tanspot-toolkit'),
        );

        $args = array(
            'hierarchical' => true,
            'labels' => $labels,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
        );

        register_taxonomy('team-cat', 'team', $args);
    }
}

new Tanspot_Team_Post();
