<div id="comments" class="comments-area">

    <?php if (have_comments()) { ?>

        <h3 class="comments-title section-title">
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'blggn' ), get_the_title() );
				} else {
					printf(
						_nx(
							'%1$s Reply to &ldquo;%2$s&rdquo;',
							'%1$s Replies to &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'blggn'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h3>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 100,
					'style'       => 'ol',
					'short_ping'  => true,
				) );
			?>
		</ol>

        <?php the_comments_pagination();

    } ?>

    <?php
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
		    <h4 class="no-comments"><?php esc_html_e( 'Comments are closed.', 'blggn' ); ?></h4> <?php
    	}
    ?>

    <?php comment_form(); ?>

</div>
