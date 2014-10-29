<?php if ( has_nav_menu( 'top-tabs-menu' ) ) {
					
	$menu['theme_location']		= 'top-tabs-menu';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-top-tabs-menu';
	$menu['container_class'] 	= 'menu nav-top-tabs-menu';
	$menu['menu_id']         	= 'menu-top-tabs-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>