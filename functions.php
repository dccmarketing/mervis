<?php

/** ______________________________ HTML5 THEME SEARCH ______________________________ */
add_theme_support('html5', array('search-form'));


/** ______________________________ REGISTER MENU ______________________________ */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'belowslider' => __( 'Below Slider' ),
      'home-about' => __( 'Home About Menu' ),
      'home-personal' => __( 'Home Personal Menu' ),
      'home-industrial' => __( 'Home Industrial Menu' ),
      'home-education' => __( 'Home Education Menu' ),
      'android-footer' => __( 'Android Footer Location' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );



/** ______________________________ REGISTER WIDGET ______________________________ */
function mervis_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'mervis' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'mervis_widgets_init' );



/** ______________________________ CUSTOM POST TYPES ______________________________ */
add_action( 'init', 'create_my_post_types' );
function create_my_post_types() {
	register_post_type( 'pricing', array(
		'labels' => array(
			'name' => __( 'Pricing' ),
			'singular_name' => __( 'Pricing' )
		),
		'public' => true,
	));
	register_post_type( 'notifications', array(
		'labels' => array(
			'name' => __( 'Notifications' ),
			'singular_name' => __( 'Notifications' )
		),
		'public' => true,
	));
	register_post_type( 'offers', array(
		'labels' => array(
			'name' => __( 'Offers' ),
			'singular_name' => __( 'Offers' )
		),
		'public' => true,
	));
	register_post_type( 'locations', array(
		'labels' => array(
			'name' => __( 'Locations' ),
			'singular_name' => __( 'Locations' )
		),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
                'taxonomies' => array( 'project-cat' ),
        'has_archive' => 'location'
	));
}

//Add new taxonomy upon WordPress initialization
add_action( 'init', 'project_create_taxonomies', 0 );

function project_create_taxonomies(){
    // Project Categories
    register_taxonomy('project-cat',array('project'),array(
        'hierarchical' => true,
        'label' => 'States',
        'singular_name' => 'States',
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'project-cat' )
    ));
}

function new_excerpt_more($more) {

	global $post;
	return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';

}

add_filter('excerpt_more', 'new_excerpt_more');



/** ______________________________ TABBY STYLES ______________________________ */
remove_action('wp_print_styles', 'cc_tabby_css', 30);



/** ______________________________ Brand WP Login Page ______________________________ */
	function customize_login_url($url) {return get_bloginfo( 'url' );}
	function customize_login_title() {return get_option('blogname');}
	function customize_login_logo() {
		echo '<style type="text/css">
			.login h1 a {
			background-image:url(/images/logo-be.jpg) !important;
			background-position: center center !important;
			background-size: 139px 103px;
			width: 139px !important;
			height: 103px !important;
		} </style>';
	}
	add_filter('login_headerurl', 'customize_login_url');
	add_filter('login_headertitle', 'customize_login_title');
	add_action('login_head', 'customize_login_logo');


/**
 * Enqueue scripts and styles.
 */
function mervis_scripts() {

	wp_enqueue_style( 'mervis-style', get_template_directory_uri() . '/style.css', array( 'dashicons' ) );

	wp_enqueue_script( 'mervis-public-script', get_template_directory_uri() . '/js/public.min.js', array( 'jquery', 'jquery-ui-accordion' ) );
	wp_enqueue_script( 'mervis-nav-script', get_template_directory_uri() . '/js/navigation.min.js', array(), '20130115', true );
	wp_enqueue_script( 'mervis-maps', 'https://maps.googleapis.com/maps/api/js?sensor=false' );
	wp_register_style( 'fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome' );

} // mervis_scripts()
add_action( 'wp_enqueue_scripts', 'mervis_scripts' );

/**
 * Prints whatever in a nice, readable format
 *
 * @param 	mixed 		$input 		Something to pretty print, usually an array or object
 *
 * @return 	mixed 					The input between pre tags and in print_r()
 */
function pretty( $input ) {

	echo '<pre>'; print_r( $input ); echo '</pre>';

} // pretty()

