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
class Tanspot_Hero_Banner extends Widget_Base
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
        return 'hero-banner';
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
        return __('Tanspot::Hero Banner', 'tanspot-toolkit');
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
            'tanspot_hero_wrapper',
            [
                'label' => __('Hero Banner', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
            'tanspot_hero_banner_bg',
            [
                'label' => esc_html__('Choose Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'tanspot_hero_banner_sub_title',
            [
                'label' => esc_html__('Sub Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Specialist In Modern Transportation', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
            ]
        );

        $this->add_control(
            'tanspot_hero_banner_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Modern Logistic', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
            ]
        );

        $this->add_control(
            'tanspot_hero_banner_animation_title',
            [
                'label' => esc_html__('Animation Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Transport, Provider, Services', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
            ]
        );

        $this->add_control(
            'tanspot_hero_banner_description',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Description', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
            ]
        );

        $this->add_control(
            'tanspot_hero_banner_btn_text',
            [
                'label' => esc_html__('BTN Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'rows' => 10,
                'default' => esc_html__('Discover More', 'textdomain'),
                'placeholder' => esc_html__('Type here', 'textdomain'),
            ]
        );

        $this->add_control(
            'tanspot_hero_banner_btn_url',
            [
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
        );










        $this->end_controls_section();


        $this->start_controls_section(
            'tanspot_hero_review_wrapper',
            [
                'label' => __('Hero Review', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
			'tanspot_hero_review_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Customer Satisfied', 'textdomain' ),
				'placeholder' => esc_html__( 'Type here', 'textdomain' ),
                'label_block' => true,
			]
		);
        $this->add_control(
			'tanspot_hero_review_subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '4.8 (15k Reviews)', 'textdomain' ),
				'placeholder' => esc_html__( 'Type here', 'textdomain' ),
                'label_block' => true,
			]
		);

        	$this->add_control(
			'tanspot_hero_review_image',
			[
				'label' => esc_html__( 'Review Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
                        [
                            'name' => 'review_image_title',
                            'label' => esc_html__( 'Review Image', 'textdomain' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => esc_html__( 'Review Image', 'textdomain' ),
                            'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                        ],
                        [
                        'name' => 'review_image_item',
                        'label' => esc_html__( 'Review Image', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
				],
				'default' => [
					[
						'review_image_title' => esc_html__( 'Review Image', 'textdomain' ),
					],
				],
				'title_field' => '{{{ review_image_title }}}',
			]
		);




        $this->end_controls_section();

         $this->start_controls_section(
            'tanspot_hero_thubmanil_wrapper',
            [
                'label' => __('Hero Thumbnail', 'tanspot-toolkit'),
            ]
        );

        $this->add_control(
			'tanspot_hero_thubmanil_image',
			[
				'label' => esc_html__( 'Thumbnail Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

            $this->add_control(
			'tanspot_hero_thubmanil_shap',
			[
				'label' => esc_html__( 'Shape', 'textdomain' ),
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
        $tanspot_hero_banner_bg = $settings['tanspot_hero_banner_bg'];
        $tanspot_hero_banner_sub_title = $settings['tanspot_hero_banner_sub_title'];
        $tanspot_hero_banner_title = $settings['tanspot_hero_banner_title'];
        $tanspot_hero_banner_animation_title = $settings['tanspot_hero_banner_animation_title'];
        $tanspot_hero_banner_description = $settings['tanspot_hero_banner_description'];
        $tanspot_hero_banner_btn_text = $settings['tanspot_hero_banner_btn_text'];
        $tanspot_hero_banner_btn_url = $settings['tanspot_hero_banner_btn_url'];
        $tanspot_hero_review_title = $settings['tanspot_hero_review_title'];
        $tanspot_hero_review_subtitle = $settings['tanspot_hero_review_subtitle'];
        $tanspot_hero_review_image = $settings['tanspot_hero_review_image'];
        $tanspot_hero_thubmanil_image = $settings['tanspot_hero_thubmanil_image'];
        $tanspot_hero_thubmanil_shap = $settings['tanspot_hero_thubmanil_shap'];

        

?>



        <!-- Banner One Start -->
        <section class="banner-one">
            <div class="banner-one__pattern"
                style="background-image: url(<?php echo esc_url($tanspot_hero_banner_bg['url'], 'tanspot-toolkit'); ?>);"></div>
            <div class="banner-one__img" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
                <img src="<?php echo esc_url($tanspot_hero_thubmanil_image['url']);?>" alt="">
            </div>
            <div class="banner-one__shape-3 float-bob-y">
                <img src="<?php echo esc_url($tanspot_hero_thubmanil_shap['url']);?>" alt="">
            </div>
            <div class="banner-one__line-shpae1"></div>
            <div class="banner-one__line-shpae2"></div>
            <div class="container">
                <div class="banner-one__inner">
                    <div class="banner-one__content-box">
                        <p class="banner-one__sub-title"><?php echo esc_html($tanspot_hero_banner_sub_title, 'tanspot-toolkit'); ?></p>
                        <h2 class="banner-one__title"><?php echo esc_html($tanspot_hero_banner_title, 'tanspot-toolkit'); ?> <br>
                            <span class="typed-effect" id="type-1" data-strings="<?php echo toolkit_kses($tanspot_hero_banner_animation_title, 'tanspot-toolkit'); ?>"></span>
                        </h2>
                        <p class="banner-one__text"><?php echo toolkit_kses($tanspot_hero_banner_description, 'tanspot-toolkit'); ?></p>
                        <div class="banner-one__btn-and-review-box">
                            <div class="banner-one__btn-box">
                                <a href="<?php echo esc_html($tanspot_hero_banner_btn_url['url'], 'tanspot-toolkit'); ?>" class="thm-btn"><?php echo esc_html($tanspot_hero_banner_btn_text, 'tanspot-toolkit'); ?>
                                    <span><i class="icon-right-arrow"></i></span>
                                </a>
                            </div>
                            <div class="banner-one__review-box">
                                <ul class="clearfix">
                                    <?php foreach($tanspot_hero_review_image as $single_img_item):
                                        $review_img_url = $single_img_item['review_image_item'];

                                        
                                        ?>
                                    <li>
                                        <div class="img-box"><img
                                                src="<?php echo esc_url($review_img_url['url']);?>" alt="reveiw-image">
                                        </div>
                                    </li>
                                    <?php endforeach;?>
                                </ul>

                                <div class="text-box">
                                    <h2><?php echo esc_html($tanspot_hero_review_title, 'tanspot-toolkit');?></h2>
                                    <p><?php echo esc_html($tanspot_hero_review_subtitle, 'tanspot-toolkit');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner One End -->








        <script>
            jQuery(document).ready(function($) {

                  if ($("[data-aos]").length) {
                    AOS.init({
                    duration: '1200',
                    disable: 'false',
                    easing: 'ease',
                    mirror: true
                    });
                }
                // Type Effect
                if ($('.typed-effect').length) {
                    $('.typed-effect').each(function () {
                    var typedStrings = $(this).data('strings');
                    var typedTag = $(this).attr('id');
                    var typed = new Typed('#' + typedTag, {
                        typeSpeed: 100,
                        backSpeed: 100,
                        fadeOut: true,
                        loop: true,
                        strings: typedStrings.split(',')
                    });
                    });

                }

            });
        </script>
<?php
    }
}

$widgets_manager->register(new Tanspot_Hero_Banner());
