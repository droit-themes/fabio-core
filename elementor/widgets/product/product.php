<?php
namespace DROIT_ELEMENTOR_PRO\Widgets;

use Elementor\Core\Schemes\Typography;

if (!defined('ABSPATH')) {exit;}

class Droit_Addons_product extends \Elementor\Widget_Base {

    public function get_name() {
        return 'fabio_product';
    }

    public function get_title() {
        return esc_html__('Fabio Product', 'droit-addons-pro');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['droit_addons_pro'];
    }

    public function get_keywords() {
        return [
            'product',
            'product',
            'WC',
        ];
    }

	protected function register_controls() {

        //--------------------------------------- product Info -------------------------------------//
        $this->start_controls_section(
            'product_gallery_info',
            [
                'label' => __( 'product Information', 'fabio-core' ),
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'product_slide_title',
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

        $repeater->add_control(
			'product_button_title',
			[
				'label' => __( 'Button Title', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'See Project', 'fabio-core' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'product_button_url',
			[
				'label' => __( 'Button URL', 'fabio-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '#', 'fabio-core' ),
				'label_block' => true,
			]
        );


        $this->add_control(
            'product_gallery',
            [
                'label'       => __('product Information', 'fabio-core'),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    ['product_slide_title' => esc_html__('Gallery Title 1', 'fabio-core')],
                    ['product_slide_title' => esc_html__('Gallery Title 2', 'fabio-core')],
                ],
                'title_field' => '{{{ product_slide_title }}}',
            ]
        );
        $this->end_controls_section(); // End product Info
		
    }

	
    // define rander preview
    protected function render() {

        $settings = $this->get_settings_for_display();
        extract($settings);
        $product_gallery = $settings['product_gallery'];
	?>

        <section id="product" class="product">
			<div class="product-area">
				<div class="product-lists">
                    <?php 
                    $i=1;
                    foreach ( $product_gallery  as $index=>$item ) : 
                    ?>
					<div class="single-product-list">
						<span><?php echo wp_kses_post($item['product_slide_title']); ?></span>
						<a href="<?php echo esc_url($item['product_button_url']); ?>"><?php echo wp_kses_post($item['product_button_title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
                    <?php 
                    $i++;
                    endforeach;
                    ?>
				</div>
				<div class="product-item">
                    <?php 
                    $i=1;
                    foreach ( $product_gallery  as $index=>$item ) : 
                    ?>
					<div class="single-product-item" style="background-image: url('<?php echo esc_url($item['slider_gallery']['url']); ?>')">
					</div>
                    <?php
                    $i++;
                    endforeach;
                    ?>
				</div>
			</div>
		</section>
<?php 
  }
}