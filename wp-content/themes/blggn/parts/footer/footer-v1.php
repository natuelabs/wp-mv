<?php

$show_footer_logo 				= get_theme_mod( 'show_footer_logo', true );
$logo_type                      = get_theme_mod( 'footer_logo_type', 'image' );
$footer_logo                    = get_theme_mod( 'footer_logo', get_template_directory_uri() . '/assets/img/logo-dark.png' );
$footer_nav 					= get_theme_mod( 'footer_menu', false );
$footer_social 					= get_theme_mod( 'footer_social', false );
$footer_instagram          		= get_theme_mod( 'footer_instagram', true );
$footer_instagram_user          = get_theme_mod( 'footer_instagram_user', 'mija_mija' );
$footer_instagram_number        = get_theme_mod( 'footer_instagram_number', 6 );
$footer_newsletter 				= get_theme_mod( 'footer_newsletter', false );
$footer_newsletter_title 		= get_theme_mod( 'footer_newsletter_title', esc_html__( 'Sign up for our weekly newsletter', 'blggn' ) );
$footer_newsletter_disclaimer 	= get_theme_mod( 'footer_newsletter_disclaimer' );
$footer_disclaimer 				= get_theme_mod( 'footer_disclaimer', '&copy;'. date(' Y ') .'<a href="'. get_home_url('/') .'">'. get_bloginfo( 'name' ) .'</a>'. esc_html__( '. All Rights Reserved.', 'blggn' ) .'' );

?>

<div class="footer footer-v1">

	<?php if ( is_active_sidebar( 'footer-sidebar-1' ) || is_active_sidebar( 'footer-sidebar-2' ) || is_active_sidebar( 'footer-sidebar-2' ) ) { ?>
		<div class="footer-widgets">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4">
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					</div>
					<div class="col-12 col-md-12 col-lg-4">
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					</div>


				</div>
			</div>
		</div>
	<?php } ?>

	<?php if ( $footer_instagram == true ) : ?>
		<div id="footer-instagram">
			<div class="footer-instagram">
				<?php
					$args = array(
						'username' => $footer_instagram_user,
						'size' => 'small',
						'number' => $footer_instagram_number,
						'target' => '_blank',
						'link' => ''
					);
					if ( function_exists('wpiw_widget') ) {
						the_widget( 'null_instagram_widget', $args );
					}
				?>
			</div>
		</div>
	<?php endif; ?>

	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<?php if ( $show_footer_logo == true ) { ?>
						<a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php if ( $logo_type == 'image' ) { ?>
								<img src="<?php echo esc_url( $footer_logo ); ?>" class="footer-logo-img" alt="<?php esc_attr(bloginfo( 'name' )); ?>" />
							<?php } else { ?>
								<h2><?php bloginfo( 'name' ); ?></h2>
								<p><?php bloginfo( 'description' ); ?></p>
							<?php } ?>
						</a>
					<?php } ?>

					<?php if ( $footer_social == true ) { ?>
						<div class="footer-social">
							<?php if ( function_exists( 'blggn_social_media' ) ) blggn_social_media(); ?>
						</div>
					<?php } ?>

					<?php if ( $footer_newsletter == true ) {
						if ( function_exists('blggn_register_widget_newsletter') ) { ?>
							<div class="footer-newsletter">
								<div class="newsletter-inline"> <?php
									if ($footer_newsletter_title) { ?>
										<h4 class="widget-title vs-sekundar"><?php echo wp_kses_post($footer_newsletter_title); ?></h4> <?php
									}
									the_widget( 'blggn_widget_newsletter' );
									if ($footer_newsletter_disclaimer) { ?>
										<div class="newsletter-disclaimer"><?php echo wp_kses_post($footer_newsletter_disclaimer); ?></div> <?php
									} ?>
								</div>
							</div>
						<?php }
					} ?>
					<div class="footer-bottom-widgets"><?php dynamic_sidebar( 'footer-sidebar-4' ); ?></div>
					<?php if ( $footer_nav == true ) { ?>
						<nav class="main-navigation footer-menu">
							<?php blggn_footer_menu(); ?>
						</nav>
					<?php } ?>

					<?php if ( $footer_disclaimer ) { ?>
						<div class="footer-disclaimer">
							<p><?php echo wp_kses_post( $footer_disclaimer ); ?></p>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>

	<?php if ( get_theme_mod( 'footer_to_top', true ) == true ) { ?>
		<div class="footer-to-top">
			<a class="scroll-top h4-up"><svg><use xlink:href="#arrow-up"></use></svg></a>
		</div>
	<?php } ?>

</div>
