<?php


namespace tanspot_toolkit;

use tanspot_toolkit\PageSettings\Page_Settings;
use Elementor\Controls_Manager;

if (! defined('ABSPATH')) {
    exit;
} // Exit if accessed directly


class Tanspot_Core_Plugin
{

    /**
     * Instance
     */
    private static $_instance = null;

    /**
     * Instance
     *
     * Ensures only one instance of the class is loaded or can be loaded.
     *
     */
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }



    public function tanspot_elementor_category($manager)
    {
        $manager->add_category(
            'tanspot-toolkit',
            array(
                'title' => esc_html__('Tanspot Widgets', 'tanspot-toolkit'),
                'icon' => 'eicon-banner',
            )
        );
    }

    /**
     * Register Widgets
     *
     * Register new Elementor widgets.
     *
     */
    public function register_widgets($widgets_manager)
    {
        // Its is now safe to include Widgets files
        foreach ($this->tanspot_toolkit_ewidget_list() as $ewidgets_name) {
            require_once(TANSPOT_TOOLKIT_ELEMENTS_PATH . "/{$ewidgets_name}.php");
        }
    }

    // List of widgets

    public function tanspot_toolkit_ewidget_list()
    {
        return [

            'heading',
            'banner',
        ];
    }

    /**
     * Add page settings controls
     */
    private function add_page_settings_controls()
    {
        include_once(TANSPOT_TOOLKIT_DIR . '/page-settings/manager.php');
        new Page_Settings();
    }


    /**
     *  Plugin class constructor
     *
     * Register plugin action hooks and filters
     *
     * @since 1.2.0
     * @access public
     */
    public function __construct()

    {



        // Register widgets
        add_action('elementor/widgets/register', [$this, 'register_widgets']);


        add_action('elementor/elements/categories_registered', [$this, 'tanspot_elementor_category'], 1);

        $this->add_page_settings_controls();
    }
}


// Instantiate Plugin Class
Tanspot_Core_Plugin::instance();
