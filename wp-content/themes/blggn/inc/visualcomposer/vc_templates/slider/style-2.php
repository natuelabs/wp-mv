<div class="swiper-slide voss-slide" data-img="<?php blggn_thumb_url( 'blggn_1920x1080' ); ?>">

	<div class="vs-top-content align-mid">
		<div class="voss-slide-container">
			<p class="post-cat text-shadow"><?php the_category( ', ' ); ?></p>
			<h2 class="post-title text-shadow"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
			<a class="btn" href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e( 'View Post', 'blggn' ); ?></a>
		</div>
	</div>

	<div class="vs-bottom-content">
		<h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
	</div>

	<a class="vs-overlay-link" href="<?php the_permalink();?>"></a>

</div>
