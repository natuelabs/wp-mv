<?php

/*--------------------------------------------------------------
#  Header Menu Walker
--------------------------------------------------------------*/

function blggn_menu_arrows( $item_output, $item, $depth, $args ) {
	if( in_array( 'menu-item-has-children', $item->classes ) ) {
		$arrow = 0 == $depth ? '<svg><use xlink:href="#arrow-down"></use></svg>' : '<svg><use xlink:href="#arrow-right"></use></svg>';
		$item_output = str_replace( '</a>', $arrow . '</a>', $item_output );
	}
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'blggn_menu_arrows', 10, 4 );

/*--------------------------------------------------------------
#  Body Classes
--------------------------------------------------------------*/

function blggn_body_classes( $classes ) {

	// Site Header
	$classes[] = 'header-layout-' . get_theme_mod( 'header_layout', 'v1' );
	$classes[] = 'header-sticky-' . get_theme_mod( 'header_sticky', 'standard' );
	$classes[] = 'header-menu-hover-' . get_theme_mod( 'header_menu_hover', 'fade' );
	if ( is_front_page() ) $classes[] = 'header-bg-' . get_theme_mod( 'header_bg', 'light' );

	// Page Header
	if ( is_page() && !is_front_page() && !is_404() && get_theme_mod( 'global_page_header', true ) == true && blggn_get_field( 'hide_page_header' ) !== true || function_exists( 'is_shop' ) && is_shop() ) {
        $classes[] = 'has-page-header';

        $style = blggn_get_field( 'page_header_style' );
        $style = $style && $style !== 'default' ? $style : get_theme_mod( 'global_page_header_style', 'fullwidth' );
        $classes[] = 'page-header-style-' . $style;

        $classes[] = blggn_get_field( 'page_header_image' ) ? 'has-page-header-image' : 'no-page-header-image';

        $color = blggn_get_field( 'page_header_text_color' );
        $color = $color ? $color : 'default';
		$classes[] = 'page-header-text-' . $color;
	}

	// Page Header for blog archive
	if ( is_home() && !is_front_page() ) {
        $classes[] = 'has-page-header';

        $style = blggn_get_field( 'page_header_style', get_option('page_for_posts') );
        $style = $style && $style !== 'default' ? $style : get_theme_mod( 'global_page_header_style', 'fullwidth' );
        $classes[] = 'page-header-style-' . $style;

        $classes[] = blggn_get_field( 'page_header_image', get_option('page_for_posts') ) ? 'has-page-header-image' : 'no-page-header-image';

        $color = blggn_get_field( 'page_header_text_color', get_option('page_for_posts') );
        $color = $color ? $color : 'default';
		$classes[] = 'page-header-text-' . $color;
	}

    // Post Header
    if ( is_single() ) {
        $style = blggn_get_field( 'post_header_style' );
        $style = $style && $style !== 'default' ? $style : get_theme_mod( 'global_post_header_style', 'standard' );
        $classes[] = 'page-header-style-' . $style;

        $classes[] = has_post_thumbnail() && !in_array($style, array('standard', 'large', 'title_top')) ? 'has-page-header-image' : 'no-page-header-image';

        $color = blggn_get_field( 'post_header_text_color' );
        $color = $color ? $color : 'default';
        $classes[] = 'page-header-text-' . $color;
    }

    // Cat Header
    if ( is_category() ) {
        $style = blggn_get_field( 'cat_header_style', get_queried_object() );
        $style = $style && $style !== 'default' ? $style : get_theme_mod( 'global_cat_header_style', 'fullwidth' );
        $classes[] = 'page-header-style-' . $style;

        $classes[] = blggn_get_field( 'cat_header_image', get_queried_object() ) ? 'has-page-header-image' : 'no-page-header-image';

        $color = blggn_get_field( 'cat_header_text_color', get_queried_object() );
        $color = $color ? $color : 'default';
		$classes[] = 'page-header-text-' . $color;
    }

    // Sidebar Layout
    $sidebar_layout = '';
    if ( is_single() ) {
        $sidebar_layout = blggn_get_field( 'sidebar_post_layout' );
        $sidebar_layout = $sidebar_layout ? $sidebar_layout : get_theme_mod( 'global_sidebar_post', 'right' );
    } elseif ( is_category() || is_archive() ) {
		$custom_layout = blggn_get_field( 'custom_cat_layout', get_queried_object() );
		if ($custom_layout == '1') $sidebar_layout = blggn_get_field( 'sidebar_cat_layout', get_queried_object() );
        $sidebar_layout = $sidebar_layout ? $sidebar_layout : get_theme_mod( 'global_sidebar_cat', 'right' );
    } elseif( is_page() ) {
        $sidebar_layout = blggn_get_field( 'sidebar_page_layout' );
        $sidebar_layout = $sidebar_layout ? $sidebar_layout : get_theme_mod( 'global_sidebar_page', 'no-sidebar' );
    } elseif ( is_front_page() && is_home() || is_home() ) {
		$sidebar_layout = 'right';
	} elseif (is_search()) {
		$sidebar_layout = 'right';
	}
    $classes[] = 'sidebar-' . $sidebar_layout;

	// Single
	if (is_single()) {
		$pin_it = get_theme_mod('show_pin_it', true);
		if($pin_it == true) {
			$classes[] = 'voss-pin-enabled';
		}
	}

	return $classes;
}
add_filter( 'body_class', 'blggn_body_classes' );

