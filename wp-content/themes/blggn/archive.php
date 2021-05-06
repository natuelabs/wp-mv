<?php
get_header();

	if( is_category() ) {
		get_template_part( 'parts/archive/cat-header' );
	} else {
		get_template_part( 'parts/archive/archive-header' );
	}

	 get_template_part( 'parts/post/content', 'archive' );

get_footer();
?>
