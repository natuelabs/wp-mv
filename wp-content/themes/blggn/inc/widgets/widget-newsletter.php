<?php

class blggn_widget_newsletter extends WP_Widget {

	function __construct() {

		parent::__construct( 'newslleter_vs', esc_html__( '* ', 'blggn' ) . BLGGN_NAME . esc_html__( ' - Newsletter', 'blggn' ), array (
			'description' => esc_html__( 'Newsletter widget to add subscription form on sidebar.', 'blggn' )
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
		</p>

		<?php echo '<a class="vs-sub-link" href="'. get_template_directory_uri() .'/inc/widgets/subscribers.csv" target="_blank">'. esc_html__( 'Download your subscribers list', 'blggn' ) .'</a>';

	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		return $instance;
	}

	function widget( $args, $instance ) {
		extract( $args );

		if ( !isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$widget_id = $args[ 'widget_id' ];
		$title = apply_filters( 'widget_title', isset($instance['title'] ) ? $instance['title'] : null );
		$desc = blggn_get_field( 'desc', 'widget_' . $widget_id);
		$image = blggn_get_field( 'image', 'widget_' . $widget_id);
		$overlay = blggn_get_field( 'widget_newsletter_overlay', 'widget_' . $widget_id, '0' );

		$allowed_tags = array(
			'div' => array( 'id' => array(), 'class' => array() ),
			'h4' => array( 'class' => array() )
		);

		echo wp_kses($before_widget, $allowed_tags);
		if ( $title ) echo wp_kses($before_title, $allowed_tags) . esc_html($title) . wp_kses($after_title, $allowed_tags); ?>

		<div class="vs-newsletter"
			data-img="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>"
			data-overlay="<?php echo esc_attr( $overlay ); ?>"
		>
			<div>
				<h2><?php echo wp_kses_post( $desc ); ?></h2>

				<form class="vs-newsletter-form" action="#" method="post">
					<div class="vs-newsletter-info"></div>
					<input placeholder="<?php esc_attr_e( 'Your Email Address', 'blggn'); ?>" type="text" class="vs-newsletter-email">
					<button class="btn" type="submit" name="submit"><?php esc_html_e( 'Sign Up', 'blggn' ); ?></button>
				</form>
			</div>
		</div> <?php

		echo wp_kses($after_widget, $allowed_tags);

	}

}

function blggn_register_widget_newsletter() {
	register_widget( 'blggn_widget_newsletter' );
}
add_action( 'widgets_init', 'blggn_register_widget_newsletter' );



if( function_exists('acf_add_local_field_group') ) {

	acf_add_local_field_group( array (
		'key' => 'group_widget_newsletter',
		'title' => esc_html__( 'Newsletter Widget', 'blggn' ),
		'fields' => array (
			array (
				'key' => 'field_newsletter_image',
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
				'key' => 'field_newsletter_desc',
				'label' => esc_html__( 'Description:', 'blggn' ),
				'name' => 'desc',
				'type' => 'text',
				'default_value' => esc_html__( 'Subscribe to Weekly Newsletter.', 'blggn' ),
				'required' => 0,
				'conditional_logic' => 0,
				'tabs' => 'all',
				'toolbar' => 'basic',
				'media_upload' => 0,
			),
			array(
				'key' => 'field_widget_newsletter_overlay',
				'name' => 'widget_newsletter_overlay',
				'label' => esc_html__( 'Overlay', 'blggn' ),
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'choices'     => array(
					'0'       => '0%',
					'10'       => '10%',
					'20'       => '20%',
					'30'       => '30%',
					'40'       => '40%',
					'50'       => '50%',
					'60'       => '60%',
					'70'       => '70%',
					'80'       => '80%',
					'90'       => '90%',
					'100'       => '100%',
				),
				'default_value' => array (
					'0',
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'widget',
					'operator' => '==',
					'value' => 'newslleter_vs',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'field',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	) );

}

?>
