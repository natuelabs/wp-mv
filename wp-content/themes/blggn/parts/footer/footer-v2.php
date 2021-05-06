<?php

$show_footer_logo 				= get_theme_mod( 'show_footer_logo', true );
$logo_type                      = get_theme_mod( 'footer_logo_type', 'image' );
$footer_logo                    = get_theme_mod( 'footer_logo', get_template_directory_uri() . '/assets/img/logo-dark.png' );
$footer_nav 					= get_theme_mod( 'footer_menu', true );
$footer_social 					= get_theme_mod( 'footer_social', true );
$footer_instagram          		= get_theme_mod( 'footer_instagram', true );
$footer_instagram_user          = get_theme_mod( 'footer_instagram_user', 'mija_mija' );
$footer_instagram_number        = get_theme_mod( 'footer_instagram_number', 6 );
$footer_newsletter 				= get_theme_mod( 'footer_newsletter', true );
$footer_newsletter_title 		= get_theme_mod( 'footer_newsletter_title', esc_html__( 'Sign up for our weekly newsletter', 'blggn' ) );
$footer_newsletter_disclaimer 	= get_theme_mod( 'footer_newsletter_disclaimer', esc_html__( 'Will be used in accordance with our User Agreement and Privacy Policy', 'blggn' ) );
$footer_disclaimer 				= get_theme_mod( 'footer_disclaimer', '&copy;'. date(' Y ') .'<a href="'. get_home_url('/') .'">'. get_bloginfo( 'name' ) .'</a>'. esc_html__( '. All Rights Reserved.', 'blggn' ) .'</a>' );

?>

<div class="footer footer-v2">

	<?php if( $footer_instagram == true ) : ?>
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

	<?php if ( is_active_sidebar( 'footer-sidebar-1' ) || is_active_sidebar( 'footer-sidebar-2' ) || is_active_sidebar( 'footer-sidebar-2' ) ) { ?>
		<div class="footer-widgets container">
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
	<?php } ?>

	<div class="footer-bottom">
		<div class="container">
			<div class="row align-mid">
				<div class="col-lg-7 text-lg-left footer-disclaimer">
					<?php echo wp_kses_post( $footer_disclaimer ); ?>
				</div>
				<div class="col-lg-5 text-lg-right footer-social">
					<?php if ( function_exists( 'blggn_social_media' ) ) blggn_social_media(); ?>
				</div>
			</div>
		</div>
	</div>

	<?php if( get_theme_mod( 'footer_to_top', true ) == true ) { ?>
		<!--<div class="footer-to-top">
			<p><a class="scroll-top h4-up"><i class="ion-ios-arrow-up"></i></a></p>
		</div>>-->
	<?php } ?>

</div>
