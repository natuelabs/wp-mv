<?php

if( class_exists('kirki') ) {
	// Move some default sections to `general` panel that registered by theme
	function blggn_customizer_modify( $wp_customize ) {
		$wp_customize->get_section( 'title_tagline' )->panel     = 'general_panel';
		$wp_customize->get_section( 'static_front_page' )->panel = 'general_panel';
		$wp_customize->remove_section( 'colors');
		$wp_customize->remove_section( 'background_image');
	}
	add_action( 'customize_register', 'blggn_customizer_modify' );

	// Register Kirki Theme Mods
	Kirki::add_config( 'theme_mod', array(
	  'capability'    => 'edit_theme_options',
	  'option_type'   => 'theme_mod',
	));

	/*--------------------------------------------------------------
	# General
	--------------------------------------------------------------*/

	// Panel
	Kirki::add_panel( 'general_panel', array(
	    'priority'    => 1,
	    'title'       => esc_attr__( 'General', 'blggn' ),
	    'description' => esc_attr__( 'My panel description', 'blggn' ),
	) );

	/*--------------------------------------------------------------
	## Archive Settings
	--------------------------------------------------------------*/

	// Section
	Kirki::add_section( 'archive_settings', array(
		'title'          => esc_html__( 'Archive Settings', 'blggn' ),
		'panel'          => 'general_panel',
		'priority'       => 199,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'global_cat_header_style',
		'label'       => esc_html__( 'Category Header Style', 'blggn' ),
		'section'     => 'archive_settings',
		'default'     => 'fullwidth',
		'priority'    => 1,
		'choices'     => array(
			'large' 		=> esc_html__( 'Large', 'blggn' ),
			'fullwidth' 	=> esc_html__( 'Fullwidth', 'blggn' ),
			'fullscreen' 	=> esc_html__( 'Fullscreen', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'global_cat_hide_title',
		'label'       => esc_html__( 'Hide Category Title', 'blggn' ),
		'section'     => 'archive_settings',
		'default'     => false,
		'priority'    => 1,
		'output'      => array(
			array(
				'element'       => '.category .page-header-content .page-title',
				'property'      => 'display',
				'exclude'       => array( false, 0, '0' ),
				'value_pattern' => 'none !important',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'global_cat_hide_list',
		'label'       => esc_html__( 'Hide Category List', 'blggn' ),
		'section'     => 'archive_settings',
		'default'     => false,
		'priority'    => 1,
		'output'      => array(
			array(
				'element'       => '.category .category-cat-list',
				'property'      => 'display',
				'exclude'       => array( false, 0, '0' ),
				'value_pattern' => 'none !important',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio-image',
		'settings'    => 'global_layout_archive',
		'label'       => esc_html__( 'Category Posts Layout', 'blggn' ),
		'section'     => 'archive_settings',
		'default'     => 'list',
		'priority'    => 1,
		'choices'     => array(
			'list'   		=> get_template_directory_uri() . '/assets/img/options/layout/list.png',
			'grid' 		    => get_template_directory_uri() . '/assets/img/options/layout/grid.png',
			'full'  		=> get_template_directory_uri() . '/assets/img/options/layout/full.png',
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'global_cat_pagination',
		'label'       => esc_html__( 'Category Pagination', 'blggn' ),
		'section'     => 'archive_settings',
		'default'     => 'numeric',
		'priority'    => 1,
		'choices'     => array(
			'numeric' 		=> esc_html__( 'Numeric', 'blggn' ),
			'links' 		=> esc_html__( 'Links', 'blggn' ),
			'load' 			=> esc_html__( 'Load More Button', 'blggn' ),
			'infinite' 		=> esc_html__( 'Infinite Scroll', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'archive-show-date',
		'label'       => esc_html__('Meta Date', 'blggn'),
		'description' => esc_html__( 'Display Date next to category link on archive pages.', 'blggn' ),
		'section'     => 'archive_settings',
		'default'     => true,
		'priority'    => 1,
		'output'      => array(
			array(
				'element'       => '.archive .voss-posts .post-meta li.meta-date',
				'property'      => 'display',
				'exclude'       => array( false, 0, '0' ),
				'value_pattern' => 'inline-block !important',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'archive_excerpt_length',
		'label'       => esc_html__( 'Excerpt Length', 'gutenkind' ),
		'section'  => 'archive_settings',
		'default'  => '20',
		'choices'  => array(
			'min'  => 1,
			'max'  => 200,
			'step' => 1,
		),
	) );

	/*--------------------------------------------------------------
	## Layout Settings
	--------------------------------------------------------------*/

	// Section
	Kirki::add_section( 'layouts_settings', array(
		'title'          => esc_html__( 'Layout Settings', 'blggn' ),
		'panel'          => 'general_panel',
		'priority'       => 200,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
	) );

	// Post Sidebar
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio-image',
		'settings'    => 'global_sidebar_post',
		'label'       => esc_html__( 'Post Layout', 'blggn' ),
		'description' => esc_html__( 'Default layout of single post', 'blggn' ),
		'section'     => 'layouts_settings',
		'default'     => 'right',
		'priority'    => 1,
		'choices'     => array(
			'left'   		=> get_template_directory_uri() . '/assets/img/options/sidebar/sidebar-left.png',
			'no-sidebar'    => get_template_directory_uri() . '/assets/img/options/sidebar/no-sidebar.png',
			'right'  		=> get_template_directory_uri() . '/assets/img/options/sidebar/sidebar-right.png',
		),
	));

	// Post Sidebar
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio-image',
		'settings'    => 'global_sidebar_cat',
		'label'       => esc_html__( 'Categories / Archives Layout', 'blggn' ),
		'description' => esc_html__( 'Default layout of categories and archives', 'blggn' ),
		'section'     => 'layouts_settings',
		'default'     => 'right',
		'priority'    => 1,
		'choices'     => array(
			'left'   		=> get_template_directory_uri() . '/assets/img/options/sidebar/sidebar-left.png',
			'no-sidebar'    => get_template_directory_uri() . '/assets/img/options/sidebar/no-sidebar.png',
			'right'  		=> get_template_directory_uri() . '/assets/img/options/sidebar/sidebar-right.png',
		),
	));

	// Page Sidebar
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio-image',
		'settings'    => 'global_sidebar_page',
		'label'       => esc_html__( 'Page Layout', 'blggn' ),
		'description' => esc_html__( 'Default layout of pages', 'blggn' ),
		'section'     => 'layouts_settings',
		'default'     => 'no-sidebar',
		'priority'    => 1,
		'choices'     => array(
			'left'   		=> get_template_directory_uri() . '/assets/img/options/sidebar/sidebar-left.png',
			'no-sidebar'    => get_template_directory_uri() . '/assets/img/options/sidebar/no-sidebar.png',
			'right'  		=> get_template_directory_uri() . '/assets/img/options/sidebar/sidebar-right.png',
		),
	));


	// Homepage Width
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'edit_homepage_width',
		'label'       => esc_html__( 'Edit Homepage Width', 'blggn' ),
		'section'     => 'layouts_settings',
		'default'     => false,
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'homepage_width',
		'label'       => esc_html__( 'Homepage Width', 'wundermag' ),
		'section'  => 'layouts_settings',
		'default'  => '1070',
		'priority' => 1,
		'choices'  => array(
			'min'  => 400,
			'max'  => 2048,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'  => '.home .container, .home .voss-posts',
				'property' => 'max-width',
				'units'    => 'px',
			),
		),
		'required' => array(
			array(
	            'setting'  => 'edit_homepage_width',
	            'value'    => '1',
	            'operator' => '=='
	        ),
	    ),
	) );

	// Single Width
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'edit_single_width',
		'label'       => esc_html__( 'Edit Single Post Width', 'blggn' ),
		'section'     => 'layouts_settings',
		'default'     => false,
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'single_width',
		'label'       => esc_html__( 'Single Post Width', 'wundermag' ),
		'section'  => 'layouts_settings',
		'default'  => '1070',
		'priority' => 1,
		'choices'  => array(
			'min'  => 400,
			'max'  => 2048,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'  => '.single .container, .single .content-area',
				'property' => 'max-width',
				'units'    => 'px',
			),
		),
		'required' => array(
			array(
	            'setting'  => 'edit_single_width',
	            'value'    => '1',
	            'operator' => '=='
	        ),
	    ),
	) );

	// Categories/Archives Width
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'edit_cat_width',
		'label'       => esc_html__( 'Edit Category/Archives Width', 'blggn' ),
		'section'     => 'layouts_settings',
		'default'     => false,
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'cat_width',
		'label'       => esc_html__( 'Category/Arcives Width', 'wundermag' ),
		'section'  => 'layouts_settings',
		'default'  => '1070',
		'priority' => 1,
		'choices'  => array(
			'min'  => 400,
			'max'  => 2048,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'  => '.archive .container, .category .container, .archive .voss-posts, .category .voss-posts',
				'property' => 'max-width',
				'units'    => 'px',
			),
		),
		'required' => array(
			array(
	            'setting'  => 'edit_cat_width',
	            'value'    => '1',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'thumb_grid',
		'label'       => esc_html__( 'Grid Layout Thumbnail Size', 'blggn' ),
		'section'     => 'layouts_settings',
		'tooltip' => '' . esc_html__( 'Important! Make sure to', 'blggn' ) .'<a href="https://vossen.ticksy.com/article/13638/"> ' . esc_html__( 'regenerate thumbnails', 'blggn' ) . ' </a>' . esc_html__( 'in order to have consistent thumbnails size. The size of uploaded featured images should be at least 600 pixels in width/height.', 'blggn' ) . '',
		'description' => '<a href="https://vossen.ticksy.com/article/13638/">' . esc_html__( 'Regenerate Thumbnails', 'blggn' ) . '</a>',
		'default'     => 'blggn_450x600',
		'priority'    => 1,
		'choices'     => array(
			'blggn_600x400' 		=> esc_html__( 'Landscape', 'blggn' ),
			'blggn_450x600' 		=> esc_html__( 'Portrait', 'blggn' ),
			'blggn_600x600' 		=> esc_html__( 'Square', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'thumb_list',
		'label'       => esc_html__( 'List Layout Thumbnail Size', 'blggn' ),
		'section'     => 'layouts_settings',
		'tooltip' => '' . esc_html__( 'Important! Make sure to', 'blggn' ) .'<a href="https://vossen.ticksy.com/article/13638/"> ' . esc_html__( 'regenerate thumbnails', 'blggn' ) . ' </a>' . esc_html__( 'in order to have consistent thumbnails size.', 'blggn' ) . '',
		'description' => '<a href="https://vossen.ticksy.com/article/13638/">' . esc_html__( 'Regenerate Thumbnails', 'blggn' ) . '</a>',
		'default'     => 'blggn_300x300',
		'priority'    => 1,
		'choices'     => array(
			'blggn_600x400' 		=> esc_html__( 'Landscape', 'blggn' ),
			'blggn_450x600' 		=> esc_html__( 'Portrait', 'blggn' ),
			'blggn_300x300' 		=> esc_html__( 'Square', 'blggn' ),
		),
	) );

	/*--------------------------------------------------------------
	# Header & Logo
	--------------------------------------------------------------*/

	// Panel
	Kirki::add_panel( 'header_panel', array(
	    'priority'    => 1,
	    'title'       => esc_attr__( 'Header & Logo', 'blggn' ),
	    'description' => esc_attr__( 'My panel description', 'blggn' ),
	) );

	/*--------------------------------------------------------------
	## Topbar
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'topbar_section', array(
		'title'          => esc_html__( 'Topbar', 'blggn' ),
		'priority'       => 1,
		'panel'          => 'header_panel',
	) );

	// Settings
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_topbar',
		'label'       => esc_html__( 'Show Topbar', 'blggn' ),
		'section'     => 'topbar_section',
		'default'     => false,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'topbar_layout',
		'label'       => esc_html__( 'Topbar Layout', 'blggn' ),
		'section'     => 'topbar_section',
		'default'     => '1',
		'priority'    => 1,
		'choices'     => array(
			'1'   	=> esc_html__( '1 Column', 'blggn' ),
			'2'    	=> esc_html__( '2 Columns', 'blggn' ),
			'ad'    => esc_html__( 'Ad', 'blggn' ),
		),
		'required' => array(
			array(
	            'setting'  => 'show_topbar',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'topbar_ad_type',
		'label'       => esc_html__( 'Ad Type', 'blggn' ),
		'section'     => 'topbar_section',
		'default'     => 'image',
		'choices'     => array(
			'image'     => esc_html__( 'Image', 'blggn' ),
			'code'      => esc_html__( 'Code', 'blggn' ),
		),
		'priority'    => 1,
		'required' => array(
			array(
				'setting'  => 'show_topbar',
				'value'    => true,
				'operator' => '=='
			),
			array(
				'setting'  => 'topbar_layout',
				'value'    => 'ad',
				'operator' => '=='
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'editor',
		'settings'    => 'topbar_ad_image',
		'label'       => esc_html__( 'Ad Image', 'blggn' ),
		'section'     => 'topbar_section',
		'default'     => '<a href="https://goo.gl/QMgrzW"><img src="'. get_template_directory_uri() . '/assets/img/topbar-banner.jpg"/></a>',
		'priority'    => 1,
		'required' => array(
			array(
	            'setting'  => 'show_topbar',
	            'value'    => true,
	            'operator' => '=='
	        ),
	        array(
	            'setting'  => 'topbar_layout',
	            'value'    => 'ad',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'topbar_ad_type',
	            'value'    => 'image',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'code',
		'settings'    => 'topbar_ad_code',
		'label'       => esc_html__( 'Ad Code', 'blggn' ),
		'section'     => 'topbar_section',
		'default'     => '',
		'priority'    => 1,
		'required' => array(
			array(
	            'setting'  => 'show_topbar',
	            'value'    => true,
	            'operator' => '=='
	        ),
	        array(
	            'setting'  => 'topbar_layout',
	            'value'    => 'ad',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'topbar_ad_type',
	            'value'    => 'code',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'topbar_left_type',
		'label'       => esc_html__( 'Content', 'blggn' ),
		'section'     => 'topbar_section',
		'default'     => 'content',
		'priority'    => 1,
		'choices'     => array(
			'menu'   	=> esc_html__( 'Topbar Menu', 'blggn' ),
			'social'   	=> esc_html__( 'Social Media', 'blggn' ),
			'content'   => esc_html__( 'Custom Content', 'blggn' ),
		),
		'required' => array(
			array(
	            'setting'  => 'show_topbar',
	            'value'    => true,
	            'operator' => '=='
	        ),
	        array(
	            'setting'  => 'topbar_layout',
	            'value'    => 'ad',
	            'operator' => '!=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'editor',
		'settings'    => 'topbar_left_content',
		'label'       => esc_html__( 'Custom Content', 'blggn' ),
		'section'     => 'topbar_section',
		'default'     => esc_html__('FREE SHIPPING ON ORDERS OVER $50.00', 'blggn'),
		'priority'    => 1,
		'required' => array(
			array(
	            'setting'  => 'show_topbar',
	            'value'    => true,
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'topbar_layout',
	            'value'    => 'ad',
	            'operator' => '!=='
	        ),
	        array(
	            'setting'  => 'topbar_left_type',
	            'value'    => 'content',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'topbar_right_type',
		'label'       => esc_html__( 'Right Content', 'blggn' ),
		'section'     => 'topbar_section',
		'default'     => 'menu',
		'priority'    => 1,
		'choices'     => array(
			'menu'   	=> esc_html__( 'Topbar Menu', 'blggn' ),
			'social'   	=> esc_html__( 'Social Media', 'blggn' ),
			'content'   => esc_html__( 'Custom Content', 'blggn' ),
		),
		'required' => array(
			array(
	            'setting'  => 'show_topbar',
	            'value'    => true,
	            'operator' => '=='
	        ),
	        array(
	            'setting'  => 'topbar_layout',
	            'value'    => '2',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'editor',
		'settings'    => 'topbar_right_content',
		'label'       => esc_html__( 'Custom Content', 'blggn' ),
		'section'     => 'topbar_section',
		'priority'    => 1,
		'required' => array(
			array(
	            'setting'  => 'show_topbar',
	            'value'    => true,
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'topbar_layout',
	            'value'    => '2',
	            'operator' => '=='
	        ),
	        array(
	            'setting'  => 'topbar_right_type',
	            'value'    => 'content',
	            'operator' => '=='
	        ),
	    ),
	) );

	/*--------------------------------------------------------------
	## Logo
	--------------------------------------------------------------*/

	// Section
	Kirki::add_section( 'logo_section', array(
		'title'          => esc_html__( 'Logo', 'blggn' ),
		'priority'       => 1,
		'panel'          => 'header_panel',
	) );

	// Settings
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_header_logo',
		'label'       => esc_html__( 'Show Logo', 'blggn' ),
		'section'     => 'logo_section',
		'default'     => '1',
		'priority'    => 1,
		'output'      => array(
			array(
				'element'       => '.header-logo',
				'property'      => 'display',
				'exclude'       => array( true, 1, '1' ),
				'value_pattern' => 'none !important',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'header_logo_type',
		'label'       => esc_html__( 'Logo Type', 'blggn' ),
		'section'     => 'logo_section',
		'default'     => 'image',
		'priority'    => 1,
		'choices'     => array(
			'image'     => esc_html__( 'Image', 'blggn' ),
			'text'     => esc_html__( 'Text', 'blggn' ),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_header_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
	    ),
	) );

	// Header Logo Image
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'image',
		'settings'    => 'header_logo',
		'label'       => esc_html__( 'Logo', 'blggn' ),
		'section'     => 'logo_section',
		'default'     => get_template_directory_uri() . '/assets/img/logo-dark.png',
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'show_header_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'header_logo_type',
	            'value'    => 'image',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'image',
		'settings'    => 'header_logo_light',
		'label'       => esc_html__( 'Logo Light', 'blggn' ),
		'tooltip' 	  => esc_html__( 'This logo will be used for transparent header.', 'blggn' ),
		'section'     => 'logo_section',
		'default'     => get_template_directory_uri() . '/assets/img/logo-light.png',
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'show_header_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'header_logo_type',
	            'value'    => 'image',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'header_logo_width',
		'label'       => esc_html__( 'Logo Width', 'blggn' ),
		'section'  => 'logo_section',
		'default'  => '134',
		'priority' => 1,
		'choices'  => array(
			'min'  => 40,
			'max'  => 600,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'     => '.header-logo img',
				'property'    => 'width',
				'units'       => 'px',
			),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_header_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'header_logo_type',
	            'value'    => 'image',
	            'operator' => '=='
	        ),
	    ),
	) );

	// Text logo
	Kirki::add_field( 'theme_mod', array(
		'type'     => 'toggle',
		'settings' => 'header_logo_text',
		'label'       => esc_html__( 'Show Site Title', 'blggn' ),
		'section'  => 'logo_section',
		'default'  => '1',
		'priority' => 1,
		'required' => array(
	        array(
	            'setting'  => 'show_header_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'header_logo_type',
	            'value'    => 'text',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'header_show_tagline',
		'label'       => esc_html__( 'Show Tagline', 'blggn' ),
		'description' => esc_html__( 'The "Site title" and the "Tagline" can be changed in your Dashboard > Settings > General', 'blggn' ),
		'section'     => 'logo_section',
		'default'     => '1',
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'show_header_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'header_logo_type',
	            'value'    => 'text',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'header_logo_text_size',
		'label'       => esc_html__('Logo Font Size', 'blggn'),
		'section'  => 'logo_section',
		'default'  => '',
		'priority' => 1,
		'choices'  => array(
			'min'  => 10,
			'max'  => 200,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'     => '.menu-logo h1, .header-logo h1',
				'property'    => 'font-size',
				'units'       => 'px',
			),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_header_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'header_logo_type',
	            'value'    => 'text',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'spacing',
		'settings' => 'header_logo_spacing',
		'label'       => esc_html__( 'Logo spacing', 'blggn' ),
		'section'  => 'logo_section',
		'priority' => 1,
		'default' => array(
			'top'    => '20px',
			'bottom' => '20px',
			'left'	 => '0px',
			'right'  => '0px',
		),
		'output' => array(
			array(
				'element'  => '.header .header-logo',
				'property' => 'margin',
				'media_query' => '@media (min-width: 992px)',
			),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_header_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'header_tagline_mr_top',
		'label'      	 => esc_html__( 'Tagline Space Top', 'blggn' ),
		'section'  => 'logo_section',
		'default'  => '',
		'priority' => 1,
		'choices'  => array(
			'min'  => 0,
			'max'  => 200,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'     => '.header-logo p',
				'property'    => 'margin-top',
				'units'       => 'px',
			),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_header_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'header_logo_type',
	            'value'    => 'text',
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'header_show_tagline',
	            'value'    => '1',
	            'operator' => '=='
	        ),
	    ),
	) );

	/*--------------------------------------------------------------
	## Header
	--------------------------------------------------------------*/

	// Section
	Kirki::add_section( 'header_section', array(
		'title'          => esc_html__( 'Header', 'blggn' ),
		'priority'       => 1,
		'panel'          => 'header_panel',
	) );


	// Settings
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'header_layout',
		'label'       => esc_html__( 'Header Layout', 'blggn' ),
		'section'     => 'header_section',
		'default'     => 'v1',
		'priority'    => 1,
		'choices'     => array(
			'v1'     => esc_html__( 'Header v1', 'blggn' ),
			'v2'     => esc_html__( 'Header v2', 'blggn' ),
			'v3'     => esc_html__( 'Header v3', 'blggn' ),
			'v4'     => esc_html__( 'Header v4', 'blggn' ),
			'v5'     => esc_html__( 'Header v5', 'blggn' ),
			'v6'     => esc_html__( 'Header v6', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'header_bg',
		'label'       => esc_html__( 'Header Background (Homepage)', 'blggn' ),
		'section'     => 'header_section',
		'default'     => 'light',
		'priority'    => 1,
		'choices'     => array(
			'light'   => esc_html__( 'Light', 'blggn' ),
			'transparent'    => esc_html__( 'Transparent', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'header_menu_hover',
		'label'       => esc_html__( 'Menu Hover Animation', 'blggn' ),
		'section'     => 'header_section',
		'default'     => 'fade',
		'priority'    => 1,
		'choices'     => array(
			'no-anim'     => esc_html__( 'No Animation', 'blggn' ),
			'fade'     => esc_html__( 'Fade', 'blggn' ),
			'slide'     => esc_html__( 'Slide', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'            => 'editor',
		'settings'        => 'header_banner',
		'label'           => esc_html__( 'Header Banner', 'blggn' ),
		'section'         => 'header_section',
		'default'         => '<a href="https://goo.gl/QMgrzW"><img src="'. get_template_directory_uri() . '/assets/img/banner-long.jpg"/></a>',
		'priority'    	  => 1,
		'active_callback' => array(
			array(
				'setting'  => 'header_layout',
				'operator' => 'in',
				'value'    => array( 'v4' ),
			),
		)
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'header_sticky',
		'label'       => esc_html__( 'Sticky Header', 'blggn' ),
		'section'     => 'header_section',
		'default'     => 'standard',
		'priority'    => 1,
		'choices'     => array(
			'disabled'     	=> esc_html__( 'Disable', 'blggn' ),
			'standard'     	=> esc_html__( 'Appearing', 'blggn' ),
			'smart'			=> esc_html__( 'Appearing on scroll up', 'blggn' ),
			'fixed'			=> esc_html__( 'Fixed', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_header_sticky_logo',
		'label'       => esc_html__( 'Show Sticky Header Logo', 'blggn' ),
		'section'     => 'header_section',
		'default'     => '1',
		'priority'    => 1,
		'output'      => array(
			array(
				'element'       => '.sticky-header .header-logo, .nav-sticky .header-title',
				'property'      => 'display',
				'exclude'       => array( true, 1, '1' ),
				'value_pattern' => 'none!important',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'spacing',
		'settings' => 'header_menu_spacing',
		'label'       => esc_html__( 'Menu spacing', 'blggn' ),
		'section'  => 'header_section',
		'priority' => 1,
		'default' => array(
			'top'    => '0px',
			'bottom' => '0px',
			'left'	 => '19px',
			'right'  => '19px',
		),
		'output' => array(
			array(
				'element'  => '.main-navigation li a',
				'property' => 'padding',
			),
		),
		'required' => array(
	        array(
	            'setting'  => 'header_layout',
	            'value'    => 'v3',
	            'operator' => '==',
				'media_query' => '@media (min-width: 992px)',
	        ),
	    ),
	) );

	// Section
	Kirki::add_section( 'header_icons_section', array(
		'title'          => esc_html__( 'Header Icons', 'blggn' ),
		'priority'       => 1,
		'panel'          => 'header_panel',
	) );

	// Settings
	Kirki::add_field( 'theme_mod', array(
		'type'            => 'sortable',
		'settings'        => 'header_icons_left',
		'label'           => esc_html__( 'Header Icons Left', 'blggn' ),
		'description'     => esc_html__( 'Select icons to display on the left side of the header', 'blggn' ),
		'section'         => 'header_icons_section',
		'default'         => '',
		'priority'    	  => 1,
		'choices'         => array(
			'search'    => esc_html__( 'Search', 'blggn' ),
			'login'     => esc_html__( 'Login', 'blggn' ),
			'cart'      => esc_html__( 'Cart', 'blggn' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_layout',
				'operator' => 'in',
				'value'    => array( 'v1', 'v2', 'v3', 'v4' ),
			),
		)
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'            => 'sortable',
		'settings'        => 'header_icons_right',
		'label'           => esc_html__( 'Header Icons Right', 'blggn' ),
		'description'     => esc_html__( 'Select icons to display on the right side of the header', 'blggn' ),
		'section'         => 'header_icons_section',
		'default'         => array( 'search', 'login', 'cart' ),
		'priority'    	  => 1,
		'choices'         => array(
			'search'    => esc_html__( 'Search', 'blggn' ),
			'login'     => esc_html__( 'Login', 'blggn' ),
			'cart'      => esc_html__( 'Cart', 'blggn' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_layout',
				'operator' => 'in',
				'value'    => array( 'v1', 'v2', 'v3', 'v4' ),
			),
		)
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'header_side_menu_option',
		'label'       => esc_html__( 'Side Menu Icon', 'blggn' ),
		'section'     => 'header_icons_section',
		'default'     => '0',
		'priority'    => 1,
		'choices'     => array(
			'0'       => esc_html__( 'Show on all screens', 'blggn' ),
			'mobile'  => esc_html__( 'Show on mobile only', 'blggn' ),
		),
		'output'      => array(
			array(
				'element'       => '.open-side-menu',
				'property'      => 'display',
				'exclude'       => array( false, 0, '0' ),
				'value_pattern' => 'none!important',
				'media_query' => '@media (min-width: 992px)',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_layout',
				'operator' => 'in',
				'value'    => array( 'v1', 'v2' ),
			),
		)
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'header_side_menu_option2',
		'label'       => esc_html__( 'Side Menu Icon', 'blggn' ),
		'section'     => 'header_icons_section',
		'default'     => 'mobile',
		'priority'    => 1,
		'choices'     => array(
			'0'       => esc_html__( 'Show on all screens', 'blggn' ),
			'mobile'  => esc_html__( 'Show on mobile only', 'blggn' ),
		),
		'output'      => array(
			array(
				'element'       => '.open-side-menu',
				'property'      => 'display',
				'exclude'       => array( false, 0, '0' ),
				'value_pattern' => 'none!important',
				'media_query' => '@media (min-width: 992px)',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header_layout',
				'operator' => 'in',
				'value'    => array( 'v3' ),
			),
		)
	) );

	// Section
	Kirki::add_section( 'side_menu_section', array(
		'title'          => esc_html__( 'Side Menu', 'blggn' ),
		'priority'       => 1,
		'panel'          => 'header_panel',
	) );

	// Settings
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_side_menu_logo',
		'label'       => esc_html__( 'Show logo', 'blggn' ),
		'section'     => 'side_menu_section',
		'default'     => true,
		'priority'    => 1,
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_side_menu_x',
		'label'       => esc_html__( 'Show close button (X)', 'blggn' ),
		'section'     => 'side_menu_section',
		'default'     => true,
		'priority'    => 1,
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_side_menu_newsletter',
		'label'       => esc_html__( 'Show newsletter', 'blggn' ),
		'section'     => 'side_menu_section',
		'default'     => false,
		'priority'    => 1,
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'settings'    => 'side_menu_newsletter_title',
		'label'       => esc_html__( 'Newsletter title', 'blggn' ),
		'section'     => 'side_menu_section',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
		),
		'default'	  => esc_html__( 'Subscribe to our newsletter', 'blggn' ),
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'show_side_menu_newsletter',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_side_menu_social',
		'label'       => esc_html__( 'Show social icons', 'blggn' ),
		'section'     => 'side_menu_section',
		'default'     => true,
		'priority'    => 1,
	));




	/*--------------------------------------------------------------
	# Post Settings
	--------------------------------------------------------------*/

	// Section
	Kirki::add_section( 'post_settings', array(
		'title'          => esc_html__( 'Post Settings', 'blggn' ),
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'global_post_header_style',
		'label'       => esc_html__( 'Post Header Style', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => 'standard',
		'priority'    => 1,
		'choices'     => array(
			'standard' 		=> esc_html__( 'Standard', 'blggn' ),
			'large' 		=> esc_html__( 'Large', 'blggn' ),
			'fullwidth' 	=> esc_html__( 'Fullwidth', 'blggn' ),
			'fullscreen' 	=> esc_html__( 'Fullscreen', 'blggn' ),
			'title_top' 	=> esc_html__( 'Title Top', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'post-header-show-cat',
		'label'       => esc_html__( 'Show Category Link', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
		'output'      => array(
			array(
				'element'       => '.single .page-header .post-cat, .voss-posts .post-cat',
				'property'      => 'display',
				'value_pattern' => 'none !important',
				'exclude'       => array( true, 1, '1' ),
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'post_header_align',
		'label'       => esc_html__( 'Post Header Text Position', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => 'text-center',
		'priority'    => 1,
		'choices'     => array(
			'text-left'   => esc_attr__( 'Left', 'blggn' ),
			'text-center' => esc_attr__( 'Center', 'blggn' ),
			'text-right'  => esc_attr__( 'Right', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'post-header-show-views',
		'label'       => esc_html__( 'Show Views Counter', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'post-header-show-read',
		'label'       => esc_html__( 'Show Read Counter', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'post-header-show-comments',
		'label'       => esc_html__( 'Show Comments Link', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'post-show-date',
		'label'       => esc_html__( 'Show Post Date', 'blggn' ),
		'description' => esc_html__( 'Post date below title', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => false,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'post-header-show-author',
		'label'       => esc_html__( 'Show Author', 'blggn' ),
		'description' => esc_html__( 'Author below featured image', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'post-header-show-date',
		'label'       => esc_html__( 'Show Post Date', 'blggn' ),
		'description' => esc_html__( 'Post date below featured image', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
	   'type'        => 'toggle',
	   'settings'    => 'post_share',
	   'label'       => esc_html__( 'Show Share Links', 'blggn' ),
	   'section'     => 'post_settings',
	   'default'     => true,
	   'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
	   'type'        => 'toggle',
	   'settings'    => 'show_share_twitter',
	   'label'       => esc_html__( 'Show Twitter', 'blggn' ),
	   'section'     => 'post_settings',
	   'default'     => true,
	   'priority'    => 1,
	   'required' => array(
		   array(
			   'setting'  => 'post_share',
			   'value'    => true,
			   'operator' => '=='
		   ),
	   ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Twitter Username',
		),
		'default'	  => '',
		'settings'    => 'twitter_username',
		'section'     => 'post_settings',
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
	   'type'        => 'toggle',
	   'settings'    => 'show_share_face',
	   'label'       => esc_html__( 'Show Facebook', 'blggn' ),
	   'section'     => 'post_settings',
	   'default'     => true,
	   'priority'    => 1,
	   'required' => array(
		   array(
			   'setting'  => 'post_share',
			   'value'    => true,
			   'operator' => '=='
		   ),
	   ),
	) );

	Kirki::add_field( 'theme_mod', array(
	   'type'        => 'toggle',
	   'settings'    => 'show_share_pin',
	   'label'       => esc_html__( 'Show Pinterest', 'blggn' ),
	   'section'     => 'post_settings',
	   'default'     => false,
	   'priority'    => 1,
	   'required' => array(
		   array(
			   'setting'  => 'post_share',
			   'value'    => true,
			   'operator' => '=='
		   ),
	   ),
	) );

	Kirki::add_field( 'theme_mod', array(
	   'type'        => 'toggle',
	   'settings'    => 'show_share_email',
	   'label'       => esc_html__( 'Show E-mail', 'blggn' ),
	   'section'     => 'post_settings',
	   'default'     => true,
	   'priority'    => 1,
	   'required' => array(
		   array(
			   'setting'  => 'post_share',
			   'value'    => true,
			   'operator' => '=='
		   ),
	   ),
	) );

	Kirki::add_field( 'theme_mod', array(
	   'type'        => 'toggle',
	   'settings'    => 'show_share_google',
	   'label'       => esc_html__( 'Show Google+', 'blggn' ),
	   'section'     => 'post_settings',
	   'default'     => false,
	   'priority'    => 1,
	   'required' => array(
		   array(
			   'setting'  => 'post_share',
			   'value'    => true,
			   'operator' => '=='
		   ),
	   ),
	) );

	Kirki::add_field( 'theme_mod', array(
	   'type'        => 'toggle',
	   'settings'    => 'show_pin_it',
	   'label'       => esc_html__( 'Enable "Pin It" Button', 'blggn' ),
	   'section'     => 'post_settings',
	   'default'     => true,
	   'priority'    => 1,
	) );


	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_excerpt',
		'label'       => esc_html__( 'Show Post Excerpt', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
		'output'      => array(
			array(
				'element'       => '.post-excerpt',
				'property'      => 'display',
				'value_pattern' => 'none !important',
				'exclude'       => array( true, 1, '1' ),
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'posts_excerpt_length',
		'label'       => esc_html__( 'Excerpt Length', 'gutenkind' ),
		'section'  => 'post_settings',
		'default'  => '20',
		'priority'    => 1,
		'choices'  => array(
			'min'  => 1,
			'max'  => 200,
			'step' => 1,
		),
		'required' => array(
	        array(
	            'setting'  => 'show_excerpt',
	            'value'    => '1',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_read_more',
		'label'       => esc_html__( 'Show "Read More" Link/Button', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
		'output'      => array(
			array(
				'element'       => '.post-read-more',
				'property'      => 'display',
				'value_pattern' => 'none !important',
				'exclude'       => array( true, 1, '1' ),
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'read_more_style',
		'label'       => esc_html__( 'Read More Style', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => 'post-read-more',
		'priority'    => 1,
		'choices'     => array(
			'btn' 		=> esc_html__( 'Button', 'blggn' ),
			'post-read-more' 		=> esc_html__( 'Link', 'blggn' ),
		),
		'required' => array(
			array(
			   'setting'  => 'show_read_more',
			   'value'    => true,
			   'operator' => '=='
			),
		),

	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'post_tags',
		'label'       => esc_html__( 'Show Post Tags', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'post_author',
		'label'       => esc_html__( 'Show Author Section', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => false,
		'priority'    => 1,
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'single_pagination',
		'label'       => esc_html__( 'Show Post Pagination', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'single_related',
		'label'       => esc_html__( 'Show Related Posts', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'single_comments',
		'label'       => esc_html__( 'Show Post Comments', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'single_comments_position',
		'label'       => esc_html__( 'Post Comments Position', 'blggn' ),
		'section'     => 'post_settings',
		'default'     => 'content',
		'priority'    => 1,
		'choices'     => array(
			'content'           => esc_html__( 'After Content', 'blggn' ),
			'bottom'            => esc_html__( 'Page Bottom', 'blggn' ),
		),
	) );

	/*--------------------------------------------------------------
	# Page Settings
	--------------------------------------------------------------*/

	// Section
	Kirki::add_section( 'page_settings', array(
		'title'          => esc_html__( 'Page Settings', 'blggn' ),
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'global_page_header',
		'label'       => esc_html__( 'Page Header', 'blggn' ),
		'description' => esc_html__( 'All global page header options are listed here. (there are also many options located in your page header metabox available on every edit page screen which are configured on a per-page basis).', 'blggn' ),
		'section'     => 'page_settings',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'global_page_header_style',
		'label'       => esc_html__( 'Page Header Style', 'blggn' ),
		'section'     => 'page_settings',
		'default'     => 'fullwidth',
		'priority'    => 1,
		'choices'     => array(
			'fullwidth'             => esc_html__( 'Fullwidth', 'blggn' ),
			'fullscreen'            => esc_html__( 'Fullscreen', 'blggn' ),
			'large'               => esc_html__( 'Large', 'blggn' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'global_page_header',
				'operator' => '==',
				'value'    => '1',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'global_page_header_title',
		'label'       => esc_html__( 'Page Title', 'blggn' ),
		'section'     => 'page_settings',
		'default'     => true,
		'priority'    => 1,
		'active_callback' => array(
			array(
				'setting'  => 'global_page_header',
				'operator' => '==',
				'value'    => '1',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings'    => 'global_page_header_padding_top',
		'label'       => esc_html__( 'Padding Top', 'blggn' ),
		'section'     => 'page_settings',
		'default'  => 120,
		'priority' => 1,
		'choices'  => array(
			'min'  => 0,
			'max'  => 500,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'  => '.page-header-style-wrapped-small .page-header, .page-header-style-wrapped .page-header, .page-header-style-fullwidth .page-header',
				'property' => 'padding-top',
				'units'    => 'px',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'global_page_header',
				'operator' => '==',
				'value'    => '1',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings'    => 'global_page_header_padding_bottom',
		'label'       => esc_html__( 'Padding Bottom', 'blggn' ),
		'section'     => 'page_settings',
		'default'  => 120,
		'priority' => 1,
		'choices'  => array(
			'min'  => 0,
			'max'  => 500,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'  => '.page-header-style-wrapped-small .page-header, .page-header-style-wrapped .page-header, .page-header-style-fullwidth .page-header',
				'property' => 'padding-bottom',
				'units'    => 'px',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'global_page_header',
				'operator' => '==',
				'value'    => '1',
			),
		),
	) );

	/*--------------------------------------------------------------
	# Social Media Settings
	--------------------------------------------------------------*/

	// Section
	Kirki::add_section( 'social_media_settings', array(
		'title'          => esc_html__( 'Social Media Settings', 'blggn' ),
		'panel'          => '', // Not typically needed.
		'description'    => 'Enter your social media links. Icons will be hidden if fields are left blank.',
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Twitter',
		),
		'default'	  => esc_url( 'https://twitter.com' ),
		'settings'    => 'social_twitter',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Facebook',
		),
		'default'	  => esc_url( 'https://facebook.com' ),
		'settings'    => 'social_facebook',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Instagram',
		),
		'default'	  => esc_url( 'https://instagram.com' ),
		'settings'    => 'social_instagram',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Pinterest',
		),
		'default'	  => esc_url( 'https://pinterest.com' ),
		'settings'    => 'social_pinterest',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Youtube',
		),
		'default'	  => esc_url( 'https://youtube.com' ),
		'settings'    => 'social_youtube',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Vimeo',
		),
		'settings'    => 'social_vimeo',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Tumblr',
		),
		'settings'    => 'social_tumblr',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Bloglovin',
		),
		'settings'    => 'social_bloglovin',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Linkedin',
		),
		'settings'    => 'social_linkedin',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Snapchat',
		),
		'settings'    => 'social_snapchat',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Google+',
		),
		'settings'    => 'social_googleplus',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'vk',
		),
		'settings'    => 'social_vk',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
			'placeholder' => 'Email',
		),
		'settings'    => 'social_email',
		'section'     => 'social_media_settings',
		'priority'    => 1,
	) );


	/*--------------------------------------------------------------
	# Typography Settings
	--------------------------------------------------------------*/

	// Panel
	Kirki::add_panel( 'typo_settings', array(
		'priority'    => 2,
		'title'       => esc_html__( 'Typography Settings', 'blggn' ),
	));

	// Section
	Kirki::add_section( 'typo_general', array(
		'priority'    => 1,
		'title'       => esc_html__( 'General', 'blggn' ),
		'panel'       => 'typo_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_body',
		'label'       => esc_html__( 'Body Font', 'blggn' ),
		'section'     => 'typo_general',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '400',
			'font-size'      => '17px',
			'line-height'    => '27px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'body',
			),
		),
	));

	/*--------------------------------------------------------------
	## Headings
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'typo_headings', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Headings', 'blggn' ),
		'panel'       => 'typo_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_h1',
		'label'       => esc_html__( 'Heading 1', 'blggn' ),
		'section'     => 'typo_headings',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '500',
			'font-size'      => '50px',
			'line-height'    => '1.2',
			'letter-spacing' => '-1.6px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'h1',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_h2',
		'label'       => esc_html__( 'Heading 2', 'blggn' ),
		'section'     => 'typo_headings',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '500',
			'font-size'      => '34px',
			'line-height'    => '1.2',
			'letter-spacing' => '-1.2px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'h2',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_h3',
		'label'       => esc_html__( 'Heading 3', 'blggn' ),
		'section'     => 'typo_headings',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '500',
			'font-size'      => '26px',
			'line-height'    => '30px',
			'letter-spacing' => '-.2px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'h3',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_h4',
		'label'       => esc_html__( 'Heading 4', 'blggn' ),
		'section'     => 'typo_headings',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '500',
			'font-size'      => '19px',
			'line-height'    => '20px',
			'letter-spacing' => '-0.2px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'h4',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_h5',
		'label'       => esc_html__( 'Heading 5', 'blggn' ),
		'section'     => 'typo_headings',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '500',
			'font-size'      => '17px',
			'line-height'    => '1.2',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'h5',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_h6',
		'label'       => esc_html__( 'Heading 6', 'blggn' ),
		'section'     => 'typo_headings',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'font-size'      => '32px',
			'line-height'    => '1.2',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'h6',
			),
		),
	));

	/*--------------------------------------------------------------
	## Header
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'typo_header', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Header', 'blggn' ),
		'panel'       => 'typo_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_menu',
		'label'       => esc_html__( 'Menu', 'blggn' ),
		'section'     => 'typo_header',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '700',
			'font-size'      => '12.6px',
			'line-height'    => '94px',
			'letter-spacing' => '1px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.main-navigation li,.main-navigation li a',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_submenu',
		'label'       => esc_html__( 'Sub-Menu', 'blggn' ),
		'section'     => 'typo_header',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '700',
			'font-size'      => '11.6px',
			'line-height'    => '2.1',
			'letter-spacing' => '1px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.main-navigation li ul li a',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_side_menu',
		'label'       => esc_html__( 'Side Menu', 'blggn' ),
		'section'     => 'typo_header',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '700',
			'font-size'      => '12.6px',
			'line-height'    => '22px',
			'letter-spacing' => '1px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.side-menu-nav ul.nav-menu > li, .widget_nav_menu ul.menu > li, .side-menu-nav ul.nav-menu > li a, .widget_nav_menu ul.menu > li a',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_side_submenu',
		'label'       => esc_html__( 'Side Sub-Menu', 'blggn' ),
		'section'     => 'typo_header',
		'default'     => array(
			'font-family'    => '',
			'variant'        => '700',
			'font-size'      => '12.4px',
			'line-height'    => '22px',
			'letter-spacing' => '1px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.side-menu-nav li .sub-menu li a, .widget_nav_menu li .sub-menu li a',
			),
		),
	));

	/*--------------------------------------------------------------
	## Buttons
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'typo_buttons', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Buttons & Links', 'blggn' ),
		'panel'       => 'typo_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'button_style',
		'label'       => esc_html__( 'Button Style:', 'blggn' ),
		'section'     => 'typo_buttons',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => '1',
		'priority'    => 1,
		'choices'     => array(
			'1'     => esc_html__( 'Square', 'blggn' ),
			'2'     => esc_html__( 'Round', 'blggn' ),
		),
		'output'      => array(
			array(
				'element'       => '.btn, input.btn, input[type="submit"], .woocommerce button.button, .woocommerce button.button.alt,button,.wpcf7-submit',
				'property'      => 'border-radius',
				'exclude'       => array( 1, '1' ),
				'value_pattern' => '100px !important',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_button',
		'label'       => esc_html__( 'Button', 'blggn' ),
		'section'     => 'typo_buttons',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '13px',
			'line-height'    => '14px',
			'letter-spacing' => '3px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.btn, input.btn, input[type="submit"], .woocommerce button.button, .woocommerce button.button.alt,button,.wpcf7-submit',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_links_read',
		'label'       => esc_html__( 'Continue Reading Link', 'blggn' ),
		'section'     => 'typo_buttons',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '12.4px',
			'line-height'    => '16px',
			'letter-spacing' => '2px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.post-read-more',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_links_pagination_num',
		'label'       => esc_html__( 'Pagination Numbers', 'blggn' ),
		'section'     => 'typo_buttons',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '700',
			'font-size'      => '14px',
			'line-height'    => '16px',
			'letter-spacing' => '0px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.pagination .nav-links > span, .pagination .nav-links > a',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_links_pagination',
		'label'       => esc_html__( 'Pagination Links', 'blggn' ),
		'section'     => 'typo_buttons',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '700',
			'font-size'      => '13.1px',
			'line-height'    => '16px',
			'letter-spacing' => '1.4px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.pagination .nav-links > a.next, .pagination .nav-links > a.prev',
			),
		),
	));

	/*--------------------------------------------------------------
	## Posts
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'typo_posts', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Posts', 'blggn' ),
		'panel'       => 'typo_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_post_cat',
		'label'       => esc_html__( 'Category Link', 'blggn' ),
		'section'     => 'typo_posts',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'		=> '',
			'variant'			=> '400',
			'font-size'      	=> '12.1px',
			'letter-spacing'    => '1.6px',
			'text-transform'	=> 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.post-cat a',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_post_title_full',
		'label'       => esc_html__( 'Post Title / Full Layout', 'blggn' ),
		'section'     => 'typo_posts',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-size'      	=> '36px',
			'letter-spacing'    => '0px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.voss-posts .full-post .post-title',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_post_title_list',
		'label'       => esc_html__( 'Post Title / List Layout', 'blggn' ),
		'section'     => 'typo_posts',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-size'      	=> '32px',
			'letter-spacing'    => '0px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.voss-posts .list-post .post-title',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_post_title_grid',
		'label'       => esc_html__( 'Post Title / Grid Layout', 'blggn' ),
		'section'     => 'typo_posts',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-size'      	=> '24px',
			'letter-spacing'    => '0px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.voss-posts .grid-post .post-title',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_posts_meta',
		'label'       => esc_html__( 'Post Meta', 'blggn' ),
		'section'     => 'typo_posts',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '400',
			'font-size'      => '11.4px',
			'line-height'    => '1.6',
			'letter-spacing' => '1.4px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'ul.post-meta li, .social-share span',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_paragraph',
		'label'       => esc_html__( 'Paragraphs', 'blggn' ),
		'section'     => 'typo_posts',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'subsets'        => array( 'latin-ext' ),
			'font-size'      => '17px',
			'line-height'    => '27px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'p',
				'media_query' => '@media (min-width: 1024px)',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_excerpt',
		'label'       => esc_html__( 'Excerpt', 'blggn' ),
		'section'     => 'typo_posts',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'subsets'        => array( 'latin-ext' ),
			'font-size'      => '15px',
			'line-height'    => '27px',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.post-content .post-excerpt',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_posts_quote',
		'label'       => esc_html__( 'Quotes', 'blggn' ),
		'section'     => 'typo_posts',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '500',
			'font-size'      => '31px',
			'line-height'    => '1.3',
			'letter-spacing' => '-.2px',
			'text-transform' => 'initial',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'blockquote p',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_posts_tags',
		'label'       => esc_html__( 'Tags', 'blggn' ),
		'section'     => 'typo_posts',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '400',
			'font-size'      => '10px',
			'line-height'    => '1',
			'letter-spacing' => '1.4px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.post-entry-content .post-tags a',
			),
		),
	));

	/*--------------------------------------------------------------
	## Widgets
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'typo_widgets', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Widgets', 'blggn' ),
		'panel'       => 'typo_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_widget_title',
		'label'       => esc_html__( 'Widget Title', 'blggn' ),
		'section'     => 'typo_widgets',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '500',
			'font-size'      => '15.4px',
			'line-height'    => '1',
			'letter-spacing' => '2px',
			'text-transform' => 'uppercase',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.widget-title',
			),
		),
	));

	/*--------------------------------------------------------------
	## Footer
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'typo_footer', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Footer', 'blggn' ),
		'panel'       => 'typo_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_footer_info',
		'label'       => esc_html__( 'Footer Info', 'blggn' ),
		'section'     => 'typo_footer',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '400',
			'font-size'      => '14px',
			'line-height'    => '27px',
			'letter-spacing' => '0',
			'text-transform' => 'none',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.footer-disclaimer p',
			),
		),
	));

	/*--------------------------------------------------------------
	## Misc
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'typo_misc', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Misc', 'blggn' ),
		'panel'       => 'typo_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_miscs',
		'label'       => esc_html__( 'Miscellaneous', 'blggn' ),
		'section'     => 'typo_misc',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => '.vs-sekundar,
								.voss-link,
								.upper,
								#wp-calendar *:not(caption),
								.post-meta li,
								.archive .page-header .page-title,
								.category .page-header .page-title,
								.tagcloud a,
								.form-submit input,
								.comment-body .reply,
								.comment-metadata a,',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'typography',
		'settings'    => 'typo_input',
		'label'       => esc_html__( 'Form Inputs', 'blggn' ),
		'section'     => 'typo_misc',
		'transport' => 'auto',
		'choices' => blggn_add_custom_choice(),
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'input, textarea',
			),
		),
	));

	/*--------------------------------------------------------------
	## Typekit
	--------------------------------------------------------------*/

	Kirki::add_section( 'section_typekit', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Typekit', 'blggn' ),
		'panel'       => 'typo_settings',
	));

	$priority = 0;
	Kirki::add_field( 'theme_mod', array(
	    'type' 			=> 'toggle',
	    'settings' 		=> 'enable_typekit',
	    'section' 		=> 'section_typekit',
	    'label' 		=> esc_html__( 'Enable Typekit', 'blggn' ),
	    'priority' 		=> $priority++,
	    'transport' 	=> 'auto',
	    'default'     	=> false,
	    'default' 		=> '0',
	) );

	Kirki::add_field( 'theme_mod', array(
	    'type' 			=> 'text',
	    'settings' 		=> 'typekit_id',
	    'section' 		=> 'section_typekit',
	    'label'		 	=> esc_html__( 'Typekit ID', 'blggn' ),
	    'description' 	=> esc_html__( 'Paste the provided Typekit Kit ID. Usually 6-7 random letters', 'blggn' ),
	    'tooltip' 		=> '<a target="_blank" href="'.esc_url( 'https://helpx.adobe.com/typekit/using/add-fonts-website.html' ).'">'.esc_html__( 'Read More', 'blggn' ).'</a>',
	    'priority' 		=> $priority++,
	    'transport' 	=> 'auto',
	    'default' 		=> '',
	    'active_callback' => array(
	        array(
	            'setting' 	=> 'enable_typekit',
	            'operator' 	=> '==',
	            'value' 	=> true,
	        )
	    ),
	) );
	Kirki::add_field( 'blggn_customize', array(
	    'type' => 'repeater',
	    'settings' => 'typekit_fonts',
	    'section' => 'section_typekit',
	    'label' => esc_html__( 'Typekit Fonts', 'blggn' ) ,
	    'description' => esc_html__( 'Enter your Typekit Font Name. For example: futura-pt, aktiv-grotesk.', 'blggn' ),
	    'priority' => $priority++,
	    'transport' => 'auto',
	    'row_label' => array(
	        'type' => 'text',
	        'value' => esc_html__( 'Typekit Font', 'blggn' ) ,
	    ),
	    'fields' => array(
	        'font_id' => array(
	            'type' => 'text',
	            'label' => esc_html__( 'ID', 'blggn' ) ,
	        ) ,
	        'font_text' => array(
	            'type' => 'text',
	            'label' => esc_html__( 'Text', 'blggn' ) ,
	        ) ,
	        'font_variants' => array(
	            'type' => 'select',
	            'label' => esc_html__( 'Variants', 'blggn' ) ,
	            'multiple' => 18,
	            'choices' => array(
	                '100' 		=> esc_html__( '100', 'blggn' ) ,
	                '100italic' => esc_html__( '100italic', 'blggn' ) ,
	                '200' 		=> esc_html__( '200', 'blggn' ) ,
	                '200italic' => esc_html__( '200italic', 'blggn' ) ,
	                '300' 		=> esc_html__( '300', 'blggn' ) ,
	                '300italic' => esc_html__( '300italic', 'blggn' ) ,
	                'regular' 	=> esc_html__( 'regular', 'blggn' ) ,
	                'italic' 	=> esc_html__( 'italic', 'blggn' ) ,
	                '500' 		=> esc_html__( '500', 'blggn' ) ,
	                '500italic' => esc_html__( '500italic', 'blggn' ) ,
	                '600' 		=> esc_html__( '600', 'blggn' ) ,
	                '600italic' => esc_html__( '600italic', 'blggn' ) ,
	                '700' 		=> esc_html__( '700', 'blggn' ) ,
	                '700italic' => esc_html__( '700italic', 'blggn' ) ,
	                '800' 		=> esc_html__( '800', 'blggn' ) ,
	                '800italic' => esc_html__( '800italic', 'blggn' ) ,
	                '900' 		=> esc_html__( '900', 'blggn' ) ,
	                '900italic' => esc_html__( '900italic', 'blggn' ) ,
	            )
	        ),
	    ),
	    'default' => '',
	    'active_callback' => array(
	        array(
	            'setting' => 'enable_typekit',
	            'operator' => '==',
	            'value' => true
	        )
	    )
	) );

	/*--------------------------------------------------------------
	# Color Settings
	--------------------------------------------------------------*/
	// Panel
	Kirki::add_panel( 'color_settings', array(
		'priority'    => 2,
		'title'       => esc_html__( 'Color Settings', 'blggn' ),
	));

	// Section
	Kirki::add_section( 'color_general', array(
		'priority'    => 1,
		'title'       => esc_html__( 'General', 'blggn' ),
		'panel'       => 'color_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_general_body',
		'label'       => esc_html__( 'Body Background', 'blggn' ),
		'section'     => 'color_general',
		'default'     => '#fff',
		'priority'    => 1,
		'output' => array(
			array(
				'element'  => 'body, .voss-posts .post-meta li.hide-last-after',
				'property' => 'background-color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_general_links',
		'label'       => esc_html__( 'Links Color', 'blggn' ),
		'description' => esc_html__( 'Customize the link, hover & visited color', 'blggn' ),
		'section'     => 'color_general',
		'priority'    => 1,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#888',
			'hover'     => '#000',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => 'a',
				'property'  => 'color',
			),
			array(
				'choice'    => 'hover',
				'element'   => 'a:hover',
				'property'  => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_general_button',
		'label'       => esc_html__( 'Buttons Color', 'blggn' ),
		'section'     => 'color_general',
		'priority'    => 1,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#000',
			'hover'     => '#3a3c3c',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => '.btn, button, .button, .btn[type="submit"], input.btn, input[type="submit"], .woocommerce button.button, .woocommerce button.button.alt,button,.wpcf7-submit',
				'property'  => 'background',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.btn:hover, button:hover, .button:hover, .btn[type="submit"]:hover, input.btn:hover, input[type="submit"]:hover, .woocommerce button.button:hover, .woocommerce button.button.alt:hover, button:hover,.wpcf7-submit:hover',
				'property'  => 'background',
			),
		),
	));

	/*--------------------------------------------------------------
	## Color Headings
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'color_headings', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Headings', 'blggn' ),
		'panel'       => 'color_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_h',
		'label'       => esc_html__( 'Headings Color', 'blggn' ),
		'section'     => 'color_headings',
		'default'     => '#000',
		'priority'    => 1,
		'output' => array(
			array(
				'element'  => 'h1,h2,h3,h4,h5,h6',
				'property' => 'color',
			),
		),
	));

	/*--------------------------------------------------------------
	## Color Header
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'color_header', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Header', 'blggn' ),
		'panel'       => 'color_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_topbar_bg',
		'label'       => esc_html__( 'Topbar Background Color', 'blggn' ),
		'section'     => 'color_header',
		'default'     => '#f1f2f4',
		'priority'    => 1,
		'output' => array(
			array(
				'element'  => '.topbar',
				'property' => 'background-color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_topbar',
		'label'       => esc_html__( 'Topbar Text Color', 'blggn' ),
		'section'     => 'color_header',
		'default'     => '#888',
		'priority'    => 1,
		'output' => array(
			array(
				'element'  => '.topbar',
				'property' => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_header_bg',
		'label'       => esc_html__( 'Background Color', 'blggn' ),
		'section'     => 'color_header',
		'default'     => '#fff',
		'priority'    => 1,
		'output' => array(
			array(
				'element'  => '.header, .main-navigation li ul',
				'property' => 'background-color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_header_menu',
		'label'       => esc_html__( 'Menu Color', 'blggn' ),
		'section'     => 'color_header',
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#000',
			'hover'     => '#444',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => '.main-navigation li a',
				'property'  => 'color',
			),
			array(
				'choice'    => 'default',
				'element'   => '.header svg',
				'property'  => 'fill',
			),
			array(
				'choice'    => 'default',
				'element'   => '.header svg',
				'property'  => 'stroke',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.main-navigation li a:hover, .main-navigation li ul li a:hover',
				'property'  => 'color',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.header svg:hover',
				'property'  => 'fill',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.header svg:hover',
				'property'  => 'stroke',
			),
		),
	));


	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_menu_arrow',
		'label'       => esc_html__( 'Menu Arrow Color', 'blggn' ),
		'section'     => 'color_header',
		'default'     => '#a9a9a9',
		'priority'    => 1,
		'output' => array(
			array(
				'element'  => '.header .menu-item-has-children > a > svg',
				'property' => 'fill',
			),
		),
	));

	/*--------------------------------------------------------------
	## Color Posts
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'color_posts', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Posts', 'blggn' ),
		'panel'       => 'color_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_posts_cat',
		'label'       => esc_html__( 'Category Link', 'blggn' ),
		'section'     => 'color_posts',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#888',
			'hover'     => '#000',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => '.voss-posts .post-cat, .voss-posts .post-cat a, .single.page-header-style-standard .page-header .post-cat a',
				'property'  => 'color',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.voss-posts .post-cat:hover, .voss-posts .post-cat a:hover, .single.page-header-style-standard .page-header .post-cat a:hover',
				'property'  => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_posts_title',
		'label'       => esc_html__( 'Post Title', 'blggn' ),
		'section'     => 'color_posts',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#000',
			'hover'     => '#888',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => '.voss-posts .post-title, .voss-posts .post-title a, .single.page-header-style-standard .page-header .post-title',
				'property'  => 'color',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.voss-posts .post-title:hover, .voss-posts .post-title a:hover',
				'property'  => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_posts_meta',
		'label'       => esc_html__( 'Post Meta', 'blggn' ),
		'section'     => 'color_posts',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#888',
			'hover'     => '#000',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => 'ul.post-meta li, ul.post-meta li a',
				'property'  => 'color',
			),
			array(
				'choice'    => 'hover',
				'element'   => 'ul.post-meta li a:hover',
				'property'  => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_posts_excerpt',
		'label'       => esc_html__( 'Excerpt', 'blggn' ),
		'section'     => 'color_posts',
		'default'     => '#888',
		'output' => array(
			array(
				'element'  => '.post-excerpt, .voss-posts p',
				'property' => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_posts_p',
		'label'       => esc_html__( 'Paragraphs', 'blggn' ),
		'section'     => 'color_posts',
		'default'     => '#6e6e6e',
		'output' => array(
			array(
				'element'  => '.single .post-entry-content p',
				'property' => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_posts_quotes',
		'label'       => esc_html__( 'Quotes', 'blggn' ),
		'section'     => 'color_posts',
		'default'     => '#000 !important',
		'output' => array(
			array(
				'element'  => 'blockquote, blockquote p',
				'property' => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_posts_links',
		'label'       => esc_html__( 'Post Links', 'blggn' ),
		'section'     => 'color_posts',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#000',
			'hover'     => '#888',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => '.single .post-entry-content a',
				'property'  => 'color',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.single .post-entry-content a:hover',
				'property'  => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_posts_read_more',
		'label'       => esc_html__( 'Continue Reading Link', 'blggn' ),
		'section'     => 'color_posts',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#000',
			'hover'     => '#888',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => '.voss-posts .post-read-more',
				'property'  => 'color',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.voss-posts .post-read-more:hover',
				'property'  => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_posts_pagination',
		'label'       => esc_html__( 'Pagination', 'blggn' ),
		'section'     => 'color_posts',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#000',
			'hover'     => '#888',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => '.older-post-link h4, .newer-post-link h4, .pagination .nav-links > a',
				'property'  => 'color',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.older-post-link h4:hover, .newer-post-link h4:hover, .pagination .nav-links > a:hover',
				'property'  => 'color',
			),
		),
	));

	/*--------------------------------------------------------------
	## Color Sidebar
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'color_sidebar', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Widgets', 'blggn' ),
		'panel'       => 'color_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_sidebar_title',
		'label'       => esc_html__( 'Widget Title', 'blggn' ),
		'section'     => 'color_sidebar',
		'default'     => '#000',
		'output' => array(
			array(
				'element'  => '.widget-title',
				'property' => 'color',
			),
		),
	));

	/*--------------------------------------------------------------
	## Color Sliders
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'color_sliders', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Sliders', 'blggn' ),
		'panel'       => 'color_settings',
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_sliders_btn',
		'label'       => esc_html__( 'Button "View Post"', 'blggn' ),
		'section'     => 'color_sliders',
		'default'     => '#eb355c',
		'output' => array(
			array(
				'element'  => '.voss-slider .btn',
				'property' => 'background-color',
			),
		),
	));

	/*--------------------------------------------------------------
	## Color Footer
	--------------------------------------------------------------*/
	// Section
	Kirki::add_section( 'color_footer', array(
		'priority'    => 1,
		'title'       => esc_html__( 'Footer', 'blggn' ),
		'panel'       => 'color_settings',
	));

	// Field
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_footer_bg',
		'label'       => esc_html__( 'Background Color', 'blggn' ),
		'section'     => 'color_footer',
		'default'     => '#fff',
		'output' => array(
			array(
				'element'  => '.voss-footer .footer',
				'property' => 'background-color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_footer_links',
		'label'       => esc_html__( 'Social Icons', 'blggn' ),
		'section'     => 'color_footer',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#000',
			'hover'     => '#444',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => '.footer-social a, .footer-v1 .footer-social a',
				'property'  => 'color',
			),
			array(
				'choice'    => 'hover',
				'element'   => '.footer-social a:hover, .footer-v1 .footer-social a:hover',
				'property'  => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_footer_text_color',
		'label'       => esc_html__( 'Text', 'blggn' ),
		'section'     => 'color_footer',
		'default'     => '#888',
		'output' => array(
			array(
				'element'  => '.footer-disclaimer,.footer-disclaimer p, .footer-disclaimer a',
				'property' => 'color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'multicolor',
		'settings'    => 'color_footer_to_top_bg',
		'label'       => esc_html__( '"To Top" Button', 'blggn' ),
		'section'     => 'color_footer',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_html__( 'Default', 'blggn' ),
			'hover'     => esc_html__( 'Hover', 'blggn' ),
		),
		'default'     => array(
			'default'   => '#000',
			'hover'     => '#444',
			'icon'      => '#fff',
		),
		'output'    => array(
			array(
				'choice'    => 'default',
				'element'   => 'footer.voss-footer .scroll-top',
				'property'  => 'background-color',
			),
			array(
				'choice'    => 'hover',
				'element'   => 'footer.voss-footer .scroll-top:hover',
				'property'  => 'background-color',
			),
		),
	));

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'color',
		'settings'    => 'color_footer_to_top_arrow',
		'label'       => esc_html__( '"To Top" Arrow', 'blggn' ),
		'section'     => 'color_footer',
		'default'     => '#fff',
		'output' => array(
			array(
				'element'  => 'footer.voss-footer .scroll-top svg',
				'property' => 'fill',
			),
		),
	));


	/*--------------------------------------------------------------
	# Footer Settings
	--------------------------------------------------------------*/

	// Panel
	Kirki::add_panel( 'footer_panel', array(
	    'priority'    => 2,
	    'title'       => esc_attr__( 'Footer Settings', 'blggn' ),
	) );

	// Section
	Kirki::add_section( 'footer_instagram', array(
		'title'          => esc_html__( 'Instagram', 'blggn' ),
		'panel'          => 'footer_panel',
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
	) );

	// Settings
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'footer_instagram',
		'label'       => esc_html__( 'Show Instagram', 'blggn' ),
		'section'     => 'footer_instagram',
		'default'     => true,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'text',
		'settings'    => 'footer_instagram_user',
		'label'       => esc_html__( 'Instagram Username', 'blggn' ),
		'section'     => 'footer_instagram',
		'default'     => esc_html__( 'mija_mija', 'blggn' ),
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'footer_instagram',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'footer_instagram_likes',
		'label'       => esc_html__( 'Show Likes Count', 'blggn' ),
		'section'     => 'footer_instagram',
		'default'     => true,
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'footer_instagram',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'footer_instagram_comments',
		'label'       => esc_html__( 'Show Comments Count', 'blggn' ),
		'section'     => 'footer_instagram',
		'default'     => true,
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'footer_instagram',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'footer_instagram_description',
		'label'       => esc_html__( 'Show Description', 'blggn' ),
		'section'     => 'footer_instagram',
		'default'     => false,
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'footer_instagram',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'footer_instagram_number',
		'label'       => esc_html__( 'Number of Photos: ', 'blggn' ),
		'section'  => 'footer_instagram',
		'default'  => 6,
		'priority' => 1,
		'choices'  => array(
			'min'  => 5,
			'max'  => 9,
			'step' => 1,
		),
		'required' => array(
	        array(
	            'setting'  => 'footer_instagram',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );

	// Section
	Kirki::add_section( 'footer_layout', array(
		'title'          => esc_html__( 'Layout', 'blggn' ),
		'panel'          => 'footer_panel',
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
	) );

	// Settings
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'select',
		'settings'    => 'footer_layout',
		'label'       => esc_html__( 'Footer layout', 'blggn' ),
		'section'     => 'footer_layout',
		'default'     => 'v1',
		'priority'    => 1,
		'choices'     => array(
			'v1'     => esc_html__( 'Footer v1', 'blggn' ),
			'v2'     => esc_html__( 'Footer v2', 'blggn' ),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'footer_social',
		'label'       => esc_html__( 'Show social media icons', 'blggn' ),
		'description' => esc_html__( 'To set social media icons, go to Social Media Settings section.', 'blggn' ),
		'section'     => 'footer_layout',
		'default'     => false,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'footer_menu',
		'label'       => esc_html__( 'Show footer menu', 'blggn' ),
		'section'     => 'footer_layout',
		'default'     => false,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'editor',
		'media_buttons' => false,
		'settings'    => 'footer_disclaimer',
		'label'       => esc_html__( 'Footer copyright', 'blggn' ),
		'section'     => 'footer_layout',
		'sanitize_callback' => 'wp_kses_post',
		'default'	  => '&copy;'. date(' Y ') .'<a href="'. get_home_url('/') .'">'. get_bloginfo( 'name' ) .'</a>'. esc_html__( ' - All Rights Reserved.', 'blggn' ) .'',
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'footer_to_top',
		'label'       => esc_html__( 'Show "back to top" button', 'blggn' ),
		'section'     => 'footer_layout',
		'default'     => true,
		'priority'    => 1,
	) );

	// Section
	Kirki::add_section( 'footer_logo', array(
		'title'          => esc_html__( 'Logo', 'blggn' ),
		'panel'          => 'footer_panel',
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
	) );

	// Settings
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'show_footer_logo',
		'label'       => esc_html__( 'Show footer logo', 'blggn' ),
		'section'     => 'footer_logo',
		'default'     => true,
		'priority'    => 1,
		'output'      => array(
			array(
				'element'       => '.footer-logo',
				'property'      => 'display',
				'exclude'       => array( true, 1, '1' ),
				'value_pattern' => 'none',
			),
		),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'footer_logo_type',
		'label'       => esc_html__( 'Logo type', 'blggn' ),
		'section'     => 'footer_logo',
		'default'     => 'image',
		'priority'    => 1,
		'choices'     => array(
			'image'     => esc_html__( 'Image', 'blggn' ),
			'text'     => esc_html__( 'Text', 'blggn' ),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_footer_logo',
	            'value'    => '1',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'image',
		'settings'    => 'footer_logo',
		'label'       => esc_html__( 'Logo image', 'blggn' ),
		'section'     => 'footer_logo',
		'default'     => get_template_directory_uri() . '/assets/img/logo-dark.png',
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'show_footer_logo',
	            'value'    => true,
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'footer_logo_type',
	            'value'    => 'image',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'footer_logo_img_size',
		'label'       => esc_html__( 'Logo max width', 'blggn' ),
		'section'  => 'footer_logo',
		'default'  => 134,
		'priority' => 1,
		'choices'  => array(
			'min'  => 40,
			'max'  => 1140,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'  => '.footer-logo-img',
				'property' => 'max-width',
				'units'    => 'px',
			),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_footer_logo',
	            'value'    => true,
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'footer_logo_type',
	            'value'    => 'image',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'toggle',
		'settings' => 'footer_show_title',
		'label'       => esc_html__( 'Show Site Title', 'blggn' ),
		'section'  => 'footer_logo',
		'default'  => '1',
		'priority' => 1,
		'output' => array(
			array(
				'element'     => '.footer-logo h2',
				'property'    => 'display',
				'units'       => 'none',
				'exclude'     => array( true, 1, '1' ),
			),
		),
		'required' => array(
			array(
	            'setting'  => 'show_footer_logo',
	            'value'    => true,
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'footer_logo_type',
	            'value'    => 'text',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'footer_show_tagline',
		'label'       => esc_html__( 'Show Tagline', 'blggn' ),
		'description' => esc_html__( 'The "Site title" and the "Tagline" can be changed in your Dashboard > Settings > General', 'blggn' ),
		'section'     => 'footer_logo',
		'default'     => '1',
		'priority'    => 1,
		'output' => array(
			array(
				'element'     => '.footer-logo p',
				'property'    => 'display',
				'units'       => 'none',
				'exclude'     => array( true, 1, '1' ),
			),
		),
		'required' => array(
			array(
	            'setting'  => 'show_footer_logo',
	            'value'    => true,
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'footer_logo_type',
	            'value'    => 'text',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'slider',
		'settings' => 'footer_logo_text_size',
		'label'       => esc_html__( 'Logo font size', 'blggn' ),
		'section'  => 'footer_logo',
		'default'  => '40',
		'priority' => 1,
		'choices'  => array(
			'min'  => 10,
			'max'  => 400,
			'step' => 1,
		),
		'output' => array(
			array(
				'element'     => '.footer-logo h2',
				'property'    => 'font-size',
				'units'       => 'px',
			),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_footer_logo',
	            'value'    => true,
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'footer_logo_type',
	            'value'    => 'text',
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'spacing',
		'settings' => 'footer_logo_spacing',
		'label'       => esc_html__( 'Logo spacing', 'blggn' ),
		'section'  => 'footer_logo',
		'priority' => 1,
		'default' => array(
			'top'    => '0px',
			'bottom' => '10px',
			'left'	 => '0px',
			'right'  => '0px',
		),
		'output' => array(
			array(
				'element'  => '.footer-logo, .footer-v1 .footer-logo',
				'property' => 'margin',
			),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_footer_logo',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'     => 'spacing',
		'settings' => 'footer_tagline_spacing',
		'label'       => esc_html__( 'Tagline spacing', 'blggn' ),
		'section'  => 'footer_logo',
		'priority' => 1,
		'default' => array(
			'top'    => '5px',
			'bottom' => '0px',
			'left'	 => '0px',
			'right'  => '0px',
		),
		'output' => array(
			array(
				'element'  => '.footer-logo p',
				'property' => 'margin',
			),
		),
		'required' => array(
	        array(
	            'setting'  => 'show_footer_logo',
	            'value'    => true,
	            'operator' => '=='
	        ),
			array(
	            'setting'  => 'footer_logo_type',
	            'value'    => 'text',
	            'operator' => '=='
	        ),
	    ),
	) );

	// Section
	Kirki::add_section( 'footer_newsletter_section', array(
		'title'          => esc_html__( 'Newsletter', 'blggn' ),
		'panel'          => 'footer_panel',
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
	) );

	// Settings
	Kirki::add_field( 'theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'footer_newsletter',
		'label'       => esc_html__( 'Show newsletter form', 'blggn' ),
		'description' => '<a href="'. get_template_directory_uri() .'/inc/widgets/subscribers.csv" target="_blank">'. esc_html__( 'Download your subscribers list', 'blggn' ) .'</a>',
		'section'     => 'footer_newsletter_section',
		'default'     => false,
		'priority'    => 1,
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'generic',
		'settings'    => 'footer_newsletter_title',
		'label'       => esc_html__( 'Newsletter title', 'blggn' ),
		'section'     => 'footer_newsletter_section',
		'choices'     => array(
			'element'     => 'input',
			'type'        => 'text',
		),
		'default'	  => esc_html__( 'Sign up for our weekly newsletter', 'blggn' ),
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'footer_newsletter',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );

	Kirki::add_field( 'theme_mod', array(
		'type'        => 'editor',
		'media_buttons' => false,
		'settings'    => 'footer_newsletter_disclaimer',
		'label'       => esc_html__( 'Newsletter bottom text', 'blggn' ),
		'section'     => 'footer_newsletter_section',
		'sanitize_callback' => 'wp_kses_post',
		'default'	  => '',
		'priority'    => 1,
		'required' => array(
	        array(
	            'setting'  => 'footer_newsletter',
	            'value'    => true,
	            'operator' => '=='
	        ),
	    ),
	) );


}

class AddTypekitFonts {
	public function __construct( $typekit_id = '' ) {
		$theme_info = wp_get_theme();
		$this->theme_version = $theme_info[ 'Version' ];
		$this->typekit_id = $typekit_id;
		add_action( 'wp_enqueue_scripts', array( $this, 'load_typekit' ) );
	}
	public function load_typekit() {
		wp_enqueue_style( 'typekit', 'https://use.typekit.net/'.esc_attr( $this->sanitize_typekit_id( $this->typekit_id ) ) .'.css', array(), $this->theme_version );
	}
	public function sanitize_typekit_id( $typekit_id ) {
		return preg_replace( '/[^0-9a-z]+/', '', $typekit_id );
	}
}

function blggn_add_custom_choice( $custom_choice = array() ) {
	if ( !get_theme_mod( 'enable_typekit' ) ) {
		return $custom_choice;
	}
	$typekit_id = get_theme_mod( 'typekit_id' );
	$typekit_fonts = get_theme_mod( 'typekit_fonts' );
	if ( !empty( $typekit_id ) ) {
		new AddTypekitFonts( $typekit_id );
	}
	$children = array();
	$variants = array();
	foreach( $typekit_fonts as $key => $typekit_font ){
		$children[] = array(
			'id' => $typekit_font[ 'font_id' ],
			'text' => $typekit_font[ 'font_text' ],
		);
		$variants[ $typekit_font[ 'font_id' ] ] = $typekit_font[ 'font_variants' ];
	}
	$choices = array(
		'fonts' => array(
			'standard' => array(
				'serif',
				'sans-serif',
			),
			'families' => array(
				'custom' => array(
					'text' => esc_html__( 'Typekit Fonts', 'blggn' ),
					'children' => $children,
				),
			),
			'variants' => $variants,
		)
	);
	$choices = array_merge( $choices, $custom_choice );
	return apply_filters( 'blggn/add_custom_choice', $choices );
}
