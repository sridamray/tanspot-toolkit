<?php
if (! defined('ABSPATH')) exit;

class Tanspot_heading_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'tanspot-heading'; // Slug
    }

    public function get_title()
    {
        return esc_html__('Tanspot::Heading', 'tanspot-toolkit');
    }

    public function get_icon()
    {
        return 'eicon-code'; // Elementor icon class
    }

    public function get_categories()
    {
        return ['basic']; // Or a custom category
    }

    protected function register_controls()
    {
        // Content Tab
        $this->start_controls_section(
            'tanspot_heading_wrapper',
            [
                'label' => esc_html__('Heading', 'tanspot-toolkit'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'tanspot_heading_subtitle',
            [
                'label' => esc_html__('Sub Title', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Services', 'tanspot-toolkit'),
                'placeholder' => esc_html__('Type here', 'tanspot-toolkit'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tanspot_heading_title',
            [
                'label' => esc_html__('Title', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Provide Efficient Logistics', 'tanspot-toolkit'),
                'placeholder' => esc_html__('Type here', 'tanspot-toolkit'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tanspot_heading_color_title',
            [
                'label' => esc_html__('Color Title', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Solution Business', 'tanspot-toolkit'),
                'placeholder' => esc_html__('Type here', 'tanspot-toolkit'),
                'label_block' => true,
            ]
        );





        $this->end_controls_section();


        // Style content

        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__('Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'text_color',
            [
                'label' => esc_html__('Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .your-class' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $tanspot_heading_subtitle = $settings['tanspot_heading_subtitle'];
        $tanspot_heading_title = $settings['tanspot_heading_title'];
        $tanspot_heading_color_title = $settings['tanspot_heading_color_title'];
?>
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline-border"></span>
                <div class="section-title__shape-1">
                    <i class="fas fa-plane"></i>
                </div>
                <h6 class="section-title__tagline"><?php echo esc_html($tanspot_heading_subtitle, 'tanspot-toolkit'); ?></h6>
                <span class="section-title__tagline-border"></span>
                <div class="section-title__shape-2">
                    <i class="fas fa-plane"></i>
                </div>
            </div>
            <h3 class="section-title__title title-animation"><?php echo esc_html($tanspot_heading_title, 'tanspot-toolkit'); ?> <br>
                <span><?php echo esc_html($tanspot_heading_color_title, 'tanspot-toolkit'); ?></span>
            </h3>
        </div>


<?php
    }
}
