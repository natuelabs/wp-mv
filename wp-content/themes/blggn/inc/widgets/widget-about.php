<?php

class blggn_widget_about extends WP_Widget {

	function __construct() {

		parent::__construct( 'about_vs', esc_html__( '* ', 'blggn' ) . BLGGN_NAME . esc_html__( ' - About', 'blggn' ), array (
			'description' => esc_html__( 'An About Widget.', 'blggn' )
		) );

	}

	function form( $instance ) {

		$defaults = array(
			'title'     => '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e('Widget Title:', 'blggn'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" class="widefat" type="text"/>
		</p> <?php

	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = sanitize_text_field( $new_instance['title'] );

		return $instance;
	}

	function widget( $args, $instance ) {
		extract( $args );

		if ( !isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$widget_id = $args[ 'widget_id' ];
		$title = apply_filters( 'widget_title', isset($instance['title'] ) ? $instance['title'] : null );
		$image = blggn_get_field( 'image', 'widget_' . $widget_id);
		$img_style = blggn_get_field( 'widget_about_img_style', 'widget_' . $widget_id);
		$heading = blggn_get_field( 'widget_about_heading', 'widget_' . $widget_id);
		$content = blggn_get_field( 'content', 'widget_' . $widget_id);
		$social = blggn_get_field( 'widget_about_social', 'widget_' . $widget_id );
		$signature_image = blggn_get_field( 'signature_image', 'widget_' . $widget_id);

		$allowed_tags = array(
			'div' => array(
					'id' => array(),
					'class' => array()
			),
			'h4' => array(
				'class' => array()
			)
		);
		echo wp_kses($before_widget, $allowed_tags);
		if ( $title ) echo wp_kses($before_title, $allowed_tags) . esc_html($title) . wp_kses($after_title, $allowed_tags); ?>

			<div class="widget-about">

				<?php if ( $image ) { ?>
					<div class="widget-about-img <?php echo esc_html( $img_style ); ?>" data-img="<?php echo wp_get_attachment_image_url( $image, 'blggn_150x150' ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/placeholder_150x150.jpg' ); ?>"/>
					</div>
				<?php } ?>
				<h2><?php echo wp_kses_post( $heading ); ?></h2>
				<?php echo wp_kses_post( $content ); ?>
				<?php if ( $social == 1 ) { ?>
					<div class="widget-social">
						<?php if ( function_exists( 'blggn_social_media' ) ) blggn_social_media(); ?>
					</div>
				<?php } ?>

				<div class="widget-about-sig">
					<?php echo wp_get_attachment_image( $signature_image, 'full' ); ?>
				</div>

			</div>

			<?php

		echo wp_kses($after_widget, $allowed_tags);
	}

}

function blggn_register_widget_about() {
	register_widget( 'blggn_widget_about' );
}
add_action( 'widgets_init', 'blggn_register_widget_about' );

if( function_exists('acf_add_local_field_group') ) {

	acf_add_local_field_group( array (
		'key' => 'group_widget_about',
		'title' => esc_html__( 'About Widget', 'blggn' ),
		'fields' => array (
			array (
				'key' => 'field_about_image',
				'label' => esc_html__( 'Image:', 'blggn' ),
				'name' => 'image',
				'type' => 'image',
				'required' => 0,
				'conditional_logic' => 0,
				'return_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'wrapper' => array(
					'class' => 'voss-add-image',
				),
			),

			array (
				'key' => 'field_widget_about_img_style',
				'name' => 'widget_about_img_style',
				'type' => 'select',
				'label' => esc_html__( 'Image Style', 'blggn' ),
				'choices'     => array(
					''        => esc_html__( 'Round', 'blggn' ),
					'square'  => esc_html__( 'Square', 'blggn' ),
				),
				'default_value' => array (
					''
				),
				'layout' => 'vertical',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_about_image',
							'operator' => '!=',
							'value' => '',
						),
					),
				),
			),

			array (
				'key' => 'field_widget_about_heading',
				'label' => esc_html__( 'Heading', 'blggn' ),
				'name' => 'widget_about_heading',
				'type' => 'text',
				'default_value' => esc_html__( 'Hi', 'blggn' ),
				'required' => 0,
				'conditional_logic' => 0,
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
			),

			array (
				'key' => 'field_about_text',
				'name' => 'content',
				'default_value' => esc_html__( 'Welcome to my blog. I document my adventures in travel, style, and food. Hope you have a nice stay!', 'blggn' ),
				'type' => 'wysiwyg',
				'required' => 0,
				'conditional_logic' => 0,
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
			),

			array(
				'key' => 'field_widget_about_social',
				'name' => 'widget_about_social',
				'label' => esc_html__( 'Show social media icons', 'blggn' ),
				'type' => 'true_false',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => 'voss-switch',
					'id' => '',
				),
				'message' => '',
				'default_value' => 1,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),

			array (
				'key' => 'field_about_signature_image',
				'label' => esc_html__( 'Signature Image:', 'blggn' ),
				'name' => 'signature_image',
				'type' => 'image',
				'required' => 0,
				'conditional_logic' => 0,
				'return_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'wrapper' => array(
					'class' => 'voss-add-image',
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'widget',
					'operator' => '==',
					'value' => 'about_vs',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'field',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	) );

}

?>
