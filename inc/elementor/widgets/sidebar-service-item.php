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
class Tanspot_Sidebar_Service_Item extends Widget_Base
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
        return 'service-item';
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
        return __('Tanspot::Service Item Sidebar', 'tanspot-toolkit');
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
            'tanspot_service_sidebar_wrapper',
            [
                'label' => __('Servcie Item', 'tanspot-toolkit'),
            ]
        );


        $this->add_control(
            'tanspot_service_sidebar_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Services', 'textdomain'),
                'placeholder' => esc_html__('Type  here', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'tanspot_service_sidebar_repeator',
            [
                'label' => esc_html__('Service List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'tanspot_service_list_title',
                        'label' => esc_html__('Title', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('International Transport', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tanspot_service_list_url',
                        'label' => esc_html__('Service URL', 'textdomain'),
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
                        'tanspot_service_list_title' => esc_html__('International Transport', 'textdomain'),
                    ],
                    [
                        'tanspot_service_list_title' => esc_html__('Local Track Transport', 'textdomain'),
                    ],
                    [
                        'tanspot_service_list_title' => esc_html__('Fast Personal Delivery', 'textdomain'),
                    ],
                    [
                        'tanspot_service_list_title' => esc_html__('Safe Ocean Transport', 'textdomain'),
                    ],
                    [
                        'tanspot_service_list_title' => esc_html__('Warehouse Facility', 'textdomain'),
                    ],
                    [
                        'tanspot_service_list_title' => esc_html__('Emergency Transport', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ tanspot_service_list_title }}}',
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
        $tanspot_service_sidebar_title = $settings['tanspot_service_sidebar_title'];
        $tanspot_service_sidebar_repeator = $settings['tanspot_service_sidebar_repeator'];
?>



        <div class="service-details__services-box">
            <h3 class="service-details__services-title"><?php echo esc_html($tanspot_service_sidebar_title, 'tanspot-toolkit'); ?></h3>
            <ul class="service-details__services-list list-unstyled">

                <?php
                // Current browser URL
                $current_url = home_url(add_query_arg([], $_SERVER['REQUEST_URI']));
                $index = 0;

                foreach ($tanspot_service_sidebar_repeator as $single_servcie_item):

                    $servcie_url = $single_servcie_item['tanspot_service_list_url'];
                    $item_url = esc_url($servcie_url['url']);

                    // যদি current URL match করে → active
                    if ($current_url == $item_url) {
                        $active_class = 'active';
                    } else {
                        $active_class = '';
                    }
                ?>

                    <li class="<?php echo esc_attr($active_class); ?>">
                        <a href="<?php echo $item_url; ?>">
                            <?php echo esc_html($single_servcie_item['tanspot_service_list_title']); ?>
                            <span class="icon-next"></span>
                        </a>
                    </li>

                <?php
                    $index++;
                endforeach;
                ?>

            </ul>


        </div>


        <script>
            jQuery(document).ready(function($) {



            });
        </script>
<?php
    }
}

$widgets_manager->register(new Tanspot_Sidebar_Service_Item());
