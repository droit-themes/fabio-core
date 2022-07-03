<?php
namespace DROIT_ELEMENTOR_PRO\Widgets;

use Elementor\Core\Schemes\Typography;

if (!defined('ABSPATH')) {exit;}

class Droit_Addons_skill extends \Elementor\Widget_Base {

    public function get_name() {
        return 'fabio_skill';
    }

    public function get_title() {
        return esc_html__('Fabio Skill', 'droit-addons-pro');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['droit_addons_pro'];
    }

    public function get_keywords() {
        return [
            'skill',
            'skill',
            'WC',
        ];
    }

	protected function register_controls() {
        $this->start_controls_section(
            'skill_section', [
                'label' => __( 'Section Title', 'fabio-core' ),
            ]
        );

		$this->add_control(
			'skill_title',
			[
				'label' => esc_html__( 'Title Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'fabio-core' ),
			]
		);

        $this->add_control(
			'skill_content',
			[
				'label' => esc_html__( 'Content Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default title', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your Content', 'fabio-core' ),
			]
		);

        $this->add_control(
			'skill_aurthor',
			[
				'label' => esc_html__( 'Aurthor Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Fabio Wood', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your Aurthor here', 'fabio-core' ),
			]
		);

        $this->add_control(
			'skill_images',
			[
				'label' => esc_html__( 'Choose Image', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->end_controls_section();


		//--------------------------------------- Experience Info -------------------------------------//
        $this->start_controls_section(
            'experiance_information',
            [
                'label' => __( 'Skill Information', 'fabio-core' ),
            ]
        );

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
			'skill_list_title',
			[
				'label' => __( 'Skill Name', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Design', 'fabio-core' ),
				'placeholder' => __( 'Enter your Skill Title', 'fabio-core' ),
				'label_block' => true,
			]
        );
        $repeater->add_control(
			'skill_value',
			[
				'label' => __( 'Skill Value', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '50', 'fabio-core' ),
				'placeholder' => __( 'Enter Job Duration', 'fabio-core' ),
				'label_block' => true,
			]
        );

        $this->add_control(
            'Skill_list',
            [
                'label'       => __('Skill Information', 'fabio-core'),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    ['skill_title' => esc_html__('skill Title 1', 'fabio-core')],
                    ['skill_title' => esc_html__('skill Title 2', 'fabio-core')],
                ],
                'title_field' => '{{{ skill_title }}}',
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
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .skill-content h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_title_typo',
                'label' => __('Title Typography', 'fabio-core' ),
                'selector' => '{{WRAPPER}} .skill-content h2',
            ]
        );

        $this->add_control(
            'section_content_color',
            [
                'label' => __('Content Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .min-skill-content p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_content_typo',
                'label' => __('Content Typography', 'fabio-core' ),
                'selector' => '{{WRAPPER}} .min-skill-content p',
            ]
        );


        $this->add_control(
            'section_author_color',
            [
                'label' => __('Author Name Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .min-skill-content h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_author_typo',
                'label' => __('Author Typography', 'fabio-core' ),
                'selector' => '{{WRAPPER}} .min-skill-content h5',
            ]
        );


		$this->end_controls_section();

		$this->start_controls_section(
            'section_skill_style', [
                'label' => __( 'Skill List Style', 'fabio-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'title_color',
            [
                'label' => __('Skill Title Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .progress_bar_wrapper .progress_bar .dl_desc' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('Skill Title Typography', 'fabio-core' ),
                'name' => 'title_typo',
                'selector' => '{{WRAPPER}} .progress_bar_wrapper .progress_bar .dl_desc',
            ]
        );

		$this->add_control(
            'duration_color',
            [
                'label' => __('Duration Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .progress_bar_wrapper .progress_bar .proggress' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('Duration Typography', 'fabio-core' ),
                'name' => 'duration_typo',
                'selector' => '{{WRAPPER}} .progress_bar_wrapper .progress_bar .proggress',
            ]
        );
		
		$this->end_controls_section();
    }
   
    // define rander preview
    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);
        $skill_info = $settings['Skill_list'];
	?>
	<!-- Testimonialxggdfgzsds -->
	<section id="skills">
        <div class="intro">
            <div class="scroll-wrap">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-5 col-md-6">
                            <div class="skill-content">
                                <?php if(!empty($settings['skill_title'])): ?>
                                <h2><?php echo wp_kses_post($settings['skill_title']);  ?></h2>
                                <?php endif; ?>
                                <div class="min-skill-content">
                                    <?php if(!empty($settings['skill_images'])): ?>
                                    <img src="<?php echo esc_url($settings['skill_images']['url']); ?>" alt="">
                                    <?php endif; ?>
                                    <?php if(!empty($settings['skill_content'])): ?>
                                    <p class="skill-content"><?php echo wp_kses_post($settings['skill_content']);  ?></p>
                                    <?php endif; ?>
                                    <?php if(!empty($settings['skill_aurthor'])): ?>
                                    <h5 class="aurthor-name"><?php echo wp_kses_post($settings['skill_aurthor']);  ?></h5>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="dl_fp_skils_content">
                                <div class="progress_bar_wrapper">
                                    <?php foreach( $skill_info as $index=>$skills ) : ?>
                                    <div class="progress_bar">
                                        <p class="dl_desc"><?php echo wp_kses_post($skills['skill_list_title']) ?></p>
                                        <div class="fillbar line" data-percentage="<?php echo wp_kses_post($skills['skill_value']) ?>"></div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
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