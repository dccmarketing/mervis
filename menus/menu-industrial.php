<?php if ( has_nav_menu( 'industrial-side-menu' ) ) {
					
	$menu['theme_location']		= 'industrial-side-menu';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-industrial-side-menu';
	$menu['container_class'] 	= 'menu nav-industrial-side-menu';
	$menu['menu_id']         	= 'menu-industrial-side-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>