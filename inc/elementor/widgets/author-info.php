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
class Tanspot_Author_Info extends Widget_Base
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
        return 'author-info';
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
        return __('Tanspot::Author Info', 'tanspot-toolkit');
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
            'tanspot_author_info_content',
            [
                'label' => __('Author Info', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_author_info_name',
            [
                'label' => esc_html__('Name', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Dainel Brain', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tanspot_author_info_designation',
            [
                'label' => esc_html__('Designation', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Co-Founder', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );


        $this->add_control(
            'tanspot_author_image',
            [
                'label' => esc_html__('Author Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'tanspot_author_sign_image',
            [
                'label' => esc_html__('Author Signature Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
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
        $tanspot_author_info_name = $settings['tanspot_author_info_name'];
        $tanspot_author_info_designation = $settings['tanspot_author_info_designation'];
        $tanspot_author_image = $settings['tanspot_author_image'];
        $tanspot_author_sign_image = $settings['tanspot_author_sign_image'];
?>

        <div class="about-one__author-box">
            <div class="about-one__author-details">
                <div class="about-one__author-img-box">
                    <div class="about-one__author-img">
                        <img src="<?php echo esc_url($tanspot_author_image['url'], 'tanspot-toolkit'); ?>" alt="">
                    </div>
                </div>
                <div class="about-one__author-content">
                    <h4><?php echo esc_html($tanspot_author_info_name, 'tanspot-toolkit'); ?></h4>
                    <p><?php echo esc_html($tanspot_author_info_designation, 'tanspot-toolkit'); ?></p>
                </div>
            </div>
            <div class="about-one__author-sign">
                <img src="<?php echo esc_url($tanspot_author_sign_image['url'], 'tanspot-toolkit'); ?>" alt="">
            </div>
        </div>


<?php
    }
}

$widgets_manager->register(new Tanspot_Author_Info());
