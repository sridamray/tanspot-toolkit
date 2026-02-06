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
class Tanspot_Text_Slider extends Widget_Base
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
        return 'text-slider';
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
        return __('Tanspot::Text Slider', 'tanspot-toolkit');
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
            'tanspot_text_slider_wrapper',
            [
                'label' => __('Text Slider', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_text_slider_repeater',
            [
                'label' => esc_html__('Text List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'tanspot_text_slider_title',
                        'label' => esc_html__('Title', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('100% TRUSTED TRANSPORT', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tanspot_text_slider_image',
                        'label' => esc_html__('Icon Image', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ]
                ],
                'default' => [
                    [
                        'tanspot_text_slider_title' => esc_html__('100% TRUSTED TRANSPORT', 'textdomain'),
                    ],
                    [
                        'tanspot_text_slider_title' => esc_html__('Tracking', 'textdomain'),
                    ],
                    [
                        'tanspot_text_slider_title' => esc_html__('Delivery Service', 'textdomain'),
                    ],
                    [
                        'tanspot_text_slider_title' => esc_html__('Logistics', 'textdomain'),
                    ],
                    [
                        'tanspot_text_slider_title' => esc_html__('Warehouse', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ tanspot_text_slider_title }}}',
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
        $tanspot_text_slider_repeater = $settings['tanspot_text_slider_repeater'];
?>


        <!--Sliding Text One Start-->
        <section class="sliding-text-one">
            <div class="sliding-text-one__wrap">
                <ul class="sliding-text__list list-unstyled marquee_mode">
                    <?php foreach ($tanspot_text_slider_repeater as $single_tslider_item):
                        $tslider_img_url = $single_tslider_item['tanspot_text_slider_image'];

                    ?>
                        <li>
                            <h2 data-hover="<?php echo esc_attr($single_tslider_item['tanspot_text_slider_title'], 'tanspot-toolkit'); ?>" class="sliding-text__title"><?php echo esc_html($single_tslider_item['tanspot_text_slider_title'], 'tanspot-toolkit'); ?>
                                <img src="<?php echo esc_url($tslider_img_url['url'], 'tanspot-toolkit'); ?>" alt="<?php echo esc_url($tslider_img_url['alt'], 'tanspot-toolkit'); ?>">
                            </h2>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
        <!--Sliding Text One End-->




        <script>
            jQuery(document).ready(function($) {

                if ($(".marquee_mode").length) {
                    $(".marquee_mode").marquee({
                        speed: 30,
                        gap: 0,
                        delayBeforeStart: 0,
                        direction: "left",
                        duplicated: true,
                        pauseOnHover: true,
                        startVisible: true,
                    });
                }

            });
        </script>
<?php
    }
}

$widgets_manager->register(new Tanspot_Text_Slider());
