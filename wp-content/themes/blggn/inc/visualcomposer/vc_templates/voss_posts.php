<?php

function voss_vc_posts( $atts, $content = null ) {

    $atts = vc_map_get_attributes( 'voss_vc_posts', $atts );
	extract( $atts );

    global $wp_query;
    if ( get_query_var('paged') ) {
    	$paged = get_query_var('paged');
    } else if ( get_query_var('page') ) {
    	$paged = get_query_var('page');
    } else {
    	$paged = 1;
    }

    if( $custom_query == 'true' ) {
        $source .= '|paged:' .$paged;
    	$source_data = VcLoopSettings::parseData( $source );
    	$query_builder = new blggn_query_builder( $source_data );
    	$posts = $query_builder->build();
    	$posts = $posts[1];
    } else if ( $cat == 'Popular Posts' ) {
        $args = array(
            'posts_per_page' 			=> $posts_per_page,
            'post_type'   				=> 'post',
            'post_status' 				=> 'publish',
            'orderby'      				=> 'meta_value_num',
            'meta_key'     				=> 'post_views_count',
            'paged'                     => $paged,
        );
        $posts = new WP_Query( $args );
    } else {
        $args = array(
            'cat' 						=> $cat,
            'posts_per_page' 			=> $posts_per_page,
            'posts_per_archive_page' 	=> $posts_per_page,
            'showposts' 				=> $posts_per_page,
            'post_type'					=> 'post',
            'orderby'					=> 'date',
            'ignore_sticky_posts' 		=> 1,
            'paged'                     => $paged,
        );
        $posts = new WP_Query( $args );
    }

    $temp_query = $wp_query;
    $wp_query = $posts;
    $i = 0;
	ob_start();

?>

<?php

$classes[] = 'voss-ajax-'.$pagination;
if ($animated == true) $classes[] = 'voss-posts-animated';
if ($meta_cat == true) $classes[] = 'voss-cat';
if ($meta_date == true) $classes[] = 'voss-date';
if ($meta_read == true) $classes[] = 'voss-read';
if ($meta_views == true) $classes[] = 'voss-views';
if ($meta_comments == true) $classes[] = 'voss-comments';

?>

<div class="voss-posts <?php esc_html_e(implode(' ', $classes)); ?>">
    <div class="voss-layout-<?php echo esc_html( $layout ); ?>" data-col="<?php echo esc_html($grid_columns); ?>"> <?php

    	if( $posts->have_posts() ) {

    		while ( $posts->have_posts() ) : $posts->the_post();

                if ($first_featured == true && $i == 0 && !is_paged()) {
                    get_template_part( 'parts/post/content', 'featured' );
                } else {
        			if( in_array( $layout, array( 'list', 'grid', 'full' ) ) ) {
                        get_template_part( 'parts/post/content', $layout );
        			} elseif( $layout == 'full-list' ) {
                        if( $i == 0 || $i == 4 || $i == 8 || $i == 12 || $i == 16 ) {
                            get_template_part( 'parts/post/content-full' );
                        } else {
                            get_template_part( 'parts/post/content-list' );
                        }
                    } elseif( $layout == 'list-full' ) {
                        if( $i == 2 || $i == 5 || $i == 8 || $i == 11 || $i == 14 ) {
        					get_template_part( 'parts/post/content-full' );
        				} else {
        					get_template_part( 'parts/post/content-list' );
        				}
                    } elseif( $layout == 'full-grid' ) {
                        if( $i == 0 && !is_paged() ) {
        					get_template_part( 'parts/post/content-full' );
        				} else {
        					get_template_part( 'parts/post/content-grid' );
        				}
                    }
                }

    		$i++;
            endwhile;
    	} ?>

    </div>

    <?php blggn_pagination( $pagination ); ?>

</div>

<?php

	$out = ob_get_contents();
	if (ob_get_contents()) ob_end_clean();

    $wp_query = $temp_query;

	wp_reset_query();
	wp_reset_postdata();

	return $out;

}
blggn_add_short( 'voss_vc_posts', 'voss_vc_posts' );
