<?php

// Shortcodes
$shortcodes = get_template_directory() . '/inc/visualcomposer/vc_templates/';
$files = glob( $shortcodes . '/voss_?*.php');
foreach ( $files as $filename ) {
	require $shortcodes . basename($filename);
}

function voss_categories() {
	$blog_categories = get_categories();
	$out = array();
	foreach( $blog_categories as $category ) {
		$out[$category->name] = $category->cat_ID;
	}
	array_unshift( $out, esc_html__('Latest Posts', 'blggn'), esc_html__('Popular Posts', 'blggn') );
	return $out;
}

/*vvv*//* Mapings *//*vvv*/

//////////////////////////////
// Post Slider
////////////////////////////
vc_map( array(
	"name" 		=> esc_html__("Post Slider", 'blggn' ),
	"base" 		=> "voss_vc_slider",
	"icon" 		=> "vc_icon-vc-section",
	"class" 	=> "voss_vc_slider",
	"category" 	=> "Vossen",
	"params"	=> array(
		array(
			"type"			=> "dropdown",
			"heading" 		=> "Slider Style",
			"param_name" 	=> "style",
			"admin_label" 	=> true,
			"value" => array(
				'Style 1' 		=> "1",
				'Style 2' 		=> "2",
				'Style 3' 		=> "3",
				'Style 4' 		=> "4",
				'Style 5' 		=> "5",
				'Style 6' 		=> "6",
				'Style 7' 		=> "7",
				'Style 8' 		=> "8",
				'Style 9' 		=> "9",
				'Style 10' 		=> "10",
				'Style 11' 		=> "11",
			),
			'std'         => '1',
			'description'		=> esc_html__( 'Select the style of slider posts.', 'blggn' ),
		),
		array(
			"type"			=> "dropdown",
			"heading" 		=> "Columns",
			"param_name" 	=> "columns",
			"admin_label" 	=> true,
			"value" => array(
				'1 Column' 			=> "1",
				'2 Columns' 		=> "2",
				'3 Columns' 		=> "3",
				'4 Columns' 		=> "4",
				'5 Columns' 		=> "5",
				'6 Columns' 		=> "6",
			),
			'std'         => '1',
			'description'		=> esc_html__( 'Select the layout.', 'blggn' ),
			"dependency" 		=> Array( 'element' => "style", 'value' => array('1','2','3','4','6','7','8','9') )
		),
		array(
			"type" 			=> "dropdown",
			"heading" 		=> "Post Source",
			"param_name" 	=> "cat",
			"value"			=> voss_categories(),
			"description" 	=> "Choose to show all the latest posts or posts from a specific category.",
			"dependency" 	=> Array( 'element' => "custom_query", 'is_empty' => true ),
		),
		array(
			"type"          => 'checkbox',
			"heading"       => esc_html__( 'Advanced Post Source', 'blggn' ),
			"param_name"    => 'custom_query',
			"std"			=> '',
			"value" 		=> array(
		  		"Yes" => "true"
			),
		),
		array(
			"type" 			=> "loop",
			"heading" 		=> esc_html__( 'Post Source', 'blggn' ),
			"param_name" 	=> "source",
			"description" 	=> esc_html__( 'Set your custom post source by clicking on Build Query button.', 'blggn' ),
			"dependency"	=> Array( 'element' => "custom_query", 'value' => array('true') ),
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> esc_html__('Number of Posts', 'blggn'),
			"param_name" 	=> "posts_per_page",
			"value" 		=> "6",
			"description" 	=> "Set the max number of posts per page",
			"dependency" 	=> Array( 'element' => "custom_query", 'is_empty' => true ),
		),
		array(
	  	    "type" => "textfield",
	  	    "heading" => "Offset",
	  	    "param_name" => "offset",
	  	    "description" => "Enter the number of posts you want to skip"
	  	),
		array(
			"type"			=> "dropdown",
			"heading" 		=> "Space between slides",
			"param_name" 	=> "space_between",
			"admin_label" 	=> true,
			"value" => array(
				'0px' 		=> "0",
				'5px' 		=> "5",
				'10px' 		=> "10",
				'15px' 		=> "15",
				'20px' 		=> "20",
				'25px' 		=> "25",
				'30px' 		=> "30",
				'35px' 		=> "35",
				'40px' 		=> "40",
				'50px' 		=> "50",
			),
			'description'		=> esc_html__( 'Distance between slides in px.', 'blggn' ),
		),
		array(
			"type"			=> "checkbox",
			"heading" 		=> "Centered Slides",
			"param_name" 	=> "centered",
			"admin_label" 	=> true,
			"value" => array(
				"Yes" => "true"
			),
			'std' => 'false',
			'weight' => 1,
			'description'		=> esc_html__( 'If enabled, then active slides will be centered, not always on the left side.', 'blggn' ),
		),
		array(
			"type"			=> "checkbox",
			"heading" 		=> "Autoplay",
			"param_name" 	=> "autoplay",
			"admin_label" 	=> true,
			"value" => array(
				'Yes'	=> "true",
			),
			'weight' => 1,
			'description'		=> esc_html__( 'If enabled, the slider will autoplay.', 'blggn' ),
		),
		array(
			"type"			=> "dropdown",
			"heading" 		=> "Autoplay Delay",
			"param_name" 	=> "delay",
			"admin_label" 	=> true,
			"value" => array(
				"1 second"		=> 	"1000",
				"2 seconds"		=>	"2000",
				"3 seconds"		=>	"3000",
				"4 seconds"		=>	"4000",
				"5 seconds"		=>	"5000",
				"6 seconds"		=>	"6000",
				"7 seconds"		=>	"7000",
				"8 seconds"		=>	"8000",
				"9 seconds"		=>	"9000",
				"10 seconds"	=>	"10000",
				"11 seconds"	=>	"11000",
				"12 seconds"	=>	"12000",
				"13 seconds"	=>	"13000",
				"14 seconds"	=>	"14000",
				"15 seconds"	=>	"15000",
			),
			"std"	=>	"8000",
			'description'		=> esc_html__( 'Delay between transitions.', 'blggn' ),
			"dependency" 		=> Array( 'element' => "autoplay", 'value' => array('true') )
		),
		array(
			"type"			=> "checkbox",
			"heading" 		=> "Loop",
			"param_name" 	=> "loop",
			"admin_label" 	=> true,
			"value" => array(
				"Yes" => "true"
			),
			'std'         => 'true',
			'weight' => 1,
			'description'		=> esc_html__( 'If enabled, the slider will be in continuous loop mode.', 'blggn' ),
		),
		array(
			"type"			=> "checkbox",
			"heading" 		=> "Pagination",
			"param_name" 	=> "pagination",
			"admin_label" 	=> true,
			"value" => array(
				"Yes" => "true"
			),
			'weight' => 1,
			'description'		=> esc_html__( 'If enabled, this will show pagination dots underneath.', 'blggn' ),
		),
		array(
			"type"			=> "checkbox",
			"heading" 		=> "Navigation Arrows",
			"param_name" 	=> "navigation",
			"admin_label" 	=> true,
			"value" => array(
				"Yes" => "true"
			),
			'weight' => 1,
			'description'		=> esc_html__( 'If enabled, this will show navigation arrows on the sides.', 'blggn' ),
		),
		array(
			"type"			=> "checkbox",
			"heading" 		=> "Title",
			"param_name" 	=> "title_enable",
			"admin_label" 	=> true,
			"value" => array(
				"Yes" => "true"
			),
			'description'		=> esc_html__( 'If enabled, this will allow you to add a title above the slider.', 'blggn' ),
		),
		array(
		  "type" 			=> "textfield",
		  "heading" 		=> "Title",
		  "param_name" 		=> "title",
		  "description" 	=> "Title text here.",
		  "dependency" 		=> Array( 'element' => "title_enable", 'value' => array('true') )
		),
		array(
			"type"			=> "checkbox",
			"heading" 		=> "Overlay",
			"param_name" 	=> "overlay_enable",
			"admin_label" 	=> true,
			"value" => array(
				"Yes" => "true"
			),
			'description'		=> esc_html__( 'If enabled, this will allow you to adjust or add a slider overlay.', 'blggn' ),
			"dependency" 		=> Array( 'element' => "style", 'value' => array('1','2','3','4','5') )
		),
		array(
			"type"			=> "dropdown",
			"heading" 		=> "Overlay",
			"param_name" 	=> "overlay",
			"admin_label" 	=> true,
			"value" => array(
				"0%"		=> 	"0",
				"10%"		=>	"0.1",
				"20%"		=> 	"0.2",
				"30%"		=>	"0.3",
				"40%"		=> 	"0.4",
				"50%"		=>	"0.5",
				"60%"		=> 	"0.6",
				"70%"		=>	"0.7",
				"80%"		=> 	"0.8",
				"90%"		=>	"0.9",
				"100%"		=>	"1",
			),
			"std"	=>	"8000",
			'description'		=> esc_html__( 'Adjust slider overlay transparency', 'blggn' ),
			"dependency" 		=> Array( 'element' => "overlay_enable", 'value' => array('true') )
		),
	),
	"description" => "Display Posts in a Slider/Carousel"
) );

