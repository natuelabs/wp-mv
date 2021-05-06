<?php
$logo_type = get_theme_mod('header_logo_type', 'image');
$logo = get_theme_mod('header_logo', get_template_directory_uri() . '/assets/img/logo-dark.png');
$logo_light = get_theme_mod('header_logo_light', get_template_directory_uri() . '/assets/img/logo-light.png');
$site_name = get_bloginfo('name');
?>

<a class="header-logo" href="https://www.mundoverde.com.br/" target="_blank">
	<?php if ($logo_type == 'image') { ?>
		<?php if ($logo) { ?>
			<img class="logo-dark" src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr($site_name); ?>" />
		<?php } ?>
		<?php if ($logo_light) { ?>
			<img class="logo-light" src="<?php echo esc_url($logo_light); ?>" alt="<?php echo esc_attr($site_name); ?>" />
		<?php } ?>
	<?php } else { ?>
		<h1><?php bloginfo('name'); ?></h1>
		<p><?php bloginfo('description'); ?></p>
	<?php } ?>
</a>