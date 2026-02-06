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
class Tanspot_Our_Skill extends Widget_Base
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
        return 'our-skill';
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
        return __('Tanspot::Our Skill', 'tanspot-toolkit');
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
            'tanspot_our_skill_wrapper',
            [
                'label' => __('Our Skill', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_skill_bg_image',
            [
                'label' => esc_html__('Area BG Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'tanspot_skill_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Title', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'tanspot_skill_subtitle',
            [
                'label' => esc_html__('Sub Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'rows' => 10,
                'default' => esc_html__('Sub Title', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'tanspot_skill_descriptions',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__('Default description', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
            ]
        );

        $this->add_control(
            'tanspot_skill_bar_heading',
            [
                'label' => esc_html__('Progress Bar', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'tanspot_skill_progress_lists',
            [
                'label' => esc_html__('Progress List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'tanspot_skill_progress_title',
                        'label' => esc_html__('Title', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Shipping', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tanspot_skill_progress_percentage',
                        'label' => esc_html__('Percentage', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('70', 'textdomain'),
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'tanspot_skill_progress_title' => esc_html__('Shipping', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ tanspot_skill_progress_title }}}',
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
        $tanspot_skill_bg_image = $settings['tanspot_skill_bg_image'];
        $tanspot_skill_title = $settings['tanspot_skill_title'];
        $tanspot_skill_subtitle = $settings['tanspot_skill_subtitle'];
        $tanspot_skill_descriptions = $settings['tanspot_skill_descriptions'];
        $tanspot_skill_progress_lists = $settings['tanspot_skill_progress_lists'];
?>

        <!--Skill One Start -->
        <section class="skill-one">
            <div class="skill-one__bg" style="background-image: url(<?php echo esc_url($tanspot_skill_bg_image['url'], 'tanspot-toolkit'); ?>);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="skill-one__left">
                            <div class="section-title text-left sec-title-animation animation-style1">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline-border"></span>
                                    <div class="section-title__shape-1">
                                        <i class="fas fa-plane"></i>
                                    </div>
                                    <h6 class="section-title__tagline"><?php echo esc_html($tanspot_skill_subtitle, 'tanspot-toolkit'); ?></h6>
                                    <span class="section-title__tagline-border"></span>
                                    <div class="section-title__shape-2">
                                        <i class="fas fa-plane"></i>
                                    </div>
                                </div>
                                <h3 class="section-title__title title-animation"><?php echo toolkit_kses($tanspot_skill_title, 'tanspot-toolkit'); ?>
                                </h3>
                            </div>
                            <p class="skill-one__text"><?php echo toolkit_kses($tanspot_skill_descriptions, 'tanspot-toolkit'); ?></p>
                            <div class="skill-one__progress-box">
                                <?php foreach ($tanspot_skill_progress_lists as $single_progress_item): ?>
                                    <div class="progress-box">
                                        <div class="bar-title"><?php echo esc_html($single_progress_item['tanspot_skill_progress_title'], 'tanspot-toolkit'); ?></div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="<?php echo esc_attr($single_progress_item['tanspot_skill_progress_percentage'], 'tanspot-toolkit'); ?>%">
                                                <div class="count-box">
                                                    <span class="count-text" data-stop="<?php echo esc_attr($single_progress_item['tanspot_skill_progress_percentage'], 'tanspot-toolkit'); ?>" data-speed="1500">0</span>%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="skill-one__btn-box">
                                <a href="contact.html" class="thm-btn">Book Your Parcel
                                    <span><i class="icon-right-arrow"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6"></div>
                </div>
            </div>
        </section>
        <!--Skill One End -->



        <script>
            jQuery(document).ready(function($) {

                //Progress Count Bar
                if ($(".count-bar").length) {
                    $(".count-bar").appear(
                        function() {
                            var el = $(this);
                            var percent = el.data("percent");
                            $(el).css("width", percent).addClass("counted");
                        }, {
                            accY: -50
                        }
                    );
                }


                //Fact Counter + Text Count
                if ($(".count-box").length) {
                    $(".count-box").appear(
                        function() {
                            var $t = $(this),
                                n = $t.find(".count-text").attr("data-stop"),
                                r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                            if (!$t.hasClass("counted")) {
                                $t.addClass("counted");
                                $({
                                    countNum: $t.find(".count-text").text()
                                }).animate({
                                    countNum: n
                                }, {
                                    duration: r,
                                    easing: "linear",
                                    step: function() {
                                        $t.find(".count-text").text(Math.floor(this.countNum));
                                    },
                                    complete: function() {
                                        $t.find(".count-text").text(this.countNum);
                                    }
                                });
                            }
                        }, {
                            accY: 0
                        }
                    );
                }


            });
        </script>
<?php
    }
}

$widgets_manager->register(new Tanspot_Our_Skill());
