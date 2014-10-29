<?php

$menu = '';
$parents = get_post_ancestors( $post );

if ( !empty( $parents ) ) {

	$title = get_the_title( $parents[0] );

	switch( $title ) {

		case 'Recycling Education': $menu = 'education'; break;
		case 'Industrial Recycling': $menu = 'industrial'; break;
		case 'Mervis Behind the Name': $menu = 'name'; break;
		case 'Personal Recycling': $menu = 'personal'; break;

	} // switch

	get_template_part( 'menu', $menu );

}

?>