<div class="swiper-slide voss-slide" data-img="<?php blggn_thumb_url( 'blggn_1920x1080' ); ?>">

	<div class="vs-bottom-content">
		<p class="post-cat"><?php the_category( ', ' ); ?></p>
		<h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
		<p class="vs-excerpt"><?php echo blggn_excerpt_limit(110); ?></p>
	</div>

	<a class="vs-overlay-link" href="<?php the_permalink();?>"></a>

</div>
