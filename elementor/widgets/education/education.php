<?php
namespace DROIT_ELEMENTOR_PRO\Widgets;

use Elementor\Core\Schemes\Typography;

if (!defined('ABSPATH')) {exit;}

class Droit_Addons_education extends \Elementor\Widget_Base {

    public function get_name() {
        return 'fabio_education';
    }

    public function get_title() {
        return esc_html__('Fabio Education', 'droit-addons-pro');
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
            'education_section', [
                'label' => __( 'Section Title', 'fabio-core' ),
            ]
        );

		$this->add_control(
			'education_title',
			[
				'label' => esc_html__( 'Title Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'fabio-core' ),
			]
		);

        $this->end_controls_section();


		//--------------------------------------- Experience Info -------------------------------------//
        $this->start_controls_section(
            'experiance_information',
            [
                'label' => __( 'Education Information', 'fabio-core' ),
            ]
        );

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
			'education_title',
			[
				'label' => __( 'Account Name', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Upwork', 'fabio-core' ),
				'placeholder' => __( 'Enter your title', 'fabio-core' ),
				'label_block' => true,
			]
        );
        $repeater->add_control(
			'education_job_duration',
			[
				'label' => __( 'Job Duration', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'default' => __( '2018-22', 'fabio-core' ),
				'placeholder' => __( 'Enter Job Duration', 'fabio-core' ),
				'label_block' => true,
			]
        );


        $repeater->add_control(
			'education_details',
			[
				'label' => __( 'Job Description', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete', 'fabio-core' ),
				'placeholder' => __( 'Enter Description', 'fabio-core' ),
				'label_block' => true,
			]
        );

        $this->add_control(
            '_experience_list',
            [
                'label'       => __('Education Information', 'fabio-core'),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    ['education_title' => esc_html__('Education Title 1', 'fabio-core')],
                    ['education_title' => esc_html__('Education Title 2', 'fabio-core')],
                ],
                'title_field' => '{{{ education_title }}}',
            ]
        );
        $this->end_controls_section(); // End Experience Info

		$this->start_controls_section(
            'education_button', [
                'label' => __( 'Button', 'fabio-core' ),
            ]
        );

		$this->add_control(
			'education_button_text',
			[
				'label' => esc_html__( 'Button Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Download CV', 'fabio-core' ),
			]
		);

		$this->add_control(
			'education_url',
			[
				'label' => esc_html__( 'Button URL', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' =>'#',
			]
		);

        $this->end_controls_section();

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
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_title_typo',
                'selector' => '{{WRAPPER}} .section-title h2',
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
            'section_education_style', [
                'label' => __( 'Feature List Style', 'fabio-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'title_color',
            [
                'label' => __('Job Title Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .title-area h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('Job Title Typography', 'fabio-core' ),
                'name' => 'title_typo',
                'selector' => '{{WRAPPER}} .title-area h5',
            ]
        );

		$this->add_control(
            'duration_color',
            [
                'label' => __('Duration Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .title-area span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('Duration Typography', 'fabio-core' ),
                'name' => 'duration_typo',
                'selector' => '{{WRAPPER}} .title-area span',
            ]
        );
		$this->add_control(
            'content_color',
            [
                'label' => __('Content Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .content-area p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [ 
				'label' => __('Content Typography', 'fabio-core' ),
                'name' => 'content_typo',
                'selector' => '{{WRAPPER}} .content-area p',
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
            'section_button_style', [
                'label' => __( 'Button Style', 'fabio-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'section_button_bg_color',
            [
                'label' => __('Button Background Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} a.btn.slide' => 'background: {{VALUE}}',
                ],
            ]
        );
		$this->add_control(
            'section_button_color',
            [
                'label' => __('Button Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} a.btn.slide' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_button_typo',
                'selector' => '{{WRAPPER}} a.btn.slide',
            ]
        );
		$this->end_controls_section();
    }

	
    // define rander preview
    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);
		$education_title = $settings['education_title'];
		$_experience_list = $settings['_experience_list'];
	?>

<section id="education" class="navbar-is-white d-flex align-items-center">
	<div class="container">
		<?php if(!empty($education_title)): ?>
		<div class="section-title">
			<h2><?php echo $education_title; ?></h2>
		</div>
		<?php endif; ?>
		<div class="edu-slider">
			<div class="edu-slider-itmes">
				<?php
				$i = 1;
				foreach ( $_experience_list as $index => $item ) :   
				?>
				<div class="education-contents">
					<div class="row">
						<div class="col-md-6">
							<div class="title-area">
								<span><?php echo wp_kses_post($item['education_job_duration']); ?></span>
								<h5><?php echo wp_kses_post($item['education_title']); ?></h5>
							</div>
						</div>
						<div class="col-md-6">
							<div class="content-area">
								<p><?php echo wp_kses_post($item['education_details']); ?></p>
							</div>
						</div>
					</div>
				</div>
				<?php 
				$i++;
				endforeach; 
				?>
			</div>
			<?php if( $settings['education_button_text'] ): ?>
				<a href="<?php echo wp_kses_post($settings['education_url']); ?>" class="btn slide">
					<span class="text"><?php echo wp_kses_post($settings['education_button_text']); ?></span>
				</a>
				<?php endif; ?>
		</div>
	</div>
</section>

<?php 
  }
}