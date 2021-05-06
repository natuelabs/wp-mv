<?php
/**
 * Post Header Meta
 */
?>

<ul class="post-meta">

	<?php if (is_single()) {
		if(get_theme_mod( 'post-show-date', true) == true ) { ?>
			<li class="meta-date"><?php the_time( get_option('date_format') ); ?></li> <?php
		}
		if(get_theme_mod( 'post-header-show-views', true) == true && function_exists('blggn_getPostViews') ) {
			$views = blggn_getPostViews(get_the_ID()); ?>

				<li class="meta-views"><?php esc_html_e($views); $views == '1' ? esc_html_e('View', 'blggn') : esc_html_e('Views', 'blggn'); ?></li><?php

		}
		if( get_theme_mod( 'post-header-show-read', true ) == true && function_exists('blggn_reading_count') ) { ?>
			<li class="meta-read"><?php echo blggn_reading_count(); ?> <?php esc_html_e('Minute Read', 'blggn'); ?></li> <?php
		}
		if( get_theme_mod( 'post-header-show-comments', false ) == true && comments_open() && empty($post->post_password) ) { ?>
			<li class="meta-comments">
				<a href="#comments" class="comments-scroll">
					<?php comments_number( esc_html__( 'Leave a comment', 'blggn' ), esc_html__( '1 Comment', 'blggn' ), '% ' . esc_html__( 'Comments', 'blggn' ) ); ?>
				</a>
			</li> <?php
		}
	} else { ?>
		<li class="post-cat"><?php the_category( ', ' ); ?></li>
		<li class="meta-date"><?php the_time( get_option('date_format') ); ?></li> <?php
		if(function_exists('blggn_getPostViews')) {
			$views = blggn_getPostViews(get_the_ID());
			if ($views !== '0') { ?>
				<li class="meta-views"> <?php
					esc_html_e($views); $views == '1' ? esc_html_e('View', 'blggn') : esc_html_e('Views', 'blggn'); ?>
				</li> <?php
			}
		}
		if(function_exists('blggn_reading_count')) { ?>
			<li class="meta-read"><?php echo blggn_reading_count(); ?> <?php esc_html_e('Minute Read', 'blggn'); ?></li> <?php
		}
		if(comments_open() && empty($post->post_password)) { ?>
			<li class="meta-comments">
				<a href="#comments" class="comments-scroll">
					<?php comments_number( esc_html__( 'Leave a comment', 'blggn' ), esc_html__( '1 Comment', 'blggn' ), '% ' . esc_html__( 'Comments', 'blggn' ) ); ?>
				</a>
			</li> <?php
		} ?>
		<li class="hide-last-after"></li> <?php
	} ?>

</ul>
