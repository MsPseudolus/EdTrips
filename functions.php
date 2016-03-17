<?php

/**
 * edtrips functions and definitions
 *
 * @package edtrips
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'edtrips_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function edtrips_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on edtrips, use a find and replace
	 * to change 'edtrips' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'edtrips', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'edtrips' ),
		'footer-nav' => __( 'Footer Menu', 'edtrips' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'edtrips_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // edtrips_setup
add_action( 'after_setup_theme', 'edtrips_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function edtrips_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'edtrips' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Middle', 'edtrips' ),
		'id'            => 'sidebar-2',
		'description'   => 'Middle column in footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Right', 'edtrips' ),
		'id'            => 'sidebar-3',
		'description'   => 'Right column in footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'edtrips_widgets_init' );

/**
 * Register custom post types
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
	add_action( 'init', 'register_et_teamprof', 5 );
	//create the ET custom post type to create team member profiles for the Meet page
	function register_et_teamprof() {
		$labels = array( 
			'name' => _x( 'Team Profiles', 'et_teamprofs' ),
			'singular_name' => _x( 'Teamer Profile', 'et_teamprof' ),
			'not_found' => _x( 'No team profiles found', 'et_teamprof' ),
			'not_found_in_trash' => _x( 'No team profiles found in Trash', 'et_teamprof' )
		);
	
		$args = array( 
			'labels' => $labels,
			'hierarchical' => true,
			'description' => 'Team Member Profile',
			'supports' => array( 'title', 'editor', 'custom-fields' ),
			
			'public' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 20,
			
			'show_in_nav_menus' => true,
			'publicly_queryable' =>  false,
			'exclude_from_search' => true,
			'has_archive' => false,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'capabilities' => array(
				'create_posts' => true, // Removes support for the "Add New" function
				 ),
			'map_meta_cap' => true // Set to false if users are not allowed to edit/delete existing posts	 
		);
		
		register_post_type( 'et_teamprof', $args );
	}


/**
 * Enqueue scripts and styles.
 */
function edtrips_scripts() {
	wp_enqueue_style( 'edtrips-style', get_stylesheet_uri() );

	wp_enqueue_script( 'edtrips-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'edtrips-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	 wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );

     wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );
     
     wp_register_style( 'full-width-pics-css', get_template_directory_uri() . '/bootstrap/css/full-width-pics.css', array(), '3.0.1', 'all' );
     
     wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Roboto:100, 400,300,700|Roboto+Slab:300, 400,700');

     wp_enqueue_script( 'bootstrap-js' );

     wp_enqueue_style( 'bootstrap-css' );
     
     wp_enqueue_style( 'full-width-pics-css' );
      
     wp_enqueue_style( 'googleFonts');
     
}
add_action( 'wp_enqueue_scripts', 'edtrips_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* do not auto-insert html paragraph breaks, thanks
**/
remove_filter ('the_content', 'wpautop');
