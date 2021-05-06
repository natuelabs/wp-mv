<?php

$custom_layout = blggn_get_field( 'custom_cat_layout', get_queried_object() );
if ($custom_layout == '1') $layout = blggn_get_field( 'cat_posts_layout', get_queried_object() );
if ( empty($layout) ) $layout = get_theme_mod( 'global_layout_archive', 'list' );
$pagination = get_theme_mod('global_cat_pagination', 'numeric');

?>

		<div class="container">
			<div class="row">

				<div class="content-area">

					<?php
						if ( is_author() ) {
							get_template_part( 'parts/post/post-author' );
						}
					?>

					<div class="voss-posts voss-ajax-<?php echo esc_html( $pagination ); ?>">
					    <div class="voss-layout-<?php echo esc_html( $layout ); ?>"> <?php

					    	if ( have_posts() ) {

								while ( have_posts() ) : the_post();
					    			if( in_array( $layout, array( 'list', 'grid', 'full' ) ) ) {
					                    get_template_part( 'parts/post/content', $layout );
					    			}
								endwhile;

								if (is_search()) { ?>
									<section class="no-results another-search">
										<p><?php echo esc_html__('If you are not happy with the results above please do another search.', 'blggn'); ?></p>
										<?php get_search_form(); ?>
							        </section> <?php
								}

							} else {
								get_template_part( 'parts/post/content', 'none' );
							} ?>

					    </div>

					    <?php blggn_pagination( $pagination ); ?>

					</div>

				</div>

			<?php get_sidebar(); ?>

		</div>
		</div>
