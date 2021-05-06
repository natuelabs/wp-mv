<div class="author-area">

	<div class="author-img">
		<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )); ?>">
			<?php
				if (get_the_author_meta( 'user_description' ) !== '') {
					echo get_avatar( get_the_author_meta( 'ID' ), 130 );
				} else {
					echo get_avatar( get_the_author_meta( 'ID' ), 65 );
				}
			?>
		</a>
	</div>

	<div class="author-info">

		<h4 class="upper">
			<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )); ?>">
				<?php echo get_the_author_meta( 'display_name' ); ?>
			</a>
		</h4>

		<p><?php echo get_the_author_meta( 'user_description' ); ?></p>

		<div class="author-social">
			<?php
				if ( function_exists( 'blggn_user_contact' ) ) {
					blggn_user_links();
				}
			?>
		</div>

	</div>

</div>
