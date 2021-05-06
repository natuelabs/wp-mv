<?php

function blggn_vc_before_init() {

	vc_set_as_theme();

	if( function_exists('vc_set_default_editor_post_types') ) {
		vc_set_default_editor_post_types( array( 'post','page','product' ) );
	}

	remove_action( 'wp_head', array(visual_composer(), 'addMetaData') );

	if( is_admin() ) {
		function blggn_remove_vc_teaser() {
			remove_meta_box( 'vc_teaser', 'post', 'side' );
			remove_meta_box( 'vc_teaser', 'page', 'side' );
		}
		add_action( 'admin_head', 'blggn_remove_vc_teaser' );
	}

	require get_template_directory().'/inc/visualcomposer/visualcomposer-extend.php';

	require_once vc_path_dir( 'PARAMS_DIR', '/loop/loop.php' );
	class blggn_query_builder extends VcLoopQueryBuilder {
		function parse_paged( $value ) {
			$this->args['paged'] = $value;
		}
		function parse_offset( $value ) {
			$this->args['offset'] = $value;
			if ($this->args['offset'] && isset($this->args['paged'])) {
				$page_offset = $this->args['offset'] + ( ($this->args['paged'] - 1) * $this->args['posts_per_page'] );
				$this->args['offset'] = $page_offset;
			}
		}
	}

/*
	add_filter( 'vc_load_default_templates', 'thb_custom_template_modify_array' );
	function thb_custom_template_modify_array( $data ) {
		return array();
	}
*/

/*
	function thb_column_offset_class_merge($class_string, $tag) {

		if ($tag === 'vc_row' || $tag === 'vc_row_inner') {
			$class_string = preg_replace('/vc_row/', 'vs_row', $class_string);
		}
		return $class_string;
	}
	add_filter('vc_shortcodes_css_class', 'thb_column_offset_class_merge', 10, 2);
*/
	// REMOVE UPDATE NOTICE FOR VISUAL COMPOSER
	add_filter('site_transient_update_plugins', 'remove_update_notifications');
	function remove_update_notifications($value) {
		if ( isset( $value ) && is_object( $value ) ) {
			unset($value->response[ 'js_composer_theme/js_composer.php' ]);
		}
	}

}
add_action('vc_before_init', 'blggn_vc_before_init');

/* Add Shortcode */
function blggn_add_short( $name, $call ) {
	$func = 'add' . '_shortcode';
	return $func( $name, $call );
}
