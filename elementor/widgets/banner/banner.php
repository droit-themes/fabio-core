<?php
namespace DROIT_ELEMENTOR_PRO\Widgets;

use Elementor\Core\Schemes\Typography;

if (!defined('ABSPATH')) {exit;}

class Droit_Addons_banner extends \Elementor\Widget_Base {

    public function get_name() {
        return 'fabio_banner';
    }

    public function get_title() {
        return esc_html__('Fabio Banner', 'droit-addons-pro');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['droit_addons_pro'];
    }

    public function get_keywords() {
        return [
            'banner',
            'banner',
            'WC',
        ];
    }

	protected function register_controls() {
        $this->start_controls_section(
            'banner_section', [
                'label' => __( 'Section Title', 'fabio-core' ),
            ]
        );

		$this->add_control(
			'banner_title',
			[
				'label' => esc_html__( 'Title Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Graphic Designer', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'fabio-core' ),
                'label_block' => true,
			]
		);

        $this->add_control(
			'banner_sub_title',
			[
				'label' => esc_html__( 'Sub Title Text', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Graphic Designer', 'fabio-core' ),
				'placeholder' => esc_html__( 'Type your Sub title', 'fabio-core' ),
                'label_block' => true,
			]
		);

        $this->add_control(
			'banner_content',
			[
				'label' => esc_html__( 'Content', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
                'label_block' => true,
			]
		);

        $this->add_control(
			'video_url',
			[
				'label' => esc_html__( 'Popup Video URL', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'fabio-core' ),
				'placeholder' => esc_html__( 'Enter your Popup URL', 'fabio-core' ),
                'label_block' => true,
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'section_banner_style', [
                'label' => __( 'Banner Style', 'fabio-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .info-content h1' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'title_span_color',
            [
                'label' => __('Title Color ( Span )', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .info-content h1 span' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('Title Typography', 'fabio-core' ),
                'name' => 'title_typo',
                'selector' => '{{WRAPPER}} .info-content h1, .info-content h1 span',
            ]
        );

		$this->add_control(
            'sub_title_color',
            [
                'label' => __('Sub Title Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .info-content .subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
				'label' => __('Sub Title Typography', 'fabio-core' ),
                'name' => 'duration_typo',
                'selector' => '{{WRAPPER}} .info-content .subtitle',
            ]
        );

		$this->add_control(
            'content_color',
            [
                'label' => __('Content Color', 'fabio-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .content' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [ 
				'label' => __('Content Typography', 'fabio-core' ),
                'name' => 'content_typo',
                'selector' => '{{WRAPPER}} .content',
            ]
        );

		$this->end_controls_section();
	
    }

	
    // define rander preview
    protected function render() {

        $settings = $this->get_settings_for_display();
        extract($settings);
		$banner_title     = $settings['banner_title'];
        $banner_sub_title = $settings['banner_sub_title'];
        $banner_content   = $settings['banner_content'];
        $video_url        = $settings['video_url'];
	?>

    <section id="home" class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-content">
                        <?php if(!empty($video_url)): ?>
                        <div class="video-area-bg">
                            <a class="mfp-iframe video-play-btn"
                                href="<?php echo esc_url($video_url); ?>"><i class="fas fa-play"></i></a>
                        </div>
                        <?php endif; ?>
                        <div class="info-content">
                            <?php if(!empty($banner_sub_title)): ?>
                            <span class="subtitle"><?php echo wp_kses_post($banner_sub_title); ?></span>
                            <?php endif; ?>
                            <?php if(!empty($banner_title)): ?>
                            <h1><?php echo wp_kses_post($banner_title); ?></h1>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if(!empty($banner_content)): ?>
                <div class="col-md-6">
                    <div class="content">
                        <?php echo wp_kses_post($banner_content); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php 
  }
}