/*--------------------------------------------------------------
#  Header Icons
--------------------------------------------------------------*/

function blggn_header_icons( $position = 'right' ) {
	if( $position == 'left' ) {
		$icons = get_theme_mod( 'header_icons_' . $position, '' );
	} else {
		$icons = get_theme_mod( 'header_icons_' . $position, array( 'search', 'login', 'cart' ) );
	}

	if ( empty( $icons ) ) {
		return;
	}

	foreach ( (array) $icons as $icon ) {
		if( $icon == 'search') { ?>

		  <a href="#search-popup" class="search-modal" data-effect="mfp-move-from-top"><svg><use xlink:href="#search"></use></svg></a> <?php

		} elseif( $icon == 'login') {

			if ( function_exists( 'WC' ) ) {
				$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
				if ( $myaccount_page_id ) { ?>
					<a href="<?php echo esc_url( get_permalink( $myaccount_page_id ) ); ?>" class="login-modal"><svg><use xlink:href="#user-account-people"></use></svg></a> <?php
				}
			}

		} elseif( $icon == 'cart') {

			if ( function_exists( 'WC' ) ) { ?>
				<a class="header-cart" href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>" title="<?php esc_attr( esc_html_e( 'View your shopping cart', 'blggn' ) ); ?>">
					<svg><use xlink:href="#shop-cart"></use></svg>
					<span class="cart-count vs-sekundar"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'blggn' ), WC()->cart->get_cart_contents_count() ); ?></span>
				</a> <?php
			}

		}
	}

}