//////////////////////////////
// Posts
////////////////////////////
vc_map( array(
	"name" 		=> __("Posts", 'blggn'),
	"base" 		=> "voss_vc_posts",
	"icon" 		=> "vc_icon-vc-section",
	"class" 	=> "voss_vc_posts",
	"category" 	=> "Vossen",
	"params"	=> array(
		array(
			"type"			=> "dropdown",
			"heading" 		=> "Layout",
			"param_name" 	=> "layout",
			"admin_label" 	=> true,
			"value" => array(
				'List' 				=> "list",
				'Grid' 				=> "grid",
				'Full' 				=> "full",
				'Full then List' 	=> "full-list",
				'List then Full' 	=> "list-full",
				'Full then Grid' 	=> "full-grid",
			),
			"description"	=> "Choose the post layout."
		),
		array(
			"type" 			=> "dropdown",
			"heading" 		=> "Post Source",
			"param_name" 	=> "cat",
			"value"			=> voss_categories(),
			"description" 	=> "Choose to show all the latest posts or posts from a specific category.",
			"dependency" 	=> Array( 'element' => "custom_query", 'is_empty' => true ),
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> esc_html__('Number of Posts', 'blggn'),
			"param_name" 	=> "posts_per_page",
			"value" 		=> "6",
			"description" 	=> "Set the max number of posts per page",
			"dependency" 	=> Array( 'element' => "custom_query", 'is_empty' => true ),
		),
		array(
			"type"			=> "dropdown",
			"heading" 		=> "Columns",
			"param_name" 	=> "grid_columns",
			"admin_label" 	=> true,
			"value" => array(
				'2 Columns' 		=> "2",
				'3 Columns' 		=> "3",
				'4 Columns' 		=> "4",
				'5 Columns' 		=> "5",
			),
			'std'         => '3',
			'description'		=> esc_html__( 'Select the number of columns.', 'blggn' ),
			"dependency" 		=> Array( 'element' => "layout", 'value' => array('grid', 'full-grid') )
		),
		array(
			"type"          => 'checkbox',
			"heading"       => esc_html__( 'Advanced Post Source', 'blggn' ),
			"param_name"    => 'custom_query',
			"std"			=> '',
			"value" 		=> array(
		  		"Yes" => "true"
			),
		),
		array(
			"type" 			=> "loop",
			"heading" 		=> esc_html__( 'Post Source', 'blggn' ),
			"param_name" 	=> "source",
			"description" 	=> esc_html__( 'Set your post source by clicking on Build Query button.', 'blggn' ),
			"dependency"	=> Array( 'element' => "custom_query", 'value' => array('true') ),
		),
		array(
			"type" 			=> "dropdown",
			"heading" 		=> "Pagination",
			"param_name" 	=> "pagination",
			"value" => array(
				'Numeric' 			=> "numeric",
				'Links' 			=> "links",
				'Load More Button' 	=> "load",
				'Infinite Scroll' 	=> "infinite",
			),
			"description" 	=> "Select the pagination style.",
		),
		array(
			"type"          => 'checkbox',
			"heading"       => esc_html__( 'Animation', 'blggn' ),
			"param_name"    => 'animated',
			"std"			=> '',
			"value" 		=> array(
		  		"Yes" => "true"
			),
		),
		array(
			"type"          => 'checkbox',
			"heading"       => esc_html__( 'Show Category', 'blggn' ),
			"param_name"    => 'meta_cat',
			"std" 			=> "true",
			"value" 		=> array(
		  		"Yes" => "true"
			),
		),
		array(
			"type"          => 'checkbox',
			"heading"       => esc_html__( 'Show Date', 'blggn' ),
			"param_name"    => 'meta_date',
			"std"			=> 'true',
			"value" 		=> array(
		  		"Yes" => "true"
			),
		),
		array(
			"type"          => 'checkbox',
			"heading"       => esc_html__( 'Show Views Count', 'blggn' ),
			"param_name"    => 'meta_views',
			"std"			=> '',
			"value" 		=> array(
		  		"Yes" => "true"
			),
		),
		array(
			"type"          => 'checkbox',
			"heading"       => esc_html__( 'Show Read Count', 'blggn' ),
			"param_name"    => 'meta_read',
			"std"			=> '',
			"value" 		=> array(
		  		"Yes" => "true"
			),
		),
		array(
			"type"          => 'checkbox',
			"heading"       => esc_html__( 'Show Comments Link', 'blggn' ),
			"param_name"    => 'meta_comments',
			"std"			=> '',
			"value" 		=> array(
		  		"Yes" => "true"
			),
		),
		array(
			"type"          => 'checkbox',
			"heading"       => esc_html__( 'First Post Featured', 'blggn' ),
			"param_name"    => 'first_featured',
			"value" 		=> array(
		  		"Yes" => "true"
			),
			'std' => 'false',
		),


	),
	"description" => esc_html__( 'Display the latest posts from all or specific category', 'blggn' ),
) );

