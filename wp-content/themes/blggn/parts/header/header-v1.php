<!-- Primary Nav -->
<div class="nav-primary">
	<div class="container-fluid">

		<div class="align-mid  header-top-desk">
			<div class="col-10 col-lg-10 mr-auto">
				<!-- JBQ vs 1.0 -->
				<li class="logo-menu-item header-top"><?php get_template_part('/parts/header/header-logo'); ?></li>
			</div>
		</div>

		<div class="align-mid">

			<div class="col-2 col-lg-2 text-left menu-icons">
				<a class="open-side-menu"><svg viewBox="0 0 20 20">
						<use xlink:href="#menu-hamburger"></use>
					</svg></a>
				<?php blggn_header_icons('left') ?>
			</div>

			<div class="col-8 col-lg-10 mr-auto">
				<!-- JBQ vs 1.0 -->
				<li class="logo-menu-item header-top header-top-mob"><?php get_template_part('/parts/header/header-logo'); ?></li>
				<ul class=" preload-holder">
				</ul>
				<nav class="main-navigation">
					<?php blggn_primary_menu(); ?>
				</nav>
			</div>

			<div class="col-2 col-lg-2 text-right menu-icons">
				<?php blggn_header_icons('right') ?>
			</div>

		</div>
	</div>
</div>
<!-- #Primary Nav -->