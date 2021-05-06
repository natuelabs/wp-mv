<div class="swiper-slide voss-slide">

	<div class="post-media <?php if( has_post_format( 'audio' ) ) : ?>audio-thumb<?php endif; ?>">
		<a class="post-image <?php if( has_post_format( 'video' ) ) : ?>video-thumb<?php endif; ?>" href="<?php echo esc_url( get_permalink() ); ?>">
			<?php blggn_post_thumb( 'blggn_600x600' ); ?>
			<?php if( has_post_format( 'video' ) ) { ?>
				<div class="post-media-content"><div><div><div class="video-play-icon"></div></div></div></div>
			<?php } ?>
		</a>
	</div>

	<div class="voss-slide-container">
		<p class="post-cat text-light"><?php the_category( ', ' ); ?></p>
		<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
	</div>

</div>
