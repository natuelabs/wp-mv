<?php

function blggn_ocdi_import_files() {
	return array(

		array(
	      'import_file_name'             => esc_html__( 'Import Demo Content', 'blggn' ),
	      'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/theme-setup/demo/content.xml',
	      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/theme-setup/demo/widgets.wie',
	      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/theme-setup/demo/customizer.dat',
	    ),
	);
}
add_filter( 'pt-ocdi/import_files', 'blggn_ocdi_import_files' );

function blggn_processed_import_post( $post_id ) {
	wp_remove_object_terms( $post_id, 'uncategorized', 'category' );
}
add_action( 'wxr_importer.processed.post', 'blggn_processed_import_post', 10, 1 );

// Disable OCDI Branding
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
