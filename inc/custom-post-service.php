<?php

class Tanspot_Service_Post
{

    function __construct()
    {
        add_action('init', array($this, 'register_custom_post_type'));
        add_action('init', array($this, 'create_cat'));
        add_filter('template_include', array($this, 'service_template_include'));
    }

    public function service_template_include($template)
    {
        // For single car page
        if (is_singular('service')) {
            return $this->get_template('single-service.php');
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
            'name' => esc_html__('Services', 'tanspot-toolkit'),
            'singular_name' => esc_html__('Service', 'tanspot-toolkit'),
            'menu_name' => esc_html__('Service', 'tanspot-toolkit'),
            'name_admin_bar' => esc_html__('Service', 'tanspot-toolkit'),
            'add_new' => esc_html__('Add New', 'tanspot-toolkit'),
            'add_new_item' => esc_html__('Add New Service', 'tanspot-toolkit'),
            'new_item' => esc_html__('New Service', 'tanspot-toolkit'),
            'edit_item' => esc_html__('Edit Service', 'tanspot-toolkit'),
            'view_item' => esc_html__('View Service', 'tanspot-toolkit'),
            'all_items' => esc_html__('All Services', 'tanspot-toolkit'),
            'search_items' => esc_html__('Search Services', 'tanspot-toolkit'),
            'not_found' => esc_html__('No Services found.', 'tanspot-toolkit'),
            'not_found_in_trash' => esc_html__('No Services found in Trash.', 'tanspot-toolkit'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services', 'with_front' => false),
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-format-aside',
        );


        register_post_type('service', $args);
    }

    public function create_cat()
    {
        $labels = array(
            'name' => esc_html__('Service', 'tanspot-toolkit'),
            'singular_name' => esc_html__('Service Category', 'tanspot-toolkit'),
            'search_items' => esc_html__('Search Service Categories', 'tanspot-toolkit'),
            'all_items' => esc_html__('All Service Categories', 'tanspot-toolkit'),
            'edit_item' => esc_html__('Edit Service Category', 'tanspot-toolkit'),
            'update_item' => esc_html__('Update Service Category', 'tanspot-toolkit'),
            'add_new_item' => esc_html__('Add New Service Category', 'tanspot-toolkit'),
            'new_item_name' => esc_html__('New Car Service Name', 'tanspot-toolkit'),
            'menu_name' => esc_html__('Service Categories', 'tanspot-toolkit'),
        );

        $args = array(
            'hierarchical' => true,
            'labels' => $labels,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
        );

        register_taxonomy('service-cat', 'service', $args);
    }
}

new Tanspot_Service_Post();
