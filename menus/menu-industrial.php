<?php if ( has_nav_menu( 'home-industrial' ) ) {
					
	$menu['theme_location']		= 'home-industrial';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-home-industrial-menu';
	$menu['container_class'] 	= 'menu nav-home-industrial-menu';
	$menu['menu_id']         	= 'menu-home-industrial-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>