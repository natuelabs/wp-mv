<?php

class blggn_widget_latest extends WP_Widget {

	public function __construct() {

		parent::__construct( 'blggn_latest_wg', esc_html__( '* ', 'blggn' ) . BLGGN_NAME . esc_html__( ' - Posts', 'blggn' ), array (
			'description' => esc_html__( 'Widget for showing latest or trending posts from all or specific categories.', 'blggn' )
		) );

	}

	public function widget( $args, $instance ) {
		extract( $args );

		if ( !isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$widget_id                          = $args[ 'widget_id' ];
		$title                              = apply_filters( 'widget_title', isset($instance['title'] ) ? $instance['title'] : null );
		$category                           = blggn_get_field( 'widget_latest_posts_category', 'widget_' . $widget_id );
		$widget_posts_latest_num            = blggn_get_field( 'latest_number_of_posts', 'widget_' . $widget_id );

		if ( !$widget_posts_latest_num ) {
			$widget_posts_latest_num = 4;
		}

		$widget_posts_display_as            = blggn_get_field( 'widget_latest_posts_display_as', 'widget_' . $widget_id, 'list' );
		$widget_posts_query 				= blggn_get_field( 'widget_posts_query', 'widget_' . $widget_id, 'latest' );
		$widget_counter						= blggn_get_field( 'widget_posts_counter', 'widget_' . $widget_id, 'false' );
		$widget_posts_time_range            = blggn_get_field( 'widget_posts_time_range', 'widget_' . $widget_id, '999 month ago' );
		$overlay 							= blggn_get_field( 'widget_posts_overlay', 'widget_' . $widget_id, '20' );
		$autoplay 							= blggn_get_field( 'widget_posts_autoplay', 'widget_' . $widget_id, 'false' );

		if ( $widget_posts_query == 'trending' ) {
			$query = array(
				'category__in' 				=> $category,
				'posts_per_page' 			=> $widget_posts_latest_num,
				'post_type'   				=> 'post',
				'post_status' 				=> 'publish',
				'orderby'      				=> 'meta_value_num',
				'meta_key'     				=> 'post_views_count',
				'date_query' => array(
					array(
					  'column' => 'post_date_gmt',
					  'after'  => $widget_posts_time_range,
					)
				),
			);
		} else {
			$query = array(
				'category__in' 				=> $category,
				'posts_per_page' 			=> $widget_posts_latest_num,
				'post_type'   				=> 'post',
				'post_status' 				=> 'publish',
				'orderby'      				=> 'date',
			);
		}



		$loop_latest = new WP_Query( $query );

		$allowed_tags = array(
			'div' => array(
					'id' => array(),
					'class' => array()
			),
			'h4' => array(
				'class' => array()
			)
		);

		echo wp_kses($before_widget, $allowed_tags); ?>

			<?php if( $loop_latest->have_posts() ) : ?>

				<?php if ( $title ) echo wp_kses($before_title, $allowed_tags) . esc_html($title) . wp_kses($after_title, $allowed_tags); ?>

				<?php if( $widget_posts_display_as == 'slider' ) { ?>

					<!-- Slider Posts -->
					<div class="widget-posts widget-slider-posts voss-slider"
						data-style="widget-slider-posts"
						data-columns="1"
						data-autoplay="<?php echo esc_attr( $autoplay ); ?>"
						data-delay="6000"
						data-loop="true"
						data-centered="false"
						data-pagination="true"
						data-dynamic-bullets="false"
						data-navigation="false"
						data-spacebetween="0"
						data-parallax="true"
						data-overlay="<?php echo esc_attr( $overlay ); ?>"
					>

						<div class="swiper-wrapper">

							<?php while( $loop_latest->have_posts() ) : $loop_latest->the_post(); ?>

								<?php if( has_post_thumbnail() ) : ?>

									<div class="swiper-slide">
										<div class="widget-post">

											<div class="widget-post-img">
												<a href="<?php echo esc_url(get_permalink()); ?>">
													<?php blggn_post_thumb( 'blggn_300x500' ); ?>
												</a>
											</div>

											<div class="widget-post-info" data-swiper-parallax="-150">
												<p class="post-cat">

													<?php $category = get_the_category(); ?>
													<?php if ( $category[0] ) : ?>
														<a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>"><?php echo esc_textarea( $category[0]->cat_name ); ?></a>
													<?php endif; ?>

												</p>
												<h4><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
												<h4 class="upper voss-link">
													<a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e( 'View Post', 'blggn' ); ?></a>
												</h4>
											</div>

										</div>
									</div>

								<?php endif; ?>

							<?php endwhile; ?>

							<?php wp_reset_postdata(); ?>

						</div>

						<!-- Pagination -->
						<div class="swiper-pagination swiper-pag-outside-alt"></div>
						<!-- Navigation -->
						<div class="swiper-button-prev"><i class="ion-ios-arrow-left"></i></div>
						<div class="swiper-button-next"><i class="ion-ios-arrow-right"></i></div>

					</div>

				<?php } else if ($widget_posts_display_as == 'list-large') { ?>

					<!-- List Posts -->
					<div class="widget-posts widget-list-posts widget-list-large">

						<?php while( $loop_latest->have_posts() ) : $loop_latest->the_post(); ?>

								<div class="widget-post">

									<?php if( has_post_thumbnail() || blggn_get_field('post_format_gallery') || blggn_get_field('post_format_video') || blggn_get_field('post_format_audio') ) { ?>
										<div class="widget-post-img post-media <?php if( has_post_format( 'audio' ) ) : ?>audio-thumb<?php endif; ?>">
											<a class="post-image <?php if( has_post_format( 'video' ) ) : ?>video-thumb<?php endif; ?>" href="<?php echo esc_url( get_permalink() ); ?>">
												<?php blggn_post_thumb( 'blggn_300x300' ); ?>
											</a>
										</div>
									<?php } ?>

									<div class="widget-post-info <?php if ($widget_counter == 'true') { ?>show-counter<?php } ?>">
										<h2 class="post-counter vs-sekundar"><?php echo esc_html($loop_latest->current_post +1); ?></h2>
										<p class="post-cat text-light"><?php the_category( ', ' ); ?></p>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									</div>

								</div>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					</div>

				<?php } else { ?>

					<!-- List Posts -->
					<div class="widget-posts widget-list-posts">

						<?php while( $loop_latest->have_posts() ) : $loop_latest->the_post(); ?>

								<div class="widget-post align-mid <?php if ($widget_counter == 'true') { ?>show-counter<?php } ?>">

									<h2 class="post-counter vs-sekundar"><?php echo esc_html($loop_latest->current_post +1); ?></h2>

									<?php if( has_post_thumbnail() || blggn_get_field('post_format_gallery') || blggn_get_field('post_format_video') || blggn_get_field('post_format_audio') ) { ?>
										<div class="widget-post-img post-media <?php if( has_post_format( 'audio' ) ) : ?>audio-thumb<?php endif; ?>">
											<a class="post-image <?php if( has_post_format( 'video' ) ) : ?>video-thumb<?php endif; ?>" href="<?php echo esc_url( get_permalink() ); ?>">
												<?php blggn_post_thumb( 'blggn_128x128' ); ?>
											</a>
										</div>
									<?php } ?>

									<div class="widget-post-info">
										<p class="post-cat text-light"><?php the_category( ', ' ); ?></p>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									</div>

								</div>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					</div>

				<?php } ?>

			<?php endif;

		echo wp_kses($after_widget, $allowed_tags);
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		return $instance;
	}

	public function form( $instance ) {

		$defaults = array(
			'title'     => '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e('Widget Title:', 'blggn'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" class="widefat" type="text"/>
		</p> <?php

	}

}

function blggn_register_widget_latest() {
	register_widget( 'blggn_widget_latest' );
}
add_action( 'widgets_init', 'blggn_register_widget_latest' );

if( function_exists('acf_add_local_field_group') ) {

	acf_add_local_field_group( array (
		'key' => 'group_widget_latest_posts',
		'title' => esc_html__( 'Latest Widget', 'blggn' ),
		'fields' => array (

			array (
				'key' => 'field_widget_latest_posts_display_as',
				'name' => 'widget_latest_posts_display_as',
				'type' => 'radio',
				'label' => esc_html__( 'Layout:', 'blggn' ),
				'choices'     => array(
					'list'        => esc_html__( 'List', 'blggn' ),
					'list-large'  => esc_html__( 'List Large', 'blggn' ),
					'slider'      => esc_html__( 'Slider', 'blggn' ),
				),
				'default_value' => array (
					'list'
				),
				'layout' => 'vertical',
			),

			array (
				'key' => 'field_latest_category',
				'label' => esc_html__( 'Category:', 'blggn' ),
				'name' => 'widget_latest_posts_category',
				'type' => 'taxonomy',
				'instructions' => 'If none is selected, widget will display latest posts from all categories.',
				'taxonomy' => 'category',
				'field_type' => 'multi_select',
				'allow_null' => 1,
				'return_format' => 'id',
			),

			array (
				'key' => 'field_widget_posts_query',
				'name' => 'widget_posts_query',
				'type' => 'radio',
				'label' => esc_html__( 'Sort by:', 'blggn' ),
				'choices'     => array(
					'latest'        => esc_html__( 'Latest', 'blggn' ),
					'trending'      => esc_html__( 'Trending', 'blggn' ),
				),
				'default_value' => array (
					'latest'
				),
				'layout' => 'vertical',
			),

			array (
				'key' => 'field_latest_number_of_posts',
				'label' => esc_html__( 'Number of Posts:', 'blggn' ),
				'name' => 'latest_number_of_posts',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'default_value' => 4,
				'readonly' => 0,
				'disabled' => 0,
			),
			array(
				'key' => 'field_widget_posts_counter',
				'label' => 'Show Counter',
				'name' => 'widget_posts_counter',
				'type' => 'true_false',
				'required' => 0,
				'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_widget_latest_posts_display_as',
                            'operator' => '=',
                            'value' => 'list',
                        ),
                    ),
					array(
						array(
                            'field' => 'field_widget_latest_posts_display_as',
                            'operator' => '=',
                            'value' => 'list-large',
                        ),
                    ),
                ),
				'wrapper' => array(
					'width' => '',
					'class' => 'voss-switch',
					'id' => '',
				),
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array (
				'key' => 'field_widget_posts_time_range',
				'name' => 'widget_posts_time_range',
				'type' => 'select',
				'label' => esc_html__( 'Time Range:', 'blggn' ),
				'instructions' => esc_html__( 'List those posts that have been the most popular within a specific time range:', 'blggn' ),
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_widget_posts_query',
							'operator' => '=',
							'value' => 'trending',
						),
					),
				),
				'choices'     => array(
					'24 hour ago'       => esc_html__( 'Last 24 Hours', 'blggn' ),
					'7 day ago'       	=> esc_html__( 'Last 7 Days', 'blggn' ),
					'1 month ago'      	=> esc_html__( 'Last 30 Days', 'blggn' ),
					'2 month ago'     	=> esc_html__( 'Last 2 Months', 'blggn' ),
					'3 month ago'     	=> esc_html__( 'Last 3 Months', 'blggn' ),
					'6 month ago'     	=> esc_html__( 'Last 6 Months', 'blggn' ),
					'12 month ago'     	=> esc_html__( 'Last Year', 'blggn' ),
					'999 month ago'     => esc_html__( 'Any Time', 'blggn' ),
				),
				'default_value' => array (
					'999 month ago',
				),
				'layout' => 'vertical',
				'toggle' => 0,
			),
			array(
				'key' => 'field_widget_posts_overlay',
				'name' => 'widget_posts_overlay',
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
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_widget_latest_posts_display_as',
							'operator' => '=',
							'value' => 'slider',
						),
					),
				),
				'default_value' => array (
					'0',
				),
			),
			array (
				'key' => 'field_widget_posts_autoplay',
				'name' => 'widget_posts_autoplay',
				'type' => 'select',
				'label' => esc_html__( 'Autoplay:', 'blggn' ),
				'choices'     => array(
					'true'        => esc_html__( 'On', 'blggn' ),
					'false'      => esc_html__( 'Off', 'blggn' ),
				),
				'default_value' => array (
					'false'
				),
				'layout' => 'vertical',
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_widget_latest_posts_display_as',
							'operator' => '=',
							'value' => 'slider',
						),
					),
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'widget',
					'operator' => '==',
					'value' => 'blggn_latest_wg',
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
