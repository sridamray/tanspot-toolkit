<?php
if (! defined('ABSPATH')) exit;

class Tanspot_widgets_Setup
{

    public function __construct()
    {
        // Register the widget
        add_action('elementor/widgets/register', [$this, 'register_widgets']);
    }

    public function register_widgets($widgets_manager)
    {
        require_once __DIR__ . '/widgets/heading-widget.php';
        $widgets_manager->register(new \Tanspot_heading_Widget());
    }
}

// Initialize the setup
new Tanspot_widgets_Setup();