/**
 * Returns the URL for the page header
 *
 * Looks for a header image for the current page
 * If there isn't one, it grabs the parent's header image
 *
 * @param 	int 	$pageID 		The page ID
 *
 * @return 	URL 					The URL for the page header image
 */
function get_pageheader_bg( $pageID ) {

	$image = get_field( 'pageheader', $pageID );

	if ( ! empty( $image ) ) { return $image; }

	$ancestors 	= get_post_ancestors( $pageID );
	$image 		= get_field( 'pageheader', $ancestors[0] );

	if ( ! empty( $image ) ) { return $image; }

} // get_pageheader_bg()

/**
 * Insert icons into Android Menu
 *
 * @link 	http://www.billerickson.net/customizing-wordpress-menus/
 *
 * @param 	string 		$item_output		//
 * @param 	object 		$item				//
 * @param 	int 		$depth 				//
 * @param 	array 		$args 				//
 *
 * @return 	string 							modified menu
 */
function mervis_android_menu_svgs( $item_output, $item, $depth, $args ) {

	if ( 'android-footer' !== $args->theme_location ) { return $item_output; }

	$class = '';

	//pretty( $item );

	$output = '<a href="' . $item->url . '" class="icon-menu ' . $class . '">';
	$icon 	= mervis_get_svg_by_class( $item->classes );
	$output .= $icon;
	$output .= '<span class="menu-icon-label ' . $class . '">' . $item->title . '</span>';
	$output .= '</a>';

	return $output;

} // cmofil_sidebar_menu_svgs()
add_filter( 'walker_nav_menu_start_el', 'mervis_android_menu_svgs', 10, 4 );

/**
 * Gets the appropriate SVG based on a menu item class
 *
 * @param  [type] $url [description]
 * @return [type]      [description]
 */
function mervis_get_svg_by_class( $classes ) {

	$output = '';

	foreach ( $classes as $class ) {

		$check = mervis_get_svg( $class );

		if ( ! is_null( $check ) ) { $output .= $check; break; }

	} // foreach

	return $output;

} // mervis_get_svg_by_class()

/**
 * Returns the requested SVG icon
 *
 * @param  [type] $icon [description]
 * @return [type]       [description]
 */
