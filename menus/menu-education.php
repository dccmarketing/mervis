<?php if ( has_nav_menu( 'home-education' ) ) {
					
	$menu['theme_location']		= 'home-education';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-home-education-menu';
	$menu['container_class'] 	= 'menu nav-home-education-menu';
	$menu['menu_id']         	= 'menu-home-education-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>