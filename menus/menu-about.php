<?php if ( has_nav_menu( 'home-about' ) ) {
					
	$menu['theme_location']		= 'home-about';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-home-about-menu';
	$menu['container_class'] 	= 'menu nav-home-about-menu';
	$menu['menu_id']         	= 'menu-home-about-menu-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>