<div class="nav-primary">
	<div class="container">

		<div class="row align-mid">

			<div class="d-none d-lg-block col-lg-3 text-left">
				<?php get_template_part( '/parts/header/header-logo' ); ?>
			</div>

			<div class="d-none d-lg-block col-lg-9 text-right header-banner">
				<?php echo get_theme_mod( 'header_banner', '<a href="https://goo.gl/QMgrzW"><img src="'. get_template_directory_uri() . '/assets/img/banner-long.jpg"/></a>' ); ?>
			</div>

		</div>

		<div class="row align-mid">

				<div class="d-none d-lg-block col-lg-9 text-left">
					<nav class="main-navigation">
						<?php blggn_primary_menu(); ?>
					</nav>
				</div>

				<div class="col-6 col-sm-6 d-lg-none text-left">
					<?php get_template_part( '/parts/header/header-logo' ); ?>
				</div>

				<div class="col-6 col-sm-6 col-lg-3 text-right menu-icons">
					<?php blggn_header_icons( 'right' ) ?>
					<a class="open-side-menu"><svg viewBox="0 0 20 20"><use xlink:href="#menu-hamburger"></use></svg></a>
				</div>

		</div>
	</div>
</div>