/*--------------------------------------------------------------
#  Single Header
--------------------------------------------------------------*/
function blggn_post_header( $position ) {
    $style = blggn_get_field( 'post_header_style' );
    $style = $style && $style !== 'default' ? $style : get_theme_mod( 'global_post_header_style', 'standard' );
    $video_url = blggn_get_field( 'post_format_video', false, false, false );
    if( blggn_get_field( 'post_format_video' ) ) {
        $data_img = blggn_get_video_thumbnail_uri( $video_url );
    } else {
        $data_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];
    }

    if( $position == 'top' && in_array($style, array('fullwidth', 'fullscreen', 'large', 'title_top')) || $position == 'content' && in_array($style, array('standard', 'title_top')) ) { ?>
        <div class="page-header" <?php if( in_array($style, array('fullwidth', 'fullscreen')) ) { ?>data-img="<?php echo esc_url($data_img); ?>"<?php } ?>>
    		<div class="page-header-content <?php echo get_theme_mod('post_header_align'); ?>">
    			<?php
            	get_template_part( 'parts/post/post-title' );
				get_template_part( 'parts/post/post-meta' );

				if( blggn_get_field( 'post_format_video' ) ) {
                    if( in_array( $style, array( 'standard', 'large', 'title_top' ) ) ) {
                        echo blggn_get_field( 'post_format_video' );
                    } ?>
                	<a href="<?php echo esc_url( $video_url ); ?>" class="popup-video"><div class="video-play-icon play-lg mt40"></div></a>
                    <?php
                } else if( blggn_get_field('post_format_gallery') ) {
                    $images = blggn_get_field( 'post_format_gallery' );
    				if (!empty($images)) { ?>
						<div class="voss-slider"
							data-style="1"
							data-columns="1"
							data-columns-md="1"
							data-autoplay="false"
							data-delay="8000"
							data-loop="true"
							data-centered=""
							data-pagination="true"
							data-dynamic-bullets="false"
							data-navigation=""
							data-spacebetween="0"
							data-parallax="true"
							data-overlay="8000"
							>
        					<div class="swiper-wrapper">
        						<?php foreach( $images as $image) { ?>
        							<div class="swiper-slide">
    									<?php
    										$thumb = wp_get_attachment_image_src( $image['id'], 'full' );
    										$thumbnail = wp_get_attachment_image_src( $image['id'], 'blggn_1080x690');
    									?>
                                        <img src="<?php echo esc_url( $thumbnail[0] ); ?>"/>
        							</div>
        						<?php } ?>
        					</div>
							<!-- Pagination -->
							<div class="swiper-pagination swiper-pag-outside-alt"></div>
        				</div>
					<?php
					}
                } else if( blggn_get_field('post_format_audio') ) {
                    echo blggn_get_field('post_format_audio');
                } else if( has_post_thumbnail() && in_array( $style, array( 'standard', 'large', 'title_top' ) ) ) {
                    the_post_thumbnail(); //'blggn_1200x700'
					if ($caption = get_post(get_post_thumbnail_id())->post_excerpt) { ?>
						<figcaption class="wp-caption-text"><?php echo esc_html($caption); ?></figcaption> <?php
					}
                } ?>
    		</div>
    	</div>
    <?php
    }

}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
function blggn_breadcrumb() {
    echo '<p class="voss-breadcrumb">';
    echo '<a href="' . home_url() . '" rel="nofollow">' . esc_html__( 'Home', 'blggn' ) . '</a>';
	echo '<svg><use xlink:href="#arrow-right"></use></svg>';
    if ( is_page()) {
        echo the_title();
    } elseif ( is_category() || is_single()) {
        the_category(' &bull; ');
        if (is_single()) {
            the_title();
        }
    } elseif ( is_search()) {
        echo esc_html__( 'Search Results for...', 'blggn' );
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
    echo '</p>';
}

/*--------------------------------------------------------------
# Editor CSS
--------------------------------------------------------------*/
function blggn_editor_style() {
	add_editor_style(get_template_directory_uri() . '/assets/css/editor-style.css');
}
add_action( 'admin_init', 'blggn_editor_style' );

/*--------------------------------------------------------------
# Excerpt/Title Limit
--------------------------------------------------------------*/
function blggn_excerpt_limit($limit, $source = null){
    if($source == "content" ? ($excerpt = get_the_content()) : ($excerpt = get_the_excerpt()));
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	if (!empty($excerpt)) $excerpt = $excerpt. '<span class="text-light">&hellip;</span>';
    return $excerpt;
}

function blggn_excerpt($limit) {
	printf(
		'<p class="post-excerpt">%1$s</p>',
		wp_trim_words(get_the_content(), $limit, '&hellip;')
	);
}

function blggn_title_limit( $title, $limit ) {
	if ( strlen( $title ) > $limit ) {
		$title = substr( $title, 0, $limit ) . '<span class="text-light">&hellip;</span>';
		return $title;
	}
	return $title;
}

/*--------------------------------------------------------------
# Page Break
--------------------------------------------------------------*/
//Add Next Page/Page Break Button in WordPress Visual Editor
function blggn_add_next_page_button( $buttons, $id ){
	if ( 'content' != $id )
		return $buttons;
	array_splice( $buttons, 13, 0, 'wp_page' );
	return $buttons;
}
add_filter( 'mce_buttons', 'blggn_add_next_page_button', 1, 2 );

/*--------------------------------------------------------------
# Count Format
--------------------------------------------------------------*/
function blggn_count_format( $number ) {
	$precision = 1;
	if ( $number >= 1000 && $number < 1100 || $number >= 2000 && $number < 2100 ) {
		$formatted = number_format( $number/1000, 0 ).'K';
	} elseif ( $number >= 3000 && $number < 3100 || $number >= 4000 && $number < 4100 ) {
		$formatted = number_format( $number/1000, 0 ).'K';
	} elseif ( $number >= 5000 && $number < 5100 || $number >= 4000 && $number < 6100 ) {
		$formatted = number_format( $number/1000, 0 ).'K';
	} elseif ( $number >= 1100 && $number < 1000000 ) {
		$formatted = number_format( $number/1000, $precision ).'K';
	} else if ( $number >= 1000000 && $number < 1000000000 ) {
		$formatted = number_format( $number/1000000, $precision ).'M';
	} else if ( $number >= 1000000000 ) {
		$formatted = number_format( $number/1000000000, $precision ).'B';
	} else {
		$formatted = $number; // Number is less than 1000
	}
	$formatted = str_replace( '.00', '', $formatted );
	return $formatted;
}

/*--------------------------------------------------------------
# Pagination
--------------------------------------------------------------*/
function blggn_pagination( $type = '' ) { ?>
	<div class="pagination-<?php echo esc_attr( $type ); ?> voss-ajax-pagination text-center"> <?php
	    if( $type == 'links' ) {
			the_posts_pagination( array(
				'mid_size'  => 1,
				'screen_reader_text' => ( '' ),
				'prev_text' => esc_html__( 'Newer Posts', 'blggn' ),
				'next_text' => esc_html__( 'Older Posts', 'blggn' ),
			) );
	    } elseif( $type == 'load' ) { ?>
			<div class="page-load-status">
				<div class="infinite-scroll-request"><div class="voss-load"></div></div>
				<p class="infinite-scroll-last"><?php esc_html_e( 'There are no more posts to show right now', 'blggn' ); ?></p>
				<p class="infinite-scroll-error"><?php esc_html_e( 'No more pages to load', 'blggn' ); ?></p>
			</div>
			<a href="<?php esc_url( next_posts() ); ?>" class="btn voss-load-btn"><?php echo esc_html__( 'Load More', 'blggn' ); ?></a> <?php
	    } elseif( $type == 'infinite' ) { ?>
			<div class="page-load-status">
				<div class="infinite-scroll-request"><div class="voss-load"></div></div>
				<p class="infinite-scroll-last"><?php esc_html_e( 'There are no more posts to show right now', 'blggn' ); ?></p>
				<p class="infinite-scroll-error"><?php esc_html_e( 'No more pages to load', 'blggn' ); ?></p>
			</div>
			<a href="<?php esc_url( next_posts() ); ?>" class="voss-load-btn"></a> <?php
	    } else {
	        the_posts_pagination( array(
				'mid_size'  => 1,
				'screen_reader_text' => ( '' ),
				'prev_text' => '<svg><use xlink:href="#arrow-left"></use></svg>'. esc_html__('Previous', 'blggn') .'',
				'next_text' => ''. esc_html__('Next', 'blggn') .'<svg><use xlink:href="#arrow-right"></use></svg>',
			) );
	    } ?>
	</div> <?php
}

/*--------------------------------------------------------------
# Video Thumb
--------------------------------------------------------------*/
function blggn_get_video_thumbnail_uri( $video_uri ) {
		$thumbnail_uri = '';
		// determine the type of video and the video id
		$video = blggn_parse_video_uri( $video_uri );
		// get youtube thumbnail
		if( $video['type'] == 'youtube' )
			$thumbnail_uri = 'http://img.youtube.com/vi/' . $video['id'] . '/sddefault.jpg';
		// get vimeo thumbnail
		if( $video['type'] == 'vimeo' )
			$thumbnail_uri = blggn_get_vimeo_thumbnail_uri( $video['id'] );

		// get default/placeholder thumbnail
		if( empty( $thumbnail_uri ) || is_wp_error( $thumbnail_uri ) )
			$thumbnail_uri = '';
		//return thumbnail uri
		return $thumbnail_uri;
}
function blggn_parse_video_uri( $url ) {
	// Parse the url
	$parse = parse_url( $url );
	// Set blank variables
	$video_type = '';
	$video_id = '';
	// Url is http://youtu.be/xxxx
	if ( $parse['host'] == 'youtu.be' ) {
		$video_type = 'youtube';
		$video_id = ltrim( $parse['path'],'/' );
	}
	if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {
		$video_type = 'youtube';
		parse_str( $parse['query'] );
		$video_id = $v;
		if ( !empty( $feature ) )
			$video_id = end( explode( 'v=', $parse['query'] ) );
		if ( strpos( $parse['path'], 'embed' ) == 1 )
			$video_id = end( explode( '/', $parse['path'] ) );
	}
	// Url is http://www.vimeo.com
	if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {
		$video_type = 'vimeo';
		$video_id = ltrim( $parse['path'],'/' );
	}
	$host_names = explode(".", $parse['host'] );
	$rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
	// Url is an oembed url wistia.com
	if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {
		$video_type = 'wistia';
		if ( strpos( $parse['path'], 'medias' ) == 1 )
				$video_id = end( explode( '/', $parse['path'] ) );
	}

	// If recognised type return video array
	if ( !empty( $video_type ) ) {
		$video_array = array(
			'type' => $video_type,
			'id' => $video_id
		);
		return $video_array;
	} else {
		return false;
	}
}
function blggn_get_vimeo_thumbnail_uri( $clip_id ) {
	$vimeo_api_uri = 'https://vimeo.com/api/v2/video/' . esc_html($clip_id) . '.php';
	$vimeo_response = wp_remote_get( $vimeo_api_uri );
	if( is_wp_error( $vimeo_response ) ) {
		return $vimeo_response;
	} else {
		$vimeo_response = unserialize( $vimeo_response['body'] );
		return $vimeo_response[0]['thumbnail_large'];
	}
}

/*--------------------------------------------------------------
# Thumbs
--------------------------------------------------------------*/
function blggn_post_thumb($size = '') {

	if ( has_post_thumbnail() ) {
		the_post_thumbnail( $size, array( 'alt' => get_the_title() ) );
	} else if ( has_post_format( 'gallery' ) ) {
		$images = blggn_get_field( 'post_format_gallery' );
		if( $images ) {
			foreach( $images as $index => $image ) {
				if ($index == 0) {
				?>
					<img src="<?php echo wp_get_attachment_image_url( $image['id'], $size ); ?>">
				<?php
				}
			}
		}
	} else if ( has_post_format( 'video' ) && blggn_get_field( 'post_format_video' ) ) {
		if( blggn_get_field( 'post_format_video' ) ) {
			$video_url = blggn_get_field( 'post_format_video', false, false, false );
			$video_thumb_url = blggn_get_video_thumbnail_uri($video_url); ?>
			<div class="thumb-bg" data-img="<?php echo esc_url( $video_thumb_url ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo esc_html( $size ); ?>.jpg">
			</div>
		<?php
		}
	} else if ( has_post_format( 'audio' ) && !empty(blggn_get_field('post_format_audio')) ) {
		echo blggn_get_field('post_format_audio');
	}

}

function blggn_thumb_url( $size ) {
	$post = get_post();
	$get_format = get_post_format( $post->ID );
	$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $size, false )[0];

	if ( !empty($thumb_url) ) {
		echo esc_url( $thumb_url );
	} else if ( $get_format == 'gallery' ) {
		$images = blggn_get_field( 'post_format_gallery' );
		if ( $images ) {
			foreach( $images as $index => $image ) {
				if ($index == 0) {
					echo wp_get_attachment_image_url( $image['id'], $size );
				}
			}
		}
	} else if ( $get_format == 'video' ) {
		$video_url = blggn_get_field( 'post_format_video', false, false, false );
		$video_thumb_url = blggn_get_video_thumbnail_uri( $video_url );
		echo esc_url( $video_thumb_url );
	}

}

