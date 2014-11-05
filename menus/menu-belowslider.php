<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle"><?php _e( 'Menu' ); ?></button><?php

if ( has_nav_menu( 'belowslider' ) ) {
					
	$menu['theme_location']		= 'belowslider';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-belowslider';
	$menu['container_class'] 	= 'menu nav-belowslider';
	$menu['menu_id']         	= 'menu-belowslider-items';
	$menu['menu_class']      	= 'menu-items medium upper';
	$menu['depth']           	= 2;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>
</nav><!-- .site-navigation -->