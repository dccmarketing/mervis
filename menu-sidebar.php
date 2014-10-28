<?php if ( has_nav_menu( 'sidebar-menu' ) ) {
					
	$menu['theme_location']		= 'sidebar-menu';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-sidebar-menu';
	$menu['container_class'] 	= 'menu nav-sidebar-menu';
	$menu['menu_id']         	= 'menu-sidebar-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>