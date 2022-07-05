<?php
namespace DROIT_ELEMENTOR_PRO\Widgets;

use Elementor\Core\Schemes\Typography;

if (!defined('ABSPATH')) {exit;}

class Droit_Addons_testimonials extends \Elementor\Widget_Base {

    public function get_name() {
        return 'fabio_testimonials';
    }

    public function get_title() {
        return esc_html__('Fabio Testimonials', 'droit-addons-pro');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['droit_addons_pro'];
    }

    public function get_keywords() {
        return [
            'Woocommerces',
            'woocommerces',
            'WC',
        ];
    }

	protected function register_controls() {
        $this->start_controls_section(
            'testimonials_section', [
                'label' => __( 'Section Title', 'fabio-core' ),
            ]
        );

		$this->add_control(
			'testimonials_section_title',
			[
				'label' => esc_html__( 'Title Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Testimonials', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'fabio-core' ),
			]
		);

        $this->end_controls_section();


		//--------------------------------------- Experience Info -------------------------------------//
        $this->start_controls_section(
            'experiance_information',
            [
                'label' => __( 'Testimonials Information', 'fabio-core' ),
            ]
        );

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
			'testimonials_title',
			[
				'label' => __( 'Client Name', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Upwork', 'fabio-core' ),
				'placeholder' => __( 'Enter your title', 'fabio-core' ),
				'label_block' => true,
			]
        );
        $repeater->add_control(
			'testimonials_author',
			[
				'label' => __( 'Author', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'default' => __( 'AbdurRahamanWP', 'fabio-core' ),
				'placeholder' => __( 'Enter Author Name', 'fabio-core' ),
				'label_block' => true,
			]
        );


        $repeater->add_control(
			'testimonials_details',
			[
				'label' => __( 'Comment Description', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete', 'fabio-core' ),
				'placeholder' => __( 'Enter Description', 'fabio-core' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'test_image',
			[
				'label' => esc_html__( 'Client Image', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
            'testimonials_list',
            [
                'label'       => __('Testimonials Information', 'fabio-core'),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    ['testimonials_title' => esc_html__('Testimonials Title 1', 'fabio-core')],
                    ['testimonials_title' => esc_html__('Testimonials Title 2', 'fabio-core')],
                ],
                'title_field' => '{{{ testimonials_title }}}',
            ]
        );
        $this->end_controls_section(); // End Experience Info

		$this->start_controls_section(
            'section_title_style', [
                'label' => __( 'Section Title Style', 'fabio-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'section_title_color',
            [
                'label' => __('Title Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonisla_title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_title_typo',
                'selector' => '{{WRAPPER}} .testimonisla_title',
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
            'section_testimonials_style', [
                'label' => __( 'Testimonials Style', 'fabio-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'name_color',
            [
                'label' => __('Name Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dl_fp_testomonial_content .dl_name span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('Name Typography', 'fabio-core' ),
                'name' => 'name_typo',
                'selector' => '{{WRAPPER}} .dl_fp_testomonial_content .dl_name span',
            ]
        );

		$this->add_control(
            'author_color',
            [
                'label' => __('Author Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dl_fp_testomonial_content .dl_name' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('Author Typography', 'fabio-core' ),
                'name' => 'author_typo',
                'selector' => '{{WRAPPER}} .dl_fp_testomonial_content .dl_name',
            ]
        );

		$this->add_control(
            'content_color',
            [
                'label' => __('Content Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dl_fp_testomonial_content .dl_desc' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [ 
				'label' => __('Content Typography', 'fabio-core' ),
                'name' => 'content_typo',
                'selector' => '{{WRAPPER}} .dl_fp_testomonial_content .dl_desc',
            ]
        );
		$this->end_controls_section();

    }
   
    // define rander preview
    protected function render() {
        $this->load_widget_script();
        $settings = $this->get_settings_for_display();
        $testimonalsList = $settings['testimonials_list'];
        extract($settings);
	?>
	<!-- Testimonialxggdfgzsds -->
    <section id="testimonials" class="testimonials">
        <div class="intro">
            <div class="scroll-wrap">
                <div class="container">
                    <?php if(!empty($settings['testimonials_section_title'])): ?>
                    <h2 class="testimonisla_title"><?php echo wp_kses_post($settings['testimonials_section_title']); ?></h2>
                    <?php endif; ?>
                    <div class="testimonial_slider_items">
                        <?php
                        $i=1;
                        foreach( $testimonalsList as $key=>$testimon_list):
                        ?>
                        <div class="testimonial_slider">
                            <div class="row justify-content-between">
                                <div class="col-md-6">
                                    <img src="<?php echo esc_url($testimon_list['test_image']['url']); ?>" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="dl_fp_testomonial_content">
                                        <div class="testomonial_content-slide">
                                            <div class="dl_testomonial_list_wrapper">
                                                <h5 class="dl_name"><span><?php echo wp_kses_post($testimon_list['testimonials_title']); ?>
                                            </span><?php echo wp_kses_post($testimon_list['testimonials_author']); ?></h5>
                                                <p class="dl_desc"><?php echo wp_kses_post($testimon_list['testimonials_details']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            $i++;
                        endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
  }

  public function load_widget_script(){
    if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
            ( function( $ ){

                $('.testimonial_slider_items').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    prevArrow:
                        '<button type="button" class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
                    nextArrow:
                        '<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
                    autoplaySpeed: 2000,
                    arrows: true,
                });
                // end Slider Script
            })(jQuery);
        </script>
        <?php
    }
}



}