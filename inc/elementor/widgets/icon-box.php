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
class Tanspot_Iconbox extends Widget_Base
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
        return 'tanspot-iconbox';
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
        return __('Tanspot::Iconbox', 'tanspot-toolkit');
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
            'tanspot_design_layout',
            [
                'label' => __('Layout', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_design_style',
            [
                'label' => esc_html__('Select Layout', 'tanspot-toolkit'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'layout-1' => esc_html__('Layout 1', 'tanspot-toolkit'),
                    'layout-2' => esc_html__('Layout 2', 'tanspot-toolkit'),
                    'layout-3' => esc_html__('Layout 3', 'tanspot-toolkit'),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'tanspot_iconbox_wrapper',
            [
                'label' => __('Iconbox Content', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_iconbox_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Worldwide Service', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'tanspot_iconbox_description',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__(' description', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
            ]
        );

        $this->add_control(
            'tanspot_iconbox_icon',
            [
                'label' => esc_html__('Select Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => [
                    'icon-worldwide-shipping-1'  => esc_html__('Shipping', 'textdomain'),
                    'icon-24-hours-service' => esc_html__('User', 'textdomain'),
                    'icon-professional-services' => esc_html__('Settings', 'textdomain'),
                ],
                'default' => ['Shipping'],
            ]
        );


        $this->add_control(
            'tanspot_iconbox_button_text',
            [
                'label' => esc_html__('Button Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Read More', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
                'condition' => [
                    'tanspot_design_style' => ['layout-3'],
                ],
            ]
        );

        $this->add_control(
            'tanspot_iconbox_button_url',
            [
                'label' => esc_html__('Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
                'condition' => [
                    'tanspot_design_style' => ['layout-3'],
                ],
            ]
        );

        $this->add_control(
            'tanspot_iconbox_bg_image',
            [
                'label' => esc_html__('BG Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'tanspot_design_style' => ['layout-3'],
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
        $tanspot_design_style = $settings['tanspot_design_style'];
        $tanspot_iconbox_title = $settings['tanspot_iconbox_title'];
        $tanspot_iconbox_description = $settings['tanspot_iconbox_description'];
        $tanspot_iconbox_icon = $settings['tanspot_iconbox_icon'];
        $tanspot_iconbox_button_text = $settings['tanspot_iconbox_button_text'];
        $tanspot_iconbox_button_url = $settings['tanspot_iconbox_button_url'];
        $tanspot_iconbox_bg_image = $settings['tanspot_iconbox_bg_image'];
?>

        <?php if ($tanspot_design_style == 'layout-2'): ?>
            <ul class="why-choose-one__point">
                <li>
                    <div class="why-choose-one__point-icon">
                        <span class="<?php echo esc_attr($tanspot_iconbox_icon, 'tanspot-toolkit'); ?>"></span>
                    </div>
                    <div class="why-choose-one__point-content">
                        <h4><?php echo esc_html($tanspot_iconbox_title, 'tanspot-toolkit'); ?></h4>
                        <p><?php echo esc_html($tanspot_iconbox_description, 'tanspot-toolkit'); ?></p>
                    </div>
                </li>
            </ul>
        <?php elseif ($tanspot_design_style == 'layout-3'): ?>


            <div class="feature-two__single">
                <div class="feature-two__single-inner">
                    <div class="feature-two__shape-1">
                        <img src="<?php echo esc_url($tanspot_iconbox_bg_image['url'], 'tanspot-toolkit'); ?>" alt="">
                    </div>
                    <div class="feature-two__icon-and-title">
                        <div class="feature-two__icon">
                            <span class="<?php echo esc_attr($tanspot_iconbox_icon, 'tanspot-toolkit'); ?>"></span>
                        </div>
                        <h3 class="feature-two__title"><a href="<?php echo esc_url($tanspot_iconbox_button_url['url'], 'tanspot-toolkit'); ?>"><?php echo toolkit_kses($tanspot_iconbox_title, 'tanspot-toolkit'); ?></a></h3>
                    </div>
                    <p class="feature-two__text"><?php echo esc_html($tanspot_iconbox_description, 'tanspot-toolkit'); ?></p>
                    <div class="feature-two__read-more">
                        <a href="<?php echo esc_url($tanspot_iconbox_button_url['url'], 'tanspot-toolkit'); ?>" target="<?php echo esc_attr($tanspot_iconbox_button_url['is_external'], 'tanspot-toolkit'); ?>"><?php echo esc_html($tanspot_iconbox_button_text, 'tanspot-toolkit'); ?><span class="icon-next"></span></a>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <ul class="about-one__point">
                <li>
                    <div class="about-one__point-icon">
                        <span class="<?php echo esc_attr($tanspot_iconbox_icon, 'tanspot-toolkit'); ?>"></span>
                    </div>
                    <div class="about-one__point-content">
                        <h4><?php echo esc_html($tanspot_iconbox_title, 'tanspot-toolkit'); ?></h4>
                        <p><?php echo esc_html($tanspot_iconbox_description, 'tanspot-toolkit'); ?></p>
                    </div>
                </li>
            </ul>

        <?php endif; ?>








<?php
    }
}

$widgets_manager->register(new Tanspot_Iconbox());
