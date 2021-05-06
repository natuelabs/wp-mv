<?php

$show_logo 				= get_theme_mod('show_side_menu_logo', true);
$show_close 			= get_theme_mod('show_side_menu_x', true);
$show_newsletter 		= get_theme_mod('show_side_menu_newsletter', false);
$newsletter_title 		= get_theme_mod('side_menu_newsletter_title', esc_html__('Subscribe to our newsletter', 'blggn'));
$show_social 			= get_theme_mod('show_side_menu_social', false);

?>

	<div id="side-menu" class="sidenav">
		<div class="side-menu-container">

			<div class="side-menu-top">
				<?php if ($show_close == true) { ?>
					<span class="close-side-menu"><svg viewBox="0 0 20 20"><use xlink:href="#close-delete-small"></use></svg></span>
				<?php } ?>
				<?php if ($show_logo == true) get_template_part( '/parts/header/header-logo' ); ?>
			</div>

			<nav class="side-menu-nav">
				<?php blggn_side_menu(); ?>
			</nav>

			<?php if( $show_newsletter == true ) {
				if ( function_exists('blggn_register_widget_newsletter') ) { ?>
					<div class="footer-newsletter">
						<div class="newsletter-inline"> <?php
							if ($newsletter_title) { ?>
								<h4 class="widget-title vs-sekundar"><?php echo wp_kses_post($newsletter_title); ?></h4> <?php
							}
							the_widget( 'blggn_widget_newsletter' ); ?>
						</div>
					</div>
				<?php }
			} ?>

			<?php if( $show_social == true ) { ?>
				<div class="widget-social">
					<?php if ( function_exists( 'blggn_social_media' ) ) blggn_social_media(); ?>
				</div>
			<?php } ?>

			<?php if ( is_active_sidebar( 'side_menu_sidebar' ) ) { ?>
				<div class="side-menu-widgets widget-area">
					<?php dynamic_sidebar( 'side_menu_sidebar' ); ?>
				</div>
			<?php } ?>

		</div>
	</div>
	<div class="side-overlay"></div>
