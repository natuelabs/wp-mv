<article id="post-<?php the_ID(); ?>" class="featured-post">

	<div class="standout-post thumb-bg" data-img="<?php blggn_thumb_url( 'blggn_1080x690' ); ?>">
		<div class="list-post-content">
			<p class="post-cat text-shadow"><?php the_category( ', ' ); ?></p>
			<h2 class="post-title text-shadow"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
			<a class="btn" href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e( 'View Post', 'blggn' ); ?></a>
		</div>
	</div>

</article>
