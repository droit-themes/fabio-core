<?php
namespace DROIT_ELEMENTOR_PRO\Widgets;

use Elementor\Core\Schemes\Typography;

if (!defined('ABSPATH')) {exit;}

class Droit_Addons_experience extends \Elementor\Widget_Base {

    public function get_name() {
        return 'fabio_experience';
    }

    public function get_title() {
        return esc_html__('Fabio Experience', 'droit-addons-pro');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['droit_addons_pro'];
    }

    public function get_keywords() {
        return [
            'experience',
            'experience',
            'WC',
        ];
    }

	protected function register_controls() {
        $this->start_controls_section(
            'experience_section', [
                'label' => __( 'Experience Information', 'fabio-core' ),
            ]
        );

		$this->add_control(
			'experience_section_title',
			[
				'label' => esc_html__( 'Section Title', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'fabio-core' ),
                'label_block' => true,
			]
		);

        $this->add_control(
			'experience_content',
			[
				'label' => esc_html__( 'Content Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default title', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your Content', 'fabio-core' ),
                'label_block' => true,
			]
		);

        $this->add_control(
			'experience_titleline',
			[
				'label' => esc_html__( 'Experience Year', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '05', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your Experience Year', 'fabio-core' ),
                'label_block' => true,
			]
		);

        $this->add_control(
			'experience_title',
			[
				'label' => esc_html__( 'Experience Title', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'YEARS <span>EXPERIENCE</span>', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your Experience Year', 'fabio-core' ),
                'label_block' => true,
			]
		);

        $this->end_controls_section();


		//--------------------------------------- Experience Info -------------------------------------//
        $this->start_controls_section(
            'experiance_slider',
            [
                'label' => __( 'Experience Slide', 'fabio-core' ),
            ]
        );

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
			'experience_list_title',
			[
				'label' => __( 'Slider Name', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Design', 'fabio-core' ),
				'placeholder' => __( 'Enter your Slider Title', 'fabio-core' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'experi_slider_images',
			[
				'label' => esc_html__( 'Experience Image', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        

        $this->add_control(
            'experience_list',
            [
                'label'       => __('Experience Information', 'fabio-core'),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    ['experience_title' => esc_html__('Experience Title 1', 'fabio-core')],
                    ['experience_title' => esc_html__('Experience Title 2', 'fabio-core')],
                ],
                'title_field' => '{{{ experience_title }}}',
            ]
        );
        $this->end_controls_section(); // End Experience Info

		

		$this->start_controls_section(
            'section_title_style', [
                'label' => __( 'Section Style', 'fabio-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'section_title_color',
            [
                'label' => __('Title Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .experience-goal h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_title_typo',
                'label' => __('Title Typography', 'fabio-core' ),
                'selector' => '{{WRAPPER}} .experience-goal h4',
            ]
        );

        $this->add_control(
            'section_content_color',
            [
                'label' => __('Content Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .experience-goal p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_content_typo',
                'label' => __('Content Typography', 'fabio-core' ),
                'selector' => '{{WRAPPER}} .experience-goal p',
            ]
        );


        $this->add_control(
            'ex_year_color',
            [
                'label' => __('Experience Year Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .min-experience h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_ex_year_typo',
                'label' => __('Experience Year Typography', 'fabio-core' ),
                'selector' => '{{WRAPPER}} .min-experience h2',
            ]
        );

        $this->add_control(
            'ex_title_color',
            [
                'label' => __('Experience Title Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .min-experience h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_ex_title_typo',
                'label' => __('Experience Title Typography', 'fabio-core' ),
                'selector' => '{{WRAPPER}} .min-experience h5',
            ]
        );


		$this->end_controls_section();
        
        // End General Content Style


		$this->start_controls_section(
            'section_experience_style', [
                'label' => __( 'experience List Style', 'fabio-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'title_color',
            [
                'label' => __('Experience Title Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slick-slide' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('experience Title Typography', 'fabio-core' ),
                'name' => 'title_typo',
                'selector' => '{{WRAPPER}} .slick-slide',
            ]
        );

		$this->end_controls_section();
    }
   
    // define rander preview
    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);
        $experience_info = $settings['experience_list'];
	?>
	<!-- Testimonialxggdfgzsds -->
	<section id="experience" class="experience">
        <div class="flex-br">
            <div class="slider-area">
                <?php 
                $i=1;
                foreach( $experience_info as $key=>$ex_slider  ): ?>
                <div class="slide" data-anchor="slide<?php echo $i; ?>"><?php echo wp_kses_post($ex_slider['experience_list_title']); ?></div>
                <?php $i++;
                endforeach;
                ?>
            </div>

            <div class="experience-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="min-experience">
                                <?php if(!empty($settings['experience_titleline'])): ?>
                                <h2><?php echo wp_kses_post( $settings['experience_titleline'] ); ?></h2>
                                <?php endif; ?>
                                <?php if(!empty($settings['experience_title'])): ?>
                                <h5><?php echo wp_kses_post( $settings['experience_title'] ); ?></h5>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="experience-goal">
                                <?php if(!empty($settings['experience_section_title'])): ?>
                                <h4><?php echo wp_kses_post( $settings['experience_section_title'] ); ?></h4>
                                <?php endif; ?>
                                <?php if(!empty($settings['experience_content'])): ?>
                                <p><?php echo wp_kses_post( $settings['experience_content'] ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
  }
}