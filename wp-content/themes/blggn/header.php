<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="svg-defs" class="svg-defs hidden">
		<?php get_template_part( '/assets/img/sprite.svg' ); ?>
	</div>

	<div id="search-popup" class="mfp-with-anim mfp-hide nav-search">
		<?php get_search_form(); ?>
	</div>

	<?php get_template_part( 'parts/header/side-menu' ); ?>

	<div id="main">

		<?php get_template_part( '/parts/header/topbar' ); ?>

		<?php if (get_theme_mod('header_sticky', 'standard') !== 'fixed') { ?>
			<div class="header sticky-header">
				<?php get_template_part( '/parts/header/header', get_theme_mod( 'header_layout', 'v1' ) ); ?>
			</div>
		<?php } ?>

		<header class="header">
			<?php get_template_part( '/parts/header/header', get_theme_mod( 'header_layout', 'v1' ) ); ?>
		</header>
