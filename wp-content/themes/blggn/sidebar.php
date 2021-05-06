<?php

if( function_exists( 'is_cart' ) && is_cart() ) {
	$sidebar = '';
} elseif( function_exists( 'is_checkout' ) && is_checkout() ) {
	$sidebar = '';
} elseif( function_exists( 'is_account_page' ) && is_account_page() ) {
	$sidebar = '';
} elseif( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
	$sidebar = 'shop-sidebar';
} elseif( is_single() && get_theme_mod( 'global_sidebar_post' ) == 'no-sidebar' && blggn_get_field( 'sidebar_post_layout' ) == false ) {
	$sidebar = '';
} elseif( is_category() && get_theme_mod( 'global_sidebar_post' ) == 'no-sidebar' && blggn_get_field( 'sidebar_cat_layout' ) == false ) {
	$sidebar = '';
} elseif( is_page() && get_theme_mod( 'global_sidebar_page' ) == 'no-sidebar' && blggn_get_field( 'sidebar_page_layout' ) == false ) {
	$sidebar = '';
} elseif( is_single() && blggn_get_field( 'sidebar_post_layout' ) == 'no-sidebar' ) {
	$sidebar = '';
} elseif( is_category() && blggn_get_field( 'sidebar_cat_layout', get_queried_object() ) == 'no-sidebar' ) {
	$sidebar = '';
} elseif( is_page() && blggn_get_field( 'sidebar_page_layout' ) == 'no-sidebar' ) {
	$sidebar = '';
} else {
	$sidebar = 'sidebar';
}

?>

<?php if ( is_active_sidebar( $sidebar ) ) { ?>
	<aside class="widget-area">
		<?php dynamic_sidebar( $sidebar ); ?>
	</aside>
<?php } ?>
