<?php

namespace tanspot_toolkit\Widgets;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

if (! defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * Tp Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Tanspot_Sidebar_Service_Item extends Widget_Base
{

    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'service-item';
    }

    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title()
    {
        return __('Tanspot::Service Item Sidebar', 'tanspot-toolkit');
    }

    /**
     * Retrieve the widget icon.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'od-icon';
    }

    /**
     * Retrieve the list of categories the widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * Note that curtanspot Elementor supports only one category.
     * When multiple categories passed, Elementor uses the first one.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return ['tanspot-toolkit'];
    }

    /**
     * Retrieve the list of scripts the widget depended on.
     *
     * Used to set scripts dependencies required to run the widget.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget scripts dependencies.
     */
    public function get_script_depends()
    {
        return ['tanspot-toolkit'];
    }

    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function register_controls()
    {

        $this->start_controls_section(
            'tanspot_service_sidebar_wrapper',
            [
                'label' => __('Servcie Item', 'tanspot-toolkit'),
            ]
        );





        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Style', 'tanspot-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );



        $this->end_controls_section();
    }

    /**
     * Render the widget ouodut on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>



        <div class="service-details__services-box">
            <h3 class="service-details__services-title">Our Services</h3>
            <ul class="service-details__services-list list-unstyled">
                <li>
                    <a href="international-transport.html">International Transport<span
                            class="icon-next"></span></a>
                </li>
                <li>
                    <a href="track-transport.html">Local Track Transport<span
                            class="icon-next"></span></a>
                </li>
                <li>
                    <a href="personal-delivery.html">Fast Personal Delivery<span
                            class="icon-next"></span></a>
                </li>
                <li class="active">
                    <a href="ocean-transport.html">Safe Ocean Transport<span
                            class="icon-next"></span></a>
                </li>
                <li>
                    <a href="warehouse-facility.html">Warehouse Facility<span
                            class="icon-next"></span></a>
                </li>
                <li>
                    <a href="emergency-transport.html">Emergency Transport<span
                            class="icon-next"></span></a>
                </li>
            </ul>
        </div>


        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new Tanspot_Sidebar_Service_Item());
