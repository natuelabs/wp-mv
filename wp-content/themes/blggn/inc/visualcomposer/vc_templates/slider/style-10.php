<div class="swiper-slide voss-slide align-mid">

	<div class="col-6 col-lg-6">
		<a class="post-image <?php if( has_post_format( 'video' ) ) : ?>video-thumb<?php endif; ?>" href="<?php echo esc_url( get_permalink() ); ?>">
			<figure><?php blggn_post_thumb( 'blggn_600x600' ); ?></figure>
		</a>
	</div>

	<div class="col-6 col-lg-6 align-mid">
		<div class="voss-slide-container" data-swiper-parallax="-200">
			<p class="post-cat text-light"><?php the_category( ', ' ); ?></p>
			<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
			<a class="post-read-more upper" href="<?php echo esc_url(get_permalink()); ?>">
				<?php esc_html_e( 'View Post', 'blggn' ); ?>
			</a>
		</div>
	</div>

</div>
