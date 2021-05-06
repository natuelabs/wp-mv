<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.0
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */

require_once get_template_directory() . '/inc/theme-setup/tgm-plugin-activation/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'blggn_register_required_plugins' );

function blggn_register_required_plugins() {

	$plugins = array(

		array(
			'name' 					=> esc_html__( 'Visual Composer', 'blggn' ),
			'slug'          		=> 'js_composer',
			'source'       	=> 'http://bloggin.thememeister.com/theme-plugins/js_composer.zip',
			'required'      		=> true,
		),
		array(
			'name'          		=> esc_html__( 'Theme Options', 'blggn' ),
			'slug'          		=> 'kirki',
			'source'       	=> 'http://bloggin.thememeister.com/theme-plugins/kirki.zip',
			'required'      		=> true,
		),
		array(
			'name'          		=> esc_html__( 'ACF PRO', 'blggn' ),
			'slug'          		=> 'advanced-custom-fields-pro',
			'source'       	=> 'http://bloggin.thememeister.com/theme-plugins/acf-pro.zip',
			'required'      		=> true,
		),
		array(
			'name'     			    => esc_html__( 'One Click Demo Import', 'blggn' ),
			'slug'     			    => 'one-click-demo-import',
			'required' 			    => false,
		),
		array(
			'name'         		=> esc_html__('WP Instagram Widget', 'gutenkind'),
			'slug'         		=> 'wp-instagram-widget',
			'source'       		=> 'http://thememeister.com/plugins/wp-instagram-widget-master.zip',
			'required'     		=> false,
			'version'      		=> '2.0.3',
			'external_url' 		=> 'https://github.com/scottsweb/wp-instagram-widget',
		),
		array(
			'name'     				=> esc_html__( 'Contact Form 7', 'blggn' ),
			'slug'     				=> 'contact-form-7',
			'required' 				=> false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'blggn_tgm',         // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
