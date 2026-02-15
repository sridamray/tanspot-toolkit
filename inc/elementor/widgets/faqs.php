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
class Tanspot_Faqs extends Widget_Base
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
        return 'faqs';
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
        return __('Tanspot::Faqs', 'tanspot-toolkit');
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
            'tanspot_faqs_wrapper',
            [
                'label' => __('Faq', 'tanspot-toolkit'),
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
?>

        <div class="faq-page__single">
            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                <div class="accrodion wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="accrodion-title">
                        <h4>How do you handle returns or exchanges?</h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p>We help businesses bring ideas to life in the digital world designing
                                &
                                implementing the technology tools that they need to win. We help
                                business bring ideas to life in the digital wor
                            </p>
                        </div><!-- /.inner -->
                    </div>
                </div>
                <div class="accrodion active wow fadeInRight" data-wow-delay="100ms"
                    data-wow-duration="1500ms">
                    <div class="accrodion-title">
                        <h4>What does business consulting do?</h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p>We help businesses bring ideas to life in the digital world designing
                                &
                                implementing the technology tools that they need to win. We help
                                business bring ideas to life in the digital wor
                            </p>
                        </div><!-- /.inner -->
                    </div>
                </div>
                <div class="accrodion wow fadeInLeft" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="accrodion-title">
                        <h4>Can I cancel a shipment after it's been booked?</h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p>We help businesses bring ideas to life in the digital world designing
                                &
                                implementing the technology tools that they need to win. We help
                                business bring ideas to life in the digital wor
                            </p>
                        </div><!-- /.inner -->
                    </div>
                </div>
                <div class="accrodion wow fadeInRight" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="accrodion-title">
                        <h4>Can you assist with customs clearance procedures?</h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p>We help businesses bring ideas to life in the digital world designing
                                &
                                implementing the technology tools that they need to win. We help
                                business bring ideas to life in the digital wor
                            </p>
                        </div><!-- /.inner -->
                    </div>
                </div>
                <div class="accrodion wow fadeInLeft" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="accrodion-title">
                        <h4>What is your delivery policy?</h4>
                    </div>
                    <div class="accrodion-content">
                        <div class="inner">
                            <p>We help businesses bring ideas to life in the digital world designing
                                &
                                implementing the technology tools that they need to win. We help
                                business bring ideas to life in the digital wor
                            </p>
                        </div><!-- /.inner -->
                    </div>
                </div>
            </div>
        </div>




        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new Tanspot_Faqs());
