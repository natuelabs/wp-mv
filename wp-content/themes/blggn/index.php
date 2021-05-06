<?php get_header(); ?>

<?php if( !is_front_page() && is_home() && get_theme_mod( 'global_page_header', true ) == true && blggn_get_field( 'hide_page_header', get_option('page_for_posts') ) !== true ) { ?>
	<div class="page-header" data-img="<?php echo esc_html( blggn_get_field( 'page_header_image', get_option('page_for_posts') ) ); ?>">
		<div class="container">
			<div class="page-header-content">
				<?php if( get_theme_mod( 'global_page_header_title', true ) == true && blggn_get_field( 'hide_page_title', get_option('page_for_posts') ) == false ) : ?>
					<h1 class="page-title"><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h1>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php } ?>

<div class="home">
	<div class="container">
		<div class="row">

			<div class="content-area voss-posts">

				<?php
				if ( have_posts() ) {
					while ( have_posts() ) : the_post();
						get_template_part( 'parts/post/content', 'list' );
					endwhile;
				} else {
					get_template_part( 'templates/content', 'none' );
				}

				blggn_pagination( 'numeric' );
				?>

			</div>

			<?php get_sidebar() ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
