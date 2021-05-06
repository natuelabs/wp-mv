<article id="post-<?php the_ID(); ?>" class="grid-post">

	<?php if( blggn_get_field( 'stand_out_post' ) == true || is_sticky() ) { ?>

		<div class="standout-post thumb-bg" data-img="<?php blggn_thumb_url( get_theme_mod('thumb_grid', 'blggn_450x600') ); ?>">
			<div class="list-post-content">
				<?php get_template_part( 'parts/post/post', 'title' ); ?>
				<a class="post-read-more upper" href="<?php echo esc_url(get_permalink()); ?>">
					<?php esc_html_e( 'View Post', 'blggn' ); ?>
				</a>
			</div>
		</div>

	<?php } else { ?>

		<?php if( has_post_thumbnail() || blggn_get_field('post_format_gallery') || blggn_get_field('post_format_video') || blggn_get_field('post_format_audio') ) { ?>
			<div class="post-media <?php if( has_post_format( 'audio' ) ) : ?>audio-thumb<?php endif; ?>">
				<a class="post-image <?php if( has_post_format( 'video' ) ) : ?>video-thumb<?php endif; ?>" href="<?php echo esc_url( get_permalink() ); ?>">
					<?php blggn_post_thumb( get_theme_mod('thumb_grid', 'blggn_450x600') ); ?>
					<?php if( has_post_format( 'video' ) ) { ?>
						<div class="post-media-content"><div><div><div class="video-play-icon"></div></div></div></div>
					<?php } ?>
				</a>
			</div>
		<?php } ?>

		<div class="post-content">

			<?php get_template_part( 'parts/post/post-meta' ); ?>
			<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php
				$limit = get_theme_mod('posts_excerpt_length', '20');
				if (is_archive()) $limit = get_theme_mod('archive_excerpt_length', '20');
				blggn_excerpt($limit);
			?>
			<a class="<?php echo get_theme_mod('read_more_style', 'post-read-more'); ?> upper" href="<?php echo esc_url(get_permalink()); ?>">
				<?php esc_html_e( 'Continue Reading', 'blggn' ); ?>
			</a>

		</div>

	<?php } ?>

</article>