function mervis_get_svg( $icon ) {

	$return = '';

	switch ( $icon ) {

		case 'bubble'			: $return = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" class="bubble"><path d="M50 74.5c-2.5 0-4.9-0.2-7.3-0.4 -6.6 5.8-14.4 9.9-23.1 12.2 -1.8 0.5-3.8 0.9-5.7 1.1 -0.1 0-0.2 0-0.3 0 -1 0-1.9-0.8-2.2-1.9 0-0.1 0-0.1 0-0.1 -0.3-1.3 0.6-2 1.4-2.9C16 79 19.6 76 22 67.6c-10.3-5.9-17-15-17-25.2 0-17.8 20.1-32.1 45-32.1s45 14.4 45 32.1S74.9 74.5 50 74.5zM11.4 42.4c0 7.5 5 14.6 13.7 19.5l4.4 2.5 -1.4 4.8c-1 3.6-2.2 6.3-3.5 8.6 5.1-2.1 9.7-5 13.8-8.6l2.2-1.9 2.9 0.3c2.2 0.3 4.4 0.4 6.5 0.4 20.9 0 38.6-11.8 38.6-25.7S70.9 16.7 50 16.7 11.4 28.4 11.4 42.4z"/><rect x="31.2" y="49.3" width="40" height="4"/><rect x="31.2" y="31.4" width="40" height="4"/><rect x="31.2" y="40.2" width="32" height="4"/></svg>'; break;
		case 'calculator'		: $return = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" class="calculator"><path d="M91.8 88.6c0 3.5-2.9 6.4-6.4 6.4H14.6c-3.5 0-6.4-2.9-6.4-6.4V11.4c0-3.5 2.9-6.4 6.4-6.4h70.7c3.5 0 6.4 2.9 6.4 6.4V88.6zM85.4 14.6c0-1.8-1.5-3.2-3.2-3.2H17.9c-1.8 0-3.2 1.5-3.2 3.2v12.9c0 1.8 1.5 3.2 3.2 3.2h64.3c1.8 0 3.2-1.5 3.2-3.2V14.6zM21.1 37.1c-3.6 0-6.4 2.9-6.4 6.4s2.9 6.4 6.4 6.4 6.4-2.9 6.4-6.4S24.6 37.1 21.1 37.1zM21.1 56.4c-3.6 0-6.4 2.9-6.4 6.4 0 3.6 2.9 6.4 6.4 6.4s6.4-2.9 6.4-6.4C27.5 59.3 24.6 56.4 21.1 56.4zM21.1 75.7c-3.6 0-6.4 2.9-6.4 6.4 0 3.6 2.9 6.4 6.4 6.4s6.4-2.9 6.4-6.4C27.5 78.6 24.6 75.7 21.1 75.7zM40.4 37.1c-3.6 0-6.4 2.9-6.4 6.4s2.9 6.4 6.4 6.4 6.4-2.9 6.4-6.4S43.9 37.1 40.4 37.1zM40.4 56.4c-3.6 0-6.4 2.9-6.4 6.4 0 3.6 2.9 6.4 6.4 6.4s6.4-2.9 6.4-6.4C46.8 59.3 43.9 56.4 40.4 56.4zM40.4 75.7c-3.6 0-6.4 2.9-6.4 6.4 0 3.6 2.9 6.4 6.4 6.4s6.4-2.9 6.4-6.4C46.8 78.6 43.9 75.7 40.4 75.7zM59.6 37.1c-3.6 0-6.4 2.9-6.4 6.4s2.9 6.4 6.4 6.4c3.6 0 6.4-2.9 6.4-6.4S63.2 37.1 59.6 37.1zM59.6 56.4c-3.6 0-6.4 2.9-6.4 6.4 0 3.6 2.9 6.4 6.4 6.4 3.6 0 6.4-2.9 6.4-6.4C66.1 59.3 63.2 56.4 59.6 56.4zM59.6 75.7c-3.6 0-6.4 2.9-6.4 6.4 0 3.6 2.9 6.4 6.4 6.4 3.6 0 6.4-2.9 6.4-6.4C66.1 78.6 63.2 75.7 59.6 75.7zM78.9 37.1c-3.6 0-6.4 2.9-6.4 6.4s2.9 6.4 6.4 6.4c3.6 0 6.4-2.9 6.4-6.4S82.5 37.1 78.9 37.1zM85.4 62.9c0-3.5-2.9-6.4-6.4-6.4s-6.4 2.9-6.4 6.4v19.3c0 3.5 2.9 6.4 6.4 6.4s6.4-2.9 6.4-6.4V62.9z"/></svg>'; break;
		case 'dollar-sign'		: $return = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" class="dollar-sign"><path d="M55.4 84v8.8c0 0.9-0.7 1.6-1.6 1.6H47c-0.9 0-1.6-0.7-1.6-1.6V84c-11.8-1.7-18.2-8.7-18.4-9 -0.5-0.6-0.6-1.5-0.1-2.1l5.2-6.8c0.3-0.4 0.7-0.6 1.2-0.6 0.5-0.1 0.9 0.1 1.2 0.5 0.1 0.1 7.1 6.8 16 6.8 4.9 0 10.2-2.6 10.2-8.3 0-4.8-5.9-7.2-12.7-9.9 -9-3.6-20.3-8.1-20.3-20.7 0-9.2 7.2-16.9 17.7-18.9V6c0-0.9 0.8-1.6 1.6-1.6h6.8c0.9 0 1.6 0.7 1.6 1.6v8.8C65.6 16 71 21.5 71.2 21.7c0.5 0.6 0.6 1.3 0.3 1.9L67.4 31c-0.2 0.5-0.7 0.8-1.2 0.8 -0.5 0.1-1-0.1-1.4-0.4 -0.1-0.1-6.1-5.4-13.7-5.4 -6.4 0-10.8 3.2-10.8 7.7 0 5.3 6.1 7.7 13.3 10.4 9.2 3.6 19.7 7.6 19.7 19.7C73.4 74.2 66.1 82.2 55.4 84z"/></svg>'; break;
		case 'map-marker'		: $return = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" class="map-marker"><path d="M76.7 45.5L56.4 88.7c-1.2 2.5-3.7 4-6.4 4s-5.2-1.5-6.4-4L23.3 45.5c-1.5-3.1-1.8-6.6-1.8-10C21.4 19.8 34.2 7 50 7s28.6 12.8 28.6 28.6C78.6 39 78.2 42.5 76.7 45.5zM50 21.3c-7.9 0-14.3 6.4-14.3 14.3S42.1 49.8 50 49.8s14.3-6.4 14.3-14.3S57.9 21.3 50 21.3z"/></svg>'; break;
		case 'unordered-list'	: $return = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" class="unordered-list"><path d="M14.6 33.9c-5.3 0-9.6-4.3-9.6-9.6s4.3-9.6 9.6-9.6 9.6 4.3 9.6 9.6S20 33.9 14.6 33.9zM14.6 59.6C9.3 59.6 5 55.3 5 50c0-5.3 4.3-9.6 9.6-9.6s9.6 4.3 9.6 9.6C24.3 55.3 20 59.6 14.6 59.6zM14.6 85.4C9.3 85.4 5 81 5 75.7c0-5.3 4.3-9.6 9.6-9.6s9.6 4.3 9.6 9.6C24.3 81 20 85.4 14.6 85.4zM95 29.1c0 0.9-0.8 1.6-1.6 1.6H32.3c-0.9 0-1.6-0.8-1.6-1.6v-9.6c0-0.9 0.8-1.6 1.6-1.6h61.1c0.9 0 1.6 0.8 1.6 1.6V29.1zM95 54.8c0 0.9-0.8 1.6-1.6 1.6H32.3c-0.9 0-1.6-0.8-1.6-1.6v-9.6c0-0.9 0.8-1.6 1.6-1.6h61.1c0.9 0 1.6 0.8 1.6 1.6V54.8zM95 80.5c0 0.9-0.8 1.6-1.6 1.6H32.3c-0.9 0-1.6-0.8-1.6-1.6v-9.6c0-0.9 0.8-1.6 1.6-1.6h61.1c0.9 0 1.6 0.8 1.6 1.6V80.5z"/></svg>'; break;

	}

	return $return;

} //

