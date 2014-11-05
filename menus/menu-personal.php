<?php if ( has_nav_menu( 'home-personal' ) ) {
					
	$menu['theme_location']		= 'home-personal';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-home-personal-menu';
	$menu['container_class'] 	= 'menu nav-home-personal-menu';
	$menu['menu_id']         	= 'menu-home-personal-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>