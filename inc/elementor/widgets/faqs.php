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

        $this->add_control(
            'tanspot_faqs_repeater',
            [
                'label' => esc_html__('Faqs List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'tanspot_faqs_title',
                        'label' => esc_html__('Title', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('How do you handle returns or exchanges?', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tanspot_faqs_description',
                        'label' => esc_html__('Content', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => esc_html__('Description', 'textdomain'),
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'tanspot_faqs_title' => esc_html__('How do you handle returns or exchanges?', 'textdomain'),
                    ],
                    [
                        'tanspot_faqs_title' => esc_html__('What does business consulting do?', 'textdomain'),
                    ],
                    [
                        'tanspot_faqs_title' => esc_html__('Can I cancel a shipment after its been booked?', 'textdomain'),
                    ],
                    [
                        'tanspot_faqs_title' => esc_html__('Can you assist with customs clearance procedures?', 'textdomain'),
                    ],
                    [
                        'tanspot_faqs_title' => esc_html__('What is your delivery policy?', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ tanspot_faqs_title }}}',
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
        $tanspot_faqs_repeater = $settings['tanspot_faqs_repeater'];
?>

        <div class="faq-page__single">
            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">

                <?php
                $i = 0;
                foreach ($tanspot_faqs_repeater as $single_faq_item):
                    $i++;

                    $animation_class = ($i % 2 == 1) ? 'fadeInLeft' : 'fadeInRight';
                    $delay = ($i - 1) * 100;
                    $active_class = ($i == 2) ? 'active' : '';



                ?>
                    <div class="accrodion wow  <?php echo esc_attr($active_class, 'tanspot-toolkit'); ?> <?php echo esc_attr($animation_class, 'tanspot-toolkit'); ?>" data-wow-delay="<?php echo esc_attr($delay, 'tanspot-toolkit'); ?>ms"
                        data-wow-duration="1500ms">
                        <div class="accrodion-title">
                            <h4><?php echo esc_html($single_faq_item['tanspot_faqs_title'], 'tanspot-toolkit'); ?></h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p><?php echo esc_html($single_faq_item['tanspot_faqs_description'], 'tanspot-toolkit'); ?>
                                </p>
                            </div><!-- /.inner -->
                        </div>
                    </div>

                <?php endforeach; ?>


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
