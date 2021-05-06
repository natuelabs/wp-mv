<article id="post-<?php the_ID(); ?>" class="list-post">

	<?php if( has_post_thumbnail() || has_post_format( 'gallery' ) || has_post_format( 'video' ) || has_post_format( 'audio' ) ) : ?>

		<div class="list-post-media <?php if( has_post_format( 'audio' ) ) : ?>audio-thumb<?php endif; ?>">
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-image thumb-overlay <?php if( has_post_format( 'video' ) ) : ?>video-thumb<?php endif; ?>">
				<figure>
					<?php blggn_post_thumb( 'blggn_300x300' ); ?>
				</figure>
				<div class="thumb-content">
					<div>
						<?php if( has_post_format( 'video' ) ) : ?>
							<div><div class="video-play-icon"></div></div>
						<?php else : ?>
							<h4 class="upper link">
								<?php esc_html_e( 'View Post', 'blggn' ); ?>
							</h4>
						<?php endif; ?>
					</div>
				</div>
			</a>
		</div>

	<?php endif; ?>

	<div class="list-post-content">

		<!-- Post Header -->
		<?php get_template_part( 'parts/post/post', 'title' ); ?>
		<?php get_template_part( 'parts/post/post', 'meta' ); ?>

		<!-- Post Entry -->
		<div class="post-entry-content">
			<?php if( get_theme_mod( 'blggn_hide_excerpt', true ) == true ) : ?>
				<p><?php echo blggn_excerpt_limit(29); ?></p>
			<?php endif; ?>
			<?php if( get_theme_mod( 'blggn_hide_btn_more', true ) == true ) : ?>
				<h4 class="post-read-more">
					<a href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e( 'Continue Reading', 'blggn' ); ?></a>
				</h4>
			<?php endif; ?>
		</div>

	</div>

</article><!-- #post-## -->