//////////////////////////////
// Category Posts
////////////////////////////
vc_map( array(
	"name" 		=> __("Category Posts", 'blggn'),
	"base" 		=> "voss_vc_category",
	"icon" 		=> "vc_icon-vc-section",
	"class" 	=> "voss_vc_category",
	"category" 	=> "Vossen",
	"params"	=> array(
		array(
			"type"			=> "dropdown",
			"heading" 		=> "Category Style",
			"param_name" 	=> "style",
			"admin_label" 	=> true,
			"value" => array(
				'Style 1' 		=> "1",
				'Style 2' 		=> "2",
				'Style 3' 		=> "3",
				'Style 4' 		=> "4",
				'Style 5' 		=> "5",
				'Style 6' 		=> "6",
				'Style 7' 		=> "7",
				'Style 8' 		=> "8",
				'Style 9' 		=> "9",
			),
			'description'		=> esc_html__( 'Select the style of category posts.', 'blggn' ),
		),
		array(
			"type" 			=> "dropdown",
			"heading" 		=> "Post Source",
			"param_name" 	=> "cat",
			"value"			=> voss_categories(),
			"description" 	=> "Select a category.",
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> esc_html__( 'Number of Posts', 'blggn'),
			"param_name" 	=> "posts_per_page",
			"value" 		=> "6",
			"description" 	=> "Set the max number of posts per page",
			"dependency" 	=> Array( 'element' => "custom_query", 'is_empty' => true ),
		),
		array(
			"type"			=> "checkbox",
			"heading" 		=> "Category Title",
			"param_name" 	=> "title_enable",
			"admin_label" 	=> true,
			"value" => array(
				"Yes" => "true"
			),
			"std" => "true",
			'description'		=> esc_html__( 'Display category title.', 'blggn' ),
		),
	),
	"description" => esc_html__( 'Display the latest posts from all or specific category', 'blggn' ),
) );











class blggn_VCExtendAddonCustomLayoutClass {
    function __construct() {
        add_action( 'init', array( $this, 'blggn_integrateWithVC' ) );
		add_action('init', array( $this, 'blggn_add_new_vccustom' ) );
    }
    function blggn_add_new_vccustom() {
	  global $vc_row_layouts;
	  $layout_9_3 = array(
		  'cells' => '912_312',
		  'mask' => '424',
		  'title' => 'Sidebar Right',
		  'icon_class' => '2-3_1-3',
	  );
	  $layout_3_9 = array(
		  'cells' => '312_912',
		  'mask' => '424',
		  'title' => 'Sidebar Left',
		  'icon_class' => '1-4_3-4',
	  );
	  array_unshift( $vc_row_layouts, $layout_3_9 );
	  array_unshift( $vc_row_layouts, $layout_9_3 );
	return $vc_row_layouts;
    }
    public function blggn_integrateWithVC() {
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
            return;
        }
    }
}
new blggn_VCExtendAddonCustomLayoutClass();
