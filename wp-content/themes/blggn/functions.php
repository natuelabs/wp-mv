<?php

define('BLGGN_VERSION', wp_get_theme()->get( 'Version' ), true);
define('BLGGN_NAME', wp_get_theme()->get( 'Name' ), true);

/*--------------------------------------------------------------
#  Functions and Definitions
--------------------------------------------------------------*/
function blggn_setup() {
	load_theme_textdomain( 'blggn', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
	add_theme_support('post-formats', array('image', 'gallery', 'slider', 'video', 'audio', 'link'));
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'blggn_1920x1080', 1920, 1080, array( 'center', 'top' ) ); // Fullwidth slider, page/post header
	add_image_size( 'blggn_1080x690', 1080, 690, true ); // Full Layout
	add_image_size( 'blggn_600x600', 600, 600, true ); // Related posts
	add_image_size( 'blggn_450x600', 450, 600, true ); // Portait
	add_image_size( 'blggn_600x400', 600, 400, true ); // Landscape
	add_image_size( 'blggn_300x300', 300, 300, true ); // Square
	add_image_size( 'blggn_300x500', 300, 500, true ); // Posts widget - slider
	add_image_size( 'blggn_128x128', 128, 128, true ); // Posts widget - list
	register_nav_menus( array(
		'primary' 		=> esc_html__( 'Primary Menu', 'blggn' ),
		'side_menu' 	=> esc_html__( 'Side Menu', 'blggn' ),
		'topbar' 		=> esc_html__( 'Topbar Menu', 'blggn' ),
		'footer' 		=> esc_html__( 'Footer Menu', 'blggn' ),
	) );
}
add_action( 'after_setup_theme', 'blggn_setup' );

function blggn_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blggn_content_width', 1080 );
}
add_action( 'after_setup_theme', 'blggn_content_width', 0 );

