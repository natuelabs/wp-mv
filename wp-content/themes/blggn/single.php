<?php get_header(); ?>

<?php blggn_post_header( 'top' ); ?>

	<section class="voss-single">
		<div class="container">
			<div class="row">

				<div class="content-area">
					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'parts/post/content-single' );

							if (function_exists( 'blggn_setPostViews' )) blggn_setPostViews( get_the_ID() );

						endwhile;
					?>

					<div class="page-load-status">
						<div class="infinite-scroll-request"><div class="loading"></div></div>
						<p class="infinite-scroll-last"></p>
						<p class="infinite-scroll-error"></p>
					</div>

				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>

		<?php if (get_theme_mod( 'single_pagination', true ) == true) { ?>
			<div class="single-section">
				<div class="container">
					<div class="row">
						<?php get_template_part('parts/post/post-pagination'); ?>
					</div>
				</div>
			</div>
		<?php } ?>

		<?php if (get_theme_mod( 'single_related', true ) == true) { ?>
			<div class="single-section">
				<div class="container">
					<div class="row">
						<?php get_template_part('parts/post/post-related'); ?>
					</div>
				</div>
			</div>
		<?php } ?>

		<?php if(get_theme_mod( 'single_comments', true ) == true && get_theme_mod('single_comments_position', 'content') == 'bottom') { ?>
			<div class="single-section">
				<div class="container">
					<div class="row">
						<?php if( !post_password_required() ) comments_template(); ?>
					</div>
				</div>
			</div>
		<?php } ?>

	</section>

<?php get_footer(); ?>
