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
class Tanspot_Service_Slider extends Widget_Base
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
        return 'service-slider';
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
        return __('Tanspot::Service Slider', 'tanspot-toolkit');
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
            'tanspot_service_slider_wrapper',
            [
                'label' => __('Service Slider', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_service_slider_lists',
            [
                'label' => esc_html__('Service List', 'tanspot-toolkit'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'tanspot_service_slider_title',
                        'label' => esc_html__('Title', 'tanspot-toolkit'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('International Shipping', 'tanspot-toolkit'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tanspot_service_slider_coun_number',
                        'label' => esc_html__('Counter Number', 'tanspot-toolkit'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('01', 'tanspot-toolkit'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tanspot_service_slider_description',
                        'label' => esc_html__('Descriptions', 'tanspot-toolkit'),
                        'type' => \Elementor\Controls_Manager::WYSIWYG,
                        'default' => esc_html__('Descriptions', 'tanspot-toolkit'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tanspot_service_slider_thumbnail',
                        'label' => esc_html__('Thumbnail Image', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'name' => 'tanspot_service_slider_icon',
                        'label' => esc_html__('Select Icon', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'default' => 'icon-worldwide-shipping',
                        'options' => [
                            'icon-worldwide-shipping' => esc_html__('Shipping', 'textdomain'),
                            'icon-shipment'  => esc_html__('Shipment', 'textdomain'),
                            'icon-delivery-man' => esc_html__('Delivery', 'textdomain'),
                            'icon-truck' => esc_html__('Truck', 'textdomain'),
                        ],
                    ],
                    [
                        'name' => 'tanspot_service_slider_btn_text',
                        'label' => esc_html__('Button Text', 'tanspot-toolkit'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Read More', 'tanspot-toolkit'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tanspot_service_slider_btn_url',
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

                ],
                'default' => [
                    [
                        'tanspot_service_slider_title' => esc_html__('International Shipping', 'textdomain'),
                    ],
                    [
                        'tanspot_service_slider_title' => esc_html__('Ocean Freight', 'textdomain'),
                    ],
                    [
                        'tanspot_service_slider_title' => esc_html__('Rail Freight', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ tanspot_service_slider_title }}}',
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
        $tanspot_service_slider_lists = $settings['tanspot_service_slider_lists'];
?>


        <div class="services-one__carousel owl-theme owl-carousel">
            <!--Services One Single Start-->
            <?php foreach ($tanspot_service_slider_lists as $single_service_item):
                $btn_url =  $single_service_item['tanspot_service_slider_btn_url'];
                $service_thumbnail_url = $single_service_item['tanspot_service_slider_thumbnail'];

            ?>
                <div class="item">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="<?php echo esc_url($service_thumbnail_url['url'], 'tanspot-toolkit'); ?>" alt="<?php echo esc_attr($service_thumbnail_url['alt'], 'tanspot-toolkit'); ?>">
                            </div>
                            <div class="services-one__icon">
                                <span class="<?php echo esc_attr($single_service_item['tanspot_service_slider_icon'], 'tanspot-toolkit'); ?>"></span>
                            </div>
                        </div>
                        <div class="services-one__content">
                            <div class="services-one__count"><?php echo esc_html($single_service_item['tanspot_service_slider_coun_number'], 'tanspot-toolkit'); ?></div>
                            <h4 class="services-one__title"><a href="<?php echo esc_url($btn_url['url'], 'tanspot-toolkit'); ?>"><?php echo esc_html($single_service_item['tanspot_service_slider_title'], 'tanspot-toolkit'); ?></a></h4>
                            <p class="services-one__text"><?php echo toolkit_kses($single_service_item['tanspot_service_slider_description'], 'tanspot-toolkit'); ?></p>
                            <div class="services-one__btn-box">
                                <a href="<?php echo esc_url($btn_url['url'], 'tanspot-toolkit'); ?>"><?php echo esc_html($single_service_item['tanspot_service_slider_btn_text'], 'tanspot-toolkit'); ?> <span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!--Services One Single End-->

        </div>





        <script>
            jQuery(document).ready(function($) {

                //Services One Carousel
                if ($(".services-one__carousel").length) {
                    $(".services-one__carousel").owlCarousel({
                        loop: true,
                        margin: 30,
                        nav: false,
                        dots: true,
                        smartSpeed: 500,
                        autoplay: true,
                        autoplayTimeout: 7000,
                        navText: [
                            '<span class="icon-arrow-right"></span>',
                            '<span class="icon-arrow-right"></span>',
                        ],
                        responsive: {
                            0: {
                                items: 1,
                            },
                            768: {
                                items: 2,
                            },
                            992: {
                                items: 3,
                            },
                            1320: {
                                items: 4,
                            },
                        },
                    });
                }

            });
        </script>
<?php
    }
}

$widgets_manager->register(new Tanspot_Service_Slider());