function blggn_single_pagination( $prev_or_next, $thumbSize ) {
	$prev_post = get_previous_post();
	$next_post = get_next_post();
	$get_format = get_post_format( $prev_or_next->ID );
	$category = get_the_category( $prev_or_next->ID );

	if( $get_format == 'gallery' && blggn_get_field( 'post_format_gallery', $prev_or_next->ID ) !== '' ) {
		$images = blggn_get_field( 'post_format_gallery', $prev_or_next->ID );
		if( $images ) {
			foreach( $images as $index => $image ) {
				if ($index == 0) {
					$thumb = wp_get_attachment_image_url( $image['id'], $thumbSize );
				}
			}
		}
	} else if( $get_format == 'video' && blggn_get_field( 'post_format_video', $prev_or_next->ID ) !== '' ) {
		$video_url = blggn_get_field( 'post_format_video', $prev_or_next->ID, false, false );
		$thumb = blggn_get_video_thumbnail_uri( $video_url );
	} else {
		$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $prev_or_next->ID ), $thumbSize, false );
		$full_img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $prev_or_next->ID ), 'full', false );
		if ( !empty($thumb_url[0]) ) {
			$thumb = $thumb_url[0];
		} else {
			$thumb = $full_img_url[0];
		}
	}

	if ( !empty($thumb) ) { ?>
		<div class="post-link-tip">
			<div class="post-tip-img">
				<a href="<?php echo esc_url(get_permalink( $prev_or_next->ID )); ?>">
					<div class="thumb-bg single-pagination-thumb" data-img="<?php echo esc_url( $thumb ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo esc_html( $thumbSize ); ?>.jpg">
					</div>
				</a>
			</div>
			<div class="post-tip-info">
				<div class="post-tip-info-inner">
					<p class="post-cat">
						<a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>">
							<?php echo esc_textarea( $category[0]->cat_name ); ?>
						</a>
					</p>
					<h3><a href="<?php echo esc_url(get_permalink( $prev_or_next->ID )); ?>"><?php echo esc_html( $prev_or_next->post_title ); ?></a></h3>
				</div>
			</div>
		</div> <?php
	}
}

