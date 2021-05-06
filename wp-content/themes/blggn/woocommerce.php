<?php get_header(); ?>

<?php if( !is_front_page() && !is_home() && !is_404() && get_theme_mod( 'global_page_header', true ) == true && blggn_get_field( 'hide_page_header' ) !== true ) { ?>
	<div class="page-header" data-img="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(wc_get_page_id('shop')), 'blggn_1920x1080')[0]; ?>">
		<div class="container">
			<div class="page-header-content">
				<?php if( get_theme_mod( 'global_page_header_title', true ) == true && blggn_get_field( 'hide_page_title' ) == false ) : ?>
					<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>
				<?php
					if( blggn_get_field( 'hide_page_breadcrumbs' ) == false ) {
						if ( function_exists( 'yoast_breadcrumb' ) ) {
							yoast_breadcrumb( '<div class="breadcrumb">', '</div>' );
						} elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
							$args = array(
								'delimiter'   => '<svg><use xlink:href="#arrow-right"></use></svg>',
								'wrap_before' => '<nav class="voss-breadcrumb">',
								'wrap_after'  => '</nav>',
								'before'      => '',
								'after'       => '',
								'home'        => esc_html__( 'Home', 'blggn' ),
							);
						 	woocommerce_breadcrumb( $args );
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
	<div class="shop-container">
		<div class="container">
			<div class="row">
				<?php woocommerce_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
