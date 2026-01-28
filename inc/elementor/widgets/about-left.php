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
                'label' => __('About Thumbnail Content', 'tanspot-toolkit'),
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
        $this->add_control(
            'tanspot_about_left_shap1_image',
            [
                'label' => esc_html__('Shap 1 Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'tanspot_about_left_shap2_image',
            [
                'label' => esc_html__('Shap 2 Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'tanspot_about_left_review_content',
            [
                'label' => __('About Review Content', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_about_left_review_gallery',
            [
                'label' => esc_html__('Client Gallery', 'textdomain'),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'show_label' => false,
                'default' => [],
            ]
        );

        $this->add_control(
            'tanspot_about_left_review_rating',
            [
                'label' => esc_html__('Rating', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '5',
                'options' => [
                    '1' => esc_html__('1 Star', 'textdomain'),
                    '2'  => esc_html__('2 Star', 'textdomain'),
                    '3' => esc_html__('3 Star', 'textdomain'),
                    '4' => esc_html__('4 Star', 'textdomain'),
                    '5' => esc_html__('5 Star', 'textdomain'),
                ],
            ]
        );

        $this->add_control(
            'tanspot_about_left_review_text',
            [
                'label' => esc_html__('Review Content', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Review Content', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'tanspot_about_left_review_experience_text',
            [
                'label' => esc_html__('Experience Content', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Experience Content', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tanspot_about_left_review_experience_years',
            [
                'label' => esc_html__('Experience Years', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('35', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'tanspot_about_left_review_experience_suffix',
            [
                'label' => esc_html__('Experience Suffix', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'tanspot_about_left_review_video_text',
            [
                'label' => esc_html__('Video Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Watch Video', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'tanspot_about_left_review_video_url',
            [
                'label' => esc_html__('Video URL', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('https://www.youtube.com/watch?v=Get7rqXYrbQ', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
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
        $tanspot_about_left_review_gallery = $settings['tanspot_about_left_review_gallery'];
        $tanspot_about_left_review_rating = $settings['tanspot_about_left_review_rating'];
        $tanspot_about_left_review_text = $settings['tanspot_about_left_review_text'];
        $tanspot_about_left_review_experience_text = $settings['tanspot_about_left_review_experience_text'];
        $tanspot_about_left_review_experience_years = $settings['tanspot_about_left_review_experience_years'];
        $tanspot_about_left_review_video_text = $settings['tanspot_about_left_review_video_text'];
        $tanspot_about_left_review_video_url = $settings['tanspot_about_left_review_video_url'];
        $tanspot_about_left_review_experience_suffix = $settings['tanspot_about_left_review_experience_suffix'];
        $tanspot_about_left_shap1_image = $settings['tanspot_about_left_shap1_image'];
        $tanspot_about_left_shap2_image = $settings['tanspot_about_left_shap2_image'];
?>

        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
            <div class="about-one__img-box">
                <div class="about-one__img">
                    <img src="<?php echo esc_url($tanspot_about_left_thumb_image); ?>" alt="">
                </div>
                <div class="about-one__review-and-experience-box">
                    <div class="about-one__review-box">
                        <ul class="list-unstyled about-one__review-list">
                            <?php foreach ($tanspot_about_left_review_gallery as $single_about_client_image):
                            ?>
                                <li>

                                    <div class="about-one__review-img">
                                        <img src="<?php echo esc_url($single_about_client_image['url']); ?>"
                                            alt="">
                                    </div>
                                </li>
                            <?php endforeach; ?>


                        </ul>
                        <div class="about-one__review-star">
                            <?php
                            for ($i = 1; $i <= 5; $i++) {

                                if ($i <= $tanspot_about_left_review_rating) {
                                    echo '<span class="fas fa-star"></span>';
                                } else {
                                    echo '<span class="far fa-star"></span>'; // Optional: empty star for better UI
                                }
                            }
                            ?>



                        </div>
                        <p class="about-one__review-text"><?php echo toolkit_kses($tanspot_about_left_review_text, 'tanspot-toolkit'); ?></p>
                    </div>
                    <div class="about-one__experience-box">
                        <div class="about-one__experience-count">
                            <h3 class="odometer" data-count="<?php echo esc_attr($tanspot_about_left_review_experience_years, 'tanspot-toolkit'); ?>">00</h3>
                            <span><?php echo esc_html($tanspot_about_left_review_experience_suffix, 'tanspot-toolkit'); ?></span>
                        </div>
                        <p class="about-one__experience-count-text"><?php echo toolkit_kses($tanspot_about_left_review_experience_text, 'tanspot-toolkit'); ?></p>
                    </div>
                    <div class="about-one__video-link">
                        <a href="<?php echo esc_url($tanspot_about_left_review_video_url); ?>" class="video-popup">
                            <div class="about-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                        <h4 class="about-one__video-title"><?php echo esc_html($tanspot_about_left_review_video_text); ?></h4>
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
                    <img src="<?php echo esc_url($tanspot_about_left_shap1_image['url'], 'tanspot-toolkit'); ?>" alt="">
                </div>
                <div class="about-one__shape-2">
                    <img src="<?php echo esc_url($tanspot_about_left_shap2_image['url'], 'tanspot-toolkit'); ?>" alt="">
                </div>
            </div>
        </div>

        <script>
            jQuery(document).ready(function($) {
                // Curved Circle



            });
        </script>




<?php
    }
}

$widgets_manager->register(new Tanspot_About_Left());
