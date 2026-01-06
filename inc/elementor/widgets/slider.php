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
class Tanspot_Slider_Widgets extends Widget_Base
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
        return 'tanspot-slider';
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
        return __('Tanspot::Slider', 'tanspot-toolkit');
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
            'tanspot_slider_content_wrapper',
            [
                'label' => __('Slider Content', 'tanspot-toolkit'),
            ]
        );


        $this->add_control(
			'tanspot_slider_content_repeater',
			[
				'label' => esc_html__( 'Content List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'tanspot_slider_title',
						'label' => esc_html__( 'Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Slider Title' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'tanspot_slider_subtitle',
						'label' => esc_html__( 'Sub Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'Slider  Sub Title' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'tanspot_slider_description',
						'label' => esc_html__( 'Descriptions', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Descriptions' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'tanspot_slider_btn_text',
						'label' => esc_html__( 'Descriptions', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'Discover More' , 'textdomain' ),
						'label_block' => true,
					],
                    [
                        'name' => 'tanspot_slider_btn_url',
                        'label' => esc_html__( 'Button URL', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'options' => [ 'url', 'is_external', 'nofollow' ],
                        'default' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => true,
                            // 'custom_attributes' => '',
                        ],
                        'label_block' => true,
                    ],
                    [
                        'name' => 'tanspot_slider_thumbnail_img',
                        'label' => esc_html__( 'Thumbnail Image', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'name' => 'tanspot_slider_thumbnail_shap1',
                        'label' => esc_html__( 'Thumbnail Shape 1', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'name' => 'tanspot_slider_thumbnail_shap2',
                        'label' => esc_html__( 'Thumbnail Shape 2', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
					
		
				],
				'default' => [
					[
						'tanspot_slider_subtitle' => esc_html__( 'Sub Title 1', 'textdomain' ),
					],
					[
						'tanspot_slider_subtitle' => esc_html__( 'Sub Title 2', 'textdomain' ),
					],
					[
						'tanspot_slider_subtitle' => esc_html__( 'Sub Title 3', 'textdomain' ),
					],
				],
				'title_field' => '{{{ tanspot_slider_subtitle }}}',
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
        $tanspot_slider_content_repeater = $settings['tanspot_slider_content_repeater'];
?>



<!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider">
                <div class="swiper-wrapper">
                    <?php foreach($tanspot_slider_content_repeater as $tanspot_single_slider_item):
                        $thumb_img = $tanspot_single_slider_item['tanspot_slider_thumbnail_img'];
                        $thumb_shap1 = $tanspot_single_slider_item['tanspot_slider_thumbnail_shap1'];
                        $thumb_shap2 = $tanspot_single_slider_item['tanspot_slider_thumbnail_shap2'];
                        $btn_url = $tanspot_single_slider_item['tanspot_slider_btn_url'];
                       
                        
                        
                        ?>
                    <div class="swiper-slide">
                        <div class="main-slider__pattern-bg"
                            style="background-image: url(<?php echo esc_url($thumb_shap1['url'], 'tanspot-toolkit');?>);"></div>
                        <div class="main-slider__bg-box">
                            <div class="main-slider__bg"
                                style="background-image: url(<?php echo esc_url($thumb_img['url'], 'tanspot-toolkit');?>);"></div>
                        </div>
                        <div class="main-slider__shape-1"></div>
                        <div class="main-slider__shape-2"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h4 class="main-slider__sub-title"><?php echo esc_html($tanspot_single_slider_item['tanspot_slider_subtitle']);?></h4>
                                        <h2 class="main-slider__title"><?php echo toolkit_kses($tanspot_single_slider_item['tanspot_slider_title']);?> </h2>
                                        <p class="main-slider__text"><?php echo toolkit_kses($tanspot_single_slider_item['tanspot_slider_description']);?></p>
                                        <div class="main-slider__btn-box">
                                            <a href="<?php echo esc_url($btn_url['url'], 'tanspot-toolkit');?>" class="thm-btn"><?php echo esc_html($tanspot_single_slider_item['tanspot_slider_btn_text']);?>
                                                <span><i class="icon-right-arrow"></i></span>
                                            </a>
                                        </div>
                                        <div class="main-slider__map">
                                            <img src="<?php echo esc_url($thumb_shap2['url'], 'tanspot-toolkit');?>" alt=""
                                                class="float-bob-y">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>




                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <!-- If we need navigation buttons -->

            </div>
        </section>
        <!--Main Slider End-->





        <script>
            jQuery(document).ready(function($) {

         
               // swiper slider
if ($(".thm-swiper__slider").length) {
    $(".thm-swiper__slider").each(function () {
        let thmSwiperSlider = new Swiper(this, {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    });
}

            

            });
        </script>
<?php
    }
}

$widgets_manager->register(new Tanspot_Slider_Widgets());
