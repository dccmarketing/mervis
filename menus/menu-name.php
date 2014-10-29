<?php if ( has_nav_menu( 'name-side-menu' ) ) {
					
	$menu['theme_location']		= 'name-side-menu';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-name-side-menu';
	$menu['container_class'] 	= 'menu nav-name-side-menu';
	$menu['menu_id']         	= 'menu-name-side-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>