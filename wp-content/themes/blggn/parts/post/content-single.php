<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php blggn_post_header( 'content' ); ?>

	<div class="post-content">

		<div class="post-before-content">
			<div class="post-before-content-meta">
					<ul class="post-meta">
						<?php if( get_theme_mod( 'post-header-show-author', true ) == true ) { ?>
							<li class="meta-post-author">
								<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )); ?>">
									<?php
										if (get_avatar( get_the_author_meta( 'ID' ))) echo get_avatar( get_the_author_meta( 'ID' ), 40 );
										echo esc_html__( 'By', 'blggn' ); ?> <?php echo get_the_author_meta( 'display_name' );
									?>
								</a>
							</li>
						<?php } ?>
						<?php if( get_theme_mod( 'post-header-show-date', true ) == true ) : ?>
							<li class="meta-post-date"><?php the_time( get_option('date_format') ); ?></li>
						<?php endif; ?>
					</ul>
			</div>
			<?php
				if ( get_theme_mod( 'post_share', true ) == true ) {
					if ( function_exists( 'blggn_social_share' ) ) blggn_social_share();
				}
			?>
		</div>

		<div class="post-entry-content">

			<?php
				the_content();
				wp_link_pages(array(
					'before'           => '<div class="pagination-numeric text-center"><nav class="navigation pagination" role="navigation"><div class="nav-links">',
					'after'            => '</div></nav></div>',
					'link_before'      => '<span class="page-number">',
					'link_after'       => '</span>',
					'next_or_number'   => 'number',
					'echo'             => 1
				));

				if ( get_theme_mod( 'post_tags', true ) == true && has_tag() ) { ?>
					<div class="post-tags"><?php the_tags( '', '', '' ); ?></div> <?php
				}

				if ( get_theme_mod( 'post_author', false ) == true ) {
					get_template_part( 'parts/post/post-author' );
				}

				if (get_theme_mod( 'single_comments', true ) == true && get_theme_mod('single_comments_position', 'content') == 'content') {
					if ( !post_password_required() ) comments_template();
				}
			?>

		</div>

	</div>

</article>
