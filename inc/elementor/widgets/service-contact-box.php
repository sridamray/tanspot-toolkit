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
class Tanspot_service_box_contact extends Widget_Base
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
        return 'servcie-box-contact';
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
        return __('Tanspot::Service Box Contact', 'tanspot-toolkit');
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
            'tanspot_service_box_contact_wrapper',
            [
                'label' => __('Service Box Contact', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_service_box_contact_phone',
            [
                'label' => esc_html__('Phone Number', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+58 585 857 5084', 'tanspot-toolkit'),
                'placeholder' => esc_html__('Type here', 'tanspot-toolkit'),
                'label_true' => true,
            ]
        );

        $this->add_control(
            'tanspot_service_box_contact_image',
            [
                'label' => esc_html__('Thumbnail Image', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'tanspot_service_box_contact_description',
            [
                'label' => esc_html__('Description', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Default description', 'tanspot-toolkit'),
                'placeholder' => esc_html__('Type  here', 'tanspot-toolkit'),
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
        $tanspot_service_box_contact_phone = $settings['tanspot_service_box_contact_phone'];
        $tanspot_service_box_contact_image = $settings['tanspot_service_box_contact_image'];
        $tanspot_service_box_contact_description = $settings['tanspot_service_box_contact_description'];
?>

        <div class="service-details__sidebar-contact">
            <div class="service-details__sidebar-contact-img">
                <div class="inner">
                    <img src="<?php echo esc_url($tanspot_service_box_contact_image['url'], 'tanspot-toolkit'); ?>" alt="<?php echo esc_url($tanspot_service_box_contact_image['alt'], 'tanspot-toolkit'); ?>">
                </div>
            </div>

            <div class="service-details__sidebar-contact-content">
                <div class="icon">
                    <span class="icon-phone-call"></span>
                </div>
                <h2><a href="tel:<?php echo esc_attr($tanspot_service_box_contact_phone, 'tanspot-toolkit'); ?>"><?php echo esc_html($tanspot_service_box_contact_phone, 'tanspot-toolkit'); ?></a></h2>
                <p><?php echo toolkit_kses($tanspot_service_box_contact_description, 'tanspot-toolkit'); ?></p>
            </div>
        </div>




<?php
    }
}

$widgets_manager->register(new Tanspot_service_box_contact());
