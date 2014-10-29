<?php if ( has_nav_menu( 'education-side-menu' ) ) {
					
	$menu['theme_location']		= 'education-side-menu';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-education-side-menu';
	$menu['container_class'] 	= 'menu nav-education-side-menu';
	$menu['menu_id']         	= 'menu-education-side-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>