<?php get_header(); ?>

	<?php if( !is_front_page() && !is_home() && !is_404() && get_theme_mod( 'global_page_header', true ) == true && blggn_get_field( 'hide_page_header' ) !== true ) { ?>
		<div class="page-header" style="background-image:url(<?php echo esc_html( blggn_get_field( 'page_header_image' ) ); ?>);">
			<div class="container">
				<div class="page-header-content">
					<?php if( get_theme_mod( 'global_page_header_title', true ) == true && blggn_get_field( 'hide_page_title' ) == false ) : ?>
						<h1 class="page-title"><?php the_title(); ?></h1>
					<?php endif; ?>
					<?php
						if( blggn_get_field( 'hide_page_breadcrumbs' ) == false ) {
							if ( function_exists( 'yoast_breadcrumb' ) ) {
								yoast_breadcrumb( '<div class="breadcrumb">', '</div>' );
							} elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
								woocommerce_breadcrumb();
							} else {
								blggn_breadcrumb();
							}
						}
					?>
				</div>
			</div>
		</div>
	<?php } ?>

	<div class="voss-page-content">
		<div class="container">
			<?php
				while ( have_posts() ) : the_post();

					the_content();
					wp_link_pages(array(
						'before'           => '<div class="pagination-num"><div class="nav-links">',
						'after'            => '</div></div>',
						'link_before'      => '<span class="page-number">',
						'link_after'       => '</span>',
						'next_or_number'   => 'next_and_number',
						'separator'        => ' ',
						'nextpagelink'     => esc_html__( 'Next Page', 'blggn' ),
						'previouspagelink' => esc_html__( 'Previous Page', 'blggn' ),
					));

				endwhile;
			?>
		</div>

		<?php if ( comments_open() || get_comments_number() ) comments_template(); ?>

	</div>

<?php get_footer(); ?>
