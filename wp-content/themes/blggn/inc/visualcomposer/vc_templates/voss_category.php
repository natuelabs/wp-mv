<?php

function voss_vc_category( $atts, $content = null ) {

    $atts = vc_map_get_attributes( 'voss_vc_category', $atts );
	extract( $atts );

    $args = array(
        'cat' 						=> $cat,
        'posts_per_page' 			=> $posts_per_page,
        //'posts_per_archive_page' 	=> $posts_per_page,
        //'showposts' 				=> $posts_per_page,
        'post_type'					=> 'post',
        'orderby'					=> 'date',
        'order'						=> 'DESC',
        'ignore_sticky_posts' 		=> 1,
        'paged'                     => $paged,
    );
    $posts = new WP_Query( $args );
    $i = 0;
	ob_start();

	if( $posts->have_posts() ) {

		while ( $posts->have_posts() ) : $posts->the_post();

			get_template_part( '/inc/visualcomposer/vc_templates/category/style', $style );

		$i++;
        endwhile;
	}

	$out = ob_get_contents();
	if (ob_get_contents()) ob_end_clean();

	wp_reset_query();
	wp_reset_postdata();

	return $out;

}
blggn_add_short( 'voss_vc_category', 'voss_vc_category' );
