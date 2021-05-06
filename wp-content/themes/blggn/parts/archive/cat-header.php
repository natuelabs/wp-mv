<div class="page-header" style="background-image:url(<?php echo esc_html( blggn_get_field( 'cat_header_image', get_queried_object() ) ); ?>);">
	<div class="container">
		<div class="page-header-content">
			<?php if( get_theme_mod( 'global_page_header_title', true ) == true && blggn_get_field( 'hide_cat_header_title', get_queried_object() ) == false ) : ?>
				<h1 class="page-title">
					<?php printf( esc_html__( '%s', 'blggn' ), single_cat_title( '', false ) ); ?>
				</h1>
			<?php endif; ?>

			<?php if( get_theme_mod( 'global_page_header_title', true ) == true && blggn_get_field( 'hide_cat_header_list', get_queried_object() ) == false ) : ?>
				<div class="category-cat-list">
					<?php

						$count = count( get_categories( array(
							'parent' => 0,
							'hide_empty' => 0
						)));

						if ( $count > 1 ) {

							$current = get_category( get_query_var('cat') );
							$current_id = $current->term_id; ?>

							<ul class="list-categories">
								<?php
								wp_list_categories( array(
									'echo' => true,
									'current_category' => $current_id,
									'title_li' => '',
								));
								?>
							</ul>
							<?php

						} else {
							the_page_title();
						}

						if ( category_description() ) {
							?>
							<div class="category-description">
								<?php echo category_description(); ?>
							</div>
							<?php
						} ?>
				</div>
			<?php endif; ?>

		</div>
	</div>
</div>
