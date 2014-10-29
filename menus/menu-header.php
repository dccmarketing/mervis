<?php if ( has_nav_menu( 'header-menu' ) ) {
					
	$menu['theme_location']		= 'header-menu';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-header-menu';
	$menu['container_class'] 	= 'menu nav-header-menu';
	$menu['menu_id']         	= 'menu-header-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>