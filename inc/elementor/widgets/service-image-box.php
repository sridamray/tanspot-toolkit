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
class Tanspot_Service_Image_Box extends Widget_Base
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
        return 'service-image-box';
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
        return __('Tanspot::Service Image Box', 'tanspot-toolkit');
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
            'tanspot_Service_image_box_wrapper',
            [
                'label' => __('Service Image Box', 'tanspot-toolkit'),
            ]
        );


        $this->add_control(
            'tanspot_Service_box_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Quality Full Work', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
            ]
        );
        $this->add_control(
            'tanspot_Service_box_description',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Description', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
            ]
        );

        $this->add_control(
            'tanspot_Service_box_image',
            [
                'label' => esc_html__('Thumbnail Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'tanspot_Service_box_icon',
            [
                'label' => esc_html__('Select Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon-new-product',
                'options' => [
                    'icon-new-product' => esc_html__('Icon Product', 'textdomain'),
                    'icon-customer-loyalty' => esc_html__('Icon Customer', 'textdomain'),
                ],
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
        $tanspot_Service_box_title = $settings['tanspot_Service_box_title'];
        $tanspot_Service_box_description = $settings['tanspot_Service_box_description'];
        $tanspot_Service_box_image = $settings['tanspot_Service_box_image'];
        $tanspot_Service_box_icon = $settings['tanspot_Service_box_icon'];
?>


        <div class="service-details__img-box-single">
            <div class="service-details__img-box-img">
                <img src="<?php echo esc_url($tanspot_Service_box_image['url'], 'tanspot-toolkit'); ?>" alt="<?php echo esc_attr($tanspot_Service_box_image['alt'], 'tanspot-toolkit'); ?>">
            </div>
            <div class="service-details__img-box-content">
                <div class="service-details__img-box-content-icon-and-title">
                    <div class="service-details__img-box-content-icon">
                        <span class="<?php echo esc_attr($tanspot_Service_box_icon, 'tanspot-toolkit'); ?>"></span>
                    </div>
                    <h3 class="service-details__img-box-content-title"><?php echo esc_html($tanspot_Service_box_title, 'tanspot-toolkit'); ?>
                    </h3>
                </div>
                <p class="service-details__img-box-content-text"><?php echo esc_html($tanspot_Service_box_description, 'tanspot-toolkit'); ?></p>
            </div>
        </div>





<?php
    }
}

$widgets_manager->register(new Tanspot_Service_Image_Box());
