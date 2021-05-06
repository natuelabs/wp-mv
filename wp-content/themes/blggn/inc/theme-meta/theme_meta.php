<?php

// Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');

// Disable ACF Update Notification
function blggn_acf_update($value) {
  if ( isset( $value ) && is_object( $value ) ) {
	unset($value->response[ 'advanced-custom-fields-pro/acf.php' ]);
  }
  return $value;
}
add_filter('site_transient_update_plugins', 'blggn_acf_update');

// ACF Get Field Function
function blggn_get_field( $key, $id = false, $default = '', $format_value = true ) {
	global $post;
	$key = trim( filter_var( $key, FILTER_SANITIZE_STRING ) );
	$result = '';
	if ( function_exists( 'get_field' ) ) {
		if ( isset( $post->ID ) && !$id ) {
			$result = get_field( $key, false, $format_value );
		} else {
			$result = get_field( $key, $id, $format_value );
			if ($result == '' && $default !== '') {
				$result = $default;
			}
		}
	} else {
		$result = $default;
	}
	return $result;
}

// ACF Fields
if( function_exists('acf_add_local_field_group') ) {

	////////////////////////////////
	// Post Format
	////////////////////////////////

	// Post Format Gallery
	acf_add_local_field_group( array (
		'key' => 'group_post_format_gallery',
		'title' => esc_html__( 'Gallery Images', 'blggn' ),
		'fields' => array (
			array (
				'key' => 'field_post_format_gallery',
				'name' => 'post_format_gallery',
				'type' => 'gallery',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'height' => '',
					'class' => '',
					'id' => '',
				),
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'gallery',
				),
			),
		),
		'menu_order' => 2,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	) );

	// Post Format Video
	acf_add_local_field_group(array (
		'key' => 'group_post_format_video',
		'title' => esc_html__( 'Video Embed', 'blggn' ),
		'fields' => array (
			array (
				'key' => 'field_post_format_video',
				'name' => 'post_format_video',
				'type' => 'oembed',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'width' => '',
				'height' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'video',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	) );

	// Post Format Audio
	acf_add_local_field_group(array (
		'key' => 'group_post_format_audio',
		'title' => esc_html__( 'Audio Embed', 'blggn' ),
		'fields' => array (
			array (
				'key' => 'field_post_format_audio',
				'name' => 'post_format_audio',
				'type' => 'oembed',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'width' => '',
				'height' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'audio',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	) );

	// Post Format Link
	acf_add_local_field_group(array (
		'key' => 'group_post_format_link',
		'title' => esc_html__( 'Post Header Content', 'blggn' ),
		'fields' => array (
			array (
				'key' => 'field_post_format_link',
				'name' => 'post_format_link',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'width' => '',
				'height' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'link',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	) );

	////////////////////////////////
	// Post Header
	////////////////////////////////
	acf_add_local_field_group(array(
		'key' => 'group_5a7f30354e32a',
		'title' => 'Post Header',
		'fields' => array(
			array(
				'key' => 'field_5a7f3054e9f92',
				'label' => 'Post Header Style',
				'name' => 'post_header_style',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => 'voss-select',
					'id' => '',
				),
				'choices' => array(
					'default' => 'Default',
					'standard' => 'Standard',
                    'large' => 'Large',
					'fullwidth' => 'Fullwidth',
					'fullscreen' => 'Fullscreen',
                    'title_top' => 'Title Top',
				),
				'default_value' => array(
					0 => '',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 1,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'field',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	////////////////////////////////
	// Post Stand-Out
	////////////////////////////////
	acf_add_local_field_group(array(
		'key' => 'group_5a7f362d46149',
		'title' => 'Set as Stand-Out',
		'fields' => array(
			array(
				'key' => 'field_5a7f3635a972a',
				'label' => 'Stand-Out Post',
				'name' => 'stand_out_post',
				'type' => 'true_false',
				'instructions' => 'If option is enabled, this post will be styled differently on Home & Category pages.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => 'voss-switch',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'field',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

    ////////////////////////////////
    // Post Layout
    ////////////////////////////////
    /*acf_add_local_field_group(array(
        'key' => 'group_5a7e8d588b433z',
        'title' => 'Post Layout',
        'fields' => array(
            array(
                'key' => 'field_post_custom_layout',
                'label' => 'Custom Layout',
                'name' => 'custom_layout',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-switch',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5a7e8e114bf71z',
                'label' => 'Layout',
                'name' => 'sidebar_post_layout',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_post_custom_layout',
                            'operator' => '=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'acf-image-select',
                    'id' => '',
                ),
                'choices' => array(
                    'left' => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/sidebar-left.png"><p>Left Sidebar</p>',
                    'no-sidebar' => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/no-sidebar.png"><p>No Sidebar</p>',
                    'right' => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/sidebar-right.png"><p>Right Sidebar</p>',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => get_theme_mod( 'global_sidebar_post', 'right' ),
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'field',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));*/

    ////////////////////////////////
    // Page Header
    ////////////////////////////////
    acf_add_local_field_group(array(
        'key' => 'group_5a7dd8ff97a7b',
        'title' => 'Page Header',
        'fields' => array(
            array(
                'key' => 'field_5a7dd93aab0a6',
                'label' => 'Hide Page Header',
                'name' => 'hide_page_header',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-switch',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5a7ddd87a116e',
                'label' => 'Page Header Style',
                'name' => 'page_header_style',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a7dd93aab0a6',
                            'operator' => '!=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-select',
                    'id' => '',
                ),
                'choices' => array(
                    'default' => 'Default',
                    'large' => 'Large',
                    'fullwidth' => 'Fullwidth',
                    'fullscreen' => 'Fullscreen',
                ),
                'default_value' => array(
                    0 => 'default',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 1,
                'ajax' => 0,
                'return_format' => 'value',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5a7dde10a116f',
                'label' => 'Page Header Image',
                'name' => 'page_header_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a7dd93aab0a6',
                            'operator' => '!=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-add-image',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5a7ddeab6b8c5',
                'label' => 'Page Header Text Color',
                'name' => 'page_header_text_color',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a7dd93aab0a6',
                            'operator' => '!=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-select',
                    'id' => '',
                ),
                'choices' => array(
                    'default' => 'Default',
                    'light' => 'Light',
                    'dark' => 'Dark',
                ),
                'default_value' => array(
                    0 => 'default',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 1,
                'ajax' => 0,
                'return_format' => 'value',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5a7ddefbd7f98',
                'label' => 'Hide Page Title',
                'name' => 'hide_page_title',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a7dd93aab0a6',
                            'operator' => '!=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-switch',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5a7ddf5063d13',
                'label' => 'Hide Page Breadcrumbs',
                'name' => 'hide_page_breadcrumbs',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a7dd93aab0a6',
                            'operator' => '!=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-switch',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'field',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

    ////////////////////////////////
    // Page Layout
    ////////////////////////////////
    /*acf_add_local_field_group(array(
        'key' => 'group_5a7e8d588b433',
        'title' => 'Page Layout',
        'fields' => array(
            array(
                'key' => 'field_5a7ddf5063d1z334',
                'label' => 'Custom Layout',
                'name' => 'custom_layout',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-switch',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5a7e8e114bf71',
                'label' => 'Layout',
                'name' => 'sidebar_page_layout',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5a7ddf5063d1z334',
                            'operator' => '=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'acf-image-select',
                    'id' => '',
                ),
                'choices' => array(
                    'left'         => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/sidebar-left.png"><p>Left Sidebar</p>',
                    'no-sidebar'   => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/no-sidebar.png"><p>No Sidebar</p>',
                    'right'        => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/sidebar-right.png"><p>Right Sidebar</p>',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => get_theme_mod( 'global_sidebar_page', 'no-sidebar' ),
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'field',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));*/

    ////////////////////////////////
    // Cat Header
    ////////////////////////////////

    acf_add_local_field_group(array(
        'key' => 'group_5a7e9f8e24ed3',
        'fields' => array(
            array(
                'key' => 'field_5a7ea006c3a74',
                'label' => 'Category Header Style',
                'name' => 'cat_header_style',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-select',
                    'id' => '',
                ),
                'choices' => array(
                    'default' => 'Default',
                    'large' => 'Large',
                    'fullwidth' => 'Fullwidth',
                    'fullscreen' => 'Fullscreen',
                ),
                'default_value' => array(
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 1,
                'ajax' => 0,
                'return_format' => 'value',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5a7ea087f2d29',
                'label' => 'Category Header Image',
                'name' => 'cat_header_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-add-image',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5a7ea0adf2d2a',
                'label' => 'Category Header Text Color',
                'name' => 'cat_header_text_color',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-select',
                    'id' => '',
                ),
                'choices' => array(
                    'default' => 'Default',
                    'light' => 'Light',
                    'dark' => 'Dark',
                ),
                'default_value' => array(
                    0 => 'default',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 1,
                'ajax' => 0,
                'return_format' => 'value',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5a7ea11df2d2c',
                'label' => 'Hide Category Title',
                'name' => 'hide_cat_header_title',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-switch',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5a7ea0eef2d2b',
                'label' => 'Hide Category List',
                'name' => 'hide_cat_header_list',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-switch',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'field',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

    ////////////////////////////////
    // Cat Layout
    ////////////////////////////////
    /*acf_add_local_field_group(array(
        'key' => 'group_5a7e8d588b433z2',
        'title' => '',
        'fields' => array(
            array(
                'key' => 'field_cat_custom_layout',
                'label' => 'Custom Layout',
                'name' => 'custom_cat_layout',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'voss-switch',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5a7e8e114bf71z22',
                'label' => 'Category Posts Layout',
                'name' => 'cat_posts_layout',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_cat_custom_layout',
                            'operator' => '=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'acf-image-select',
                    'id' => '',
                ),
                'choices' => array(
                    'list' => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/list.png"><p>List</p>',
                    'grid' => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/grid.png"><p>Grid</p>',
                    'full' => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/full.png"><p>Full</p>',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => get_theme_mod( 'global_layout_archive', 'list' ),
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
            array(
                'key' => 'field_5a7e8e114bf71z2',
                'label' => 'Category Page Layout',
                'name' => 'sidebar_cat_layout',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_cat_custom_layout',
                            'operator' => '=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'acf-image-select',
                    'id' => '',
                ),
                'choices' => array(
                    'left'         => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/sidebar-left.png"><p>Left Sidebar</p>',
                    'no-sidebar'   => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/no-sidebar.png"><p>No Sidebar</p>',
                    'right'        => '<img src="' . get_template_directory_uri() . '/assets/img/options/layout/sidebar-right.png"><p>Right Sidebar</p>',
                ),
                'allow_null' => 1,
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => get_theme_mod( 'global_sidebar_cat', 'right' ),
                'layout' => 'horizontal',
                'return_format' => 'value',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category',
                ),
            ),
        ),
        'menu_order' => 2,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'field',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));*/

}
