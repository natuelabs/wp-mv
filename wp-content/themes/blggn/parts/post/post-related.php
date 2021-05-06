<?php

$related = blggn_get_related_posts( get_the_ID(), 8 );

if( $related->have_posts() ) : ?>
	<div class="single-post-related">
		<h4 class="section-title"><?php esc_html_e( 'You May Also Like', 'blggn' ); ?></h4>

		<div class="voss-slider"
			data-style="9"
			data-columns="4"
			data-columns-md="3"
			data-autoplay="false"
			data-delay="8000"
			data-loop="false"
			data-centered="false"
			data-pagination="true"
			data-dynamic-bullets="false"
			data-navigation="false"
			data-spacebetween="30"
	   >
			<div class="swiper-wrapper">
				<?php while ( $related->have_posts() ) : $related->the_post(); ?>

					<div class="swiper-slide voss-slide">

						<?php if( has_post_thumbnail() || blggn_get_field('post_format_gallery') || blggn_get_field('post_format_video') || blggn_get_field('post_format_audio') ) { ?>
							<div class="post-media <?php if( has_post_format( 'audio' ) ) : ?>audio-thumb<?php endif; ?>">
								<a class="post-image <?php if( has_post_format( 'video' ) ) : ?>video-thumb<?php endif; ?>" href="<?php echo esc_url( get_permalink() ); ?>">
									<?php blggn_post_thumb( 'blggn_300x300' ); ?>
									<?php if( has_post_format( 'video' ) ) { ?>
										<div class="post-media-content"><div><div><div class="video-play-icon"></div></div></div></div>
									<?php } ?>
								</a>
							</div>

							<div class="voss-slide-container">
								<p class="post-cat text-light"><?php the_category( ', ' ); ?></p>
								<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
							</div>
						<?php } ?>

					</div>

				<?php endwhile; ?>
			</div>

			<!-- Pagination -->
			<div class="swiper-pagination swiper-pag-outside-alt"></div>
			<!-- Navigation -->
			<div class="swiper-button-prev"><i class="ion-ios-arrow-left"></i></div>
			<div class="swiper-button-next"><i class="ion-ios-arrow-right"></i></div>

		</div>

	</div>
<?php endif; ?>

	<?php

	wp_reset_postdata();

?>