/*--------------------------------------------------------------
# Related query
--------------------------------------------------------------*/
function blggn_get_related_posts( $post_id, $related_count, $args = array() ) {
	$args = wp_parse_args( (array) $args, array(
		'orderby' => 'rand',
		'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
	) );

	$related_args = array(
		'post_type'      => get_post_type( $post_id ),
		'posts_per_page' => $related_count,
		'post_status'    => 'publish',
		'post__not_in'   => array( $post_id ),
		'orderby'        => $args['orderby'],
		'tax_query'      => array(),
		'meta_query' 	 => array( array( 'key' => '_thumbnail_id' ) )
	);

	$post       = get_post( $post_id );
	$taxonomies = get_object_taxonomies( $post, 'names' );

	foreach ( $taxonomies as $taxonomy ) {
		$terms = get_the_terms( $post_id, $taxonomy );
		if ( empty( $terms ) ) {
			continue;
		}
		$term_list                   = wp_list_pluck( $terms, 'slug' );
		$related_args['tax_query'][] = array(
			'taxonomy' => $taxonomy,
			'field'    => 'slug',
			'terms'    => $term_list
		);
	}

	if ( count( $related_args['tax_query'] ) > 1 ) {
		$related_args['tax_query']['relation'] = 'OR';
	}

	if ( $args['return'] == 'query' ) {
		return new WP_Query( $related_args );
	} else {
		return $related_args;
	}
}

