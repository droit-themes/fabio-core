<?php
namespace DROIT_ELEMENTOR_PRO\Widgets;

use Elementor\Core\Schemes\Typography;

if (!defined('ABSPATH')) {exit;}

class Droit_Addons_service extends \Elementor\Widget_Base {

    public function get_name() {
        return 'fabio_service';
    }

    public function get_title() {
        return esc_html__('Fabio Service', 'droit-addons-pro');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['droit_addons_pro'];
    }

    public function get_keywords() {
        return [
            'service',
            'service',
            'WC',
        ];
    }

	protected function register_controls() {
        $this->start_controls_section(
            'service_section', [
                'label' => __( 'Section Title', 'fabio-core' ),
            ]
        );

		$this->add_control(
			'service_title',
			[
				'label' => esc_html__( 'Title Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'fabio-core' ),
                'label_block' => true,
			]
		);

        $this->end_controls_section();


		//--------------------------------------- Service Info -------------------------------------//
        $this->start_controls_section(
            'service_information',
            [
                'label' => __( 'Service Information', 'fabio-core' ),
            ]
        );

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
			'service_title',
			[
				'label' => __( 'Service Title', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Upwork', 'fabio-core' ),
				'placeholder' => __( 'Enter your title', 'fabio-core' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'service_details',
			[
				'label' => __( 'Service Content', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete', 'fabio-core' ),
				'placeholder' => __( 'Enter Description', 'fabio-core' ),
				'label_block' => true,
			]
        );

        $this->add_control(
            'service_list',
            [
                'label'       => __('service Information', 'fabio-core'),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    ['service_title' => esc_html__('service Title 1', 'fabio-core')],
                    ['service_title' => esc_html__('service Title 2', 'fabio-core')],
                ],
                'title_field' => '{{{ service_title }}}',
            ]
        );
        $this->end_controls_section(); // End Service Info

        //--------------------------------------- Service Info -------------------------------------//
        $this->start_controls_section(
            'service_gallery_info',
            [
                'label' => __( 'Service Slider', 'fabio-core' ),
            ]
        );

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
			'service_slide_title',
			[
				'label' => __( 'Slider Title', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Upwork', 'fabio-core' ),
				'placeholder' => __( 'Enter Slider title', 'fabio-core' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'slider_gallery',
			[
				'label' => esc_html__( 'Slider Image', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
            'service_gallery',
            [
                'label'       => __('service Information', 'fabio-core'),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    ['service_slide_title' => esc_html__('Gallery Title 1', 'fabio-core')],
                    ['service_slide_title' => esc_html__('Gallery Title 2', 'fabio-core')],
                ],
                'title_field' => '{{{ service_slide_title }}}',
            ]
        );
        $this->end_controls_section(); // End Service Info

		
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

        // Service List

		$this->start_controls_section(
            'section_service_style', [
                'label' => __( 'service List Style', 'fabio-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'title_color',
            [
                'label' => __('Service Title Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .single-service-list h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('Service Title Typography', 'fabio-core' ),
                'name' => 'title_typo',
                'selector' => '{{WRAPPER}} .single-service-list h5',
            ]
        );

	
		$this->add_control(
            'content_color',
            [
                'label' => __('Content Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .card-body' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [ 
				'label' => __('Content Typography', 'fabio-core' ),
                'name' => 'content_typo',
                'selector' => '{{WRAPPER}} .card-body',
            ]
        );
		$this->end_controls_section();

		
    }

	
    // define rander preview
    protected function render() {

        $settings = $this->get_settings_for_display();
        extract($settings);
		$service_title   = $settings['service_title'];
		$service_list    = $settings['service_list'];
        $service_gallery = $settings['service_gallery'];
	?>

    <section id="service" class='service'>
        <div class="flex-br">
            <div class="slider-area">
                <?php 
                $i=1;
                foreach ( $service_gallery  as $index=>$item ) :?>
                <div class="slide" data-anchor="slide1"><img src="<?php echo esc_url($item['slider_gallery']['url']); ?>" alt=""></div>
                <?php 
                $i++;
                endforeach;
                ?>
            </div>
            <div class="service-area">
                <div class="container">
                    <div class="row">
                        <?php if(!empty($service_title)): ?>
                        <div class="col-md-6">
                            <div class="section-title">
                                <h2><?php echo wp_kses_post($service_title);  ?></h2>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="col-md-6">
                            <div id="accordion">
                                <?php 
                                $i=1;
                                foreach ( $service_list  as $index=>$item ) :
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapse<?php echo $i; ?>">
                                            <div class="single-service-list">
                                                <h5><?php echo $item['service_title']; ?></h5>
                                                <div class="icons">
                                                    <i class="fas fa-arrow-down"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapse<?php echo $i; ?>" class="collapse" data-parent="#accordion">
                                        <div class="card-body"><?php echo $item['service_details']; ?></div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php 
  }
}