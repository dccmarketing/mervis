<?php

/** ______________________________ HTML5 THEME SEARCH ______________________________ */
add_theme_support('html5', array('search-form'));


/** ______________________________ REGISTER MENU ______________________________ */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'belowslider' => __( 'Below Slider' ),
      'top-tabs-menu' => __( 'Top Tabs Menu' )
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


/** ______________________________ HEADER TREE ______________________________ */
function is_tree($pid) {
  global $post;

  $ancestors = get_post_ancestors($post->$pid);
  $root = count($ancestors) - 1;
  $parent = $ancestors[$root];

  if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors))) {
    return true;
  } else {
    return false;
  }
}



/** ______________________________ SEARCH RESULTS ______________________________ */
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

	wp_enqueue_style( 'mervis-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'mervis-font-style', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'mervis-fluidity-style', get_template_directory_uri() . '/css/fluidity.css' );
	wp_enqueue_style( 'mervis-reset-style', get_template_directory_uri() . '/css/reset.css' );
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



function add_header_images() {

	echo '<style>';

	$trees = array( 153, 165, 136, 126, 124, 122, 118, 506, 511, 513, 515 );

	foreach ( $trees as $tree ) {

		if ( is_tree( $tree ) ) {

			echo '.pageheader{background-image:url(' . get_field( "pageheader", $tree ) . ');}';

		}

	} // foreach

	echo '</style>';

} // add_header_images()

add_action( 'wp_footer', 'add_header_images' );