/*--------------------------------------------------------------
# Woo
--------------------------------------------------------------*/
function blggn_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'product_grid'          => array(
            'default_rows'    => 4,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 4,
        ),
    ) );
}
add_action( 'after_setup_theme', 'blggn_add_woocommerce_support' );

// Add Single Lightbox & Slider
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// Update cart when added via AJAX
function blggn_woo_ajax_cart( $fragments ) {
	ob_start(); ?>
	<?php if( WC()->cart->get_cart_contents_count() >= 0 ) : ?>
		<span class="cart-count vs-sekundar"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'blggn' ), WC()->cart->get_cart_contents_count() ); ?></span>
	<?php endif; ?>
	<?php $fragments['span.cart-count'] = ob_get_clean(); return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'blggn_woo_ajax_cart' );

/*--------------------------------------------------------------
# Check Url
--------------------------------------------------------------*/
function blggn_url_strpos( $url ) {
	if (strpos($url, 'http') === false) {
		$url = 'http://'. $url .'';
	}
	echo $url;
}

/*--------------------------------------------------------------
# Author Social Links
--------------------------------------------------------------*/
function blggn_user_contact( $contactmethods ) {
	$contactmethods['twitter']   	= 'Twitter URL';
	$contactmethods['facebook']   	= 'Facebook URL';
	$contactmethods['instagram']   	= 'Instagram URL';
	$contactmethods['pinterest']   	= 'Pinterest URL';
	$contactmethods['youtube']   	= 'Youtube URL';
	$contactmethods['vimeo']   		= 'Vimeo URL';
	$contactmethods['tumblr']   	= 'Tumblr URL';
	$contactmethods['bloglovin']   	= 'Bloglovin URL';
	$contactmethods['linkedin']   	= 'Linkedin URL';
	$contactmethods['google']    	= 'Google+ URL';
	$contactmethods['vk']   	 	= 'VK URL';
	$contactmethods['mail']   	 	= 'Email Contact';
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'blggn_user_contact', 10, 1 );

function blggn_user_links() {

	$twitter 		= get_the_author_meta( 'twitter' );
	$facebook 		= get_the_author_meta( 'facebook' );
	$instagram 		= get_the_author_meta( 'instagram' );
	$pinterest 		= get_the_author_meta( 'pinterest' );
	$youtube 		= get_the_author_meta( 'youtube' );
	$vimeo 	 		= get_the_author_meta( 'vimeo' );
	$tumblr 		= get_the_author_meta( 'tumblr' );
	$bloglovin 		= get_the_author_meta( 'bloglovin' );
	$linkedin 		= get_the_author_meta( 'linkedin' );
	$google 		= get_the_author_meta( 'google' );
	$vk  	 		= get_the_author_meta( 'vk' );
	$mail  			= get_the_author_meta( 'mail' );

	if ( $twitter ) { ?>
    	<a target="_blank" href="<?php esc_url( blggn_url_strpos( $twitter ) ); ?>">
    		<i class="socicon-twitter"></i>
    	</a> <?php
	}
	if ( $facebook ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $facebook ) ); ?>">
			<i class="socicon-facebook"></i>
		</a> <?php
	}
	if ( $instagram ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $instagram ) ); ?>">
			<i class="socicon-instagram"></i>
		</a> <?php
	}
	if ( $pinterest ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $pinterest ) ); ?>">
			<i class="socicon-pinterest"></i>
		</a> <?php
	}
	if ( $youtube ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $youtube ) ); ?>">
			<i class="socicon-youtube"></i>
		</a> <?php
	}
	if ( $vimeo ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $vimeo ) ); ?>">
			<i class="socicon-vimeo"></i>
		</a> <?php
	}
	if ( $tumblr ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $tumblr ) ); ?>">
			<i class="socicon-tumblr"></i>
		</a> <?php
	}
	if ( $bloglovin ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $bloglovin ) ); ?>">
			<i class="socicon-bloglovin"></i>
		</a> <?php
	}
	if ( $linkedin ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $linkedin ) ); ?>">
			<i class="socicon-linkedin"></i>
		</a> <?php
	}
	if ( $google ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $google ) ); ?>">
			<i class="socicon-googleplus"></i>
		</a> <?php
	}
	if ( $vk ) { ?>
		<a target="_blank" href="<?php esc_url( blggn_url_strpos( $vk ) ); ?>">
			<i class="socicon-vkontakte"></i>
		</a> <?php
	}
	if ( $mail ) { ?>
		<a target="_top" href="mailto:<?php echo wp_kses_post( $mail ); ?>">
			<i class="socicon-mail"></i>
		</a> <?php
	}

}

