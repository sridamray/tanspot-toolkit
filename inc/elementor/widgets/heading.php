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
class Tanspot_heading_widgets extends Widget_Base
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
        return 'tanspot-heading';
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
        return __('Tanspot::Heading', 'tanspot-toolkit');
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
            'tanspot_heading_wrap',
            [
                'label' => __('Heading Content', 'tanspot-toolkit'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'tanopot_sub_heading_Switcher',
            [
                'label' => esc_html__('Sub Title Show/Hide', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'tanspot-toolkit'),
                'label_off' => esc_html__('Hide', 'tanspot-toolkit'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'tanspot_heading_sub_title',
            [
                'label' => esc_html__('Sub Title', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Our Services', 'tanspot-toolkit'),
                'placeholder' => esc_html__('Type here', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanopot_heading_Switcher',
            [
                'label' => esc_html__('Title Show/Hide', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'tanspot-toolkit'),
                'label_off' => esc_html__('Hide', 'tanspot-toolkit'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'tanspot_heading_title',
            [
                'label' => esc_html__('Title', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Our Title', 'tanspot-toolkit'),
                'placeholder' => esc_html__('Type here', 'tanspot-toolkit'),
            ]
        );





        $this->end_controls_section();




        // Style Control

        $this->start_controls_section(
            'tanpost_heading_style_wrapper',
            [
                'label' => __('Style', 'tanspot-toolkit'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'tasnpost_heading_alignment',
            [
                'label' => __('Alignment', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'tanspot-toolkit'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'tanspot-toolkit'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'tanspot-toolkit'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'selectors' => [
                    '{{WRAPPER}} .section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tasnpost_heading_wrap_margin',
            [
                'label' => __('Margin', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'default' => [
                    'top'    => -10,
                    'right'  => 0,
                    'bottom' => 48,
                    'left'   => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tasnpost_heading_wrap_padding',
            [
                'label' => __('Padding', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'default' => [
                    'top'    => 0,
                    'right'  => 0,
                    'bottom' => 0,
                    'left'   => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );





        $this->add_control(
            'tanspot_subtitle_heading',
            [
                'label' => esc_html__('Sub Title', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'tanpost_heading_sub_title_color',
            [
                'label' => esc_html__('Sub Title Color', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title__tagline' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .section-title__shape-1>i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .section-title__shape-2>i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tanpost_heading_sub_title_border_color',
            [
                'label' => esc_html__('Sub Title border Color', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title__tagline-border' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Sub Title Typography', 'tanspot-toolkit'),
                'name' => 'tanspot_heading_subtitle_typography',
                'selector' => '{{WRAPPER}} .section-title__tagline',
            ]
        );

        $this->add_responsive_control(
            'tasnpost_subheading__margin',
            [
                'label' => __('Margin', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'default' => [
                    'top'    => 0,
                    'right'  => 0,
                    'bottom' => 12,
                    'left'   => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .section-title__tagline-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tasnpost_subheading__paddding',
            [
                'label' => __('Padding', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'default' => [
                    'top'    => 0,
                    'right'  => 0,
                    'bottom' => 0,
                    'left'   => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .section-title__tagline-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );



        $this->add_control(
            'tanspot_title_heading',
            [
                'label' => esc_html__('Title', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'tanpost_heading_title_color',
            [
                'label' => esc_html__('Title Color', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title__title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tanpost_heading_title_color2',
            [
                'label' => esc_html__('Title Span Color', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title__title span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Title Typography', 'tanspot-toolkit'),
                'name' => 'tanspot_heading_title_typography',
                'selector' => '{{WRAPPER}} .section-title__title',
            ]
        );

        $this->add_responsive_control(
            'tasnpost_title_heading__margin',
            [
                'label' => __('Margin', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'default' => [
                    'top'    => 0,
                    'right'  => 0,
                    'bottom' => 0,
                    'left'   => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .section-title__title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tasnpost_title_heading__paddding',
            [
                'label' => __('Padding', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'default' => [
                    'top'    => 0,
                    'right'  => 0,
                    'bottom' => 0,
                    'left'   => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .section-title__title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
        $tanspot_heading_sub_title = $settings['tanspot_heading_sub_title'];
        $tanspot_heading_title = $settings['tanspot_heading_title'];
        $tanopot_sub_heading_Switcher = $settings['tanopot_sub_heading_Switcher'];
        $tanopot_heading_Switcher = $settings['tanopot_heading_Switcher'];
?>


        <div class="section-title sec-title-animation animation-style1">
            <?php if (!empty($tanopot_sub_heading_Switcher)): ?>
                <div class="section-title__tagline-box">

                    <span class="section-title__tagline-border"></span>
                    <div class="section-title__shape-1">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h6 class="section-title__tagline"><?php echo esc_html($tanspot_heading_sub_title, 'tanspot-toolkit'); ?></h6>
                    <span class="section-title__tagline-border"></span>
                    <div class="section-title__shape-2">
                        <i class="fas fa-plane"></i>
                    </div>

                </div>
            <?php endif; ?>
            <?php if (!empty($tanopot_heading_Switcher)): ?>
                <h3 class="section-title__title title-animation"><?php echo toolkit_kses($tanspot_heading_title, 'tanspot-toolkit'); ?>
                </h3>
            <?php endif; ?>
        </div>





<?php
    }
}

$widgets_manager->register(new Tanspot_heading_widgets());
