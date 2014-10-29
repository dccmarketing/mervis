<?php if ( has_nav_menu( 'personal-side-menu' ) ) {
					
	$menu['theme_location']		= 'personal-side-menu';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-personal-side-menu';
	$menu['container_class'] 	= 'menu nav-personal-side-menu';
	$menu['menu_id']         	= 'menu-personal-side-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>