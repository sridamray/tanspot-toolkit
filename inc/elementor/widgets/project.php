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
class Tanspot_Project extends Widget_Base
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
        return 'project';
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
        return __('Tanspot::Project', 'tanspot-toolkit');
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
            'tanspot_project_wrapper',
            [
                'label' => __('Project', 'tanspot-toolkit'),
            ]
        );


        $this->add_control(
            'tanspot_project_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Quality Equipment', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tanspot_project_subtitle',
            [
                'label' => esc_html__('Subtitle', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Logistics', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'tanspot_project_thubnail',
            [
                'label' => esc_html__('Thubnail Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'tanspot_project_link',
            [
                'label' => esc_html__('URL', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
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

        $this->add_control(
            'text_transform',
            [
                'label' => __('Text Transform', 'tanspot-toolkit'),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => __('None', 'tanspot-toolkit'),
                    'uppercase' => __('UPPERCASE', 'tanspot-toolkit'),
                    'lowercase' => __('lowercase', 'tanspot-toolkit'),
                    'capitalize' => __('Capitalize', 'tanspot-toolkit'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
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
        $tanspot_project_title = $settings['tanspot_project_title'];
        $tanspot_project_subtitle = $settings['tanspot_project_subtitle'];
        $tanspot_project_thubnail = $settings['tanspot_project_thubnail'];
        $tanspot_project_link = $settings['tanspot_project_link'];
?>

        <div class="project-one__single">
            <div class="project-one__img-box">
                <div class="project-one__img">
                    <img src="<?php echo esc_url($tanspot_project_thubnail['url'], 'tanspot-toollkit'); ?>" alt="<?php echo esc_attr($tanspot_project_thubnail['alt'], 'tanspot-toollkit'); ?>">
                </div>
                <div class="project-one__content">
                    <div class="project-one__title-box">
                        <p class="project-one__sub-title"><?php echo esc_html($tanspot_project_subtitle), 'tanspot-toollkit'; ?></p>
                        <h3 class="project-one__title"><a href="<?php echo esc_url($tanspot_project_link['url'], 'tanspot-toollkit'); ?>"><?php echo esc_html($tanspot_project_title, 'tanspot-toollkit'); ?></a></h3>
                    </div>
                    <div class="project-one__arrow">
                        <a href="<?php echo esc_url($tanspot_project_thubnail['url'], 'tanspot-toollkit'); ?>" class="img-popup"><span
                                class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}

$widgets_manager->register(new Tanspot_Project());