/**
 * Returns a post object of the requested post type
 *
 * @param 	string 		$post 			The name of the post type
 * @param   array 		$params 		Optional parameters
 * @return 	object 		A post object
 */
function mervis_get_posts( $post, $params = array() ) {

	$return = '';
	$return = wp_cache_get( 'mervis_' . $post . '_posts', 'mervis_cpts' );

	if ( false === $return ) {

		$args['post_type'] 				= $post;
		$args['post_status'] 			= 'publish';
		$args['order_by'] 				= 'date';
		$args['posts_per_page'] 		= 50;
		$args['no_found_rows']			= true;
		$args['update_post_meta_cache'] = false;
		$args['update_post_term_cache'] = false;

		if ( ! empty( $params ) ) {

			foreach ( $params as $key => $value ) {

				$args[$key] = $value;

			}

		}

		$query = new WP_Query( $args );

		if ( ! is_wp_error( $query ) && $query->have_posts() ) {

			wp_cache_set( 'mervis_' . $post . '_posts', $query, 'mervis_cpts', 5 * MINUTE_IN_SECONDS );

			$return = $query;

		}

	}

	return $return;

} // mervis_get_posts()

/**
 * Load Android functions
 */
require get_template_directory() . '/includes/android.php';

/**
 * Load Slushman Themekit
 */
require get_template_directory() . '/includes/themekit.php';



