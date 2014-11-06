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
    )
  );
}
add_action( 'init', 'register_my_menus' );



/** ______________________________ REGISTER WIDGET ______________________________ */
register_sidebar( array(
    'name'         => __( 'androidsearch' ),
    'id'           => 'androidsearch',
    'description'  => __( 'Android Drill Down Widget.' ),
    'before_title' => '<h1>',
    'after_title'  => '</h1>',
) );



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

function project_create_taxonomies() 
{
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

/**
 * Search Results
 * 
 * @return [type] [description]
 */
function search_excerpt_highlight() {
    $excerpt = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . $keys .')/iu', '<span class="search-highlight">\0</span>', $excerpt);

    echo '<p>' . $excerpt . '</p>';
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

	wp_enqueue_style( 'mervis-reset-style', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'mervis-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'mervis-font-style', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'mervis-fluidity-style', get_template_directory_uri() . '/css/fluidity.css' );
	wp_enqueue_style( 'mervis-animate-style', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'mervis-hover-style', get_template_directory_uri() . '/css/hover.css' );
	wp_enqueue_style( 'mervis-jqueryui-style', get_template_directory_uri() . '/css/jquery-ui.css' );

	wp_enqueue_script( 'mervis-public-script', get_template_directory_uri() . '/js/public.js', array( 'jquery', 'jquery-ui-accordion' ) );
	wp_enqueue_script( 'mervis-nav-script', get_template_directory_uri() . '/js/navigation.min.js', array(), '20130115', true );

	// <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

} // mervis_scripts()
add_action( 'wp_enqueue_scripts', 'mervis_scripts' );

/**
 * Load Fonts
 */
function load_fonts() {

	wp_register_style( 'fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome' );

} // load_fonts()
add_action( 'wp_print_styles', 'load_fonts' );

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

