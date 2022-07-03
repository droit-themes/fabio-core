<?php
namespace DROIT_ELEMENTOR_PRO\Widgets;

use \DROIT_ELEMENTOR_PRO\Module\Query\Posts_Query as Query_Module;

use Elementor\Core\Schemes\Typography;
use WP_Query;

if (!defined('ABSPATH')) {exit;}

class Droit_Addons_blog extends \Elementor\Widget_Base {

    public function get_name() {
        return 'fabio_blog';
    }

    public function get_title() {
        return esc_html__('Fabio blog', 'droit-addons-pro');
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return ['droit_addons_pro'];
    }

    public function get_keywords() {
        return [
            'blog',
            'blog',
            'WC',
        ];
    }

	protected function register_controls() {
    
    $this->start_controls_section(
        'blog-section',
        [
            'label' => __( 'Blog Section', 'kidzo-core' ),
        ]
    );

    $this->add_control(
        'title_blog',
        [
            'label' => esc_html__( 'Blog Title', 'kidzo-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => false,
            'default' => 'Latest Articles'
        ]
    );

    $this->add_control(
        'color_title', [
            'label' => __( 'Text Color', 'kidzo-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .articles .section-title h2' => 'color: {{VALUE}};',
            ],
        ]
    );


    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(), [
            'name' => 'typography_title',
            'selector' => '
                {{WRAPPER}} .articles .section-title h2'
        ]
    );

    $this->end_controls_section();

       // ---Start Blog Setting
    $this->start_controls_section(
        'Blog_filter', [
            'label' => __( 'Blog Settings', 'fabio-core' ),
        ]
    );
    $this->add_control(
        'all_label', [
            'label' => esc_html__( 'All filter label', 'fabio-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
            'default' => 'See All'
        ]
    );
    $this->add_control(
        'show_count', [
            'label' => esc_html__( 'Show count', 'fabio-core' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'label_block' => false,
            'default' => 8
        ]
    );
    $this->add_control(
        'order', [
            'label' => esc_html__( 'Order', 'fabio-core' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'ASC' => 'ASC',
                'DESC' => 'DESC'
            ],
            'default' => 'ASC'
        ]
    );
    $this->end_controls_section();



    $this->start_controls_section(
        'section_Blog_style', [
            'label' => __( 'Blog Style', 'fabio-core' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $this->add_control(
        'blog_title_color', [
            'label' => __( 'Tilte Text Color', 'kidzo-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .single-box a' => 'color: {{VALUE}};',
            ],
        ]
    );


    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(), [
            'label' => __( 'Tilte Typography', 'kidzo-core' ),
            'name' => 'blog_typography_title',
            'selector' => '
                {{WRAPPER}} .single-box a'
        ]
    );


    $this->add_control(
        'blog_cateogory_color', [
            'label' => __( 'Category Color', 'kidzo-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .category a' => 'color: {{VALUE}};',
            ],
        ]
    );


    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(), [
            'label' => __( 'Category Typography', 'kidzo-core' ),
            'name' => 'blog_typography_category',
            'selector' => '
                {{WRAPPER}} .category a'
        ]
    );

    $this->end_controls_section();
		
    }

	
    // define rander preview
    protected function render() {
        $settings = $this->get_settings_for_display();
        extract($settings);

        $articles = new WP_Query(array(
            'post_type'      => 'post',
		    'posts_per_page' => $settings['show_count'],
		    'order'          => $settings['order'],
		    'post__not_in'   => ! empty( $settings['exclude'] ) ? explode( ',', $settings['exclude'] ) : ''
        ));
	?>

<section id="articles" class="articles">
<div class="intro">
    <div class="scroll-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                     if(!empty($settings['title_blog'])):
                    ?>
                    <div class="section-title">
                        <h2><?php  echo wp_kses_post( $settings['title_blog'] ); ?></h2>
                    </div>
                    <?php endif; ?>
                    <div class="box">
                        <?php 
                        while ( $articles->have_posts() ) :
                        $articles->the_post();
                        $tags = get_tags();
                        ?>
                        <div class="single-box" data-image=<?php echo get_the_post_thumbnail(get_the_ID(),'medium'); ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
                            
                                <span class="category"><?php the_category(', '); ?></span>
                                                       
                            <?php  if( has_post_thumbnail() ){ ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array('class' => 'img-box active')) ?></a>
                             <?php } ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>
</section>
    
<?php 
  }
}