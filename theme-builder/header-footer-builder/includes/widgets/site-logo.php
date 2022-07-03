<?php
namespace Elementor;

defined( 'ABSPATH' ) || exit;

class DRDT_Site_Logo Extends Widget_Base{
    
    public function get_name() {
		return 'drdt-sitelogo';
    }

    public function get_title() {
		return __( 'Site Logo', 'droithead' );
    }
    
    public function get_icon() {
		return 'eicon-image';
	}

    public function get_categories() {
		return [ 'drit-header-footer' ];
    }
    
    public function get_script_depends() {
		return [];
	}

    protected function register_controls() {
		$this->render_content_section();
	}
    
    public function render_content_section(){
        
        $this->start_controls_section(
			'drdt_site_logo_sections',
			[
				'label' => __( 'Logo', 'droithead' ),
			]
		);

		$this->add_control(
			'drdt_logo_custom',
			[
				'label' => esc_html__( 'Use Custom Logo', 'droithead' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'droithead' ),
				'label_off' => esc_html__( 'No', 'droithead' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);
      
        $this->add_control(
			'main_logo',
			[
				'label'     => __( 'Main Logo', 'droithead' ),
				'type'      => Controls_Manager::MEDIA,
				'dynamic'   => [
					'active' => true,
				],
				'default'   => [
					'url' => Utils::get_placeholder_image_src(),
				],
                'condition' => [
                    'drdt_logo_custom' => 'yes'
                ]
			]
		);

        $this->add_control(
			'sticky_logo',
			[
				'label'     => __( 'Sticky Logo', 'droithead' ),
				'type'      => Controls_Manager::MEDIA,
				'dynamic'   => [
					'active' => true,
				],
				'default'   => [
					'url' => Utils::get_placeholder_image_src(),
				],
                'condition' => [
                    'drdt_logo_custom' => 'yes'
                ]
			]
		);

        $this->add_control(
            'logo_max_width',
            [
                'label' => __( 'Max Width', 'makro-core' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'rem' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .drdt_custom_site_logo img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'main_logo_alignment',
            [
                'label' => __( 'Alignment', 'makro-core' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __( 'Left', 'makro-core' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'makro-core' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'flex-end' => [
                        'title' => __( 'Right', 'makro-core' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'selectors' => [
                    '{{WRAPPER}}  .drdt_site_logo' => 'justify-content: {{VALUE}};',
                ],
                'separator' => 'before',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings         = $this->get_settings_for_display();
        extract($settings); // extract settings data
        $logo = medishop_opt('logo');
        $logo_sticky = medishop_opt('sticky_logo');
        $log_url = MEDISHOP_IMAGES.'/default_logo/logo.png';
        $sticky_log_url = MEDISHOP_IMAGES.'/default_logo/logo_sticky.png';
        $logo_html = '';
        $logo_sticky_html = '';
        // logo
        if(isset($logo['id']) && $logo['id'] != '') {
            $logo_html = wp_get_attachment_image($log_url['id'], 'full');
        }else{
            $logo_html = '<img src="'.$log_url.'" alt="default Logo">'; 
        }
        //  sticky logo 

        if(isset($logo_sticky['id']) && $logo_sticky['id'] != '') {
            $logo_sticky_html = wp_get_attachment_image($logo_sticky['id'], 'full');
        }else{
            $logo_sticky_html = '<img src="'.$sticky_log_url.'" alt="default Logo">'; 
        }
        // Check custom logo 
        if($settings['drdt_logo_custom'] == 'yes') {

            if($settings['main_logo']['id'] != '') {
                $logo_html = wp_get_attachment_image($settings['main_logo']['id'], 'full');
            }
            if($settings['sticky_logo']['id'] != '') {
               $logo_html = wp_get_attachment_image($settings['sticky_logo']['id'], 'full');
            }
        }

        ?>
        <div class="drdt_site_logo">
            <a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="drdt_custom_site_logo">
                <?php echo $logo_html.$logo_sticky_html; ?>
            </a>
        </div>
        <?php

    }
}