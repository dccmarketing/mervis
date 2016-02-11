<?php if ( has_nav_menu( 'android-footer' ) ) {

	$menu['theme_location']		= 'android-footer';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-android';
	$menu['container_class'] 	= 'menu nav-android';
	$menu['menu_id']         	= 'menu-android-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>