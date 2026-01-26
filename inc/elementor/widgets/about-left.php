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
class Tanspot_About_Left extends Widget_Base
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
        return 'about-left';
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
        return __('Tanspot::About Left', 'tanspot-toolkit');
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
            'tanspot_about_left_content',
            [
                'label' => __('About Left Content', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_about_left_thumb_image',
            [
                'label' => esc_html__('Thumbnail Image', 'textdomain'),
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
        $tanspot_about_left_thumb_image = $settings['tanspot_about_left_thumb_image']['url'];
?>

        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
            <div class="about-one__img-box">
                <div class="about-one__img">
                    <img src="<?php echo esc_url($tanspot_about_left_thumb_image); ?>" alt="">
                </div>
                <div class="about-one__review-and-experience-box">
                    <div class="about-one__review-box">
                        <ul class="list-unstyled about-one__review-list">
                            <li>
                                <div class="about-one__review-img">
                                    <img src="assets/images/resources/about-one-review-img-1-1.jpg"
                                        alt="">
                                </div>
                            </li>
                            <li>
                                <div class="about-one__review-img">
                                    <img src="assets/images/resources/about-one-review-img-1-2.jpg"
                                        alt="">
                                </div>
                            </li>
                            <li>
                                <div class="about-one__review-img">
                                    <img src="assets/images/resources/about-one-review-img-1-3.jpg"
                                        alt="">
                                </div>
                            </li>
                            <li>
                                <div class="about-one__review-img">
                                    <img src="assets/images/resources/about-one-review-img-1-4.jpg"
                                        alt="">
                                </div>
                            </li>
                        </ul>
                        <div class="about-one__review-star">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        <p class="about-one__review-text">Clients 4.8 (3,567 Reviews)</p>
                    </div>
                    <div class="about-one__experience-box">
                        <div class="about-one__experience-count">
                            <h3 class="odometer" data-count="35">00</h3>
                            <span>+</span>
                        </div>
                        <p class="about-one__experience-count-text">Years Of <br> Experience</p>
                    </div>
                    <div class="about-one__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="about-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                        <h4 class="about-one__video-title">Watch Video</h4>
                    </div>
                </div>
                <div class="about-one__circle-text">
                    <div class="about-one__round-text-box">
                        <div class="inner">
                            <div class="about-one__curved-circle rotate-me">
                                WELCOME TO OUR COMPANY WORKING Poperly SINCE 2002
                            </div>
                        </div>
                        <div class="overlay-icon-box">
                            <a href="about.html"><i class="icon-plane"></i></a>
                        </div>
                    </div>
                </div>
                <div class="about-one__shape-1">
                    <img src="assets/images/shapes/about-one-shape-1.png" alt="">
                </div>
                <div class="about-one__shape-2">
                    <img src="assets/images/shapes/about-one-shape-2.png" alt="">
                </div>
            </div>
        </div>

        <script>
            jQuery(document).ready(function($) {
                // Curved Circle
                if ($(".about-one__curved-circle").length) {
                    $(".about-one__curved-circle").circleType({
                        position: "absolute",
                        dir: 1,
                        radius: 88,
                        forceHeight: true,
                        forceWidth: true,
                    });
                }


            });
        </script>




<?php
    }
}

$widgets_manager->register(new Tanspot_About_Left());
