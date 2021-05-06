<div class="archive-header page-header">
	<div class="container">

		<?php if( is_day() ) : ?>
			<p class="post-cat text-light"><?php esc_html_e( 'Daily Archives', 'blggn' ); ?></p>
			<h2 class="page-title"><?php printf( esc_html__( '%s', 'blggn' ), get_the_date() ); ?></h2>

		<?php elseif( is_month() ) : ?>
			<p class="post-cat text-light"><?php esc_html_e( 'Monthly Archives', 'blggn' ); ?></p>
			<h2 class="page-title"><?php printf( esc_html__( '%s', 'blggn' ), get_the_date( 'F Y' ) ); ?></h2>

		<?php elseif( is_year() ) : ?>
			<p class="post-cat text-light"><?php esc_html_e( 'Year Archives', 'blggn' ); ?></p>
			<h2 class="page-title"><?php printf( esc_html__( '%s', 'blggn' ), get_the_date( 'Y' ) ); ?></h2>

		<?php elseif( is_tag() ) : ?>
			<p class="post-cat text-light"><?php esc_html_e( 'Tag', 'blggn' ); ?></p>
			<h2 class="page-title"><?php printf( esc_html__( '%s', 'blggn' ), single_tag_title( '', false ) ); ?></h2>

		<?php elseif( is_author() ) : ?>
			<p class="post-cat text-light"><?php esc_html_e( 'Posts By', 'blggn' ); ?></p>
			<h2 class="page-title"><?php echo get_the_author_meta( 'display_name' ); ?></h2>


		<?php elseif( is_search() ) : ?>
			<p class="post-cat text-light"><?php esc_html_e( 'Search results for', 'blggn' ); ?></p>
			<h2 class="page-title"><?php printf( esc_html__( '%s', 'blggn' ), get_search_query() ); ?></h2>

		<?php else : ?>
			<h2 class="page-title"><?php esc_html_e( 'Archives', 'blggn' ); ?></h2>

		<?php endif; ?>

	</div>
</div>