/*--------------------------------------------------------------
#  Enqueue scripts & styles
--------------------------------------------------------------*/
function blggn_scripts_styles() {
	wp_enqueue_style( 'blggn_style', get_stylesheet_uri(), array(), BLGGN_VERSION );
	wp_enqueue_script( 'blggn_init', get_stylesheet_directory_uri() . '/assets/js/init.js', array('jquery'), BLGGN_VERSION, true );
	wp_enqueue_script( 'blggn_scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), BLGGN_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
	if ( !is_admin() ) wp_localize_script('blggn_scripts', 'themeAjax', array('themeUrl' => get_template_directory_uri(), 'ajax_url' => admin_url('admin-ajax.php') ));
}
add_action( 'wp_enqueue_scripts', 'blggn_scripts_styles' );

function blggn_admin_scripts() {
	wp_enqueue_style( 'blggn_admin_css', get_template_directory_uri() . '/assets/css/admin-style.css', BLGGN_VERSION, false );
	wp_enqueue_script( 'blggn_admin_js', get_stylesheet_directory_uri() . '/assets/js/admin.js', array('jquery'), BLGGN_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'blggn_admin_scripts' );

/*--------------------------------------------------------------
# Menus
--------------------------------------------------------------*/
function blggn_primary_menu() {
	$primary_menu = wp_nav_menu( array(
		'theme_location' => 'primary',
		'fallback_cb' 	 => false,
		'echo'           => false,
	) );
	if ( $primary_menu ) {
		wp_nav_menu( array(
			'theme_location' 	=> 'primary',
			'menu_class'     	=> 'nav-menu',
		) );
	} else {
		if (get_theme_mod( 'header_layout', 'v1') == 'v1') echo '<ul class="nav-menu"><li></li></ul>';
		echo '<a href="'. esc_url(admin_url('nav-menus.php')) .'" class="no-menu">'. esc_html__( 'You can edit your menu content in Appearance > Menus and set as', 'blggn' ). ' <strong>' . esc_html__( 'Primary Menu.', 'blggn' ) .'</strong></a>';
	}
}

function blggn_side_menu() {
	$side_menu = wp_nav_menu( array(
		'theme_location' => 'side_menu',
		'fallback_cb'    => false,
		'echo'           => false,
	) );
	if ( $side_menu ) {
		wp_nav_menu( array(
			'theme_location' 	=> 'side_menu',
			'menu_class'     	=> 'nav-menu',
		) );
	} else {
		echo '<a href="'. esc_url(admin_url('nav-menus.php')) .'" class="no-menu">'. esc_html__( 'You can edit your side menu content in Appearance > Menus and set as', 'blggn' ). ' <strong>' . esc_html__( 'Side Menu.', 'blggn' ) .'</strong></a>';
	}
}

function blggn_topbar_menu() {
	$topbar_menu = wp_nav_menu( array(
		'theme_location' => 'topbar',
		'fallback_cb'    => false,
		'echo'           => false,
	) );
	if ( $topbar_menu ) {
		wp_nav_menu( array(
			'theme_location' 	=> 'topbar',
			'menu_class'     	=> 'nav-menu',
		) );
	} else {
		echo '<a href="'. esc_url(admin_url('nav-menus.php')) .'" class="no-menu">'. esc_html__( 'Edit your topbar menu content in Appearance > Menus and set as', 'blggn' ). ' <strong>' . esc_html__( 'Topbar Menu.', 'blggn' ) .'</strong></a>';
	}
}

function blggn_footer_menu() {
	$footer_menu = wp_nav_menu( array(
		'theme_location' => 'footer',
		'fallback_cb'    => false,
		'echo'           => false,
	) );
	if ( $footer_menu ) {
		wp_nav_menu( array(
			'theme_location' 	=> 'footer',
			'menu_class'     	=> 'nav-menu',
		) );
	} else {
		echo '<a href="'. esc_url(admin_url('nav-menus.php')) .'" class="no-menu">'. esc_html__( 'Edit your footer menu content in Appearance > Menus and set as', 'blggn' ). ' <strong>' . esc_html__( 'Footer Menu.', 'blggn' ) .'</strong></a>';
	}
}

/*--------------------------------------------------------------
# Include
--------------------------------------------------------------*/
$inc_files = array(

	'/inc/theme-options/theme_mods.php',
	'/inc/theme-meta/theme_meta.php',
	'/inc/visualcomposer/visualcomposer.php',
	'/inc/theme_functions.php',

	'/inc/widgets/widget-about.php',
	'/inc/widgets/widget-facebook.php',
	'/inc/widgets/widget-posts.php',
	'/inc/widgets/widget-newsletter.php',
	'/inc/widgets/widget-social.php',

	'/inc/theme-setup/tgm-plugin-activation/tgm-init.php',
	'/inc/theme-setup/one-click-demo/one-click-demo-import.php',

);

foreach ($inc_files as $inc_file) {
	include_once get_template_directory() . $inc_file;
}

/*--------------------------------------------------------------
# Sidebars
--------------------------------------------------------------*/
function blggn_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blggn' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'blggn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title vs-sekundar">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 2', 'blggn' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'This is additional sidebar which can only be used with page builder on your homepage.', 'blggn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title vs-sekundar">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Side Menu Widgets', 'blggn' ),
		'id'            => 'side_menu_sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown in the side menu on all posts and pages.', 'blggn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title vs-sekundar">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'blggn' ),
		'id'            => 'footer-sidebar-1',
		'description'   => esc_html__( 'Widgets in this area will be shown in 1st footer column on all posts and pages.', 'blggn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title vs-sekundar">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'blggn' ),
		'id'            => 'footer-sidebar-2',
		'description'   => esc_html__( 'Widgets in this area will be shown in 2nd footer columns on all posts and pages.', 'blggn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title vs-sekundar">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'blggn' ),
		'id'            => 'footer-sidebar-3',
		'description'   => esc_html__( 'Widgets in this area will be shown in 3rd footer columns on all posts and pages.', 'blggn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title vs-sekundar">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom', 'blggn' ),
		'id'            => 'footer-sidebar-4',
		'description'   => esc_html__( 'Widgets in this area will be shown in the bottom part of the footer.', 'blggn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title vs-sekundar">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'blggn_widgets_init' );



function blggn_shop_feature_image() {
	echoget_the_post_thumbnail( get_option( 'woocommerce_shop_page_id' ) );
}
add_action('woocommerce_before_main_content', 'blggn_shop_feature_image');