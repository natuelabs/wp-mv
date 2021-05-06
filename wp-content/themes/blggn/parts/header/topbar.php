<?php

$show_topbar = get_theme_mod('show_topbar', false);
$topbar_ad_type = get_theme_mod('topbar_ad_type', 'image');
$topbar_ad_image = get_theme_mod('topbar_ad_image', '<a href="https://goo.gl/QMgrzW" target="_blank"><img src="'. get_template_directory_uri() . '/assets/img/topbar-banner.jpg"/></a>');
$topbar_ad_code = get_theme_mod('topbar_ad_code', '');
$layout = get_theme_mod( 'topbar_layout', '1' );
$left_type = get_theme_mod( 'topbar_left_type', 'content' );
$right_type = get_theme_mod( 'topbar_right_type', 'menu' );
$topbar_left_content 	= get_theme_mod( 'topbar_left_content', esc_html__('FREE SHIPPING ON ORDERS OVER $50.00', 'blggn') );
$topbar_right_content 	= get_theme_mod( 'topbar_right_content' );

?>

<?php if ($show_topbar == true) { ?>
	<div class="topbar">
		<div class="container">
			<div class="row align-mid vs-sekundar">

				<?php if( $layout == 'ad' ) { ?>
					<div class="col-12 col-lg-12 text-center">
						<div class="topbar-ad">
							<?php
								if ($topbar_ad_type == 'image') {
									echo wp_kses_post( $topbar_ad_image );
								} else {
									echo $topbar_ad_code;
								}
							?>
						</div>
					</div>
				<?php } else { ?>

					<div class="<?php if( $layout == '1' ) : ?>col-12 col-lg-12 text-center<?php else : ?>col-6 col-lg-6 text-left<?php endif; ?>">
						<?php
							if( $left_type == 'menu' ) {
								?>
									<div class="main-navigation">
										<?php blggn_topbar_menu(); ?>
									</div>
								<?php
							} elseif( $left_type == 'social' ) { ?>
								<div class="topbar-icons">
									<?php if ( function_exists( 'blggn_social_media' ) ) blggn_social_media(); ?>
								</div> <?php
							} else { ?>
								<div class="topbar-text">
									<?php echo wp_kses_post( $topbar_left_content ); ?>
								</div> <?php
							}
						?>
					</div>

					<?php if( $layout == '2' ) : ?>
						<div class="col-6 col-lg-6 text-right">
							<?php
								if( $right_type == 'menu' ) {
									?>
										<div class="main-navigation">
											<?php blggn_topbar_menu(); ?>
										</div>
									<?php
								} elseif( $right_type == 'social' ) { ?>
									<div class="topbar-icons">
										<?php if ( function_exists( 'blggn_social_media' ) ) blggn_social_media(); ?>
									</div> <?php
								} else { ?>
									<div class="topbar-text">
										<?php echo wp_kses_post( $topbar_right_content ); ?>
									</div> <?php
								}
							?>
						</div>
					<?php endif; ?>

				<?php } ?>

			</div>
		</div>
	</div>
<?php } ?>