/*--------------------------------------------------------------
# Read Counter
--------------------------------------------------------------*/
function blggn_reading_count() {
	$post = get_post();
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = ceil($word_count / 200) . '&nbsp;';
    $totalreadingtime = $readingtime;
    return $totalreadingtime;
}

/*--------------------------------------------------------------
# Views Counter
--------------------------------------------------------------*/
function blggn_setPostViews($postID) {
	$count_key = 'post_views_count';
	$count     = get_post_meta($postID, $count_key, true);
	if($count == ''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
function blggn_getPostViews($postID) {
	$count_key = 'post_views_count';
	$count     = blggn_count_format( get_post_meta($postID, $count_key, true) );
	if ($count == '' || $count == 0 ) {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return '0 ';
	}
	return $count . '&nbsp;';
}

/*--------------------------------------------------------------
# Social Media
--------------------------------------------------------------*/
function blggn_social_media() {
    $twitter 			= get_theme_mod( 'social_twitter', esc_url( 'https://twitter.com' ) );
    $facebook 			= get_theme_mod( 'social_facebook', esc_url( 'https://facebook.com' ) );
    $instagram 			= get_theme_mod( 'social_instagram', esc_url( 'https://instagram.com' ) );
    $pinterest 			= get_theme_mod( 'social_pinterest', esc_url( 'https://pinterest.com' ) );
    $youtube 			= get_theme_mod( 'social_youtube', esc_url( 'https://youtube.com' ) );
    $vimeo  			= get_theme_mod( 'social_vimeo' );
    $tumblr 			= get_theme_mod( 'social_tumblr' );
    $bloglovin 			= get_theme_mod( 'social_bloglovin' );
    $linkedin 			= get_theme_mod( 'social_linkedin' );
    $snapchat 			= get_theme_mod( 'social_snapchat' );
    $google 			= get_theme_mod( 'social_googleplus' );
    $vk 	 			= get_theme_mod( 'social_vk' );
    $email  			= get_theme_mod( 'social_email' );

    ?>

    <?php if( $twitter ) : ?>
    	<a href="<?php echo wp_kses_post( $twitter ); ?>" target="_blank" title="<?php echo esc_attr( 'Twitter', 'blggn' ); ?>">
    		<i class="socicon-twitter"></i>
    	</a>
    <?php endif; ?>
    <?php if( $facebook ) : ?>
    	<a href="<?php echo wp_kses_post( $facebook ); ?>" target="_blank" title="<?php echo esc_attr( 'Facebook', 'blggn' ); ?>">
    		<i class="socicon-facebook"></i>
    	</a>
    <?php endif; ?>
    <?php if( $instagram ) : ?>
    	<a href="<?php echo wp_kses_post( $instagram ); ?>" target="_blank" title="<?php echo esc_attr( 'Instagram', 'blggn' ); ?>">
    		<i class="socicon-instagram"></i>
    	</a>
    <?php endif; ?>
    <?php if( $pinterest ) : ?>
    	<a href="<?php echo wp_kses_post( $pinterest ); ?>" target="_blank" title="<?php echo esc_attr( 'Pinterest', 'blggn' ); ?>">
    		<i class="socicon-pinterest"></i>
    	</a>
    <?php endif; ?>
    <?php if( $youtube ) : ?>
    	<a href="<?php echo wp_kses_post( $youtube ); ?>" target="_blank" title="<?php echo esc_attr( 'Youtube', 'blggn' ); ?>">
    		<i class="socicon-youtube"></i>
    	</a>
    <?php endif; ?>
    <?php if( $vimeo ) : ?>
    	<a href="<?php echo wp_kses_post( $vimeo ); ?>" target="_blank" title="<?php echo esc_attr( 'Vimeo', 'blggn' ); ?>">
    		<i class="socicon-vimeo"></i>
    	</a>
    <?php endif; ?>
    <?php if( $tumblr ) : ?>
    	<a href="<?php echo wp_kses_post( $tumblr ); ?>" target="_blank" title="<?php echo esc_attr( 'Tumblr', 'blggn' ); ?>">
    		<i class="socicon-tumblr"></i>
    	</a>
    <?php endif; ?>
    <?php if( $bloglovin ) : ?>
    	<a href="<?php echo wp_kses_post( $bloglovin ); ?>" target="_blank" title="<?php echo esc_attr( 'Bloglovin', 'blggn' ); ?>">
    		<i class="socicon-bloglovin"></i>
    	</a>
    <?php endif; ?>
    <?php if( $linkedin ) : ?>
    	<a href="<?php echo wp_kses_post( $linkedin ); ?>" target="_blank" title="<?php echo esc_attr( 'Linkedin', 'blggn' ); ?>">
    		<i class="socicon-linkedin"></i>
    	</a>
    <?php endif; ?>
    <?php if( $snapchat ) : ?>
    	<a href="<?php echo wp_kses_post( $snapchat ); ?>" target="_blank" title="<?php echo esc_attr( 'Snapchat', 'blggn' ); ?>">
    		<i class="socicon-snapchat"></i>
    	</a>
    <?php endif; ?>
    <?php if( $google ) : ?>
    	<a href="<?php echo wp_kses_post( $google ); ?>" target="_blank" title="<?php echo esc_attr( 'Google+', 'blggn' ); ?>">
    		<i class="socicon-googleplus"></i>
    	</a>
    <?php endif; ?>
    <?php if( $vk ) : ?>
    	<a href="<?php echo wp_kses_post( $vk ); ?>" target="_blank" title="<?php echo esc_attr( 'VK', 'blggn' ); ?>">
    		<i class="socicon-vkontakte"></i>
    	</a>
    <?php endif; ?>
    <?php if( $email ) : ?>
    	<a href="mailto:<?php echo wp_kses_post( $email ); ?>" target="_top">
    		<i class="socicon-mail"></i>
    	</a>
    <?php endif; ?> <?php
}

/*--------------------------------------------------------------
# Social Share
--------------------------------------------------------------*/
function blggn_social_share() {
	$show_share 		= get_theme_mod('post_share', true);
	$facebook 			= get_theme_mod('show_share_face', true);
	$twitter 			= get_theme_mod('show_share_twitter', true);
	$twitter_user 		= get_theme_mod('twitter_username');
	$email 				= get_theme_mod('show_share_email', true);
	$pinterest 			= get_theme_mod('show_share_pin', false);
	$google 			= get_theme_mod('show_share_google', false);
	$whatsup 			= get_theme_mod('show_share_whatsup', false);

	if ($show_share == true) { ?>
		<div class="social-share">

			<span class="post-cat text-light"><?php esc_html_e( 'Share', 'blggn' ); ?></span>

			<?php if ($facebook == true) { ?>
				<a class="share-face share-link"
					data-href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
					data-width="526" data-height="680" target="_blank"
					alt="<?php esc_attr_e( 'Share on Facebook', 'blggn' ); ?>"
					title="<?php esc_attr_e( 'Share on Facebook', 'blggn' ); ?>">
					<i class="socicon-facebook"></i>
				</a>
			<?php } ?>

			<?php if ($twitter == true) { ?>
				<a class="share-twitter share-link"
					data-href="https://twitter.com/intent/tweet?text=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&url=<?php the_permalink(); ?>&via=<?php echo $twitter_user ? $twitter_user : get_bloginfo( 'name' ); ?>"
					data-width="635" data-height="253" target="_blank"
					alt="<?php esc_attr_e( 'Share on Twitter', 'blggn' ); ?>"
					title="<?php esc_attr_e( 'Share on Twitter', 'blggn' ); ?>">
					<i class="socicon-twitter"></i>
				</a>
			<?php } ?>

			<?php if ($pinterest == true) { ?>
				<a class="share-pin share-link" data-href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>&media=<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); echo esc_url( $thumb[0] ); ?>&description=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>"
					data-width="750" data-height="750" target="_blank"
					alt="<?php esc_attr_e( 'Share on Pinterest', 'blggn' ); ?>"
					title="<?php esc_attr_e( 'Share on Pinterest', 'blggn' ); ?>">
					<i class="socicon-pinterest"></i>
				</a>
			<?php } ?>

			<?php if ($email == true) { ?>
				<a class="share-email share-link"
					href="mailto:?subject=<?php the_title(); ?>&amp;body=<?php the_permalink(); ?>."
			   		title="<?php esc_attr_e('Share by Email', 'blggn'); ?>"
					alt="<?php esc_attr_e('Share by Email', 'blggn'); ?>">
			  		<i class="socicon-mail"></i>
				</a>
			<?php } ?>

			<?php if ($google == true) { ?>
				<a class="share-gplus share-link"
					data-href="http://plus.google.com/share?url=<?php the_permalink(); ?>"
					data-width="400" data-height="620" target="_blank"
					alt="<?php esc_attr_e( 'Share on Google+', 'blggn' ); ?>"
					title="<?php esc_attr_e( 'Share on Google+', 'blggn' ); ?>">
					<i class="socicon-googleplus"></i>
				</a>
			<?php } ?>

			<?php if ($whatsup == true) { ?>
				<a class="share-whatsapp"
					href="https://api.whatsapp.com/send?text=<?php echo urlencode( get_the_permalink() ); ?>" target="_blank">
					<i class="socicon-whatsapp"></i>
				</a>
			<?php } ?>

		</div> <?php
	}
}
