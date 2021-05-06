<div class="nav-primary">
	<div class="container">
		<div class="row align-mid">

				<div class="col-lg-2 col-sm-6 col-6 text-left">
					<?php get_template_part( '/parts/header/header-logo' ); ?>
				</div>

				<div class="d-none d-lg-block col-lg-8 text-center">
					<nav class="main-navigation">
						<?php blggn_primary_menu(); ?>
					</nav>
				</div>

				<div class="col-6 col-sm-6 col-lg-2 text-right menu-icons">
					<?php blggn_header_icons( 'right' ) ?>
					<a class="open-side-menu"><svg viewBox="0 0 20 20"><use xlink:href="#menu-hamburger"></use></svg></a>
				</div>

		</div>
	</div>
</div>
