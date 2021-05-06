<?php

function voss_vc_slider( $atts, $content = null ) {

	$atts = vc_map_get_attributes( 'voss_vc_slider', $atts );
	extract( $atts );

	ob_start();

	if( $custom_query == 'true' ) {
		$source .= '|offset:'.$offset;
		$source_data = VcLoopSettings::parseData( $source );
		$query_builder = new blggn_query_builder( $source_data );
		$posts = $query_builder->build();
		$posts = $posts[1];
	} else if ( $cat == 'Popular Posts' ) {
        $args = array(
            'posts_per_page' 			=> $posts_per_page,
            'post_type'   				=> 'post',
            'post_status' 				=> 'publish',
            'orderby'      				=> 'meta_value_num',
            'meta_key'     				=> 'post_views_count',
			'offset'					=> $offset,
        );
        $posts = new WP_Query( $args );
    } else {
        $args = array(
            'cat' 						=> $cat,
            'posts_per_page' 			=> $posts_per_page,
            'posts_per_archive_page' 	=> $posts_per_page,
            'showposts' 				=> $posts_per_page,
            'post_type'					=> 'post',
            'orderby'					=> 'date',
            'ignore_sticky_posts' 		=> 1,
			'offset'					=> $offset,
        );
        $posts = new WP_Query( $args );
    }

	$parallaxStyle = array('1', '5', '10', '11');


	if( $posts->have_posts() ) : ?>

		<?php if( $title_enable == 'true' ) { ?>
			<h4 class="widget-title vs-sekundar"><?php echo esc_html( $title ); ?></h4>
		<?php } ?>

			<div class="voss-slider"
				data-style="<?php echo esc_attr( $style ); ?>"
				data-columns="<?php echo esc_attr( $columns ); ?>"
				data-columns-md="<?php if(in_array($style, array('1','2','3','4','5','10','11'))) : ?>1<?php else : ?>2<?php endif; ?>"
				data-autoplay="<?php if( $autoplay == true ) : ?>true<?php else : ?>false<?php endif; ?>"
				data-delay="<?php if( $autoplay == true ) : echo esc_attr( $delay ); else : ?>8000<?php endif; ?>"
				data-loop="<?php echo esc_attr( $loop ); ?>"
				data-centered="<?php echo esc_attr( $centered ); ?>"
				data-pagination="<?php echo esc_attr( $pagination ); ?>"
				data-dynamic-bullets="true"
				data-navigation="<?php echo esc_attr( $navigation ); ?>"
				data-spacebetween="<?php echo esc_attr( $space_between ); ?>"
				data-parallax="<?php if(in_array($style, $parallaxStyle) && $columns == 1) : ?>true<?php else : ?>false<?php endif; ?>"
				data-overlay="<?php echo esc_attr( $overlay ); ?>"
			>

				<div class="swiper-wrapper">
					<?php while ( $posts->have_posts() ) : $posts->the_post();

						get_template_part( '/inc/visualcomposer/vc_templates/slider/style', $style );

					endwhile; ?>
				</div>

				<!-- Pagination -->
				<div class="swiper-pagination swiper-pag-outside-alt"></div>
				<!-- Navigation -->
				<div class="swiper-button-prev"><svg><use xlink:href="#arrow-left-thin"></use></svg></div>
				<div class="swiper-button-next"><svg><use xlink:href="#arrow-right-thin"></use></svg></div>

			</div>

	<?php endif;

	$out = ob_get_contents();
	if (ob_get_contents()) ob_end_clean();

	wp_reset_query();
	wp_reset_postdata();

	return $out;

}
blggn_add_short( 'voss_vc_slider', 'voss_vc_slider' );
